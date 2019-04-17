<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Darurat Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open(base_url('interview/darurat/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('darurat_nik',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_nik" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama <sup><font color="red">*</font></sup></label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama" class="form-control" value="<?php echo get_value('darurat_satu_nama',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_satu_nama">
                    <small class="text-danger"><?php echo form_error('darurat_satu_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Pekerjaan" class="form-control" value="<?php echo get_value('darurat_satu_pekerjaan',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_satu_pekerjaan">
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Bidang/Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Didang/Jabatan" class="form-control" value="<?php echo get_value('darurat_satu_bidang_jabatan',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_satu_bidang_jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo get_value('darurat_satu_alamat',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_satu_alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telp. <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo get_value('darurat_satu_hp',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_satu_hp">
                    <small class="text-danger"><?php echo form_error('darurat_satu_hp'); ?></small>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama <sup><font color="red">*</font></sup></label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama" class="form-control" value="<?php echo get_value('darurat_dua_nama',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_dua_nama">
                    <small class="text-danger"><?php echo form_error('darurat_dua_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Pekerjaan" class="form-control" value="<?php echo get_value('darurat_dua_pekerjaan',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_dua_pekerjaan">
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Bidang/Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Bidang/Jabatan" class="form-control" value="<?php echo get_value('darurat_dua_bidang_jabatan',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_dua_bidang_jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo get_value('darurat_dua_alamat',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_dua_alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telp. <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo get_value('darurat_dua_hp',$this->uri->segment(4),'biodata_darurat','darurat_nik'); ?>" name="darurat_dua_hp">
                    <small class="text-danger"><?php echo form_error('darurat_dua_hp'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/referensi/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
