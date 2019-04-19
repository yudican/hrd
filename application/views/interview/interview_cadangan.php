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
        $('#tabel_interview_cadangan').on('click','.btn_kirim',function(){
            var id=$(this).data('id');
            $('#pengiriman_nik').val(id);
            $('#modal_title').text('Input Data Pengiriman');
            $('#pengiriman').modal('show');
            // $('.hapus').attr('data-url','<?php echo site_url('master_cabang/hapus/') ?>'+id+'/cabang');
        });
        $('#pengiriman_jam').timepicker();
   });
</script>

<!-- modal pengiriman -->
<div class="modal fade bd-example-modal-lg" id="pengiriman" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modals" role="document" style="width: 650px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_pengiriman" action="" method="POST">
                    <div class="form-group row">
                        <label for="pengiriman_nik" class="col-sm-3 col-form-label">Nomor NIK</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="pengiriman_nik" value="" name="pengiriman_nik" placeholder="nomor nik" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Cabang Pengiriman</label>
                        <div class="col-sm-9">
                            <select name="pengiriman_cabang" id="pengiriman_cabang" class="form-control">
                                <option value="">Pilih Cabang</option>
                                <?php foreach($cabang as $results): ?>
                                    <option value="<?php echo $results->id_cabang; ?>"><?php echo $results->nama_cabang; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Dikirim Ke Bagian</label>
                        <div class="col-sm-9">
                           <select name="pengiriman_bagian" id="pengiriman_bagian" class="form-control">
                                <option value="">Pilih Bagian</option>
                                <?php foreach($bagian as $result): ?>
                                    <option value="<?php echo $result->id_bagian; ?>"><?php echo $result->nama_bagian; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengiriman_jam" class="col-sm-3 col-form-label">Jam Kirim</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="pengiriman_jam" name="pengiriman_jam" placeholder="00:00">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="pengiriman_keterangan" class="col-sm-3 col-form-label">Keterangan Kirim</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="pengiriman_keterangan" name="pengiriman_keterangan" placeholder="Keterangan Kirim">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">batal</button>
                <button id="simpan_pengiriman" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>