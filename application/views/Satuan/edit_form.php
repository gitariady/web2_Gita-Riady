<main>
    <div class="container-fluid">
        <h1 class="mb-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('satuan'); ?>">satuan</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <!-- Perbaikan penulisan method pada form -->
                <form action="<?php echo site_url('Satuan/edit'); ?>" method="post">
                    <div class="mb-3">
                        <!-- Menyembunyikan ID user -->
                        <input class="form-control" type="hidden" name="id" value="<?php echo $satuan->id; ?>" required />
                        
                        <label for="satuan">Name <code>*</code></label>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>"
                        type="text" name="name" value="<?php echo $satuan->name; ?>" placeholder=" Name" required />
                        <div class="invalid-feedback">
                            <?php echo form_error('satuan'); ?>
                        </div>
                        
            <div class="mb-3">
                <label> Keterang <code>*</code></label>
                <input class="form-control" type="text" value="<?=$satuan->diskripsi;?>" name="keterang" placeholder="Nama Barang" required />
            </div>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-plus"></i> Update</button>
                </form>
            </div>
        </div>

        <!-- Penambahan div kosong untuk mengisi ruang -->
        <div style="height: 100vh;"></div>
    </div>
</main>
