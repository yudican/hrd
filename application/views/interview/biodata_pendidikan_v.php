<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Pendidikan Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/pendidikan/simpan/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('pendidikan_nik',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="pendidikan_nik" readonly>
                    <small class="text-danger"><?php echo form_error('pendidikan_nik'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama SD</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama SD" class="form-control" value="<?php echo get_value('sd_nama',$this->uri->segment(4),'    biodata_pendidikan','pendidikan_nik'); ?>" name="sd_nama">
                    <small class="text-danger"><?php echo form_error('sd_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Kota" class="form-control" value="<?php echo get_value('sd_kota',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sd_kota">
                    <small class="text-danger"><?php echo form_error('sd_kota'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Mulai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('sd_mulai',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sd_mulai">
                    <small class="text-danger"><?php echo form_error('sd_mulai'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Sampai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('sd_akhir',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sd_akhir">
                    <small class="text-danger"><?php echo form_error('sd_akhir'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama SMP/SLTP</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama SLTP" class="form-control" value="<?php echo get_value('smp_nama',$this->uri->segment(4),'    biodata_pendidikan','pendidikan_nik'); ?>" name="smp_nama">
                    <small class="text-danger"><?php echo form_error('smp_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Kota" class="form-control" value="<?php echo get_value('smp_kota',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="smp_kota">
                    <small class="text-danger"><?php echo form_error('smp_kota'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Mulai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('smp_mulai',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="smp_mulai">
                    <small class="text-danger"><?php echo form_error('smp_mulai'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Sampai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('smp_akhir',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="smp_akhir">
                    <small class="text-danger"><?php echo form_error('smp_akhir'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama SMA/SLTA/SMK</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama SLTA" class="form-control" value="<?php echo get_value('sma_nama',$this->uri->segment(4),'    biodata_pendidikan','pendidikan_nik'); ?>" name="sma_nama">
                    <small class="text-danger"><?php echo form_error('sma_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Kota" class="form-control" value="<?php echo get_value('sma_kota',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sma_kota">
                    <small class="text-danger"><?php echo form_error('sma_kota'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Mulai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('sma_mulai',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sma_mulai">
                    <small class="text-danger"><?php echo form_error('sma_mulai'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Sampai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('sma_akhir',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sma_akhir">
                    <small class="text-danger"><?php echo form_error('sma_akhir'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang</label>
                <div class="col-sm-2">
                    <select name="sarjana_jenis" id="sarjana_jenis" class="form-control">
                        <option value="">Pilih Jenjang</option>
                        <option value=""></option>
                        <option value="D1" <?php echo get_select_value($this->uri->segment(4),'D1','biodata_pendidikan','pendidikan_nik','sarjana_jenis'); ?>>D1</option>
                        <option value="D2" <?php echo get_select_value($this->uri->segment(4),'D2','biodata_pendidikan','pendidikan_nik','sarjana_jenis'); ?>>D2</option>
                        <option value="D3" <?php echo get_select_value($this->uri->segment(4),'D3','biodata_pendidikan','pendidikan_nik','sarjana_jenis'); ?>>D3</option>
                        <option value="D4" <?php echo get_select_value($this->uri->segment(4),'D4','biodata_pendidikan','pendidikan_nik','sarjana_jenis'); ?>>D4</option>
                        <option value="S1" <?php echo get_select_value($this->uri->segment(4),'S1','biodata_pendidikan','pendidikan_nik','sarjana_jenis'); ?>>S1</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('sarjana_jenis'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Universitas</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Universitas" class="form-control" value="<?php echo get_value('sarjana_nama',$this->uri->segment(4),'    biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_nama">
                    <small class="text-danger"><?php echo form_error('sarjana_nama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Fakultas</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter Fakultas" class="form-control" value="<?php echo get_value('sarjana_fakultas',$this->uri->segment(4),'    biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_fakultas">
                    <small class="text-danger"><?php echo form_error('sarjana_fakultas'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Jurusan" class="form-control" value="<?php echo get_value('sarjana_jurusan',$this->uri->segment(4),'    biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_jurusan">
                    <small class="text-danger"><?php echo form_error('sarjana_jurusan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Kota" class="form-control" value="<?php echo get_value('sarjana_kota',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_kota">
                    <small class="text-danger"><?php echo form_error('sarjana_kota'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Mulai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('sarjana_mulai',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_mulai">
                    <small class="text-danger"><?php echo form_error('sarjana_mulai'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label">Sampai</label>
                <div class="col-sm-1">
                    <input type="text" placeholder="Tahun" class="form-control" value="<?php echo get_value('sarjana_akhir',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_akhir">
                    <small class="text-danger"><?php echo form_error('sarjana_akhir'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">IPK</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter IPK" class="form-control" value="<?php echo get_value('sarjana_ipk',$this->uri->segment(4),'  biodata_pendidikan','pendidikan_nik'); ?>" name="sarjana_ipk">
                    <small class="text-danger"><?php echo form_error('sarjana_ipk'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/susunan_anak/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
