<?php $this->layout('admin/layout', ['title' => $title]);
echo'<pre>';
var_dump($datas);
echo'</pre>';
?>
<div class="col-lg-8">
<div id="tab-4" class="tab-pane">
<div class="tabs-container">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped">
                            <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo"<tr>";
                                    echo"<td>";
                                    echo"<img src=\"".$datas['foto']."\" height=\"50\">";
                                    echo"</td>";
                                    echo"<td>";
                                    echo$datas['name'];
                                    echo"</td>";
                                    echo"<td>";
                                    echo $datas['email'];
                                    echo"</td>";
                                    echo"<td>";
                                    echo"<div class=\"text-left\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">Alterar Dados</button></div>";
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
                                    <i class="fa fa-users modal-icon"></i>
                                    <h4 class="modal-title">Administrador</h4>
                                </div>
                                <form action="/updateAdmin" class=".form-2" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group"><label>Foto (Tamanho max: 2M):</label> <input type="file" name="photo" accept="image/*" size="2M" class="form-control"></div>
                                    <div class="form-group"><label>Nome:</label> <input type="text" name="name" maxlength="50" class="form-control"></div>
                                    <div class="form-group"><label>Email:</label> <input type="text" name="email" maxlength="50" class="form-control"></div>
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