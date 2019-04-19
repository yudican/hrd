<div class="card">
    <div class="card-header">
    <h3 class="card-title">Interview Cadangan</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
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
           "sAjaxSource": "<?php echo site_url('interview/pengiriman/get'); ?>",
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

<!--  -->