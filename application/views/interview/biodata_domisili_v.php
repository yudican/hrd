<div class="card card-danger">
    <div class="card-header">
     <h3 class="card-title">Biodata Tinggal Sekarang Input</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo form_open_multipart(base_url('interview/domisili/'.$this->uri->segment(3).'/'.$this->uri->segment(4))); ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo get_value('domisili_nik',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_nik" readonly>
                    <small class="text-danger"><?php echo form_error('domisili_nik'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Sekarang <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Alamat" class="form-control" value="<?php echo get_value('domisili_alamat',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_alamat">
                    <small class="text-danger"><?php echo form_error('domisili_alamat'); ?></small>
                </div>
            </div>
            <div class="form-group row">
               <label for="staticEmail" class="col-sm-2 col-form-label ">Provinsi</label>
                <div class="col-sm-4">
                   <select name="domisili_propinsi" id="provinsi" class="form-control">
                         <option value="">Pilih Provinsi</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('domisili_propinsi'); ?></small>
                </div>
            
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                <div class="col-sm-4">
                    <select name="domisili_kabupaten" id="kabupaten" class="form-control">
                       <option value="">Pilih Kabupaten</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('domisili_kabupaten'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-4">
                    <select name="domisili_kecamatan" id="kecamatan" class="form-control">
                       <option value="">Pilih Kecamatan</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('domisili_kecamatan'); ?></small>
                </div>
            
                <label for="staticEmail" class="col-sm-2 col-form-label">Kelurahan</label>
                <div class="col-sm-4">
                    <select name="domisili_kelurahan" id="kelurahan" class="form-control">
                        <option value="">Pilih  Kelurahan</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('domisili_kelurahan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">RT/RW</label>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter RT" class="form-control" value="<?php echo get_value('domisili_rt',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_rt">
                    <small class="text-danger"><?php echo form_error('domisili_rt'); ?></small>
                </div>
                <div class="col-sm-2">
                    <input type="text" placeholder="Enter RW" class="form-control" value="<?php echo get_value('domisili_rw',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_rw">
                    <small class="text-danger"><?php echo form_error('domisili_rw'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Tinggal Dengan</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Tinggal Dengan" class="form-control" value="<?php echo get_value('domisili_tinggal_dengan',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_tinggal_dengan">
                    <small class="text-danger"><?php echo form_error('domisili_tinggal_dengan'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Hubungan</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Hubungan" class="form-control" value="<?php echo get_value('domisili_hubungan',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_hubungan">
                    <small class="text-danger"><?php echo form_error('domisili_hubungan'); ?></small>
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Tinggal <sup><font color="red">*</font></sup></label>
                <div class="col-sm-4">
                    <select name="domisili_jenis" id="domisili_jenis" class="form-control">
                        <option value="">Pilih Jenis Tinggal</option>
                        <option value=""></option>
                        <option value="KOS" <?php echo get_select_value($this->uri->segment(4),'KOS','biodata_domisili','domisili_nik','domisili_jenis'); ?>>KOS</option>
                        <option value="KONTRAK" <?php echo get_select_value($this->uri->segment(4),'KONTRAK','biodata_domisili','domisili_nik','domisili_jenis'); ?>>KONTRAK</option>
                        <option value="MILIK PRIBADI" <?php echo get_select_value($this->uri->segment(4),'MILIK PRIBADI','biodata_domisili','domisili_nik','domisili_jenis'); ?>>MILIK PRIBADI</option>
                        <option value="MILIK ORANG TUA" <?php echo get_select_value($this->uri->segment(4),'MILIK ORANG TUA','biodata_domisili','domisili_nik','domisili_jenis'); ?>>MILIK ORANG TUA</option>
                        <option value="MILIK KELUARGA" <?php echo get_select_value($this->uri->segment(4),'MILIK KELUARGA','biodata_domisili','domisili_nik','domisili_jenis'); ?>>MILIK KELUARGA</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('domisili_jenis'); ?></small>
                </div>
            </div>
            
            <div class="form-group row">
                 <label for="staticEmail" class="col-sm-2 col-form-label">Lama Tinggal</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Lama Tinggal" class="form-control" value="<?php echo get_value('domisili_lama_tinggal',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_lama_tinggal">
                    <small class="text-danger"><?php echo form_error('domisili_lama_tinggal'); ?></small>
                </div>
                <!-- menampilkan foto user saat edit -->
                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Hp/telepon</label>
                <div class="col-sm-4">
                    <input type="text" placeholder="Enter Nomor HP/Telp." class="form-control" value="<?php echo get_value('domisili_telpon',$this->uri->segment(4),'biodata_domisili','domisili_nik'); ?>" name="domisili_telpon">
                    <small class="text-danger"><?php echo form_error('domisili_telpon'); ?></small>
                </div>
            </div>
            
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <a href="<?php echo base_url('interview/profile/input/'.$this->uri->segment(4)); ?>" class="btn btn-warning">kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan dan lanjutkan</button>
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
                    $('#provinsi').append(`<option value="<?php echo (isset($row->domisili_propinsi)) ? $row->domisili_propinsi : ''; ?>" selected><?php echo (isset($row->domisili_propinsi)) ? $row->domisili_propinsi : 'Pilih Provinsi'; ?></option>`);
                    $('#kabupaten').empty();
                    $('#kabupaten').append(`<option value="<?php echo (isset($row->domisili_kabupaten)) ? $row->domisili_kabupaten : ''; ?>" selected><?php echo (isset($row->domisili_kabupaten)) ? $row->domisili_kabupaten : 'Pilih Kabupaten'; ?></option>`);
                    $('#kecamatan').empty();
                    $('#kecamatan').append(`<option value="<?php echo (isset($row->domisili_kecamatan)) ? $row->domisili_kecamatan : ''; ?>" selected><?php echo (isset($row->domisili_kecamatan)) ? $row->domisili_kecamatan : 'Pilih Kecamatan'; ?></option>`);
                    $('#kelurahan').empty();
                    $('#kelurahan').append(`<option value="<?php echo (isset($row->domisili_kelurahan)) ? $row->domisili_kelurahan : ''; ?>" selected><?php echo (isset($row->domisili_kelurahan)) ? $row->domisili_kelurahan : 'Pilih Kelurahan'; ?></option>`);
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