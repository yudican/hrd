<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Cabang
        <a href="<?php echo base_url('master_cabang/cabang'); ?>" class="input_record btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> input</a>
    </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_cabang">
            <thead class="thead-light">
                <tr>
                    <th>ID Cabang</th>
                    <th>Kategori Cabang</th>
                    <th>Cabang</th>
                    <th>Ka. Toko</th>
                    <th>Personalia</th>
                    <th>Alamat</th>
                    <th>Wilayah</th>
                    <th>NPWP Cabang</th>
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
       var oTable = $("#tabel_cabang").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": "<?php echo site_url('master_cabang/getCabang'); ?>",
        //    "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
        //        var index = iDisplayIndex +1;
        //        $('td:eq(0)',nRow).html(index);
        //        return nRow;
        //     },
           "columns": [
               { "data": "id_cabang", "name": "tabel_cabang.id_cabang" },
               { "data": "kategori_cabang", "name": "tabel_cabang.kategori_cabang" },
               { "data": "nama_cabang", "name": "tabel_cabang.nama_cabang" },
               { "data": "kepala_toko", "name": "tabel_cabang.kepala_toko" },
               { "data": "personalia",orderable:false,searchable:false},
               { "data": "alamat",orderable:false,searchable:false},
               { "data": "wilayah_upah", "name": "tabel_upah.wilayah_upah" },
               { "data": "npwp_cabang", "name": "tabel_cabang.npwp_cabang" },
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
        $('#tabel_cabang').on('click','.edit_record',function(){
            var id=$(this).data('id');
            document.location='<?php echo site_url('master_cabang/cabang/') ?>'+id+'/update';
        });
        $('#tabel_cabang').on('click','.hapus_record',function(){
            var id=$(this).data('id');
            $('#modal_hapus').modal('show');
            $('.hapus').attr('data-url','<?php echo site_url('master_cabang/hapus/') ?>'+id+'/cabang');
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