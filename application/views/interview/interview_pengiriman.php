<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Pengiriman</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <?php echo form_open('#',array('class' =>'form-inline float-right', 'id' => 'form_cari')) ?>
            <div class="form-group mb-2">
                <select name="pengiriman_cabang" id="pengiriman_cabang" class="form-control">
                    <option value="">Pilih Cabang</option>
                    <?php foreach($cabang as $results): ?>
                        <option value="<?php echo $results->id_cabang; ?>"><?php echo $results->nama_cabang; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="date" class="form-control" name="filter" id="filter" placeholder="Filter ">
            </div>
            <!-- <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="filter_nama" id="filter_nama" placeholder="Filter Nama">
            </div> -->
            <button type="button" id="cari" class="btn btn-primary mb-2"><i class="fa fa-print"></i></button>
        </form>
        <table class="table table-striped" width="100%" style="font-size: 12px;" id="tabel_interview_pengiriman">
        
            <thead class="thead-light">
                <tr>
                	<th width="2%">No</th>
                    <th width="8%">Nik</th>
                    <th width="15%">Nama Lengkap</th>
                    <th width="7%">Cabang Kirim</th>
                    <th width="7%">Kirim Ke Bagian</th>
                    <th width="5%">Tanggal Kirim</th>
                    <th width="5%">Status Kirim</th>
                    <th width="7%">aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        
    </div>
    <!-- /.card-body -->
</div>
<!-- <script>

</script> -->

<script type="text/javascript">
    
   $(document).ready(function () {
       var table = $("#tabel_interview_pengiriman").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "<?php echo site_url('pengiriman/get'); ?>",
           "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
               var index = iDisplayIndex +1;
               $('td:eq(0)',nRow).html(index);
               return nRow;
            },
           "columns": [
               { "data": "nomor",orderable:false,searchable:false },
               { "data": "biodata_nik", "name": "biodata_ktp.biodata_nik" },
               { "data": "biodata_nama", "name": "biodata_ktp.biodata_nama" },
               { "data": "nama_cabang", "name": "tabel_cabang.nama_cabang" },
               { "data": "nama_bagian", "name": "bagian.nama_bagian" },
               { "data": "pengiriman_tanggal", "name": "tabel_pengiriman.pengiriman_tanggal" },
               { "data": "pengiriman_status", "name": "tabel_pengiriman.pengiriman_status" },
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
<div class="modal fade" id="modal_batal" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Konfirmasi Dibatalkan</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="batal">Apakah anda yakin ingin membatalkan data ini.?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Tidak</button>
                <button type="button" class="btn btn-primary" id="btn_batal">Ya, Batalkan</button>
            </div>
        </div>
    </div>
</div>
<!--  -->