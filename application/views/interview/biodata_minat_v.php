<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Minat Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/minat/simpan/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('minat_nik',$this->uri->segment(4),'  biodata_minat','minat_nik'); ?>" name="minat_nik" readonly>
                    <small class="text-danger"><?php echo form_error('minat_nik'); ?></small>
                </div>
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tujuan Kerja</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Tujuan Kerja" class="form-control" value="<?php echo get_value('minat_tujuan',$this->uri->segment(4),'biodata_minat','minat_nik'); ?>" name="minat_tujuan">
                    <small class="text-danger"><?php echo form_error('minat_tujuan'); ?></small>
                </div>
                 
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Upah</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Upah" class="form-control" value="<?php echo get_value('minat_upah',$this->uri->segment(4),'biodata_minat','minat_nik'); ?>" name="minat_upah">
                    <small class="text-danger"><?php echo form_error('minat_upah'); ?></small>
                </div>
                 
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Keahlian</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Keahlian" class="form-control" value="<?php echo get_value('minat_keahlian',$this->uri->segment(4),'biodata_minat','minat_nik'); ?>" name="minat_keahlian">
                    <small class="text-danger"><?php echo form_error('minat_keahlian'); ?></small>
                </div>
                 
            </div>
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/pengalaman/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.card-body -->
</div>
