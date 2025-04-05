<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css" />

    <!-- <link rel="stylesheet" href="http://i.gtimg.cn/vipstyle/frozenui/2.0.0/css/frozen.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <title>EDC - Encrypted Data Canvas</title>

</head>
<body>
    <div class="app">
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
                        ENC Models
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
                    <a href="#">
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
                    <h2>Services</h2>
                    <div class="service-section-header">
                        <div class="search-field">
                            <i class="ph-magnifying-glass"></i>
                            <input type="text" placeholder="Search Models">
                        </div>
                        <!-- <div class="dropdown-field">
                            <select>
                                <option>Home</option>
                                <option>Work</option>
                            </select>
                            <i class="ph-caret-down"></i>
                        </div> -->
                        <button class="flat-button">
                            Search
                        </button>
                    </div>
                    <div class="mobile-only">
                        <button class="flat-button">
                            Toggle search
                        </button>
                    </div>
                    <div class="tiles">
                        <article class="tile">
                            <div class="tile-header">
                                <i class="ph-lightning-light"></i>
                                <h3>
                                    <span>Create a Model</span>
                                    <span>Create your own <br> Encryption model</span>
                                </h3>
                            </div>
                            <a href="create_model.php">
                                <span>Go to service</span>
                            </a>
                        </article>
                        <article class="tile">
                            <div class="tile-header">
                                <i class="ph-fire-simple-light"></i>
                                <h3>
                                    <span>Manage Models</span>
                                    <span>Manage your existing <br> models</span>
                                </h3>
                            </div>
                            <a href="manage_models.php">
                                <span>Go to service</span>
                            </a>
                        </article>
                        <article class="tile">
                            <div class="tile-header">
                                <i class="ph-file-light"></i>
                                <h3>
                                    <span>Default Models</span>
                                    <span>Try our existing <br> default models</span>
                                </h3>
                            </div>
                            <a href="#">
                                <span>Go to service</span>
                            </a>
                        </article>
                    </div>
                    <div class="service-section-footer">
                        <p>Try ENC models and play with creating own models. Happy Encrypting !!</p>
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