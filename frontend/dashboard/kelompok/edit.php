<div class="row row-cols-1 row-cols-md-2 align-items-center mb-4">
    <div class="col">
        <h1 class="mt-4">Edit Kelompok</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
            <li class="breadcrumb-item"><a href="?page=kelompok/index">Data Kelompok</a></li>
            <li class="breadcrumb-item active">Edit Kelompok</li>
        </ol>
    </div>
    <div class="col d-flex justify-content-md-end">
        <div>
            <a class="btn btn-warning text-white" href="?page=kelompok/index"><i class="fas fa-arrow-left"></i> Kembali</a>
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
                <label for="desa" class="col-sm-2 col-form-label">Desa <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <select class="form-select" id="desa" required>
                        <option value="" selected disabled>Pilih Desa</option>
                        <option value="1">Desa ABC</option>
                        <option value="2">Desa XYZ</option>
                        <option value="3">Desa MNO</option>
                        <!-- Tambahkan opsi desa lainnya di sini -->
                    </select>
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
