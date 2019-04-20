<div class="card">
    <div class="card-header">
    <h3 class="card-title">Upah Input</h3>

    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <a href="<?php echo base_url('master/upah'); ?>" class="btn btn-tool"><i class="fa fa-times"></i>
        </a>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open(base_url('master/upah/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Wilayah Upah <sup><font color="red">*</font></sup></label>
               <div class="col-sm-4">
                <select name="wilayah_upah" id="wilayah_upah" class="form-control">
                    <option value="">Pilih Jenis Upah</option>
                    <option value=""></option>
                    <option value="DIREKSI" <?php echo get_select_value($this->uri->segment(4),'DIREKSI','tabel_upah','id_upah','wilayah_upah'); ?>>DIREKSI</option>
                    <option value="BEKASI" <?php echo get_select_value($this->uri->segment(4),'BEKASI','tabel_upah','id_upah','wilayah_upah'); ?>>BEKASI</option>
                    <option value="DKI JAKARTA" <?php echo get_select_value($this->uri->segment(4),'DKI JAKARTA','tabel_upah','id_upah','wilayah_upah'); ?>>DKI jakarta</option>
                    <option value="CILEDUK" <?php echo get_select_value($this->uri->segment(4),'CILEDUK','tabel_upah','id_upah','wilayah_upah'); ?>>CILEDUK</option>
                    <option value="BINTARO" <?php echo get_select_value($this->uri->segment(4),'BINTARO','tabel_upah','id_upah','wilayah_upah'); ?>>BINTARO</option>
                    <option value="MG II" <?php echo get_select_value($this->uri->segment(4),'MG II','tabel_upah','id_upah','wilayah_upah'); ?>>MG II</option>
                    <option value="MG I" <?php echo get_select_value($this->uri->segment(4),'MG I','tabel_upah','id_upah','wilayah_upah'); ?>>MG I</option>
                    
                </select>
                <small class="text-danger"><?php echo form_error('wilayah_upah'); ?></small>
               </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah Upah <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jumlah_upah)) ? $row->jumlah_upah : set_value('jumlah_upah') ; ?>" name="jumlah_upah" placeholder="Enter Jumlah Upah">
                    <small class="text-danger"><?php echo form_error('jumlah_upah'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">JHT Perusahaan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jht_prsh_tk)) ? $row->jht_prsh_tk : set_value('jht_prsh_tk'); ?>" name="jht_prsh_tk" placeholder="Enter Potongan JHT Perusahaan">
                    <small class="text-danger"><?php echo form_error('jht_prsh_tk'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">JP Perusahaan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jp_prsh_tk)) ? $row->jp_prsh_tk : set_value('jp_prsh_tk'); ?>" name="jp_prsh_tk" placeholder="Enter Potongan JP Perusahaan">
                    <small class="text-danger"><?php echo form_error('jp_prsh_tk'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">JKK <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jkk_tk)) ?  $row->jkk_tk : set_value('jkk_tk'); ?>" name="jkk_tk" placeholder="Enter Potongan JKK">
                    <small class="text-danger"><?php echo form_error('jkk_tk'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">JKM <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jkm_tk)) ? $row->jkm_tk : set_value('jkm_tk'); ?>" name="jkm_tk" placeholder="Enter Potongan JKM">
                    <small class="text-danger"><?php echo form_error('jkm_tk'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">JHT <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jht_tk)) ? $row->jht_tk: set_value('jht_tk'); ?>" name="jht_tk" placeholder="Enter Potongan JHT">
                    <small class="text-danger"><?php echo form_error('jht_tk'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">JP <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->jp_tk)) ? $row->jp_tk : set_value('jp_tk'); ?>" name="jp_tk" placeholder="Enter Potongan JP">
                    <small class="text-danger"><?php echo form_error('jp_tk'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kesehatan Perusahaan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->kes_prsh)) ? $row->kes_prsh : set_value('kes_prsh'); ?>" name="kes_prsh" placeholder="Enter Potongan Kesehatan Perusahaan">
                    <small class="text-danger"><?php echo form_error('kes_prsh'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Kesehatan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->kes)) ?  $row->kes : set_value('kes'); ?>" name="kes" placeholder="Enter Potongan Kesehatan">
                    <small class="text-danger"><?php echo form_error('kes'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bulan Upah <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" value="<?php echo (isset($row->bulan_upah)) ? $row->bulan_upah : set_value('bulan_upah'); ?>" name="bulan_upah">
                    <small class="text-danger"><?php echo form_error('bulan_upah'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                    <button type="button" onclick="history.back(1);" class="btn btn-warning"><i class="fa fa-times-circle"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>