<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item"><a href="<?php echo site_url('User') ?>">Dasboard</a></li>
        <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>
        <div class="card mt-4">
            <div class="card-header">
            </div>
            <div class="card-body">
            <div class="card mb-4">
            <div class="card-body">
                <form class="form-horizontal" action="<?php echo site_url('report/kustomerlap'); ?>" method="post" target="_black">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Internal file Controller : Menyertakan Report pada file Controller</label>
            </div>
            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
            </div>
        </form>
        </div>
    </div>
            <div class="card mb-4">
                <div class="card-body">
                <form class="form-horizontal" action="<?php echo site_url('report/headerlap'); ?>" method="post" target="_black">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Internal file Controller : Menyertakan Report hanya Header pada file Controller</label>
            </div>
            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
            </form>
        </div>
    </div>
            <div class="card mb-4">
                <div class="card-body">
                <form class="form-horizontal" action="<?php echo site_url('report/kustomerfull'); ?>" method="post" target="_black">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Internal file Controller : Menyertakan Report pada file yang berbeda dan diletakan difolder view</label>
            </div>
            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
            </form>
        </div>
    </div>
            <div class="card mb-4">
                <div class="card-body">
                <form class="form-horizontal" action="<?php echo site_url('report1/kustomerkustom'); ?>" method="post" target="_black">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Internal file Controller : Menyertakan Report pada file yang berbeda dan diletakan difolder view berdasarkan fungsi</label>
            </div>
            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
            </form>
        </div>
    </div>
</div>
    </div>
    </div>
    </div>
</main>