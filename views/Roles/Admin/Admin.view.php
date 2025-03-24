<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid px-4">
            <h1 class="mt-4">Bienvenido <?php echo "" . $user->getUserName() ?>&nbsp;<?php echo "" . $user->getUserLastName(); ?></h1>
            <h1 class="mt-4">Panel de Control</h1><br>
            <div class="row">
                
                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-secondary text-white mb-4">
                        <div class="card-body"><b>ROLES CREADOS</b></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=Roles&a=consultarRoles&param=2">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-success text-white mb-4">
                        <div class="card-body"><b>USUARIOS CREADOS</b></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=Users&a=consultarUsuarios&param=2">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-danger text-white mb-4">
                        <div class="card-body">INVENTARIO</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=Inventarios&a=Inventario&param=2">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-info text-white mb-4">
                        <div class="card-body">RECURSOS HUMANOS</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=RecursosHumanos&a=RecursosHumanos">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-warning text-white mb-4">
                        <div class="card-body">CONTABILIDAD</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=ContabilidadContr&a=ContabilidadContr">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-light text-dark mb-4">
                        <div class="card-body">VENTAS</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-dark stretched-link" href="?c=Ventas&a=Ventas">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-bg-dark text-white mb-4">
                        <div class="card-body">REPORTES</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=Reportes&a=Reportes">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">CRM</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?c=CrmContr&a=CrmContr">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </main>