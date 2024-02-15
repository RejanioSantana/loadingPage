<?php $this->layout('admin/layout',['title' => $title]);?>
<div class="row">
<div class="col-lg-12 ">
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1"> Informações</a></li>
        </ul>
        <div class="tab-content ">
        <div id="tab-1" class="tab-pane active">
            <form action="/updateForm" class="form-update " method="post">
                <div class="panel-body">

                    <fieldset class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">Descrição:</label>
                            <div class="col-sm-10">
                            <textarea name="form_desc" class="summernote">
                            <?=$datas[1]['text_form']?>
                            </textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Botão:</label>
                        <div class="col-sm-10"><input type="text" name="name_btn_form" class="form-control" value="<?=$datas[0]['name_btn_form']?>" maxlength="45" placeholder="Nome..."></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Url:</label>
                        <div class="col-sm-10"><input type="url" name="url_btn_form" class="form-control" value="<?=$datas[0]['link_form']?>" maxlength="255" placeholder="Ex.: https://exemplo.com"></div>
                        </div>
                    </fieldset>
                    <hr>
                    <div class="col-lg-6 h-100 p-lg"><button class="btn btn-warning btn-sm demo3" type="menu">Atualizar</button></div>
                </div>
            </form>
        </div>
                              
</div>
    </div>
</div>
</div>