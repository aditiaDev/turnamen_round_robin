<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/select2/css/select2.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
<div class="content-wrapper">  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
          <div class="card card-dark" style="margin-top: 1rem">
            <div class="card-header">
              <h3 class="card-title">Input Grup</h3>
            </div>

              <form role="form" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Grup</label>
                    <input type="text" class="form-control" id="nama_team" name="nama_grup" placeholder="Nama Grup" value="">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark" id="save" name="simpan_grup">Simpan</button>
                </div>
              </form>

          </div>
        </div>

        <div class="col-8">
          <div class="card card-dark" style="margin-top: 1rem">
            <div class="card-header">
              <h3 class="card-title">Data Grup</h3>
            </div>

            <div class="card-body">
              <table width="100%" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="10%">No.</th>
                    <th >Nama Grup</th>
                    <th style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </div>

    <div class="modal fade" id="modal_add">
      <div class="modal-dialog">
        <div class="modal-content">
          <form id="FRM_DATA" method="post" enctype="multipart/form-data">
            <div class="modal-header">
              <h4 class="modal-title">Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>ID Team</label>
                <input type="text" class="form-control" name="id_team" value="<New>" readonly>
              </div>
              <div class="form-group">
                <label>Nama Team</label>
                <input type="text" class="form-control" name="nm_team" >
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat_team" ></textarea>
              </div>
              <div class="form-group">
                <label>Logo Team</label>
                <input type="file" name="logo" id="logo" accept="image/png, image/gif, image/jpeg">
              </div>
              <div class="form-group">
                <label>User</label>
                <select class="form-control select2" name="id_user">
                </select>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="BTN_SAVE">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

  </section>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('/assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/adminlte/plugins/select2/js/select2.full.min.js'); ?>"></script>
<script>
  var save_method;
  var id_data;

  $(".select2").select2({
    theme: 'bootstrap4'
  })

</script>