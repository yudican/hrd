<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Tingkatan Upah
        <button id="btn_tambah" class="input_record btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> input</button>
    </h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table class="table table-light" width="100%" style="font-size: 12px;" id="tabel_tingkatan">
            <thead class="thead-light">
                <tr>
                    <th>nomor</th>
                    <th>Tingkatan Nama</th>
                    <th>Tingkatan Jumlah</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        
    </div>
    <!-- /.card-body -->
</div>


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
                <a href="#" class="btn btn-primary" id="hapus_tingkatan">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="tingkatan" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modals" role="document" style="width: 650px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_tingkatan" action="" method="POST">
                  <input type="hidden" name="tingkatan_id" value="">
                	<div class="form-group row">
        					    <label for="inputEmail3" class="col-sm-3 col-form-label">Tingkatan Nama</label>
        					    <div class="col-sm-9">
        					      <input type="text" class="form-control" id="tingkatan_nama" value="" name="tingkatan_nama" placeholder="Tingkatan Nama">
        					    </div>
        					</div>
        					<div class="form-group row">
        					    <label for="inputEmail3" class="col-sm-3 col-form-label">Tingkatan Jumlah</label>
        					    <div class="col-sm-9">
        					      <input type="number" class="form-control" id="tingkatan_jumlah" name="tingkatan_jumlah" onkeypress="return hanyaAngka(event)" value="" placeholder="Tingkatan Jumlah">
        					    </div>
        					</div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">batal</button>
                <button id="simpan_tingkatan" type="button" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
</div>