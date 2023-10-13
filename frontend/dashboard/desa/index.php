<div class="row row-cols-1 row-cols-md-2 align-items-center mb-4">
    <div class="col">
        <h1 class="mt-4">Data Desa</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
            <li class="breadcrumb-item active">Data Desa</li>
        </ol>
    </div>
    <div class="col d-flex justify-content-md-end">
        <div>
            <a class="btn btn-success" href="?page=desa/create"><i class="fas fa-plus"></i> Tambah</a>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Luas Wilayah</th>
                    <th>Jumlah Penduduk</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="https://picsum.photos/300/300" alt="Foto Desa" width="100"></td>
                    <td>Nama Desa</td>
                    <td>100 km<sup>2</sup></td>
                    <td>10,000</td>
                    <td>Deskripsi singkat mengenai desa tersebut.</td>
                    <td>Lokasi Desa</td>
                    <td>
                        <div class="d-flex gap-2">
                            <div>
                                <a href="?page=desa/edit&id=1" class="btn btn-warning btn-sm text-nowrap text-white">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </div>
                            <div>
                                <button class="btn btn-danger btn-sm text-nowrap" onclick="hapusData('?page=desa/index&hapus=1')">
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
