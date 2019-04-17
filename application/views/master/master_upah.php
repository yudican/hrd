<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Upah
        <a href="<?php echo base_url('master/upah/input'); ?>" class="input_record btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> input</a>
    </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_upah">
            <thead class="thead-light">
                <tr>
                    <th>ID Upah</th>
                    <th>Jenis upah</th>
                    <th>Upah</th>
                    <th>jht</th>
                    <th>jkk</th>
                    <th>jht tk</th>
                    <th>jp</th>
                    <th>jkm</th>
                    <th>jp tk</th>
                    <th>kes prhs</th>
                    <th>kes</th>
                    <th>bulan upah</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        
    </div>
    <!-- /.card-body -->
</div>

<script src="<?php echo base_url('asset/'); ?>dist/js/jquery-1.12.4.js"></script>

<script type="text/javascript">
   $(document).ready(function () {
       var oTable = $("#tabel_upah").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "<?php echo site_url('master_upah/getUpah'); ?>",
        //    "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
        //        var index = iDisplayIndex +1;
        //        $('td:eq(0)',nRow).html(index);
        //        return nRow;
        //     },
           "columns": [
               { "data": "id_upah", "name": "tabel_upah.id_upah" },
               { "data": "wilayah_upah", "name": "tabel_upah.wilayah_upah" },
               { "data": "jumlah_upah", "name": "tabel_upah.jumlah_upah" },
               { "data": "jht_prsh_tk", "name": "tabel_upah.jht_prsh_tk" },
               { "data": "jkk_tk", "name": "tabel_upah.jkk_tk" },
               { "data": "jht_tk", "name": "tabel_upah.jht_tk" },
               { "data": "jp_prsh_tk", "name": "tabel_upah.jp_prsh_tk" },
               { "data": "jkm_tk", "name": "tabel_upah.jkm_tk" },
               { "data": "jp_tk", "name": "tabel_upah.jp_tk" },
               { "data": "kes_prsh", "name": "tabel_upah.kes_prsh" },
               { "data": "kes", "name": "tabel_upah.kes" },
               { "data": "bulan_upah", "name": "tabel_upah.jp_prsh_tk" },
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
               [0, "desc"]
           ]
       });
        $('#tabel_upah').on('click','.edit_record',function(){
            var id=$(this).data('id');
            document.location='<?php echo site_url('master/upah/update/') ?>'+id;
        });
        $('#tabel_upah').on('click','.hapus_record',function(){
            var id=$(this).data('id');
            $('#modal_hapus').modal('show');
            $('.hapus').attr('data-url','<?php echo site_url('master_upah/hapus/') ?>'+id+'/upah');
        });

        //hapus record
        $('.modal-footer').on('click','.hapus',function(){
            var url=$(this).data('url');
            document.location.href=url;
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
                <a href="#" class="btn btn-primary hapus">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>