<div class="row row-cols-1 row-cols-md-2 align-items-center mb-4">
    <div class="col">
        <h1 class="mt-4">Tambah Mahasiswa</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
            <li class="breadcrumb-item"><a href="?page=mahasiswa/index">Data Mahasiswa</a></li>
            <li class="breadcrumb-item active">Tambah Mahasiswa</li>
        </ol>
    </div>
    <div class="col d-flex justify-content-md-end">
        <div>
            <a class="btn btn-warning text-white" href="#" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form>
            <div class="row mb-3">
                <label for="nim" class="col-sm-2 col-form-label">NIM <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="univ" class="col-sm-2 col-form-label">Universitas <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="univ" placeholder="Masukkan Universitas" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fakultas" placeholder="Masukkan Fakultas" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="prodi" class="col-sm-2 col-form-label">Program Studi <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" placeholder="Masukkan Program Studi" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>