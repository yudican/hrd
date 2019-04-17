<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Pengalaman</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/pengalaman/simpan/'.$this->uri->segment(4).'/'.$this->uri->segment(5))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo $this->uri->segment(4); ?>" name="pengalaman_nik" readonly>
                    <small class="text-danger"><?php echo form_error('pengalaman_nik'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama PT. </label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama PT." class="form-control" value="<?php echo get_value('pengalaman_perusahaan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_perusahaan">
                    <small class="text-danger"><?php echo form_error('pengalaman_perusahaan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Mulai Bekerja</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Mulai Bekerja" class="form-control" value="<?php echo get_value('pengalaman_mulai_kerja',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_mulai_kerja">
                    <small class="text-danger"><?php echo form_error('pengalaman_mulai_kerja'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Sampai</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Sampai" class="form-control" value="<?php echo get_value('pengalaman_akhir_kerja',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_akhir_kerja">
                    <small class="text-danger"><?php echo form_error('pengalaman_akhir_kerja'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo get_value('pengalaman_alamat_perusahaan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_alamat_perusahaan">
                    <small class="text-danger"><?php echo form_error('pengalaman_alamat_perusahaan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Kota" class="form-control" value="<?php echo get_value('pengalaman_kota_perusahaan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_kota_perusahaan">
                    <small class="text-danger"><?php echo form_error('pengalaman_kota_perusahaan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Propinsi</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Propinsi" class="form-control" value="<?php echo get_value('pengalaman_propinsi_perusahaan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_propinsi_perusahaan">
                    <small class="text-danger"><?php echo form_error('pengalaman_propinsi_perusahaan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">No. Telp.</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nomor Telp." class="form-control" value="<?php echo get_value('pengalaman_telpon_perusahaan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_telpon_perusahaan">
                    <small class="text-danger"><?php echo form_error('pengalaman_telpon_perusahaan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bergerak Pada Bidang</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Bidang Pekerjaan" class="form-control" value="<?php echo get_value('pengalaman_bidang_kerja',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_bidang_kerja">
                    <small class="text-danger"><?php echo form_error('pengalaman_bidang_kerja'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan Anda</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Jabatan Anda" class="form-control" value="<?php echo get_value('pengalaman_jabatan_kerja',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_jabatan_kerja">
                    <small class="text-danger"><?php echo form_error('pengalaman_jabatan_kerja'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Upah Terakhir</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Upah Terakhir" class="form-control" value="<?php echo get_value('pengalaman_upah',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_upah">
                    <small class="text-danger"><?php echo form_error('pengalaman_upah'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Atasan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Nama Atasan" class="form-control" value="<?php echo get_value('pengalaman_nama_atasan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_nama_atasan">
                    <small class="text-danger"><?php echo form_error('pengalaman_nama_atasan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan Atasan</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter Jabatan Atasan" class="form-control" value="<?php echo get_value('pengalaman_jabatan_atasan',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_jabatan_atasan">
                    <small class="text-danger"><?php echo form_error('pengalaman_jabatan_atasan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Uraian & Tanggung Jawab</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Uraian & Tanggung Jawab" class="form-control" value="<?php echo get_value('pengalaman_uraian_kerja',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_uraian_kerja">
                    <small class="text-danger"><?php echo form_error('pengalaman_uraian_kerja'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Alasan Berhenti</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Alasan Berhenti" class="form-control" value="<?php echo get_value('pengalaman_alasan_berhenti',$this->uri->segment(3) == 'input' ? $this->uri->segment(4) : $this->uri->segment(5),' biodata_pengalaman','pengalaman_id'); ?>" name="pengalaman_alasan_berhenti">
                    <small class="text-danger"><?php echo form_error('pengalaman_alasan_berhenti'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php if ($this->uri->segment(3) == 'input'): ?>
                        <a href="<?php echo base_url('interview/pendidikan/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                        <a href="<?php echo base_url('interview/minat/input/'.$this->uri->segment(4)); ?>" class="btn btn-danger">selanjutnya</a>
                    <?php endif; ?>
                </div>
            </div>
        </form>

    </div>
    <!-- /.card-body -->
</div>
<div class="card card-default">
    <div class="card-header">
     <h3 class="card-title">Biodata Pengalaman Kerja</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-light" width="100%">
            <thead>
                <tr>
                    <th width="10%">Pt</th>
                    <th width="15%">Mulai bekerja</th>
                    <th width="10%">Alasan Berhenti</th>
                    <th width="10%">Pengalaman Upah</th>
                    <th width="5%">Aksi</th>
                </tr>
            </thead>
            <body>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td width="10%"><?php echo $result->pengalaman_perusahaan; ?></td>
                        <td width="15%"><?php echo $result->pengalaman_mulai_kerja.' s/d '.$result->pengalaman_akhir_kerja ?></td>
                        <td width="10%"><?php echo $result->pengalaman_alasan_berhenti ?></td>
                        <td width="10%"><?php echo $result->pengalaman_upah; ?></td>
                        <td>
                            <a href="<?php echo base_url('interview/pengalaman/update/'.$this->uri->segment(4).'/'.$result->pengalaman_id); ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo base_url('interview/pengalaman/hapus/'.$this->uri->segment(4).'/'.$result->pengalaman_id); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </body>
        </table>        
    </div>
    <!-- /.card-body -->
</div>