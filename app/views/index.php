<?php 
$controle = 1;
$icon_left = [];
$icon_right = [];
foreach($datas[2] as $index => $value){
    if(($controle%2) == 0){
        $icon_right[] = $value;
    }else{
        $icon_left[] = $value;
    }
    $controle++;
}

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
    <link rel="shortcut icon" href="<?=$datas[0]['favicon']?>" type="image/x-icon">
    <meta name="keywords" content="<?=$datas[0]['meta_keywords']?>">
    <meta name="description" content="<?=$datas[0]['meta_description']?>">
    <title><?=$datas[0]['meta_title']?></title>
</head>
<body>
    <div class="mainSections primary" 
        style="background-image: url('<?=$datas[0]['banner']?>')">
        <div class="infoZone">
            <div class="description">
                <div class="logo">Logo da Empresa</div>
                <?=$datas[1]['text_one']?>
                <ul class="listIcon">
                    <li><span class="iconLosango">&#x25C6;</span></li>
                    <li><span class="iconLosango active">&#x25C6;</span></li>
                    <li><span class="iconLosango">&#x25C6;</span></li>
                    <li><span class="iconLosango active">&#x25C6;</span></li>
                    <li><span class="iconLosango">&#x25C6;</span></li>
                </ul>
           
            </div>
            <div class="content primary">
                <form action="">
                    <div class="infoForm">
                        <?=$datas[1]['text_form']?>
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
                    <button type="submit"><?=$datas[0]['name_btn_form']?></button>
                </form>
            </div>
        </div>
        
    </div>
    <div class="mainSections secondary">
        <div class="infoZone">
            <div class="description secondary">
            <?=$datas[1]['text_two']?>
                <p><a href="" class="btnLink"><?=$datas[0]['name_btn_one']?></a></p>
                <p><a href="" class="btnLink"><?=$datas[0]['name_btn_two']?></a></p>
            </div>
            <div class="content secondary">
                <div class="left">
                    <?php
                    foreach($icon_left as $index){
                        echo "<div>";
                        echo "<img src=\"". $index['url']."\">";
                        echo "<p>".$index['name']."</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
                <div class="right">
                <?php
                    foreach($icon_right as $index){
                        echo "<div>";
                        echo "<img src=\"". $index['url']."\">";
                        echo "<p>".$index['name']."</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>