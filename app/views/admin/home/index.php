<?php
    use app\controllers\SectionControls;
    use app\controllers\DataController;

    SectionControls::section();
    $r = DataController::datas();
    if(isset($_POST['btn-update'])){
        $datas = array();
        foreach ($_POST as $index => $value) 
        {
            if($index == 'bg'){continue;}
            if($value == null){continue;}
            $datas[$index] = $value;
        }
        $response =  DataController::datasUpadate($datas);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container bg-dark">
        <div class="row">
            <header class="col-12 ">
                <h1 style= "color: #FFF; text-align:center;" >Ampliva</h1>
            </header>
            <main class="col-12 sm-10 mx-auto bg-light p-5">
                <div class="container p-5">
                    <form action="./paniel" method="post" enctype="multipart/form-data">
                        <section>
                            <h3 class="display-6">Seção 1</h3>
                            <div class="mb-3">
                                <label for="banner" class="form-label">Background</label>
                                <input type="file" id="banner" name="bg" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" id="title" class="form-control" 
                                value="<?=$r['title']?>" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrição</label>
                                <input type="text" id="description" class="form-control" 
                                value="<?=$r['description']?>" name="description1" required>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="title-form" class="form-label">Título-Formulário</label>
                                <input type="text" id="title-form" class="form-control" 
                                value="<?=$r['title_form']?>" name="title_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="description-form" class="form-label">Descrição-Formulário</label>
                                <input type="text" id="description-form" class="form-control" 
                                value="<?=$r['description_form']?>"name="description_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="name-btn-form" class="form-label">Nome Botão Formulário</label>
                                <input type="text" id="name-btn-form" class="form-control"
                                value="<?=$r['name_btn_form']?>" name="name_btn_form" required>
                            </div>
                            <div class="mb-3">
                                <label for="link-form" class="form-label">Link Formulário</label>
                                <input type="url" id="link-form" class="form-control"
                                value="<?=$r['link_form']?>" name="link_form" required>
                            </div>
                            
                        </section>
                        <section>
                            <h3 class="display-6">Seção 2</h3>

                            <div class="mb-3">
                                <label for="text-section-2" class="form-label">Descrição</label>
                                <input type="text" id="text-section-2" class="form-control"
                                value="<?=$r['description_two']?>" name="description_two" required>
                            </div>
                            <div class="mb-3">
                                <label for="name-btn-one" class="form-label">Nome primeiro botão</label>
                                <input type="text" id="name-btn-one" class="form-control"
                                value="<?=$r['name_btn_one']?>" name="name_btn_one" required>
                            </div>
                            <div class="mb-3">
                                <label for="link-btn-one" class="form-label">link primeiro botão</label>
                                <input type="url" id="link-btn-one" class="form-control"
                                value="<?=$r['link_btn_one']?>" name="link_btn_one" required>
                            </div>
                            <div class="mb-3">
                                <label for="name-btn-two" class="form-label">Nome segundo botão</label>
                                <input type="text" id="name-btn-two" class="form-control"
                                value="<?=$r['name_btn_two']?>" name="name_btn_two" required>
                            </div>
                            <div class="mb-3">
                                <label for="link-btn-two" class="form-label">link segundo botão</label>
                                <input type="url" id="link-btn-two" class="form-control"
                                value="<?=$r['link_btn_two']?>" name="link_btn_two" required>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="icon1" class="form-label">Icone 1</label>
                                    <input type="file" id="icon1" name="icon1" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="icon2" class="form-label">Icone 2</label>
                                    <input type="file" id="icon2" name="icon2" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="icon3" class="form-label">Icone 3</label>
                                    <input type="file" id="icon3" name="icon3" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="icon4" class="form-label">Icone 4</label>
                                    <input type="file" id="icon4" name="icon4" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="icon5" class="form-label">Icone 5</label>
                                    <input type="file" id="icon5" name="icon5" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="icon6" class="form-label">Icone 6</label>
                                    <input type="file" id="icon6" name="icon6" class="form-control">
                                </div>

                            </div>

                        </section>
                        <button type="submit" name="btn-update" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>