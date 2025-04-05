<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <!-- <link rel="stylesheet" href="http://i.gtimg.cn/vipstyle/frozenui/2.0.0/css/frozen.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <title>EDC - Encrypted Data Canvas</title>


</head>
<body>
    <div class="app">

    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-lg">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-titles"></h3>
            <p class="id_sets"></p>
            </div>
            <div class="modal-body">
                <h4>Add a layer</h4>
                <p>By adding a layer means you will add an extra layer of protection to your already existing model. By continuing with this action, you will have to provide a private key to every layer.</p>
                <div class="faq">
                    <div>
                        <label for="">New private key for the layer</label>
                    <input type="text" class="new_layer_text" placeholder="Set the private key to the new layer">
                    </div>
                </div>
                <button class="save-button" id="add_new_layer" onclick="new_layer();">+ Add a new layer</button>
                <br>
                <br>
                <h4>Existing Layers</h4>
                <div class="layer_list">
                    
                </div>
            </div>

            
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        
        </div>
    </div>



    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title"></h3>
            <p class="id_set"></p>
            </div>
            <div class="modal-body">
                <h4>Encrypt</h4>

                        <div>
                            <p>Text to Encrypt</p>
                            <textarea id="to_encrypt" name="to_encrypt" rows="4" cols="50">
</textarea> 
                        <button class="flat-button" id="enc_btn" onclick="enc();">Encrypt</button>
                        <br>
                        <br>
                        <p>Encrypted text</p>
                        <div class="faq">
                            <div class="card-body">
                                <p class="res_enc"></p>
                            </div>
                        </div>
                        <br>

                        </div>
                        <h4>Decrypt</h4>
                        <div>
                            <p>Text to Decrypt</p>
                            <textarea id="to_decrypt" name="to_decrypt" rows="4" cols="50">
