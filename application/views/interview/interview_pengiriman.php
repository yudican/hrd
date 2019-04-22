<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Pengiriman</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <?php echo form_open('#',array('class' =>'form-inline float-right', 'id' => 'form_cari')) ?>
            <div class="form-group mb-2 mx-auto">
                <select name="cabang" id="cabang" class="form-control">
                    <option value="">Pilih Cabang</option>
                    <?php foreach($cabang as $results): ?>
                        <option value="<?php echo $results->nama_cabang; ?>"><?php echo $results->nama_cabang; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Filter ">
            </div>
            <!-- <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="filter_nama" id="filter_nama" placeholder="Filter Nama">
            </div> -->
            <button type="button" id="cari" class="btn btn-primary mb-2"><i class="fa fa-print"></i></button>
        </form>
        <table class="table table-striped" width="100%" style="font-size: 12px;" id="tabel_interview_pengiriman">
        
            <thead class="thead-light">
                <tr>
                	<!-- <th width="2%">No</th> -->
                    <th width="5%">Nik</th>
                    <th width="10%">Nama Lengkap</th>
                    <th width="7%">Cabang Kirim</th>
                    <th width="7%">Kirim Ke Bagian</th>
                    <th width="5%">Tanggal Kirim</th>
                    <th width="5%">Status Kirim</th>
                    <th width="1%">Cetak</th>
                    <th width="8%">aksi</th>
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
       var table = $("#tabel_interview_pengiriman").DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            
            
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('pengiriman/get') ?>",
                "type": "POST",
                "data": function ( data ) {
                    data.cabang = $('#cabang').val();
                    data.tanggal = $('#tanggal').val();
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
       $('#tabel_interview_pengiriman').on('click','.btn_cetak',function(){
            var id=$(this).data('id');
            window.open('<?php echo base_url('pengiriman/cetak/') ?>'+id,'_blank');
        });
        $('#cabang').change(function(){ //button filter event click
            table.ajax.reload();  //just reload table
        });
        $('#tanggal').change(function(){ //button filter event click
            table.ajax.reload();  //just reload table
        });
        $('#pengiriman_jam').timepicker();
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
<!-- modal pengiriman update -->
<div class="modal fade bd-example-modal-lg" id="pengiriman_update" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modals" role="document" style="width: 650px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_pengiriman_update" action="" method="POST">
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
                <button id="update_pengiriman" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>