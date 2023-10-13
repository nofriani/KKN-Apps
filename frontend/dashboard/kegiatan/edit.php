<div class="row row-cols-1 row-cols-md-2 align-items-center mb-4">
    <div class="col">
        <h1 class="mt-4">Edit Kegiatan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
            <li class="breadcrumb-item"><a href="?page=kegiatan/index">Data Kegiatan</a></li>
            <li class="breadcrumb-item active">Edit Kegiatan</li>
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
                <label for="nama" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tempat" class="col-sm-2 col-form-label">Tempat <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sasaran" class="col-sm-2 col-form-label">Sasaran <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sasaran" placeholder="Masukkan Sasaran" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="dokumentasi" class="col-sm-2 col-form-label">Dokumentasi <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dokumentasi" placeholder="Masukkan Dokumentasi" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="keterangan" placeholder="Masukkan Keterangan" required></textarea>
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
