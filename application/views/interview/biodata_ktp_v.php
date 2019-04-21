<div class="card card-primary">
    <div class="card-header">
     <h3 class="card-title">Biodata Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open(base_url('interview/ktp/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter NIK"class="form-control" maxlength="16" minlength="16" value="<?php echo (isset($row->biodata_nik)) ? $row->biodata_nik : set_value('biodata_nik'); ?>" name="biodata_nik">
                    <small class="text-danger"><?php echo form_error('biodata_nik'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nama" class="form-control" value="<?php echo (isset($row->biodata_nama)) ? $row->biodata_nama : set_value('biodata_nama'); ?>" name="biodata_nama">
                    <small class="text-danger"><?php echo form_error('biodata_nama'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Tempat lahir" class="form-control" value="<?php echo (isset($row->biodata_tempat_lahir)) ? $row->biodata_tempat_lahir : set_value('biodata_tempat_lahir'); ?>" name="biodata_tempat_lahir">
                    <small class="text-danger"><?php echo form_error('biodata_tempat_lahir'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" value="<?php echo (isset($row->biodata_tanggal_lahir)) ? $row->biodata_tanggal_lahir : set_value('biodata_tanggal_lahir'); ?>" name="biodata_tanggal_lahir">
                    <small class="text-danger"><?php echo form_error('biodata_tanggal_lahir'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                <select name="biodata_kelamin" id="biodata_kelamin" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value=""></option>
                    <option value="PRIA" <?php echo get_select_value($this->uri->segment(4),'PRIA','biodata_ktp','biodata_nik','biodata_kelamin'); ?>>PRIA</option>
                    <option value="WANITA" <?php echo get_select_value($this->uri->segment(4),'WANITA','biodata_ktp','biodata_nik','biodata_kelamin'); ?>>WANITA</option>
                </select>
                    <small class="text-danger"><?php echo form_error('biodata_kelamin'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Golongan Darah</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Golongan Darah" class="form-control" value="<?php echo (isset($row->biodata_golongan_darah)) ? $row->biodata_golongan_darah : set_value('biodata_golongan_darah'); ?>" name="biodata_golongan_darah">
                    <small class="text-danger"><?php echo form_error('biodata_golongan_darah'); ?></small>
                </div>
            </div>
            
            <div class="form-group row">
                
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo (isset($row->biodata_alamat)) ? $row->biodata_alamat: set_value('biodata_alamat'); ?>" name="biodata_alamat">
                    <small class="text-danger"><?php echo form_error('biodata_alamat'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">RT/RW <sup><font color="red">*</font></sup></label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter RT" class="form-control" placeholder="RT" value="<?php echo (isset($row->biodata_rt)) ? $row->biodata_rt : set_value('biodata_rt'); ?>" name="biodata_rt">
                    <small class="text-danger"><?php echo form_error('biodata_rt'); ?></small>
                </div>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter RW" class="form-control" placeholder="RW" value="<?php echo (isset($row->biodata_rw)) ? $row->biodata_rw : set_value('biodata_rw'); ?>" name="biodata_rw">
                    <small class="text-danger"><?php echo form_error('biodata_rw'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                
                
                <!-- provinsi -->
                <label for="staticEmail" class="col-sm-2 col-form-label ">Provinsi <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                   <select name="biodata_propinsi" id="provinsi" class="form-control">
                         <option value="<?php echo (isset($row->biodata_propinsi)) ? $row->biodata_propinsi : ''; ?>" selected><?php echo (isset($row->biodata_propinsi)) ? $row->biodata_propinsi : 'Pilih Provinsi'; ?></option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_propinsi'); ?></small>
                </div>
                <!-- kabupaten -->
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota/Kabupaten <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_kabupaten" id="kabupaten" class="form-control">
                        <option value="<?php echo (isset($row->biodata_kabupaten)) ? $row->biodata_kabupaten : ''; ?>" selected><?php echo (isset($row->biodata_kabupaten)) ? $row->biodata_kabupaten : 'Pilih Kabupaten'; ?></option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_kabupaten'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                
            </div>
            <div class="form-group row">
                
                <!-- kecamatan -->
                <label for="staticEmail" class="col-sm-2 col-form-label">Kecamatan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_kecamatan" id="kecamatan" class="form-control">
                       <option value="">Pilih Kecamatan</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_kecamatan'); ?></small>
                </div>
                
                <!-- kelurahan -->
                <label for="staticEmail" class="col-sm-2 col-form-label">Kelurahan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_kelurahan" id="kelurahan" class="form-control">
                        <option value="">Pilih  Kelurahan</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_kelurahan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Agama <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_agama" id="biodata_agama" class="form-control">
                        <option value="">Pilih Agama</option>
                        <option value=""></option>
                        <option value="ISLAM" <?php echo get_select_value($this->uri->segment(4),'ISLAM','biodata_ktp','biodata_nik','biodata_agama'); ?>>ISLAM</option>
                        <option value="KRISTEN PROTESTAN" <?php echo get_select_value($this->uri->segment(4),'KRISTEN PROTESTAN','biodata_ktp','biodata_nik','biodata_agama'); ?>>KRISTEN PROTESTAN</option>
                        <option value="KHATOLIK" <?php echo get_select_value($this->uri->segment(4),'KHATOLIK','biodata_ktp','biodata_nik','biodata_agama'); ?>>KHATOLIK</option>
                        <option value="HINDU" <?php echo get_select_value($this->uri->segment(4),'HINDU','biodata_ktp','biodata_nik','biodata_agama'); ?>>HINDU</option>
                        <option value="BUDDHA" <?php echo get_select_value($this->uri->segment(4),'BUDDHA','biodata_ktp','biodata_nik','biodata_agama'); ?>>BUDDHA</option>
                        <option value="KONG HU CU" <?php echo get_select_value($this->uri->segment(4),'KONG HU CU','biodata_ktp','biodata_nik','biodata_agama'); ?>>KONG HU CU</option>
                        <option value="LAIN-LAIN" <?php echo get_select_value($this->uri->segment(4),'LAIN-LAIN','biodata_ktp','biodata_nik','biodata_agama'); ?>>LAIN-LAIN</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_agama'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Status Perkawinan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_status" id="biodata_status" class="form-control">
                        <option value="">Pilih Status Perkawinan</option>
                        <option value=""></option>
                        <option value="LAJANG" <?php echo get_select_value($this->uri->segment(4),'LAJANG','biodata_ktp','biodata_nik','biodata_status'); ?>>LAJANG</option>
                        <option value="KAWIN" <?php echo get_select_value($this->uri->segment(4),'KAWIN','biodata_ktp','biodata_nik','biodata_status'); ?>>KAWIN</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_status'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_pekerjaan" id="biodata_pekerjaan" class="form-control">
                        <option value="">Pilih Status Pekerjaan</option>
                        <option value=""></option>
                        <option value="PELAJAR/MAHASISWA" <?php echo get_select_value($this->uri->segment(4),'PELAJAR/MAHASISWA','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>PELAJAR/MAHASISWA</option>
                        <option value="BELUM/TIDAK BEKERJA" <?php echo get_select_value($this->uri->segment(4),'BELUM/TIDAK BEKERJA','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>BELUM/TIDAK BEKERJA</option>
                        <option value="KARYAWAN SWASTA" <?php echo get_select_value($this->uri->segment(4),'KARYAWAN SWASTA','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>KARYAWAN SWASTA</option>
                        <option value="WIRASASTA" <?php echo get_select_value($this->uri->segment(4),'WIRASASTA','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>WIRASWASTA</option>
                        <option value="PEDAGANG" <?php echo get_select_value($this->uri->segment(4),'PEDAGANG','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>PEDAGANG</option>
                        <option value="SOPIR" <?php echo get_select_value($this->uri->segment(4),'SOPIR','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>SOPIR</option>
                        <option value="BURUH" <?php echo get_select_value($this->uri->segment(4),'BURUH','biodata_ktp','biodata_nik','biodata_pekerjaan'); ?>>BURUH</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_pekerjaan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Kewarganegaraan <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="biodata_kewarganegaraan" id="biodata_kewarganegaraan" class="form-control">
                        <option value="">Pilih Status Kewarganegaraan</option>
                        <option value=""></option>
                        <option value="WNI" <?php echo get_select_value($this->uri->segment(4),'WNI','biodata_ktp','biodata_nik','biodata_kewarganegaraan'); ?>>WNI</option>
                        <option value="WNA" <?php echo get_select_value($this->uri->segment(4),'WNA','biodata_ktp','biodata_nik','biodata_kewarganegaraan'); ?>>WNA</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('biodata_kewarganegaraan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Masa berlaku KTP <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Berlaku KTP" class="form-control" value="<?php echo (isset($row->biodata_berlaku_ktp)) ? $row->biodata_berlaku_ktp : set_value('biodata_berlaku_ktp'); ?>" name="biodata_berlaku_ktp">
                    <small class="text-danger"><?php echo form_error('biodata_berlaku_ktp'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan & Lanjutkan </button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<script>
    //get province
        $(function(){
            $.get('<?php echo base_url('biodata_ktp/getProvinsi/') ?>',{},(resp)=>{
                // alert(resp);
                var data = resp.result;
                var html = '';
                    $('#provinsi').empty();
                    $('#provinsi').append(`<option value="<?php echo (isset($row->biodata_propinsi)) ? $row->biodata_propinsi : ''; ?>" selected><?php echo (isset($row->biodata_propinsi)) ? $row->biodata_propinsi : 'Pilih Provinsi'; ?></option>`);
                    $('#kabupaten').empty();
                    $('#kabupaten').append(`<option value="<?php echo (isset($row->biodata_kabupaten)) ? $row->biodata_kabupaten : ''; ?>" selected><?php echo (isset($row->biodata_kabupaten)) ? $row->biodata_kabupaten : 'Pilih Kabupaten'; ?></option>`);
                    $('#kecamatan').empty();
                    $('#kecamatan').append(`<option value="<?php echo (isset($row->biodata_kecamatan)) ? $row->biodata_kecamatan : ''; ?>" selected><?php echo (isset($row->biodata_kecamatan)) ? $row->biodata_kecamatan : 'Pilih Kecamatan'; ?></option>`);
                    $('#kelurahan').empty();
                    $('#kelurahan').append(`<option value="<?php echo (isset($row->biodata_kelurahan)) ? $row->biodata_kelurahan : ''; ?>" selected><?php echo (isset($row->biodata_kelurahan)) ? $row->biodata_kelurahan : 'Pilih Kelurahan'; ?></option>`);
                for(var i=0;i < data.length;i++){
                    html = '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    $('#provinsi').append(html);
                }
            });
        })
        // get kabupaten
        $('#provinsi').change(function(){
            var prov = $(this).val();
            $.get('<?php echo base_url('biodata_ktp/getKota/') ?>'+prov,{},(resp)=>{
                // alert(resp);
                var data = resp.result;
                var html = '';
                    $('#kabupaten').empty();
                    $('#kabupaten').append(`'<option value="">Pilih Kabupaten</option>'`);
                    $('#kecamatan').empty();
                    $('#kecamatan').append('<option value="">Pilih Kecamatan</option>');
                    $('#kelurahan').empty();
                    $('#kelurahan').append('<option value="">Pilih Kelurahan</option>');
                for(var i=0;i < data.length;i++){
                    html = '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    $('#kabupaten').append(html);
                }
            });
        });
        //kecamatan
        $('#kabupaten').change(function(){
            var kab = $(this).val();
            $.get('<?php echo base_url('biodata_ktp/getKecamatan/') ?>'+kab,{},(resp)=>{
                // alert(resp);
                var data = resp.result;
                var html = '';
                $('#kecamatan').empty();
                $('#kecamatan').append('<option value="">Pilih Kecamatan</option>');
                $('#kelurahan').empty();
                $('#kelurahan').append('<option value="">Pilih Kelurahan</option>');
                for(var i=0;i < data.length;i++){
                    html = '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    $('#kecamatan').append(html);
                }
            });
        });
        $('#kecamatan').change(function(){
            var kel = $(this).val();
            $.get('<?php echo base_url('biodata_ktp/getKelurahan/') ?>'+kel,{},(resp)=>{
                // alert(resp);
                var data = resp.result;
                var html = '';
                $('#kelurahan').empty();
                $('#kelurahan').append('<option value="">Pilih Kelurahan</option>');
                for(var i=0;i < data.length;i++){
                    html = '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    $('#kelurahan').append(html);
                }
            });
        });
    </script>