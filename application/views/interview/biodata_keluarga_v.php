<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Kehamilan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/keluarga/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('keluarga_nik',$this->uri->segment(4),'biodata_keluarga','keluarga_nik'); ?>" name="keluarga_nik" readonly>
                    <small class="text-danger"><?php echo form_error('keluarga_nik'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label text-right">Status Kehamilan</label>
                <div class="col-sm-4">
                    <select name="kehamilan_status" id="kehamilan_status" class="form-control">
                        <option value="">Pilih Status Kehamilan</option>
                        <option value=""></option>
                        <option value="YA" <?php echo get_select_value($this->uri->segment(4),'YA','biodata_keluarga','keluarga_nik','kehamilan_status'); ?>>YA</option>
                        <option value="TIDAK" <?php echo get_select_value($this->uri->segment(4),'TIDAK','biodata_keluarga','keluarga_nik','kehamilan_status'); ?>>TIDAK</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('kehamilan_status'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Usia Kehamilan</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('kehamilan_usia',$this->uri->segment(4),'biodata_keluarga','keluarga_nik'); ?>" name="kehamilan_usia">
                    <small class="text-danger"><?php echo form_error('kehamilan_usia'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label text-right">Status Perkawinan</label>
                <div class="col-sm-4">
                    <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                        <option value="">Pilih Status Perkawinan</option>
                        <option value=""></option>
                        <option value="KAWIN" <?php echo get_select_value($this->uri->segment(4),'KAWIN','biodata_keluarga','keluarga_nik','status_perkawinan'); ?>>KAWIN</option>
                        <option value="BELUM KAWIN" <?php echo get_select_value($this->uri->segment(4),'BELUM KAWIN','biodata_keluarga','keluarga_nik','status_perkawinan'); ?>>BELUM KAWIN</option>
                        <option value="DUDA" <?php echo get_select_value($this->uri->segment(4),'DUDA','biodata_keluarga','keluarga_nik','status_perkawinan'); ?>>DUDA</option>
                        <option value="JANDA" <?php echo get_select_value($this->uri->segment(4),'JANDA','biodata_keluarga','keluarga_nik','status_perkawinan'); ?>>JANDA</option>
                        <option value="CERAI" <?php echo get_select_value($this->uri->segment(4),'CERAI','biodata_keluarga','keluarga_nik','status_perkawinan'); ?>>CERAI</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('status_perkawinan'); ?></small>

                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Terhitung Sejak</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('perkawinan_sejak',$this->uri->segment(4),'biodata_keluarga','keluarga_nik'); ?>" name="perkawinan_sejak">
                    <small class="text-danger"><?php echo form_error('perkawinan_sejak'); ?></small>
                </div>
            </div>
           
            <div class="form-group row">

                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">

                    <a href="<?php echo base_url('interview/domisili/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>

            </div>
            <small>NOTE:Jika data kosong isikan dengan tanda "-" minus</small>
        </form>
    </div>
    <!-- /.card-body -->
</div>
