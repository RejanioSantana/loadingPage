<?php
    use app\controllers\DataController;
    $r = DataController::datas();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./assets/css/index.css" media="all">
    <link rel="stylesheet" href="./assets/css/desktop/index.css" media="screen and (max-width:1440px)">
    <link rel="stylesheet" href="./assets/css/mobile/index.css" media="screen and (max-width:1024px)">
    <title>Ampliva</title>
</head>
<body>
    <div class="mainSections primary" 
    style="background-image: url('./assets/img/background.jpg')">
        <div class="infoZone">
            <div class="description">
                <div class="logo">Logo da Empresa</div>
                <h1 class="titleDescription"><?=$r["title"]?></h1>
                <p class="pDescription"><?=$r["description"]?></p>
                <ul class="listIcon">
                    <li><span class="iconLosango">&#x25C6;</span></li>
                    <li><span class="iconLosango active">&#x25C6;</span></li>
                    <li><span class="iconLosango">&#x25C6;</span></li>
                    <li><span class="iconLosango active">&#x25C6;</span></li>
                    <li><span class="iconLosango">&#x25C6;</span></li>
                </ul>
                <div class="listAttributes">
                    <h5>
                        <span class="material-symbols-outlined">
                        content_paste</span> No material você encontrará:</h5>
                    <ul>
                        <li><span class="iconLosango">&#x25C6;</span> 
                            Nacimento dos cookies</li>
                        <li>
                            <span class="iconLosango">&#x25C6;</span>
                            Tipos de cookies
                        </li>
                        <li>
                            <span class="iconLosango">&#x25C6;</span>
                            Casos de uso na publicidade
                        </li>
                        <li>
                            <span class="iconLosango">&#x25C6;</span>
                            Debates sobre privacidade
                        </li>
                        <li>
                            <span class="iconLosango">&#x25C6;</span>
                            Fim dos cookies
                        </li>
                        <li>
                            <span class="iconLosango">&#x25C6;</span>
                            Como Google e Meta estão se preparando
                        </li>
                        <li>
                            <span class="iconLosango">&#x25C6;</span>
                            Tendências de marketing da nova era cookieless
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content primary">
                <form action="">
                    <div class="infoForm">
                        <h2><?=$r["title_form"]?></h2>
                        <p><?=$r["description_form"]?></p>
                    </div>
                    <label for="name">Nome*
                        <input type="text" name="name" id="name" required>
                    </label>
                    <label for="company">Empresa*
                        <input type="text" name="company" id="company" required>
                    </label>
                    <div class="input-group">
                        <label for="whatsapp">Whatsapp
                            <input type="text" name="whatsapp" id="whatsapp" required>
                        </label>
                        <label for="email">E-mail Corporativo
                            <input type="text" name="email" id="email" required>
                        </label>
                    </div>
                    <label for="investment">Investimento Anual em média
                        <input type="text" name="investment" id="investment" required>
                    </label>
                    <button type="submit"><?=$r["name_btn_form"]?></button>
                </form>
            </div>
        </div>
        
    </div>
    <div class="mainSections secondary">
        <div class="infoZone">
            <div class="description secondary">
                <p class="textDescription"><?=$r["description_two"]?></p>
                <p><a href="" class="btnLink"><?=$r["name_btn_one"]?></a></p>
                <p><a href="" class="btnLink"><?=$r["name_btn_two"]?></a></p>
            </div>
            <div class="content secondary">
                <div class="left">
                    <div >
                        <img src="./assets/img/manager.png">
                        <p>Performance Hub</p>
                        
                    </div>
                    <div>
                        <img src="./assets/img/loud-speaker.png">
                        <p>Personalization & Regionalization</p>
                    </div>
                    <div>
                        <img src="./assets/img/creativity.png">
                        <p>Dynamic Creative Optimization</p>

                    </div>
                </div>
                <div class="right">
                    <div >
                        <img src="./assets/img/folder.png">
                        <p>Data Engineering & Intelligence</p>
                        
                    </div>
                    <div>
                        <img src="./assets/img/messaging.png">
                        <p>Click-to-WhatsApp Full Metrics</p>
                    </div>
                    <div>
                        <img src="./assets/img/web-services.png">
                        <p>Tech Solutions</p>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>