<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Orang Tua Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/ortu/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('ortu_nik',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_nik" readonly>
                    <small class="text-danger"><?php echo form_error('ortu_nik'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ayah<sup><font color="red">*</font></sup></label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama Ayah" class="form-control" value="<?php echo get_value('ortu_ayah_nama',$this->uri->segment(4),'    biodata_orang_tua','ortu_nik'); ?>" name="ortu_ayah_nama">
                    <small class="text-danger"><?php echo form_error('ortu_ayah_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-2">
                    <select name="ortu_ayah_status" id="ortu_ayah_status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value=""></option>
                        <option value="MASIH ADA" <?php echo get_select_value($this->uri->segment(4),'MASIH ADA','  biodata_orang_tua','ortu_nik','ortu_ayah_status'); ?>>MASIH ADA</option>
                        <option value="MENINGGAL" <?php echo get_select_value($this->uri->segment(4),'MENINGGAL','  biodata_orang_tua','ortu_nik','ortu_ayah_status'); ?>>MENINGGAL</option>
                        <option value="CERAI" <?php echo get_select_value($this->uri->segment(4),'CERAI','  biodata_orang_tua','ortu_nik','ortu_ayah_status'); ?>>CERAI</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('ortu_ayah_status'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Umur" class="form-control" value="<?php echo get_value('ortu_ayah_umur',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ayah_umur">
                    <small class="text-danger"><?php echo form_error('ortu_ayah_umur'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo get_value('ortu_ayah_alamat',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ayah_alamat">
                    <small class="text-danger"><?php echo form_error('ortu_ayah_alamat'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-2">
                    <input type="text"  placeholder="Enter Pekerjaan"class="form-control" value="<?php echo get_value('ortu_ayah_pekerjaan',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ayah_pekerjaan">
                    <small class="text-danger"><?php echo form_error('ortu_ayah_pekerjaan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Bidang/Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Bidang/Jabatan" class="form-control" value="<?php echo get_value('ortu_ayah_bidang_jabatan',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ayah_bidang_jabatan">
                    <small class="text-danger"><?php echo form_error('ortu_ayah_bidang_jabatan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telp.</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo get_value('ortu_ayah_hp',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ayah_hp">
                    <small class="text-danger"><?php echo form_error('ortu_ayah_hp'); ?></small>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ibu<sup><font color="red">*</font></sup></label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama Ibu" class="form-control" value="<?php echo get_value('ortu_ibu_nama',$this->uri->segment(4),'    biodata_orang_tua','ortu_nik'); ?>" name="ortu_ibu_nama">
                    <small class="text-danger"><?php echo form_error('ortu_ibu_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-2">
                    <select name="ortu_ibu_status" id="ortu_ibu_status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value=""></option>
                        <option value="MASIH ADA" <?php echo get_select_value($this->uri->segment(4),'MASIH ADA','  biodata_orang_tua','ortu_nik','ortu_ibu_status'); ?>>MASIH ADA</option>
                        <option value="MENINGGAL" <?php echo get_select_value($this->uri->segment(4),'MENINGGAL','  biodata_orang_tua','ortu_nik','ortu_ibu_status'); ?>>MENINGGAL</option>
                        <option value="CERAI" <?php echo get_select_value($this->uri->segment(4),'CERAI','  biodata_orang_tua','ortu_nik','ortu_ibu_status'); ?>>CERAI</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('ortu_ibu_status'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Umur" class="form-control" value="<?php echo get_value('ortu_ibu_umur',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ibu_umur">
                    <small class="text-danger"><?php echo form_error('ortu_ibu_umur'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo get_value('ortu_ibu_alamat',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ibu_alamat">
                    <small class="text-danger"><?php echo form_error('ortu_ibu_alamat'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Pekerjaan" class="form-control" value="<?php echo get_value('ortu_ibu_pekerjaan',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ibu_pekerjaan">
                    <small class="text-danger"><?php echo form_error('ortu_ibu_pekerjaan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Bidang/Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Bidang/Jabatan" class="form-control" value="<?php echo get_value('ortu_ibu_bidang_jabatan',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ibu_bidang_jabatan">
                    <small class="text-danger"><?php echo form_error('ortu_ibu_bidang_jabatan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telp.</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo get_value('ortu_ibu_hp',$this->uri->segment(4),'  biodata_orang_tua','ortu_nik'); ?>" name="ortu_ibu_hp">
                    <small class="text-danger"><?php echo form_error('ortu_ibu_hp'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/darurat/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
