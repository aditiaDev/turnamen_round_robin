<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/summernote/summernote-bs4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/daterangepicker/daterangepicker.css'); ?>">
<div class="content-wrapper">  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
          <div class="card" style="margin-top: 1rem">
            <div class="card-body">
              <div class="form-group">
                <label>ID Event</label>
                <input type="text" class="form-control" name="id_event" >
              </div>
              <div class="form-group">
                <label>Nama Event</label>
                <input type="text" class="form-control" name="nm_event" >
              </div>
              <div class="form-group">
                <label>Tanggal Event</label>
                <input type="text" class="form-control" name="tgl_event" >
              </div>
              <div class="form-group">
                <label>Tanggal Pendaftaran</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                  </div>
                  <input type="text" class="form-control float-right" id="reservationtime">
                </div>
              </div>
              <div class="form-group">
                <label>Biaya Pendaftaran</label>
                <input type="text" class="form-control" name="biaya_pendaftaran" >
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-8">
          <div class="card" style="margin-top: 1rem">
            <div class="card-body">
              <div class="form-group">
                <label>Deskripsi Event</label>
                <textarea id="summernote"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script src="<?php echo base_url('/assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
      height: 450,
    })

    

  })
  //Date range picker
  $('#reservation').daterangepicker({
    use24hours: true,
    format: "DD/MM/YYYY HH:mm"
  })
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY HH:mm'
      }
    })
</script>