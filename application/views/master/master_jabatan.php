<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Kategori Jabatan
        <button id="btn_tambah_jabatan" class="input_record btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> input</button>
    </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_jabatan">
            <thead class="thead-light">
                <tr>
                    <th>nomor</th>
                    <th>Kode jabatan</th>
                    <th>jabatan Nama</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        
    </div>
    <!-- /.card-body -->
</div>

<script type="text/javascript">
   $(document).ready(function () {
       var table = $("#tabel_jabatan").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "<?php echo site_url('master/jabatan/get'); ?>",
           "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
               var index = iDisplayIndex +1;
               $('td:eq(0)',nRow).html(index);
               return nRow;
            },
           "columns": [
               { "data": "nomor",orderable:false,searchable:false },
               { "data": "jabatan_kode", "name": "jabatan_bagian.jabatan_kode" },
               { "data": "jabatan_nama", "name": "jabatan_bagian.jabatan_nama" },
               { "data": "actions",orderable:false,searchable:false}
               
               
           ],
           "bJQueryUI": true,
           "sPaginationType": "full_numbers",
           "iDisplayStart ": 20,
           "fnServerData": function (sSource, aoData, fnCallback)
           {
               $.ajax
                       ({
                           "dataType": "json",
                           "type": "POST",
                           "url": sSource,
                           "data": aoData,
                           "success": fnCallback
                       });
           },
           "order": [
               [0, "asc"]
           ]
       });
       
   });
</script>
<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Konfirmasi Hapus</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini.?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Tidak</button>
                <a href="#" class="btn btn-primary" id="hapus_jabatan">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="jabatan" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modals" role="document" style="width: 650px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_jabatan" action="" method="POST">
                  <input type="hidden" name="jabatan_id" value="">
                	<div class="form-group row">
      					    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Jabatan</label>
        					    <div class="col-sm-9">
        					      <input type="text" class="form-control" id="jabatan_kode" value="" name="jabatan_kode" placeholder="Kode jabatan">
      					    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">jabatan Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="jabatan_nama" value="" name="jabatan_nama" placeholder="jabatan Nama">
                    </div>
                  </div>
					       
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">batal</button>
                <button id="simpan_jabatan" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>