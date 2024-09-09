<header class="container-fluid">
    <div class="row align-items-center cabecalho">
        <div class="col p-3">
            <button class="btn btn"><h4 class="mb-0"><i class="fa-solid fa-bars" style="color: #F4F4F4"></i></h4></button>
        </div>
        <div class="col p-3 pe-5 d-flex flex-row justify-content-end align-items-center">
            <div><a href="<?=  site_url('/') ?>" class="cabecalho-usuario"><?= session('user')['username'] ?></a></div>
            <button class="btn btn ms-2"><h4 class="mb-0"><i class="fa-solid fa-grip-lines-vertical" style="color: #F4F4F4"></i></h4></button>
            <a href="<?= site_url('logout') ?>" class="btn btn ms-2"><h4 class="mb-0"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #F4F4F4"></i></h4></a>
        </div>
    </div>
</header>