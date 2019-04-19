<div class="card card-info">
    <div class="card-header">
     <h3 class="card-title">Biodata Interview Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/input/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('interview_nik',$this->uri->segment(3),'  biodata_interview','interview_nik'); ?>" name="interview_nik" readonly>
                    <small class="text-danger"><?php echo form_error('interview_nik'); ?></small>
                </div>
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Adm</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nomor ADM" class="form-control" value="<?php echo (isset($row->nomor_adm)) ? $row->nomor_adm : nomor_adm('biodata_interview','nomor_adm',$this->uri->segment(3),'interview_nik'); ?>" name="nomor_adm" readonly>
                    <small class="text-danger"><?php echo form_error('nomor_adm'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Interview</label>
                <div class="col-sm-4">
                    <input type="date" placeholder="Enter Tujuan Kerja" class="form-control" value="<?php echo get_value('interview_tanggal',$this->uri->segment(3),'biodata_interview','interview_nik'); ?>" name="interview_tanggal">
                    <small class="text-danger"><?php echo form_error('interview_tanggal'); ?></small>
                </div>                 
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Status Interview</label>
                <div class="col-sm-4">
                    <select name="interview_status" id="interview_status" class="form-control">
                        <option value="">Pilih Status Interview</option>
                        <option value=""></option>
                        <option value="CADANGAN" <?php echo get_select_value($this->uri->segment(3),'CADANGAN','biodata_interview','interview_nik','interview_status'); ?>>CADANGAN</option>
                        <option value="GAGAL SELEKSI" <?php echo get_select_value($this->uri->segment(3),'GAGAL SELEKSI','biodata_interview','interview_nik','interview_status'); ?>>GAGAL SELEKSI</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('interview_status'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Cabang Interview</label>
                <div class="col-sm-4">
                   <select name="interview_cabang" id="interview_cabang" class="form-control">
                        <option value="">Pilih Cabang Interview</option>
                        <option value=""></option>
                        <?php foreach ($result_cabang as $res): ?>
                            <option value="<?php echo $res->id_cabang ?>" <?php echo get_select_value($this->uri->segment(3),'$res->nama_cabang','biodata_interview','interview_nik','interview_cabang'); ?>><?php echo $res->nama_cabang ?></option>
                        <?php endforeach; ?>
                        
                    </select>
                    <small class="text-danger"><?php echo form_error('interview_cabang'); ?></small>
                </div>
                 
            </div>
            
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Input Interview</label>
                <div class="col-sm-4">
                    <input type="date" placeholder="Enter Cabang Interview" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="interview_tanggal_input">
                    <small class="text-danger"><?php echo form_error('interview_tanggal_input'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Keterangan Interview</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Keterangan Interview" class="form-control" value="<?php echo get_value('interview_keterangan',$this->uri->segment(3),'biodata_interview','interview_nik'); ?>" name="interview_keterangan">
                    <small class="text-danger"><?php echo form_error('interview_keterangan'); ?></small>
                </div>
                 
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/minat/input/'.$this->uri->segment(3)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.card-body -->
</div>
