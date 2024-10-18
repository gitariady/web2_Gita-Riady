<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?php echo $title; ?></h1>
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('user'); ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>

        <div class="card mt-4">
            <div class="card-header">
                <a href="<?php echo site_url('user/add'); ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>

            <!-- Perbaikan penulisan kondisional untuk memeriksa pesan sukses -->
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <!-- Perbaikan penulisan atribut 'width' pada tag <table> -->
                    <table class="table table-striped table-bordered table-hover" id="tablekelas" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($user as $u): ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $u->username; ?></td>
                                    <td><?php echo $u->email; ?></td>
                                    <td><?php echo $u->phone; ?></td>
                                    <td><?php echo $u->role; ?></td>
                                    <td>
                                        <div>
                                            <!-- Perbaikan penulisan link dan class -->
                                            <a href="<?php echo base_url('user/getedit/' . $u->id); ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="<?php echo base_url('user/delete/' . $u->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin menghapus data user ini?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Penambahan div kosong untuk mengisi ruang -->
        <div style="height: 100vh;"></div>
    </div>
</main>