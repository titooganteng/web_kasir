<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/dist/sweetalert2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Daftar Pelanggan</h1>

        <div class="d-flex justify-content-end mb-3">
            <button type="button" id="addButton" class="btn btn-success w-20 float-right">
                <i class="fas fa-cart-plus me-2"></i> Tambah Data
            </button>
        </div>

        <table class="table table-bordered">
            <thead class="table-primary text-center">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $pelanggan): ?>
                        <tr>
                            <td><?= $pelanggan['id_pelanggan'] ?></td>
                            <td><?= $pelanggan['nama_pelanggan'] ?></td>
                            <td><?= $pelanggan['alamat_pelanggan'] ?></td>
                            <td><?= $pelanggan['no_telp'] ?></td>
                            <td>
                                <button type="button" id="editButton" data-id="<?= $pelanggan['id_pelanggan'] ?>"
                                    class="btn btn-warning btn-sm me-3 editButton">
                                    <i class="fas fa-pencil me-2"></i>Edit
                                </button>
                                <button type="button" id="deleteButton" data-id="<?= $pelanggan['id_pelanggan'] ?>"
                                    class="btn btn-danger btn-sm deleteButton">
                                    <i class="fas fa-trash me-2"></i>Hapus
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data pelanggan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script>
        document.getElementById('addButton').addEventListener('click', function () {
            Swal.fire({
                width: "50%",
                title: 'Masukkan Data Pelanggan',
                html: `
                <div class="text-start pt-3">
                    <label for="name" class="mb-2">Nama Pelanggan</label>
                    <input name="name" id="customerName" class="form-control mb-4 p-2" placeholder="Nama" required>
                    
                    <label for="phone" class="mb-2">No.Telp</label>
                    <input name="phone" id="customerPhone" class="form-control mb-4 p-2" placeholder="No. Telp" required>

                    <label for="address" class="mb-2">Alamat</label>
                    <textarea name="address" id="customerAddress" class="form-control mb-4 p-2" style="height: 100px;" placeholder="Alamat" required></textarea>
                </div>
                <button id="submitButton" class="btn btn-primary btn-md">Simpan</button>
                `,
                focusConfirm: false,
                showCloseButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
            })
        });
    </script>
</body>

</html>