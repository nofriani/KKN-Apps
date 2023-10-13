<div class="row row-cols-1 row-cols-md-2 align-items-center mb-4">
    <div class="col">
        <h1 class="mt-4">Edit Data Desa</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
            <li class="breadcrumb-item"><a href="?page=desa/index">Data Desa</a></li>
            <li class="breadcrumb-item active">Edit Data Desa</li>
        </ol>
    </div>
    <div class="col d-flex justify-content-md-end">
        <div>
            <a class="btn btn-warning text-white" href="?page=desa/index"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form>
            <div class="row mb-3">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Desa" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="luas_wilayah" class="col-sm-2 col-form-label">Luas Wilayah <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="luas_wilayah" placeholder="Masukkan Luas Wilayah" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jumlah_penduduk" class="col-sm-2 col-form-label">Jumlah Penduduk <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="jumlah_penduduk" placeholder="Masukkan Jumlah Penduduk" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi Desa" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" rows="4" placeholder="Masukkan Deskripsi" required></textarea>
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
