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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="<?php echo base_url('asset/'); ?>dist/js/toastr.min.js"></script> 
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
       $('#btn_tambah').on('click',function(){
            $('#modal_title').text('Input Kategori');
            $('#Kategori').modal('show');
            $('#form_Kategori')[0].reset();
            $('.modal-footer').find('#simpan').replaceWith('<button id="simpan" type="button" class="btn btn-primary ">Simpan</button>');
        });
       $('.modal-footer').on('click','#simpan',function(){
            var id = $(this).data('id');
            var url;
            if (id) {
              url = '<?php echo base_url('master/kategori/update/') ?>'+id
            }else{
              url = '<?php echo base_url('master/kategori/input') ?>'
            }
            $.ajax({
              url:url,
              type:'post',
              data:$('#form_Kategori').serialize(),
              dataType:'json',
              success:function(res){
                if (res.success == true) {
                  table.DataTable().ajax.reload();
                  toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
                  $('#Kategori').modal('hide');
                  $('#form_Kategori')[0].reset();
                  $('#kategori_nama').removeClass('is-valid').removeClass('is-invalid');

                  $('.text-danger').remove();

                }else{
                  $.each(res.message,function(key,value) {
                    $('#' + key).removeClass('is-invalid')
                    $('#' + key).addClass(value.length > 0 ? 'is-invalid':'is-valid');
                    var show = $('#' + key);
                    show.closest('.form-group')
                    
                    // .addClass('is-valid')
                    .removeClass(value.length > 0 ? 'text-danger':'')
                    .find('.text-danger').remove()
                    show.after(value);
                  })
                }
              },
              error:function(){
                toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
              }
            })
        });
        $('#tabel_kategori').on('click','.edit_record',function(){

            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var jumlah = $(this).data('jumlah');
            $('#modal_title').text('Update Kategori');
            $('#Kategori').modal('show');

            $('#kategori_nama').val(nama);
            $('.modal-footer').find('#simpan').replaceWith('<button id="simpan" type="button" data-id="'+id+'" class="btn btn-primary ">Simpan</button>');

        });

        //hapus record
        $('#tabel_kategori').on('click','.hapus_record',function(){
            var id=$(this).data('id');
            $('#modal_hapus').modal('show');
            $('.modal-footer').find('#hapus').replaceWith('<button id="hapus" type="button" data-id="'+id+'" class="btn btn-primary ">Ya, hapus</button>');
        });
        
        $('.modal-footer').on('click','#hapus',function(){
            var id = $(this).data('id');
            var url;
            url = '<?php echo base_url('master/kategori/hapus/') ?>'+id
            $.ajax({
              url:url,
              type:'post',
              dataType:'json',
              success:function(res){
                  table.DataTable().ajax.reload();
                  toastr.success('Successfully Deleted Post!', 'Success Alert', {timeOut: 5000});
                  $('#modal_hapus').modal('hide');
                  $('.modal-footer').find('#hapus').replaceWith('<button id="hapus" type="button" class="btn btn-primary ">Ya, hapus</button>');
              },
              error:function(){
                toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
              }
            })
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
                <a href="#" class="btn btn-primary" id="hapus">Ya, hapus</a>
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
                <button id="simpan" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>