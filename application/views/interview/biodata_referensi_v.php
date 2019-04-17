<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Referensi Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/referensi/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('referensi_nik',$this->uri->segment(4),'biodata_referensi','referensi_nik'); ?>" name="referensi_nik" readonly>
                    <small class="text-danger"><?php echo form_error('referensi_nik'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Referensi</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nama" class="form-control" value="<?php echo get_value('referensi_nama',$this->uri->segment(4),'biodata_referensi','referensi_nik'); ?>" name="referensi_nama">
                    <small class="text-danger"><?php echo form_error('referensi_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label text-right">Hubungan Referensi</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Hubungan" class="form-control" value="<?php echo get_value('referensi_hubungan',$this->uri->segment(4),'biodata_referensi','referensi_nik'); ?>" name="referensi_hubungan">
                    <small class="text-danger"><?php echo form_error('referensi_hubungan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bagian Referensi</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Bagian" class="form-control" value="<?php echo get_value('referensi_bagian',$this->uri->segment(4),'biodata_referensi','referensi_nik'); ?>" name="referensi_bagian">
                    <small class="text-danger"><?php echo form_error('referensi_bagian'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label text-right">Cabang Referensi</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Cabang" class="form-control" value="<?php echo get_value('referensi_cabang',$this->uri->segment(4),'biodata_referensi','referensi_nik'); ?>" name="referensi_cabang">
                    <small class="text-danger"><?php echo form_error('referensi_cabang'); ?></small>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/kehamilan/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
