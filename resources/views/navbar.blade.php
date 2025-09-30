<nav class="navbar navbar-dark navbar-centro fixed-top bg-warning flex-md-nowrap p-0 shadow">
    <a class="navbar-brand" href="#">Dev Learn</a>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('inicio')}}">
                            <span data-feather="home"></span>
                            Página inicial <span class="sr-only">(atual)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cursos">
                            <span data-feather="file"></span>
                            Exibir Cursos Cadastrados
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('novoCurso')}}">
                            <span data-feather="shopping-cart"></span>
                            Cadastro de Cursos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pesquisarCurso')}}">
                            <span data-feather="users"></span>
                            Pesquisar Cursos
                        </a>
                    </li>
                    <footer class="footer mt-auto py-3 navbar-fixed-bottom ">
                        <div class="footer-margin">
                            <p class="text-start text-muted">Todos os direitos reservados a &copy;Copyright</p>
                        </div>
                    </footer>
                </ul>
            </div>
        </nav>
    </div>

</div>