</textarea> 
                        <button class="flat-button" id="dec_btn" onclick="dec();">Decrypt</button>
                        <br>
                        <br>
                        <p>Decrypted text</p>
                        <div class="faq">
                            <div class="card-body">
                                <p class="res_dec"></p>
                            </div>
                        </div>
                        <br>

                        </div>
                    </div>
                    <hr>
            <br>


            
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        
        </div>
    </div>
        <header class="app-header">
            <div class="app-header-logo">
                <div class="logo">
                    <span class="logo-icon">
                        <img src="logo.png" />
                    </span>
                    <h1 class="logo-title">
                        <span>ENC</span>
                    </h1>
                </div>
            </div>
            <div class="app-header-navigation">
                <div class="tabs">
                    <!-- <a href="#">
                        Overview
                    </a> -->
                    <a href="#" class="active">
                        Your Models
                    </a>
                    <!-- <a href="#">
                        Cards
                    </a> -->
                    <!-- <a href="#">
                        Account
                    </a> -->
                    <!-- <a href="#">
                        System
                    </a> -->
                    <!-- <a href="#">
                        Business
                    </a> -->
                </div>
            </div>
            <div class="app-header-actions">
                <button class="user-profile">
                    <span>Ushan Balasooriya</span>
                    <span>
                        <img src="https://media.licdn.com/dms/image/D5603AQF_F1wZ7vTLGg/profile-displayphoto-shrink_200_200/0/1705583642639?e=1713398400&v=beta&t=khl3wHeltFfTxZfHc1sqpeYbdNP8cbzU3l_uGWFLPO0" />
                    </span>
                </button>
                <!-- <div class="app-header-actions-buttons">
                    <button class="icon-button large">
                        <i class="ph-magnifying-glass"></i>
                    </button>
                    <button class="icon-button large">
                        <i class="ph-bell"></i>
                    </button>
                </div> -->
            </div>
            <div class="app-header-mobile">

            </div>
    
        </header>
        <div class="app-body">
            <div class="app-body-navigation">
                <nav class="navigation">
                    <a href="index.php">
                        <i class="ph-browsers"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#">
                        <i class="ph-check-square"></i>
                        <span>Settings</span>
                    </a>
                    <!-- <a href="#">
                        <i class="ph-swap"></i>
                        <span>Transfers</span>
                    </a>
                    <a href="#">
                        <i class="ph-file-text"></i>
                        <span>Templates</span>
                    </a>
                    <a href="#">
                        <i class="ph-globe"></i>
                        <span>SWIFT</span>
                    </a>
                    <a href="#">
                        <i class="ph-clipboard-text"></i>
                        <span>Exchange</span>
                    </a> -->
                </nav>
                <footer class="footer">
                    <h1>Ushanzz<small>©</small></h1>
                    <div>
                        Ushanzz ©<br />
                        All Rights Reserved 2024
                    </div>
                </footer>
            </div>

            <div class="app-body-main-content">
                <section class="service-section">
                    <h2>Models built by you !!</h2>


                    <div class="faq">
                    <?php
                        // Assuming you have already established a database connection
                        include 'connection.php';
                        // Perform SQL query to fetch data from the database
                        $query = "SELECT * FROM `model`;";
                        $result = Database::search($query);
                        $data = [];
                        // Check if query was successful
                        if ($result) {
                            // Loop through the fetched data and create FAQ items
                            while ($row = $result->fetch_assoc()) {
                                $name = $row['name'];
                                $pk = $row['pk'];
                                $eq = $row['eq'];
                                $id = $row['id'];
                                echo "<article class='tile'>";
                                echo "<div class='tile-header'>";
                                echo "<i class='ph-fire-simple-light'></i>";
                                echo "<h3>";
                                echo "<span>$name</span>";
                                echo "<span>$id</span>";
                                echo "</h3>";
                                echo "</div>";
                                echo "<div class='tiles' >";
                                echo "<button data-toggle='modal' data-target='#myModal' class='flat-buttons' onclick=\"
                                document.querySelector('.modal-title').innerHTML='$name';
                                document.querySelector('.id_set').innerHTML='$id';
                                \">Use</button>";
                                echo "<br>";
                                echo "<button data-toggle='modal' data-target='#myModal2' id='advance_btn' class='flat-buttons' onclick=\"
                                document.querySelector('.modal-titles').innerHTML='$name';
                                document.querySelector('.id_sets').innerHTML='$id';

                                if('$id' !=''){
                                    var url = 'http://localhost:3000/show_layers.php';
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST', url, true);
                                    xhr.setRequestHeader('Content-Type', 'application/json');
                            
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            var response = xhr.responseText;
                                            try {
                                                var data = JSON.parse(response);
                                                var layersDiv = document.getElementById('layer_list');
                                                layersDiv.innerHTML = ''; // Clear previous content
                                                data.forEach(function(layer) {
                                                    // Create a paragraph element for each layer and append to the layersDiv
                                                    var paragraph = document.createElement('p');
                                                    paragraph.textContent = 'Layer ID: ' + layer.id + ', Name: ' + layer.key; // Modify according to your JSON structure
                                                    layersDiv.appendChild(paragraph);
                                                });
                                            } catch (error) {
                                                console.error('Error parsing JSON: ', error);
                                                //alert('Something went wrong');
                                            }
                                        }
                                    };
                            
                                    var data = JSON.stringify({ 'id': '$id' });
                                    xhr.send(data);
                                }else{
                                    alert('Fill in the private key');
                                }

                                \">Add layer protections</button>";
                                echo "</div>";
                                echo "</article>";
                                echo "<br>";
                            }
                        } else {
                            // Handle error
                            echo "Error fetching data";
                        }

                        ?>
                    </div>
                    <div class="service-section-footer">
                        <p>Play with the parameters and build your perfect encryption model with ENC !!</p>
                    </div>
                </section>
                <section class="transfer-section">
                    <div class="transfer-section-header">
                        <h2>Tutorials?</h2>
                        <!-- <div class="filter-options">
                            <p>Filter selected: more than 100 $</p>
                            <button class="icon-button">
                                <i class="ph-funnel"></i>
                            </button>
                            <button class="icon-button">
                                <i class="ph-plus"></i>
                            </button>
                        </div> -->
                    </div>
                    <div class="transfers">
                        <div class="transfer">
                                <img src="tuto.png" />
                            <hr>
                            <dl class="">
                                <div>
                                    <dt>Model from scratch?</dt>
                                    <dd>Build the perfect  ENC model for you!!</dd>
                                </div>
                            </dl>
                            <div class="transfer-number">
                                <button class="flat-button">Learn</button>
                            </div>
                        </div>
                        <div class="transfer">
                                <img src="tuto.png" />
                            <hr>
                            <dl class="">
                                <div>
                                    <dt>Use your models in Real Life?</dt>
                                    <dd>How to call your model API endpoint </dd>
                                </div>
                            </dl>
                            <div class="transfer-number">
                                <button class="flat-button">Learn</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="app-body-sidebar">
                <section class="payment-section">
                    <h2>What's New?</h2>
                    <div class="payment-section-header">
                        <p>Catch up with latest news</p>

                    </div>


                    <div class="faq">
                        <p>FAQ - <br>Most frequently asked questions</p>
                        <div>
                            <label>Question</label>
                            <input type="text" placeholder="Type here">
                        </div>
                    </div>
                    <div class="payment-section-footer">
                        <button class="save-button">
                            Send
                        </button>
                        <button class="settings-button">
                            <i class="ph-gear"></i>
                            <span>More settings</span>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="less.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./app.js"></script>

</body>
</html>