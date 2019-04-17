<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cabang Input</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <a href="<?php echo base_url('master_cabang/data_cabang'); ?>" class="btn btn-tool"><i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open(base_url('master_cabang/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kategori Cabang <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="kategori_cabang" id="kategori_cabang" class="form-control">
                        <option value="">Pilih Kategori Cabang</option>
                        <option value=""></option>
                        <option value="CABANG" <?php echo get_select_value($this->uri->segment(3),'CABANG','tabel_cabang','id_cabang','kategori_cabang'); ?>>CABANG</option>
                        <option value="GUDANG" <?php echo get_select_value($this->uri->segment(3),'GUDANG','tabel_cabang','id_cabang','kategori_cabang'); ?>>GUDANG</option>
                        <option value="PUSAT" <?php echo get_select_value($this->uri->segment(3),'PUSAT','tabel_cabang','id_cabang','kategori_cabang'); ?>>PUSAT</option>
                        
                    </select>
                    <small class="text-danger"><?php echo form_error('kategori_cabang'); ?></small>
               </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama cabang <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->nama_cabang)) ? $row->nama_cabang : set_value('nama_cabang') ; ?>" name="nama_cabang" placeholder="Enter Nama Cabang">
                    <small class="text-danger"><?php echo form_error('nama_cabang'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kepala Toko</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->kepala_toko)) ? $row->kepala_toko : ''; ?>" name="kepala_toko" placeholder="Enter Kepala Toko">
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Personalia Satu</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->personalia_satu)) ? $row->personalia_satu : ''; ?>" name="personalia_satu" placeholder="Enter Personalia Satu">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Personalia Dua</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->personalia_dua)) ? $row->personalia_dua : ''; ?>" name="personalia_dua" placeholder="Enter Personalia Dua">
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Personalia Tiga</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->personalia_tiga)) ? $row->personalia_tiga : ''; ?>" name="personalia_tiga" placeholder="Enter Personalia Tiga">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo (isset($row->alamat)) ? $row->alamat : ''; ?>" name="alamat" placeholder="Enter Alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->nomor_hp_cabang)) ? $row->nomor_hp_cabang : ''; ?>" name="nomor_hp_cabang" placeholder="Enter Nomor Telepon">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Upah <sup><font color="red">*</font></sup></label>
               <div class="col-sm-4">
                <select name="jenis_upah" id="jenis_upah" class="form-control">
                    <option value="">Pilih Jenis Upah</option>
                    <option value=""></option>
                    <?php foreach ($upah as $jenis_upah): ?>
                        <option value="<?php echo $jenis_upah['id_upah']; ?>" <?php echo get_select_value($jenis_upah['id_upah'],(isset($row->jenis_upah)) ? $row->jenis_upah:'','tabel_upah','id_upah','id_upah'); ?>><?php echo $jenis_upah['wilayah_upah']; ?></option>
                    <?php endforeach; ?>
                    
                </select>
                <small class="text-danger"><?php echo form_error('jenis_upah'); ?></small>
               </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">NPWP Cabang <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($row->npwp_cabang)) ? $row->npwp_cabang : set_value('npwp_cabang') ; ?>" name="npwp_cabang" placeholder="Enter Nomor NPWP cabang">
                    <small class="text-danger"><?php echo form_error('npwp_cabang'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>