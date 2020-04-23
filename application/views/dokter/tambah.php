<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Dokter
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_dokter">ID Dokter</label>
                            <input type="text" class="form-control" id="id_dokter" name="id_dokter">
                            <small class="form-text text-danger"><?= form_error('id_dokter') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama_dokter">Nama</label>
                            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter">
                            <small class="form-text text-danger"><?= form_error('nama_dokter') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="bidang">Spesialis</label>
                            <input type="text" class="form-control" id="bidang" name="bidang">
                            <small class="form-text text-danger"><?= form_error('bidang') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="lulusan">Lulusan</label>
                            <input type="text" class="form-control" id="lulusan" name="lulusan">
                            <small class="form-text text-danger"><?= form_error('lulusan') ?>.</small>
                        </div>                        
                        <div class="form-group">
                            <label for="nomor_izinpraktik">No. Izin Praktik</label>
                            <input type="text" class="form-control" id="nomor_izinpraktik" name="nomor_izinpraktik">
                            <small class="form-text text-danger"><?= form_error('nomor_izinpraktik') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="lokasi_praktik">Lokasi Praktik</label>
                            <input type="text" class="form-control" id="lokasi_praktik" name="lokasi_praktik">
                            <small class="form-text text-danger"><?= form_error('lokasi_praktik') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman_kerja">Pengalaman Kerja</label>
                            <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja">
                            <small class="form-text text-danger"><?= form_error('pengalaman_kerja') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 