<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Tela de Cadastro
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Login</a>
                                    <a class="nav-link" href="#">Register</a>
                                    <a class="nav-link" href="#">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">401 Page</a>
                                    <a class="nav-link" href="#">404 Page</a>
                                    <a class="nav-link" href="#">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"></h1>
                <div class="ml-4 mb-2">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#cadastro-cliente">Criar</button>
                </div>
                <div class="card mb-4">
                    <div class="card-body"> 
                        <table id="datatablesSimple" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Número</th>
                                    <th>Complemento</th>
                                    <th>Bairro</th>
                                    <th>CEP</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listaCliente as $cliente): ?>					
                                <tr>
                                    <td><?php echo $cliente->getNome(); ?></td>
                                    <td><?php echo $cliente->getEndereco(); ?></td>
                                    <td><?php echo $cliente->getNumero(); ?></td>
                                    <td><?php echo $cliente->getComplemento(); ?></td>
                                    <td><?php echo $cliente->getBairro(); ?></td>
                                    <td><?php echo $cliente->getCep(); ?></td>
                                    <td><?php echo $cliente->getCidade(); ?></td>
                                    <td><?php echo $cliente->getEstado(); ?></td>
                                </tr>
                                <?php endforeach ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Modal Cadastro -->
        <div class="modal fade" id="cadastro-cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrar</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <form action="?controller=cliente&&action=save" method="POST">
                                            
                    <div class="modal-body">
                        <div class="row mb-3">                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nome" class="control-label">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control" required
                                        oninvalid="this.setCustomValidity('O nome não pode estar em branco.')"
                                        oninput="this.setCustomValidity('')"
                                        placeholder="Informe o nome">
                                </div>
                            </div>

                            <div class="col-md-3 form-group">
                                <label for="cep">CEP:</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="cep" 
                                    name="cep" 
                                    placeholder="Digite o CEP"
                                    data-mask="44000-000" 
                                    onblur="pesquisacep(this.value);" 
                                >
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="endereço" class="control-label">Endereço</label>
                                    <input 
                                        type="endereco" 
                                        name="endereco" 
                                        id="endereco" 
                                        class="form-control" 
                                        required
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="numero" class="control-label">Número</label>
                                    <input 
                                        type="numero" 
                                        name="numero" 
                                        id="numero" 
                                        class="form-control" 
                                        required
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="complemento" class="control-label">Complemento</label>
                                    <input 
                                        type="complemento"
                                        name="complemento"
                                        id="complemento"
                                        class="form-control" 
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bairro" class="control-label">Bairro</label>
                                    <input 
                                        type="bairro" 
                                        name="bairro" 
                                        id="bairro" 
                                        class="form-control" 
                                        required
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cidade" class="control-label">Cidade</label>
                                    <input 
                                        type="cidade" 
                                        name="cidade" 
                                        id="cidade" 
                                        class="form-control" 
                                        required
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="estado" class="control-label">Estado</label>
                                    <input 
                                        type="estado" 
                                        name="estado" 
                                        id="estado" 
                                        class="form-control" 
                                        required
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer"> 
                            <button class="btn btn-primary" type="submit" id="buttonCriar"> Cadastrar </button>
                        </div>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Cadastro -->

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Teste Técnico 2023</div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="public/js/scripts.js"></script>
    <script src="public/js/custom.js"></script>
    <script src="public/js/jquery-mask/jquery.mask.js"> </script>

</body>
</html>
