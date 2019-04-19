<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Kategori Bagian
        <button id="btn_tambah" class="input_record btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> input</button>
    </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_kategori">
            <thead class="thead-light">
                <tr>
                    <th>nomor</th>
                    <th>Kategori Nama</th>
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
       var table = $("#tabel_kategori").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "<?php echo site_url('master/kategori/get'); ?>",
           "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
               var index = iDisplayIndex +1;
               $('td:eq(0)',nRow).html(index);
               return nRow;
            },
           "columns": [
               { "data": "nomor",orderable:false,searchable:false },
               { "data": "kategori_nama", "name": "kategori_bagian.kategori_nama" },
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
                <a href="#" class="btn btn-primary" id="hapus_kategori">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="Kategori" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modals" role="document" style="width: 650px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_Kategori" action="" method="POST">
                  <input type="hidden" name="Kategori_id" value="">
                	<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori Nama</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="kategori_nama" value="" name="kategori_nama" placeholder="Kategori Nama">
					    </div>
					</div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">batal</button>
                <button id="simpan_kategori" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>