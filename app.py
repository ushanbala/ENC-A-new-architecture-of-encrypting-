from flask import Flask, jsonify,request
from flask_cors import CORS
import random
import json
import math
import requests
import hashlib

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

def send_data_to_php_api(api_url, data):
    try:
        # Make a POST request to the PHP API with the provided data
        response = requests.post(api_url, json=data)
        
        # Check if the request was successful (status code 200)
        if response.status_code == 200:
            # Print a success message if the request was successful
            return (response.text)
        else:
            # Print an error message if the request was unsuccessful
            return ("Error:", response.status_code, response.text)
    except Exception as e:
        # Print an error message if an exception occurs
        return ("Exception:", e)

@app.route('/api/data', methods=['POST'])
def get_data():
    eq = request.json.get('eq')
    name = request.json.get('name')
    pk = request.json.get('pk')
    data = []
    x = 65
    calc = eq
    while x <= 90:
        letter = chr(x)  # Get the corresponding letter for the ASCII value
        evaluated_rq = eval(calc.replace('x', str(x)))  # Evaluate the equation for the current value of 'x'
        data.append({"Letter": letter, "Value": evaluated_rq})
        x += 1

    rand = random.randint(0,900)
    file_namez = name+str(rand)
    file_name = file_namez+".json"
    with open(file_name, "w") as json_file:
        json.dump(data, json_file, indent=4)

    api_url = "http://localhost:3000/create_model_new.php"

    # Example data to send (replace this with your actual data)
    data_to_send = {
        "eq": eq,
        "name": file_namez,
        "pk":pk,
    }

    # Send data to the PHP API
    send_data_to_php_api(api_url, data_to_send)

    return "done"
    # data = {'message': f'Hello from Python API! Received parameter: {param_value}'}
    # return jsonify(data)

@app.route('/api/encryption', methods=['POST'])
def enc():
    id = request.json.get('id')
    text = request.json.get('text')
    api_url = "http://localhost:3000/get_data.php"
    data_to_send = {
        "id": id,
    }
    json_data = send_data_to_php_api(api_url, data_to_send)
    json_data = json.loads(json_data)  # Convert response text to dictionary
    key = ''
    eq = ''
    file_n = ''
    for row in json_data:
        key = row['pk']
        eq = row['eq']
        file_n = row['name']

    salt = hashlib.sha256(key.encode()).digest()[:16]  # Generate salt from key
    file_path = file_n + ".json"
    with open(file_path, "r") as json_file:
        data = json.load(json_file)

    result = b""  # Initialize result as bytes
    for char in text.encode():  # Iterate over the text bytes
        for item in data:
            if chr(char).upper() == item["Letter"]:
                result += str(item["Value"]).encode()  # Encode the value to bytes before appending
                break
        else:
            result += bytes([char])  # If the character is not found in the JSON data, keep it unchanged

    necessary_data = {
        "enc": str(result),
        "salt": str(salt)  # Include the salt in the response
    }
    return json.dumps(necessary_data)



@app.route('/api/decryption', methods=['POST'])
def dec():
    id = request.json.get('id')
    text = request.json.get('text')
    api_url = "http://localhost:3000/get_data.php"
    data_to_send = {
        "id": id,
    }
    json_data = send_data_to_php_api(api_url, data_to_send)
    json_data = json.loads(json_data)  # Convert response text to dictionary
    key = ''
    eq = ''
    file_n = ''
    for row in json_data:
        key = row['pk']
        eq = row['eq']
        file_n = row['name']
    salt = hashlib.sha256(key.encode()).digest()[:16]  # Generate salt from key
    filez = file_n+".json"
    with open(filez, "r") as json_file:  # Load data from output.json
        data = json.load(json_file)
    decrypted_text = b""
    i = 0
    text_bytes = text.encode('utf-8')  # Convert the text string to bytes

    while i < len(text_bytes):
        found = False
        for item in data:
            value_len = len(str(item["Value"]).encode())  # Get the length of the encoded value
            if text_bytes[i:i + value_len] == str(item["Value"]).encode():
                decrypted_text += ord(item["Letter"]).to_bytes(1, 'big')  # Convert ASCII code to bytes
                i += value_len
                found = True
                break
        if not found:
            decrypted_text += bytes([text_bytes[i]])  # Append the byte directly
            i += 1

    decoded_t = decrypted_text.decode() 

    # decoded_text = decoded_t.decode('utf-8')  # Decode the decrypted bytes to a string
    print(salt)
    necessary_data = {
        "dec": decoded_t,
    }
    return necessary_data



@app.route('/api/new_layer', methods=['POST'])
def layering():
    id = request.json.get('id')
    layer = request.json.get('layer')
    api_url = "http://localhost:3000/add_layer.php"
    data_to_send = {
        "id": id,
        "layer":layer,
    }
    json_data = send_data_to_php_api(api_url, data_to_send)
    if(json_data=="done"):
        return "done"
    else:
        return "no"




if __name__ == '__main__':
    app.run(debug=True)