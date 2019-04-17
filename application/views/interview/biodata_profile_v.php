<div class="card card-success">
    <div class="card-header">
     <h3 class="card-title">Biodata Profil Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/profile/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('profil_nik',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_nik" readonly>
                    <small class="text-danger"><?php echo form_error('profil_nik'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Tinggi Badan</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Tinggi" class="form-control" value="<?php echo get_value('profil_tinggi',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_tinggi">
                    <small class="text-danger"><?php echo form_error('profil_tinggi'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Berat Badan</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Berat" class="form-control" value="<?php echo get_value('profil_berat',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_berat">
                    <small class="text-danger"><?php echo form_error('profil_berat'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Ukuran Baju</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Ukuran Baju" class="form-control" value="<?php echo get_value('profil_ukuran_baju',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_ukuran_baju">
                    <small class="text-danger"><?php echo form_error('profil_ukuran_baju'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP/Telepon <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo get_value('profil_nomor_hp',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_nomor_hp">
                    <small class="text-danger"><?php echo form_error('profil_nomor_hp'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor NPWP <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter NPWP" class="form-control"  maxlength="15" minlength="15" value="<?php echo get_value('profil_npwp',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_npwp">
                    <small class="text-danger"><?php echo form_error('profil_npwp'); ?></small>
                </div>
            </div>
            
            <div class="form-group row">
                 <label for="staticEmail" class="col-sm-2 col-form-label">Nomor rekening Bca <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter BCA" class="form-control" maxlength="10" minlength="10" value="<?php echo get_value('profil_bca',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_bca">
                    <small class="text-danger"><?php echo form_error('profil_bca'); ?></small>
                </div>
                <!-- menampilkan foto user saat edit -->
                <label for="staticEmail" class="col-sm-2 col-form-label">Foto </label>
                <?php if(isset($row->profil_foto)): ?>
                    <div class="col-sm-1 justify-clear-content">
                        <img src="<?php echo base_url('foto/'.$row->profil_foto); ?>" alt="foto" width="50px" height="55px">
                    </div>
                <?php endif; ?>
                <!--end -->
                
                <div class="col-sm-3">
                    <input type="file" class="form-control" value="<?php echo get_value('profil_foto',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_foto">
                    <small><?php echo form_error('profil_foto'); ?></small>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Email" class="form-control" value="<?php echo get_value('profil_email',$this->uri->segment(4),'biodata_profil','profil_nik'); ?>" name="profil_email">
                    <small class="text-danger"><?php echo form_error('profil_email'); ?></small>
                </div>
                 
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/ktp/update/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
