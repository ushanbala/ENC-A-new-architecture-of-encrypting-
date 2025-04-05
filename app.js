document.getElementById("create_new_model").addEventListener("click",function(){
   
    let eq = document.getElementById("custom_equ").value;
    let name = document.getElementById("custom_name").value;
    let pk = document.getElementById("pk").value;
    if(eq != ""){
        var url = 'http://localhost:5000/api/data';
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response =xhr.responseText;
                if(response=="done"){
                    alert("Model creation Successful");
                }else{
                    alert("Something went wrong");
                }
            }
        };
        
        var data = JSON.stringify({"eq":eq ,"name":name,"pk":pk});
        xhr.send(data);
    }else{
        alert("Fill all the parameters");
    }
});

function enc() {
    let to_encrypt = document.getElementById("to_encrypt").value;
    let id = document.querySelector(".id_set").innerHTML;
    
    if (to_encrypt !== "") {
        var url = 'http://localhost:5000/api/encryption';
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response) {
                    let filename = document.querySelector('.modal-title').innerHTML;
                    let enc = response['enc'];
                    document.querySelector('.res_enc').innerHTML = enc;
                    document.getElementById("to_encrypt").value="";
                } else {
                    alert("Something went wrong");
                }
            }
        };

        var data = JSON.stringify({ "id": id, "text": to_encrypt });
        xhr.send(data);
    } else {
        alert("Fill in the encrypt textfield");
    }
}


function dec() {
    let to_encrypt = document.getElementById("to_decrypt").value;
    let id = document.querySelector(".id_set").innerHTML;
    
    if (to_encrypt !== "") {
        var url = 'http://localhost:5000/api/decryption';
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response) {
                    let filename = document.querySelector('.modal-title').innerHTML;
                    let enc = response['dec'];
                    document.querySelector('.res_dec').innerHTML = enc;
                    document.getElementById("to_decrypt").value = "";
                } else {
                    alert("Something went wrong");
                }
            }
        };

        var data = JSON.stringify({ "id": id, "text": to_encrypt });
        xhr.send(data);
    } else {
        alert("Fill in the encrypt textfield");
    }
}

function new_layer(){
    let new_layer = document.querySelector(".new_layer_text").value;
    let id = document.querySelector(".id_sets").innerHTML;

    if(new_layer !=""){
        var url = 'http://localhost:5000/api/new_layer';
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if (response=="done") {
                    alert("done");
                } else {
                    alert("Something went wrong");
                }
            }
        };

        var data = JSON.stringify({ "id": id, "layer": new_layer });
        xhr.send(data);
    }else{
        alert("Fill in the private key");
    }
}

// function show_layers(){
//     let id = document.querySelector(".id_sets").innerHTML;

//     if(new_layer !=""){
//         var url = 'http://localhost:3000/show_layers.php';
//         var xhr = new XMLHttpRequest();
//         xhr.open("POST", url, true);
//         xhr.setRequestHeader("Content-Type", "application/json");

//         xhr.onreadystatechange = function () {
//             if (xhr.readyState === 4 && xhr.status === 200) {
//                 var response = xhr.responseText;
//                 try {
//                     var jsonData = JSON.parse(response);
//                     displayLayers(jsonData); // Call a function to display the data
//                 } catch (error) {
//                     console.error("Error parsing JSON: ", error);
//                     alert("Something went wrong");
//                 }
//             }
//         };

//         var data = JSON.stringify({ "id": id });
//         xhr.send(data);
//     }else{
//         alert("Fill in the private key");
//     }
// }

function displayLayers(data) {
    // Assuming you have a div with id "layers" where you want to display the data
    var layersDiv = document.getElementById("layers");
    layersDiv.innerHTML = ""; // Clear previous content
    data.forEach(function(layer) {
        // Create a paragraph element for each layer and append to the layersDiv
        var paragraph = document.createElement("p");
        paragraph.textContent = "Layer ID: " + layer.id + ", Name: " + layer.key; // Modify according to your JSON structure
        layersDiv.appendChild(paragraph);
    });
}