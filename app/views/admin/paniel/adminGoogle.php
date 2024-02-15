<?php $this->layout('admin/layout',['title' => $title]);?>
<div class="row">
<div class="col-lg-12 ">
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1"> Informações</a></li>
        </ul>
        <div class="tab-content ">
        <div id="tab-1" class="tab-pane active">
            <form action="/updateMeta" class="form-update " method="post">
                <div class="panel-body">

                    <fieldset class="form-horizontal">
                        
                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Title:</label>
                            <div class="col-sm-10"><input type="text" name="meta_title" class="form-control" value="<?=$datas[0]['meta_title']?>" maxlength="50" placeholder="..."></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Description:</label>
                            <div class="col-sm-10"><input type="text" name="meta_description" class="form-control" value="<?=$datas[0]['meta_description']?>" maxlength="255" placeholder="Sheets containing Lorem"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Keywords:</label>
                            <div class="col-sm-10"><input type="text" name="meta_keywords" class="form-control" value="<?=$datas[0]['meta_keywords']?>" maxlength="500" placeholder="Lorem, Ipsum, has, been"></div>
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