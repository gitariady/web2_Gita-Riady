<main>
    <div class="container-fluid">
        <h1 class="mb-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('user'); ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <!-- Perbaikan penulisan method pada form -->
                <form action="<?php echo site_url('user/save'); ?>" method="post">
                    <div class="mb-3">
                        <label for="nik">NIK <code>*</code></label>
                        <input class="form-control" type="text" name="nik" placeholder="NIK" required />
                    </div>

                    <div class="mb-3">
                        <label for="username">User Name <code>*</code></label>
                        <!-- Perbaikan penulisan class form untuk menampilkan error -->
                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : ''; ?>"
                        type="text" name="username" placeholder="User Name" required />
                        <div class="invalid-feedback">
                            <?php echo form_error('username'); ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="full_name">Full Name <code>*</code></label>
                        <input class="form-control" type="text" name="full_name" placeholder="Full Name" required />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone <code>*</code></label>
                        <input class="form-control" type="number" name="phone" placeholder="Phone" required />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <code>*</code></label>
                        <input class="form-control" type="email" name="email" placeholder="Email" required />
                    </div>

                    <div class="mb-3">
                        <label for="address">Alamat <code>*</code></label>
                        <input class="form-control" type="text" name="address" placeholder="Alamat" required />
                    </div>

                    <div class="mb-3">
                        <label for="password">Password <code>*</code></label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password" required />
                    </div>

                    <div class="mb-3">
                        <label for="role">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="" selected>Pilih...</option>
                            <option value="PEMILIK">PEMILIK</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="KASIR">KASIR</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>

        <!-- Penambahan div kosong untuk mengisi ruang -->
        <div style="height: 100vh;"></div>
    </div>
</main>
