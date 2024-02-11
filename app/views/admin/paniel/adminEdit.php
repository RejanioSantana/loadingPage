<?php $this->layout('admin/layout', ['title' => $title]) ?>
<div class="row">
    <form action="" class="form-update" method="post">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Informações</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Formulário</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-4"> Icones</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Title:</label>
                                                <div class="col-sm-10"><input type="text" name="meta_title" class="form-control" placeholder="..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Description:</label>
                                                <div class="col-sm-10"><input type="text" name="meta_description" class="form-control" placeholder="Sheets containing Lorem"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Keywords:</label>
                                                <div class="col-sm-10"><input type="text" name="meta_keywords" class="form-control" placeholder="Lorem, Ipsum, has, been"></div>
                                            </div>
                                            <h3>Parte 1</h3>
                                            <div class="form-group"><label class="col-sm-2 control-label">Descrição 1:</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description1" class="summernote">
                                                        <h3>Lorem Ipsum is simply</h3>
                                                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                        <br/>

                                                    </textarea>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <hr>
                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label">Descrição 2:</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description2" class="summernote">
                                                        <h3>Lorem Ipsum is simply</h3>
                                                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                        <br/>

                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Botão 1:</label>
                                            <div class="col-sm-10"><input type="text" name="name_btn_one" class="form-control" placeholder="Nome..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Url:</label>
                                            <div class="col-sm-10"><input type="url" name="url_btn_one" class="form-control" placeholder="Ex.: https://exemplo.com"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Botão 2:</label>
                                            <div class="col-sm-10"><input type="text" name="name_btn_two" class="form-control" placeholder="Nome..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Url:</label>
                                            <div class="col-sm-10"><input type="url" name="url_btn_two" class="form-control" placeholder="Ex.: https://exemplo.com"></div>
                                            </div>
                                        </fieldset>
                                        <div class="col-lg-6 h-100 p-lg"><button class="btn btn-warning btn-sm demo3" type="menu">Atualizar</button></div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <fieldset class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">Descrição:</label>
                                                <div class="col-sm-10">
                                                    <textarea name="form_description" class="summernote">
                                                        <h3>Lorem Ipsum is simply</h3>
                                                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                        <br/>

                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Botão:</label>
                                            <div class="col-sm-10"><input type="text" name="name_btn_form" class="form-control" placeholder="Nome..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Url:</label>
                                            <div class="col-sm-10"><input type="url" name="url_btn_form" class="form-control" placeholder="Ex.: https://exemplo.com"></div>
                                            </div>
                                        </fieldset>

                                        <div class="col-lg-6 h-100 p-lg"><button class="btn btn-warning btn-sm demo3" type="menu">Atualizar</button></div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-stripped">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Image preview
                                                    </th>

                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/2s.jpg">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/1s.jpg">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/3s.jpg">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="ibox-content">
                            
                            <div class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Adicionar Icones
                            </button>
                                </div>
                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Icones</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Selecione o icone</label> <input type="file" name="new_icone" placeholder="Enter your email" class="form-control"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Voltar</button>
                                            <button type="button" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </form>

            </div>