<div class="row row-cols-1 row-cols-md-2 align-items-center mb-4">
    <div class="col">
        <h1 class="mt-4">Data Mahasiswa</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
            <li class="breadcrumb-item active">Data Mahasiswa</li>
        </ol>
    </div>
    <div class="col d-flex justify-content-md-end">
        <div>
            <a class="btn btn-success" href="?page=mahasiswa/create"><i class="fas fa-plus"></i> Tambah</a>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Universitas</th>
                    <th>Fakultas</th>
                    <th>Program Studi</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>Tiger Nixon</td>
                    <td>Universitas ABC</td>
                    <td>Fakultas XYZ</td>
                    <td>Teknik Informatika</td>
                    <td>Ketua Mahasiswa</td>
                    <td>
                        <div class="d-flex gap-2">
                        <div>
                            <a href="?page=mahasiswa/edit&id=1" class="btn btn-warning btn-sm text-nowrap text-white">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                        <div>
                            <button class="btn btn-danger btn-sm text-nowrap" onclick="hapusData('?page=mahasiswa/index&hapus=1')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>