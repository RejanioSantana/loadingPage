<?php $this->layout('admin/layout',['title' => $title]);?>
<div class="row">
<div class="col-lg-12 ">
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1"> Informações</a></li>
        </ul>
        <div class="tab-content ">
        <div id="tab-1" class="tab-pane active">
            <form action="/updateSecao1" class="form-update " method="post">
                <div class="panel-body">

                    <fieldset class="form-horizontal">
                        
                        <div class="form-group"><label class="col-sm-2 control-label">Descrição 1:</label>
                            <div class="col-sm-10">
                                <textarea name="description1" class="summernote">
                                <?=$datas[1]['text_one']?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Título Lista:</label>
                            <div class="col-sm-10"><input type="text" name="title_list" class="form-control" value="<?=$datas[0]['title_list']?>" maxlength="100" placeholder="Lorem, Ipsum, has, been"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Itens Lista 1:</label>
                            <div class="col-sm-10">
                                <textarea name="itensList" class="summernote">
                                <?=$datas[1]['text_li']?>
                                </textarea>
                            </div>
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