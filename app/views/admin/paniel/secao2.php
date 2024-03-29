<?php $this->layout('admin/layout',['title' => $title]);?>
<div class="row">
<div class="col-lg-12 ">
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1"> Informações</a></li>
            <li class=""><a data-toggle="tab" href="#tab-2"> Icones</a></li>
        </ul>
        <div class="tab-content ">
        <div id="tab-1" class="tab-pane active">
            <form action="/updateSecao2" class="form-update " method="post">
                <div class="panel-body">
                    <fieldset class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">Descrição 2:</label>
                            <div class="col-sm-10">
                                <textarea name="description2" class="summernote">
                                <?=$datas[1]['text_two']?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Botão 1:</label>
                        <div class="col-sm-10"><input type="text" name="name_btn_one" class="form-control" value="<?=$datas[0]['name_btn_one']?>" maxlength="45" placeholder="Nome..."></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Url:</label>
                        <div class="col-sm-10"><input type="url" name="url_btn_one" class="form-control" value="<?=$datas[0]['link_btn_one']?>" maxlength="255" placeholder="Ex.: https://exemplo.com"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Botão 2:</label>
                        <div class="col-sm-10"><input type="text" name="name_btn_two" class="form-control" value="<?=$datas[0]['name_btn_two']?>" maxlength="45" placeholder="Nome..."></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Url:</label>
                        <div class="col-sm-10"><input type="url" name="url_btn_two" class="form-control" value="<?=$datas[0]['link_btn_two']?>" maxlength="255" placeholder="Ex.: https://exemplo.com"></div>
                        </div>
                    </fieldset>
                    <hr>
                    <div class="col-lg-6 h-100 p-lg"><button class="btn btn-warning btn-sm demo3" type="menu">Atualizar</button></div>
                </div>
            </form>
        </div>
        <div id="tab-2" class="tab-pane">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-stripped">
                        <thead>
                        <tr>
                            <th>
                                Image preview
                            </th>

                            <th>
                                Descrição
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($datas[2] as $index){
                                echo"<tr>";
                                echo"<td>";
                                echo"<img src=\"".$index['url']."\" height=\"50\">";
                                echo"</td>";
                                echo"<td>";
                                echo($index['name']);
                                echo"</td>";
                                echo"<td>";
                                echo"<button class=\"btn btn-white\"><a href=\"/delIcon?idicone=".$index['idicone']."\"><i class=\"fa fa-trash\"></i></a> </button>";
                                echo"</td>";
                                echo"</tr>";
                            }
                            ?>
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
                            <form action="/uploadIcon" class=".form-2" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group"><label>Selecione o icone</label> <input type="file" name="new_icone"  class="form-control"></div>
                                <div class="form-group"><label>Descrição:</label> <input type="text" name="name_icone" placeholder="Digite o nome que aparecerá abaixo do icone... " class="form-control"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Voltar</button>
                                <input type="submit" class="btn btn-primary salve-icon" value="Salvar">
                            </div>
                            </form>
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