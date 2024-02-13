<?php

    $this->layout('admin/layout', ['title' => $title]); 
    // Calcular o número total de páginas
    $totalDePaginas = $total_page;
    // Obter o número da página atual
    $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; 
    // Verificar se o número da página atual é válido
    if (!is_numeric($paginaAtual) || $paginaAtual < 1 || $paginaAtual > $totalDePaginas) {
        $paginaAtual = 1; // Página padrão se o número da página for inválido
    }
    if ($totalDePaginas >= 1) {
        // Link para página anterior
        if ($paginaAtual > 1) {
            $paginaAnterior = $paginaAtual - 1;
            echo "<a href='seu-script-php.php?pagina=$paginaAnterior'>Página Anterior</a>";
        }
    
        // Link para próxima página
        if ($paginaAtual < $totalDePaginas) {
            $proximaPagina = $paginaAtual + 1;
            echo "<a href='seu-script-php.php?pagina=$proximaPagina'>Próxima Página</a>";
        }
                                                
?>
<div class="row">
            
            <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">
                <h2>
                    Inbox (<?= count($datas)?>)
                </h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <div class="btn-group pull-right">
                        <?php 
                        if ($paginaAtual > 1) {
                            $paginaAnterior = $paginaAtual - 1;
                            echo "<a href=\"/adminEmail?pagina=$paginaAnterior\"><button class=\"btn btn-white btn-sm\"><i class=\"fa fa-arrow-left\"></i></button></a>";
                        }
                        if ($paginaAtual < $totalDePaginas) {
                            $proximaPagina = $paginaAtual + 1;
                            echo "<a href=\"/adminEmail?pagina=$proximaPagina\"><button class=\"btn btn-white btn-sm\"><i class=\"fa fa-arrow-right\"></i></button></a>";
                        }
                        ?>

                    </div>
                    <form action="./adminEmail" method="post">
                    <div class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><a href="./adminEmail"><i class="fa fa-refresh"></i> Refresh</a></div>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                </div>
            </div>
                <div class="mail-box">
                <div class="table-responsive">
                <table class="table table-hover table-mail">
                <thead>
                    <tr>
                        <th></th>
                        <th>Empresa</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Whatapp</th>
                        <th>investimento</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($datas as $key) {
                    echo "<tr class=\"read\">";
                    echo "<td class=\"check-mail\">";
                    echo "<input type=\"checkbox\" name=\"mail[]\" value=".$key['idcaptured']." class=\"i-checks\">";
                    echo "</td>";
                    echo "<td class=\"mail-ontact\"><a href=\"mail_detail.html\">".$key['company']."</a></td>";
                    echo "<td class=\"mail-ontact\"><a href=\"mail_detail.html\">".$key['name']."</a></td>";
                    echo "<td class=\"mail-subject\"><a href=\"mail_detail.html\">".$key['email']."</a></td>";
                    echo "<td class=\"\">".$key['whatsapp']."</td>";
                    echo "<td class=\"text-right mail-date\">".$key['investment']."</td>";
                    echo "</tr>";
                    }
                ?>
                </tbody>
                </form>
                </table>
                </div>
                <div class="text-center">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delModal">
                    Excluir todos
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exportModal">
                    Exportar
                </button>
                </div>
                <div class="modal inmodal" id="delModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-exclamation-triangle modal-icon"></i>
                                <h4 class="modal-title">Tem certeza?</h4>
                            </div>
                            
                            <div class="modal-body">
                            <p>Todos os registros será apagados.</p>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Voltar</button>
                                <a href="/delLeads" class="btn btn-danger" >Excluir</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal inmodal" id="exportModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-file modal-icon"></i>
                                <h4 class="modal-title">Exportar Registros?</h4>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Voltar</button>
                                <a href="/exportDatas" class="btn btn-primary">Sim</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php } ?>