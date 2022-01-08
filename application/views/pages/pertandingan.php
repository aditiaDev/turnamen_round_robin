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
              <h3 class="card-title">Atur Jadwal Pertandingan</h3>
            </div>

              <form id="FRM_DATA" role="form" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Event</label>
                    <div class="row">
                      <input type="hidden" class="form-control" name="id_event" readonly >
                      <input type="text" class="form-control" name="nm_event" readonly style="width: 275px;margin-right: 10px;" placeholder="Nama Event" >
                      <button type="button" id="BTN_EVENT" class="btn btn-sm btn-default"><i class="fas fa-list"></i></button>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-dark" id="BTN_PROSES" >Proses</button>
                </div>
              </form>

          </div>
        </div>

        <!-- /.col -->
      </div>
    </div>

    <div class="modal fade" id="modal_event">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Double Click</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-bordered" id="tb_event" style="width:100%">
                <thead>
                  <th>ID</th>
                  <th>Nama Event</th>
                  <th>Tanggal Event</th>
                  <th>Status Event</th>
                </thead>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

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
    $("#BTN_EVENT").click(function(){
      tb_event = $('#tb_event').DataTable( {
          "order": [[ 1, "asc" ]],
          "pageLength": 25,
          "bInfo" : false,
          "bDestroy": true,
          "select": true,
          "ajax": {
              "url": "<?php echo site_url('jadwal/getEventPertandingan') ?>",
              "type": "POST",
          },
          "columns": [
              { "data": "id_event" },{ "data": "nm_event" }
              ,{ "data": "tgl_event" },{ "data": "status" },
          ]
      });

      $("#modal_event").modal('show')
    })

    $('body').on( 'dblclick', '#tb_event tbody tr', function (e) {
        var Rowdata = tb_event.row( this ).data();

        $("[name='id_event']").val(Rowdata.id_event);
        $("[name='nm_event']").val(Rowdata.nm_event);


        $('#modal_event').modal('hide');
    });

    $("#BTN_PROSES").click(function(){
      $.ajax({
        url: "<?php echo site_url('jadwal/showJadwal') ?>",
        type: "POST",
        dataType: "JSON",
        data: {
          id_event: $("[name='id_event']").val(),
        },
        success: function(data){
          console.log(data)
        }
      })
    })
</script>