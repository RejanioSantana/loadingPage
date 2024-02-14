<?php $this->layout('admin/layout', ['title' => $title]);?>
<div class="col-lg-8">
<div id="tab-4" class="tab-pane">
<div class="tabs-container">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped">
                            <thead>
                            <tr>
                                <th>Image preview</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo"<tr>";
                                    echo"<td>";
                                    echo"<img src=\"".$datas['banner']."\" height=\"50\">";
                                    echo"</td>";
                                    echo"<td>";
                                    echo"<div class=\"text-left\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">Adicionar Icones</button></div>";
                                    echo"</td>";
                                    echo"</tr>";
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="ibox-content">
                                     
                    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content animated bounceInRight">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <i class="fa fa-laptop modal-icon"></i>
                                    <h4 class="modal-title">Banner</h4>
                                </div>
                                <form action="/addFile" class=".form-2" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="type" value= "banner">
                                    <div class="form-group"><label>Selecione o arquivo(Max: 2M)</label> <input type="file" name="banner" accept="image/*" size="2M" class="form-control"></div>
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