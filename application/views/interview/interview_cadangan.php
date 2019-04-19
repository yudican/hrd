<div class="card">
    <div class="card-header">
    <h3 class="card-title">Interview Cadangan</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
         <?php echo form_open(base_url('interview_cadangan/cek'),array('class' =>'form-inline float-right', 'id' => 'form_cari')) ?>
            <div class="form-group mb-2">
                <select class="form-control" name="status" id="status">
                    <option value="">Pilih Status interview</option>
                    <option value="Cadangan">CADANGAN</option>
                    <option value="Gagal Seleksi">GAGAL SELEKSI</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="filter" id="filter" placeholder="Filter ">
            </div>
            <!-- <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="filter_nama" id="filter_nama" placeholder="Filter Nama">
            </div> -->
            <button type="button" id="cari" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
        </form>
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_interview_cadangan">
        
            <thead class="thead-light">
                <tr>
                    <th>Nik</th>
                    <th>Nama Lengkap</th>
                    <th>No ADM</th>
                    <th>Status Interview</th>
                    <th>Tanggal Interview</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th>aksi</th>
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
       var table = $("#tabel_interview_cadangan").DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "searching": false,
            "lengthChange": false,
            
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('interview_cadangan/getInterview') ?>",
                "type": "POST",
                "data": function ( data ) {
                    data.filter = $('#filter').val();
                    data.status = $('#status').val();
                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                // "targets": [ 0 ], //first column / numbering column
                
                "orderable": false, //set not orderable
            },
            ],
       });
        $('#cari').click(function(){ //button filter event click
            table.ajax.reload();  //just reload table
            $('#filter').val('');
            $('#status').val('');
        });
       
        $('#tabel_interview_cadangan').on('click','.detail_record',function(){
            var id=$(this).data('id');
            document.location='<?php echo site_url('interview/detail/') ?>'+id;
        });
        $('#tabel_interview_cadangan').on('click','.hapus_record',function(){
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