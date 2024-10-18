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
                <form action="<?php echo site_url('user/edit'); ?>" method="post">
                    <div class="mb-3">
                        <!-- Menyembunyikan ID user -->
                        <input class="form-control" type="hidden" name="id" value="<?php echo $user->id; ?>" required />
                        
                        <label for="username">User Name <code>*</code></label>
                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : ''; ?>"
                               type="text" name="username" value="<?php echo $user->username; ?>" placeholder="User Name" required />
                        <div class="invalid-feedback">
                            <?php echo form_error('username'); ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="full_name">Full Name <code>*</code></label>
                        <input class="form-control" type="text" name="full_name" value="<?php echo $user->full_name; ?>" placeholder="Full Name" required />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone <code>*</code></label>
                        <input class="form-control" type="number" name="phone" value="<?php echo $user->phone; ?>" placeholder="Phone" required />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <code>*</code></label>
                        <input class="form-control" type="email" name="email" value="<?php echo $user->email; ?>" placeholder="Email" required />
                    </div>

                    <div class="mb-3">
                        <label for="role">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <!-- Memeriksa nilai role dan memilih opsi yang sesuai -->
                            <option value="PEMILIK" <?php echo ($user->role == 'PEMILIK') ? 'selected' : ''; ?>>PEMILIK</option>
                            <option value="ADMIN" <?php echo ($user->role == 'ADMIN') ? 'selected' : ''; ?>>ADMIN</option>
                            <option value="KASIR" <?php echo ($user->role == 'KASIR') ? 'selected' : ''; ?>>KASIR</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Update</button>
                </form>
            </div>
        </div>

        <!-- Penambahan div kosong untuk mengisi ruang -->
        <div style="height: 100vh;"></div>
    </div>
</main>
