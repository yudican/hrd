<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Susunan Anak Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/susunan_anak/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('anak_nik',$this->uri->segment(4),'  biodata_anak','anak_nik'); ?>" name="anak_nik" readonly>
                    <small class="text-danger"><?php echo form_error('anak_nik'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" placeholder="Enter Nama" class="form-control" value="<?php echo set_value('anak_nama'); ?>" name="anak_nama">
                    <small class="text-danger"><?php echo form_error('anak_nama'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo set_value('anak_alamat'); ?>" name="anak_alamat">
                    <small class="text-danger"><?php echo form_error('anak_alamat'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telp.</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo set_value('anak_hp'); ?>" name="anak_hp">
                    <small class="text-danger"><?php echo form_error('anak_hp'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Pekerjaan" class="form-control" value="<?php echo set_value('anak_pekerjaan'); ?>" name="anak_pekerjaan">
                    <small class="text-danger"><?php echo form_error('anak_pekerjaan'); ?></small>
                </div>
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pasangan Anak</label>
                <div class="col-sm-6">
                    <input type="text" placeholder="Enter Nama Pasangan" class="form-control" value="<?php echo set_value('pasangan_nama'); ?>" name="pasangan_nama">
                    <small class="text-danger"><?php echo form_error('pasangan_nama'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Pasangan Anak</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo set_value('pasangan_alamat'); ?>" name="pasangan_alamat">
                    <small class="text-danger"><?php echo form_error('pasangan_alamat'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telp. </label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo set_value('pasangan_hp'); ?>" name="pasangan_hp">
                    <small class="text-danger"><?php echo form_error('pasangan_hp'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan Pasangan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Pekerjaan" class="form-control" value="<?php echo set_value('pasangan_pekerjaan'); ?>" name="pasangan_pekerjaan">
                    <small class="text-danger"><?php echo form_error('pasangan_pekerjaan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('interview/wali/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <a href="<?php echo base_url('interview/pendidikan/input/'.$this->uri->segment(4)); ?>" class="btn btn-danger">selanjutnya</a>
                </div>
            </div>
        </form>

    </div>
    <!-- /.card-body -->
</div>
<div class="card card-default">
    <div class="card-header">
     <h3 class="card-title">Biodata Susunan Anak</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-light" width="100%">
            <thead>
                <tr>
                    <th width="10%">Nama</th>
                    <th width="15%">Alamat</th>
                    <th width="10%">Nomor Hp</th>
                    <th width="10%">Nama</th>
                    <th width="15%">Alamat</th>
                    <th width="10%">Nomor Hp</th>
                </tr>
            </thead>
            <body>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td width="10%"><?php echo $result->anak_nama; ?></td>
                        <td width="15%"><?php echo $result->anak_alamat ?></td>
                        <td width="10%"><?php echo $result->anak_hp ?></td>
                        <td width="10%"><?php echo $result->pasangan_nama; ?></td>
                        <td width="15%"><?php echo $result->pasangan_alamat ?></td>
                        <td width="10%"><?php echo $result->pasangan_hp ?></td>
                    </tr>
                <?php endforeach; ?>
            </body>
        </table>        
    </div>
    <!-- /.card-body -->
</div>