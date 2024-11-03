<main>
    <div class="container-fluid">
        <h1 class="mb-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kategori'); ?>">Kategori</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <!-- Perbaikan penulisan method pada form -->
                <form action="<?php echo site_url('Kategori/save'); ?>" method="post">
                    <div class="mb-3">
                        <!-- Perbaikan penulisan class form untuk menampilkan error -->
                        <label for="username"> Name <code>*</code></label>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>"
                        type="text" name="name" placeholder="Name" required />
                        <div class="invalid-feedback">
                            <?php echo form_error('name'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</main>
