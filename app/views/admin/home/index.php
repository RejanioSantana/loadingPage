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
    <title>Ampliva</title>
    <style>
    summary {
      list-style: none;
      color: #FFF;
      padding: 10px 20px;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      cursor: pointer;
    }
    summary:focus {
      outline: none;
    }
  </style>
</head>
<body>
    <div class="container bg-dark " style="min-height: 100vh">
        <div class="row">
            <header class="col-12 ">
                <h1 style= "color: #FFF; text-align:center;" >Ampliva</h1>
            </header>
            <main class="col-12 col-md-6  mx-auto   bg-light ">
                <div class="container p-5">
                    <form action="./paniel" method="post" enctype="multipart/form-data">
                        <section>
                            <h3 class="display-6">Seção 1</h3>
                            <div class="mb-3">
                                <label for="banner" class="form-label">Background</label>
                                <input type="file" id="banner" name="bg" class="form-control">
                            </div>
                            <details class="mb-3">
                                <summary class="bg-secondary" >Apresentação</summary>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Título</label>
                                    <input type="text" id="title" class="form-control" 
                                    value="<?=$r['title']?>" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrição</label>
                                    <input type="text" id="description" class="form-control" 
                                    name="description1" value="<?=$r['description']?>" required>
                                </div>
                                <details class="mb-3" >
                                    <summary class="bg-primary">Lista material</summary>
                                    <div class="mb-3">
                                        <label for="tli" class="form-label">Título</label>
                                        <input type="text" id="tli" class="form-control" 
                                        name="tli" value="<?=$r['tli']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label >Informação</label>
                                    </div>
                                    <input type="text" class="form-control mb-2" 
                                    name="li1" value="<?=$r['li1']?>" required>
                                    <input type="text" class="form-control mb-2" 
                                    name="li2" value="<?=$r['li2']?>" required>
                                    <input type="text" class="form-control mb-2" 
                                    name="li3" value="<?=$r['li3']?>" required>
                                    <input type="text" class="form-control mb-2" 
                                    name="li4" value="<?=$r['li4']?>" required>
                                    <input type="text" class="form-control mb-2" 
                                    name="li5" value="<?=$r['li5']?>" required>
                                    <input type="text" class="form-control mb-2" 
                                    name="li6" value="<?=$r['li6']?>" required>
                                    <input type="text" class="form-control mb-2" 
                                    name="li7" value="<?=$r['li7']?>" required>

                                </details>
                            </details>
                            <hr>
                            <details class="mb-3">
                                <summary class="bg-secondary">Formulário</summary>
                                <div class="mb-3">
                                    <label for="title-form" class="form-label">Título</label>
                                    <input type="text" id="title-form" class="form-control" 
                                    value="<?=$r['title_form']?>" name="title_form" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description-form" class="form-label">Descrição</label>
                                    <input type="text" id="description-form" class="form-control" 
                                    value="<?=$r['description_form']?>"name="description_form" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name-btn-form" class="form-label">Nome botão</label>
                                    <input type="text" id="name-btn-form" class="form-control"
                                    value="<?=$r['name_btn_form']?>" name="name_btn_form" required>
                                </div>
                                <div class="mb-3">
                                    <label for="link-form" class="form-label">Link</label>
                                    <input type="url" id="link-form" class="form-control"
                                    value="<?=$r['link_form']?>" name="link_form" required>
                                </div>
                            </details>   
                        </section>
                        <section>
                            <h3 class="display-6">Seção 2</h3>
                            <details class="mb-3">
                                <summary class="bg-secondary">Apresentação</summary>
                                <div class="mb-3">
                                    <label for="text-section-2" class="form-label">Descrição</label>
                                    <input type="text" id="text-section-2" class="form-control"
                                    value="<?=$r['description_two']?>" name="description_two" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name-btn-one" class="form-label">Nome botão 1</label>
                                    <input type="text" id="name-btn-one" class="form-control"
                                    value="<?=$r['name_btn_one']?>" name="name_btn_one" required>
                                </div>
                                <div class="mb-3">
                                    <label for="link-btn-one" class="form-label">link botão 1</label>
                                    <input type="url" id="link-btn-one" class="form-control"
                                    value="<?=$r['link_btn_one']?>" name="link_btn_one" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name-btn-two" class="form-label">Nome botão 2</label>
                                    <input type="text" id="name-btn-two" class="form-control"
                                    value="<?=$r['name_btn_two']?>" name="name_btn_two" required>
                                </div>
                                <div class="mb-3">
                                    <label for="link-btn-two" class="form-label">link botão 2</label>
                                    <input type="url" id="link-btn-two" class="form-control"
                                    value="<?=$r['link_btn_two']?>" name="link_btn_two" required>
                                </div>
                            </details>
                            <hr>
                            <details class="mb-3">
                                <summary class="bg-secondary">Icons</summary>
                                <div class="row">
                                    <div class="col-12 col-md-5 mb-3">
                                        <label for="icon1" class="form-label">Icone 1</label>
                                        <input type="file" id="icon1" name="icon-1" class="form-control">
                                        <input type="text" name="icon1" value="<?=$r['icon1']?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-5 mb-3">
                                        <label for="icon2" class="form-label">Icone 2</label>
                                        <input type="file" id="icon2" name="icon-2" class="form-control">
                                        <input type="text" name="icon2" value="<?=$r['icon2']?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-5 mb-3">
                                        <label for="icon3" class="form-label">Icone 3</label>
                                        <input type="file" id="icon3" name="icon-3" class="form-control">
                                        <input type="text" name="icon3" value="<?=$r['icon3']?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-5 mb-3">
                                        <label for="icon4" class="form-label">Icone 4</label>
                                        <input type="file" id="icon4" name="icon-4" class="form-control">
                                        <input type="text" name="icon4" value="<?=$r['icon4']?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-5 mb-3">
                                        <label for="icon5" class="form-label">Icone 5</label>
                                        <input type="file" id="icon5" name="icon-5" class="form-control">
                                        <input type="text" name="icon5" value="<?=$r['icon5']?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-5 mb-3">
                                        <label for="icon6" class="form-label">Icone 6</label>
                                        <input type="file" id="icon6" name="icon-6" class="form-control">
                                        <input type="text" name="icon6" value="<?=$r['icon6']?>" class="form-control">
                                    </div>
    
                                </div>

                            </details>
                        </section>
                            <button type="submit" name="btn-update" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>