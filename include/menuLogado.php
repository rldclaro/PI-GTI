<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Alex Preparações</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto p-4 p-lg-0">
            <li class="nav-item">
                <a href="index.php" class="nav-link active">Início</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pecasDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                    Manutenções
                </a>
                <div class="dropdown-menu" aria-labelledby="pecasDropdown">
                    <a class="dropdown-item" href="pecas.php">Cadastro de Manutenções</a>
                    <a class="dropdown-item" href="list_pecas.php">Listagem de Manutenções</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="fornecedorDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                    Fornecedores
                </a>
                <div class="dropdown-menu" aria-labelledby="fornecedorDropdown">
                    <a class="dropdown-item" href="fornecedores.php">Cadastro de Fornecedor</a>
                    <a class="dropdown-item" href="list_fornecedores.php">Lista de Fornecedores</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="funcionarioDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                    Clientes & Funcionários
                </a>
                <div class="dropdown-menu" aria-labelledby="funcionarioDropdown">
                    <a class="dropdown-item" href="cadastro.php">Cadastro de Funcionários</a>
                    <a class="dropdown-item" href="list_funcionarios.php">Lista de Funcionários</a>
                    <a class="dropdown-item" href="cliente.php">Cadastro de Clientes</a>
                    <a class="dropdown-item" href="list_cliente.php">Lista de Clientes</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="servicosDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                    Serviços
                </a>
                <div class="dropdown-menu" aria-labelledby="servicosDropdown">
                    <a class="dropdown-item" href="regServices.php">Cadastro de Serviços</a>
                    <a class="dropdown-item" href="list_servicos.php">Listagem de Serviços</a>
                </div>
            </li>
            
        </ul>
        <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Finalizar Sessão<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
