<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Bagian
        <button id="btn_tambah_bagian" class="input_record btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> input</button>
    </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_bagian">
            <thead class="thead-light">
                <tr>
                    <th>nomor</th>
                    <th>Nama Bagian</th>
                    <th>Kategori Bagian</th>
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
       var table = $("#tabel_bagian").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "<?php echo site_url('master/bagian/get'); ?>",
           "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
               var index = iDisplayIndex +1;
               $('td:eq(0)',nRow).html(index);
               return nRow;
            },
           "columns": [
               { "data": "nomor",orderable:false,searchable:false },
               { "data": "nama_bagian", "name": "bagian.nama_bagian" },
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
                <a href="#" class="btn btn-primary" id="hapus_bagian">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="bagian" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modals" role="document" style="width: 650px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bagian" action="" method="POST">
                  <input type="hidden" name="bagian_id" value="">
                	<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">bagian Nama</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="nama_bagian" value="" name="nama_bagian" placeholder="Nama Bagian">
					    </div>
					</div>
					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori Nama</label>
					    <div class="col-sm-9">
							<select name="kategori_bagian" id="kategori_bagian" class="form-control">
								<option value="">Pilih Kategori Bagian</option>
								<?php foreach($kategori_bagian as $results): ?>
									<option value="<?php echo $results->kategori_id; ?>"><?php echo $results->kategori_nama; ?></option>
								<?php endforeach; ?>
							</select>
					    </div>
					</div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">batal</button>
                <button id="simpan_bagian" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>