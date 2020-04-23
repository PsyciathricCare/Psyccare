<head>
      <!-- framework bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>
  <script>
  $( function() {
    $( "#date" ).datepicker({
      autoclose:true,
      todayHighlight:true,
      format:'yyyy-mm-dd',
      language: 'id'
    });
  } );
  </script>
</head>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Konsultasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_konsultasi">ID Konsultasi</label>
                            <input type="text" class="form-control" id="id_konsultasi" name="id_konsultasi">
                            <small class="form-text text-danger"><?= form_error('id_konsultasi') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="id_dokter">ID Dokter</label>
                            <input type="text" class="form-control" id="id_dokter" name="id_dokter">
                            <small class="form-text text-danger"><?= form_error('id_dokter') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="id_pasien">ID Pasien</label>
                            <input type="text" class="form-control" id="id_pasien" name="id_pasien">
                            <small class="form-text text-danger"><?= form_error('id_pasien') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="jadwal_konsultasi">Jadwal Konsultasi</label>
                            <input type="text" class="form-control" id="date" name="jadwal_konsultasi" placeholder="YYYY-MM-DD">
                        </div>                        
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="text" class="form-control" id="waktu" name="waktu">
                            <small class="form-text text-danger"><?= form_error('waktu') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga_jasa">Kisaran Harga Jasa</label>
                            <input type="text" class="form-control" id="harga_jasa" name="harga_jasa">
                            <small class="form-text text-danger"><?= form_error('harga_jasa') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 