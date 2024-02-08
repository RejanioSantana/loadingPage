<?php
use app\controllers\SectionControls;
 if(isset($_POST['btn']))
 {
    $mensagem = null;
    $r = SectionControls::login([$_POST['user'],$_POST['password']]);
    if($r == false){$mensagem = "Usuário ou senha inválido!";}
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container p-5">
        <form method="post" action="./admin">
            <div class="mb-3">
                <label for="user" class="form-label">Usuário</label>
                <input type="text" id="user" name="user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="btn" class="btn btn-primary">Acessar</button>
            <p><?php if(isset($mensagem)){echo $mensagem;}?></p>
        </form>
    </div>
</body>
</html>