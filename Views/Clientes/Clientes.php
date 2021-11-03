<?php headerAdmin($data);
getModal('Modal_clientes', $data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><?= $data['page_title'] ?></h1>
            <?php if ($_SESSION['modulos']['w']) {
            ?>
                <button class="btn btn-primary btn-modal" type="button" onclick="openModal();">Agregar Nuevo</button>
            <?php
            }
            ?>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/clientes"><?= $data['page_title'] ?></a></li>
        </ul>
    </div>

    <!-- DATA TABLE -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableClientes" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Identificación</th>
                                    <th>Nombre&#40;s&#41;</th>
                                    <th>Apellido&#40;s&#41;</th>
                                    <th>Teléfono</th>
                                    <th>Correo Electrónico</th>
                                    <th>RFC</th>
                                    <th>Dirección Fiscal</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DATA TABLE -->


</main>


<?php
footerAdmin($data);
?>