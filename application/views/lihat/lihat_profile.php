<style>
    .table td, .table th {
        padding: .4rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    
</style>
<div class="row" style="overflow-y:auto;">
    <div class="card card-primary col-md-4">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img"
                    src="<?php echo base_url('foto/'.$result_profile->profil_foto); ?>"
                    alt="User profile picture">
            </div>
            <h3 class="profile-username text-center"><?php echo $result_ktp->biodata_nama ?></h3>
            <p class="text-muted text-center">No HP/Telepon <?php echo $result_profile->profil_nomor_hp; ?></p>
            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                Tinggi/berat Badan <a class="float-right"><?php echo $result_profile->profil_tinggi.' cm/'.$result_profile->profil_berat.' kg'; ?></a>
                </li>
                <li class="list-group-item">
                Ukuran Baju <a class="float-right"><?php echo $result_profile->profil_ukuran_baju; ?></a>
                </li>
                <li class="list-group-item">
                Nomor Bca <a class="float-right"><?php echo $result_profile->profil_bca; ?></a>
                </li>
                <li class="list-group-item">
                Nomor NPWP <a class="float-right"><?php echo $result_profile->profil_npwp; ?></a>
                </li>
                <li class="list-group-item">
                Email <a class="float-right"><?php echo $result_profile->profil_email; ?></a>
                </li>
            </ul>
            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- /.col -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#ktp" data-toggle="tab">ktp</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane table-responsive" id="ktp">
                    <table class="table table-striped">
                        <tr>
                            <td width="30%">Nomor NIK</td>
                            <td><?php echo $result_ktp->biodata_nik ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Nama Lengkap</td>
                            <td><?php echo $result_ktp->biodata_nama ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Tempat/Tanggal Lahir</td>
                            <td><?php echo $result_ktp->biodata_tempat_lahir.'/'.$result_ktp->biodata_tanggal_lahir ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Kelamin</td>
                            <td><?php echo $result_ktp->biodata_kelamin ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Golongan Darah</td>
                            <td><?php echo $result_ktp->biodata_golongan_darah ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Alamat</td>
                            <td><?php echo $result_ktp->biodata_alamat ?></td>
                        </tr>
                        <tr>
                            <td width="30%" style="text-align: center;padding-right: 120px;">RT/RW</td>
                            <td><?php echo $result_ktp->biodata_rt.'/'.$result_ktp->biodata_rw ?></td>
                        </tr>
                        <tr>
                            <td width="30%" style="text-align: center;padding-right: 120px;">Provinsi</td>
                            <td><?php echo $result_ktp->biodata_propinsi ?></td>
                        </tr>
                        <tr>
                            <td width="28%" style="text-align: center;padding-right: 100px;">Kabupaten</td>
                            <td><?php echo $result_ktp->biodata_kabupaten ?></td>
                        </tr>
                        <tr>
                            <td width="28%" style="text-align: center;padding-right: 100px;">Kecamatan</td>
                            <td><?php echo $result_ktp->biodata_kecamatan ?></td>
                        </tr>
                        <tr>
                            <td width="30%" style="text-align: center;padding-right: 110px;">Kelurahan</td>
                            <td><?php echo $result_ktp->biodata_kelurahan ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Agama</td>
                            <td><?php echo $result_ktp->biodata_agama ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Status Perkawinan</td>
                            <td><?php echo $result_ktp->biodata_status ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Pekerjaan</td>
                            <td><?php echo $result_ktp->biodata_pekerjaan ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Kewarganegaraan</td>
                            <td><?php echo $result_ktp->biodata_kewarganegaraan ?></td>
                        </tr>
                        <tr>
                            <td width="30%">Masa Berlaku Ktp</td>
                            <td><?php echo $result_ktp->biodata_berlaku_ktp ?></td>
                        </tr>
                    </table>
                </div>
<!-- 
                <div class="tab-pane" id="settings">

                </div> -->
                <!-- /.tab-pane -->
            </div>
        <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#domisili" data-toggle="tab">Domisili</a></li>
                <li class="nav-item"><a class="nav-link" href="#referensi" data-toggle="tab">Referensi</a></li>
                <li class="nav-item"><a class="nav-link" href="#sao" data-toggle="tab">Susunan Anak</a></li>
                <li class="nav-item"><a class="nav-link" href="#kehamilan" data-toggle="tab">Kehamilan</a></li>
                <li class="nav-item"><a class="nav-link" href="#darurat" data-toggle="tab">Darurat</a></li>
                <li class="nav-item"><a class="nav-link" href="#ortu" data-toggle="tab">Orang Tua</a></li>
                <li class="nav-item"><a class="nav-link" href="#wali" data-toggle="tab">Wali</a></li>
                <li class="nav-item"><a class="nav-link" href="#keluarga" data-toggle="tab">Keluarga</a></li>
                <li class="nav-item"><a class="nav-link" href="#minat" data-toggle="tab">Minat</a></li>
                <li class="nav-item"><a class="nav-link" href="#pengalaman" data-toggle="tab">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link" href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="#interview" data-toggle="tab">Interview</a></li>
            </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane table-responsive" id="domisili">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="25%">Alamat Domisili</th>
                            <th width="7%">Telepon</th>
                            <th width="8%">Tinggal Dengan</th>
                            <th width="6%">Hubungan</th>
                            <th width="10%">Jenis Tinggal</th>
                            <th width="8%">Lama Tinggal</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;">
                            <td width="25%"><?php echo $result_domisili->domisili_alamat.' RT/RW '.$result_domisili->domisili_rt.'/'.$result_domisili->domisili_rw.' ,'.$result_domisili->domisili_kelurahan.' ,'.$result_domisili->domisili_kecamatan.' ,'.$result_domisili->domisili_kabupaten.' ,'.$result_domisili->domisili_propinsi; ?></td>
                            <td width="7%"><?php echo $result_domisili->domisili_telpon; ?></td>
                            <td width="8%"><?php echo $result_domisili->domisili_tinggal_dengan; ?></td>
                            <td width="6%"><?php echo $result_domisili->domisili_hubungan; ?></td>
                            <td width="10%"><?php echo $result_domisili->domisili_jenis; ?></td>
                            <td width="8%"><?php echo $result_domisili->domisili_lama_tinggal; ?></td>
                            <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- keluarga -->
            <div class="tab-pane" id="referensi">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Nama Referensi</th>
                            <th width="10%">Hubungan Referensi</th>
                            <th width="8%">Bagian Referensi</th>
                            <th width="8%">Cabang Referensi</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;">
                            <td width="8%"><?php echo $result_referensi->referensi_nama; ?></td>
                            <td width="6%"><?php echo $result_referensi->referensi_hubungan; ?></td>
                            <td width="10%"><?php echo $result_referensi->referensi_bagian; ?></td>
                            <td width="8%"><?php echo $result_referensi->referensi_cabang; ?></td>
                            <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- kehamilan -->
            <div class="tab-pane" id="kehamilan">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Status Kehamilan</th>
                            <th width="10%">Usia Kehamilan</th>
                            <th width="8%">Tanggal Kehamilan</th>
                            <th width="8%">Perkawinan Status</th>
                            <th width="8%">Perkawinan Sejak</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;">
                            <td width="8%"><?php echo $result_kehamilan->kehamilan_status; ?></td>
                            <td width="6%"><?php echo $result_kehamilan->kehamilan_usia; ?></td>
                            <td width="10%"><?php echo date('d-m-Y',strtotime($result_kehamilan->kehamilan_tanggal)); ?></td>
                            <td width="8%"><?php echo $result_kehamilan->perkawinan_status; ?></td>
                            <td width="8%"><?php echo $result_kehamilan->perkawinan_sejak; ?></td>
                            <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- susunan anak -->
            <div class="tab-pane" id="sao">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Nama</th>
                            <th width="10%">Alamat</th>
                            <th width="8%">Nomor Hp</th>
                            <th width="8%">Pekerjaan</th>
                            <th width="15%">Nama Pasangan</th>
                            <th width="10%">Alamat Pasangan</th>
                            <th width="8%">Nomor Hp Pasangan</th>
                            <th width="8%">Pekerjaan Pasangan</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_sao as $sao): ?>
                            <tr style="font-size:14px;">
                                <td width="8%"><?php echo $sao->anak_nama; ?></td>
                                <td width="6%"><?php echo $sao->anak_alamat; ?></td>
                                <td width="10%"><?php echo $sao->anak_hp; ?></td>
                                <td width="8%"><?php echo $sao->anak_pekerjaan; ?></td>
                                <td width="8%"><?php echo $sao->pasangan_nama; ?></td>
                                <td width="6%"><?php echo $sao->pasangan_alamat; ?></td>
                                <td width="10%"><?php echo $sao->pasangan_hp; ?></td>
                                <td width="8%"><?php echo $sao->pasangan_pekerjaan; ?></td>
                                <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- darurat teman -->
            <div class="tab-pane" id="darurat">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="15%">Nama</th>
                            <th width="10%">Alamat</th>
                            <th width="8%">Nomor Hp</th>
                            <th width="8%">Pekerjaan</th>
                            <th width="15%">Bidang/jabatan</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr style="font-size:14px;">
                                <td width="3%">1.</td>
                                <td width="8%"><?php echo $result_darurat->darurat_satu_nama; ?></td>
                                <td width="8%"><?php echo $result_darurat->darurat_satu_alamat; ?></td>
                                <td width="8%"><?php echo $result_darurat->darurat_satu_hp; ?></td>
                                <td width="6%"><?php echo $result_darurat->darurat_satu_pekerjaan; ?></td>
                                <td width="10%"><?php echo $result_darurat->darurat_satu_bidang_jabatan; ?></td>
                                <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                            </tr>
                            <tr style="font-size:14px;">
                                <td width="3%">2.</td>
                                <td width="8%"><?php echo $result_darurat->darurat_dua_nama; ?></td>
                                <td width="8%"><?php echo $result_darurat->darurat_dua_alamat; ?></td>
                                <td width="8%"><?php echo $result_darurat->darurat_dua_hp; ?></td>
                                <td width="6%"><?php echo $result_darurat->darurat_dua_pekerjaan; ?></td>
                                <td width="10%"><?php echo $result_darurat->darurat_dua_bidang_jabatan; ?></td>
                                <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <!-- data orang tua -->
            <div class="tab-pane" id="ortu">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="15%">Nama</th>
                            <th width="10%">Status</th>
                            <th width="8%">Umur</th>
                            <th width="8%">Alamat</th>
                            <th width="8%">No Hp</th>
                            <th width="8%">Pekerjaan</th>
                            <th width="15%">Bidang/jabatan</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr style="font-size:14px;">
                                <td width="3%">1.</td>
                                <td width="8%"><?php echo $result_ortu->ortu_ayah_nama; ?></td>
                                <td width="4%"><?php echo $result_ortu->ortu_ayah_status; ?></td>
                                <td width="4%"><?php echo $result_ortu->ortu_ayah_umur; ?></td>
                                <td width="15%"><?php echo $result_ortu->ortu_ayah_alamat; ?></td>
                                <td width="5%"><?php echo $result_ortu->ortu_ayah_hp; ?></td>
                                <td width="7%"><?php echo $result_ortu->ortu_ayah_pekerjaan; ?></td>
                                <td width="7%"><?php echo $result_ortu->ortu_ayah_bidang_jabatan; ?></td>
                                <td width="3%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                            </tr>
                            <tr style="font-size:14px;">
                                <td width="3%">2.</td>
                                <td width="8%"><?php echo $result_ortu->ortu_ibu_nama; ?></td>
                                <td width="4%"><?php echo $result_ortu->ortu_ibu_status; ?></td>
                                <td width="4%"><?php echo $result_ortu->ortu_ibu_umur; ?></td>
                                <td width="15%"><?php echo $result_ortu->ortu_ibu_alamat; ?></td>
                                <td width="5%"><?php echo $result_ortu->ortu_ibu_hp; ?></td>
                                <td width="7%"><?php echo $result_ortu->ortu_ibu_pekerjaan; ?></td>
                                <td width="7%"><?php echo $result_ortu->ortu_ibu_bidang_jabatan; ?></td>
                                <td width="3%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <!-- wali -->
            <div class="tab-pane" id="wali">
                <table class="table table-striped" width="100%" id="wali_table">
                    <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th width="15%">Nama</th>
                            <th width="8%">Umur</th>
                            <th width="8%">Alamat</th>
                            <th width="8%">No Hp</th>
                            <th width="8%">Pekerjaan</th>
                            <th width="15%">Bidang/jabatan</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr style="font-size:14px;">
                                <td width="3%">1.</td>
                                <td width="8%"><?php echo $result_wali->wali_ayah_nama; ?></td>
                                <td width="4%"><?php echo $result_wali->wali_ayah_umur; ?></td>
                                <td width="15%"><?php echo $result_wali->wali_ayah_alamat; ?></td>
                                <td width="5%"><?php echo $result_wali->wali_ayah_hp; ?></td>
                                <td width="7%"><?php echo $result_wali->wali_ayah_pekerjaan; ?></td>
                                <td width="7%"><?php echo $result_wali->wali_ayah_bidang_jabatan; ?></td>
                                <td width="3%" rowspan="2" class="text-center"><button class="btn btn-success btn-sm" id="btn_wali"
                                                        data-id="<?php echo $result_wali->wali_nik; ?>"
                                                        data-nama="<?php echo $result_wali->wali_ayah_nama; ?>"
                                                        data-umur="<?php echo $result_wali->wali_ayah_umur; ?>"
                                                        data-alamat="<?php echo $result_wali->wali_ayah_alamat; ?>"
                                                        data-hp="<?php echo $result_wali->wali_ayah_hp; ?>"
                                                        data-pekerjaan="<?php echo $result_wali->wali_ayah_pekerjaan; ?>"
                                                        data-bidang="<?php echo $result_wali->wali_ayah_bidang_jabatan; ?>"
                                                        data-namaibu="<?php echo $result_wali->wali_ibu_nama; ?>"
                                                        data-umuribu="<?php echo $result_wali->wali_ibu_umur; ?>"
                                                        data-alamatibu="<?php echo $result_wali->wali_ibu_alamat; ?>"
                                                        data-hpibu="<?php echo $result_wali->wali_ibu_hp; ?>"
                                                        data-pekerjaanibu="<?php echo $result_wali->wali_ibu_pekerjaan; ?>"
                                                        data-bidangibu="<?php echo $result_wali->wali_ibu_bidang_jabatan; ?>"><i class="fa fa-edit"></i></button></td>
                            </tr>
                            <tr style="font-size:14px;">
                                <td width="3%">2.</td>
                                <td width="8%"><?php echo $result_wali->wali_ibu_nama; ?></td>
                                <td width="4%"><?php echo $result_wali->wali_ibu_umur; ?></td>
                                <td width="15%"><?php echo $result_wali->wali_ibu_alamat; ?></td>
                                <td width="5%"><?php echo $result_wali->wali_ibu_hp; ?></td>
                                <td width="7%"><?php echo $result_wali->wali_ibu_pekerjaan; ?></td>
                                <td width="7%"><?php echo $result_wali->wali_ibu_bidang_jabatan; ?></td>
                                <!-- <td width="3%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td> -->
                            </tr>
                    </tbody>
                        <?php 
                            $data_wali = [
                                ['name' => 'wali_ayah_nama','placeholder' => 'Nama'],
                                ['name' => 'wali_ayah_umur','placeholder' => 'Umur'],
                                ['name' => 'wali_ayah_alamat','placeholder' => 'Alamat'],
                                ['name' => 'wali_ayah_hp','placeholder' => 'Nomor Hp/Telepon'],
                                ['name' => 'wali_ayah_pekerjaan','placeholder' => 'Perkerjaan'],
                                ['name' => 'wali_ayah_bidang_jabatan','placeholder' => 'Bidang/Jabatan'],
                                ['name' => 'wali_ibu_nama','placeholder' => 'Nama Ibu'],
                                ['name' => 'wali_ibu_umur','placeholder' => 'Umur Ibu'],
                                ['name' => 'wali_ibu_alamat','placeholder' => 'Alamat Ibu'],
                                ['name' => 'wali_ibu_hp','placeholder' => 'Nomor Hp/Telepon Ibu'],
                                ['name' => 'wali_ibu_pekerjaan','placeholder' => 'Perkerjaan Ibu'],
                                ['name' => 'wali_ibu_bidang_jabatan','placeholder' => 'Bidang/Jabatan Ibu'],
                            ];
                         ?>
                </table>
            </div>
            <!-- keluarga -->
            <div class="tab-pane" id="keluarga">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Nama</th>
                            <th width="10%">No KK</th>
                            <th width="10%">No KTP</th>
                            <th width="8%">Jenis Kelamin</th>
                            <th width="8%">Nomor Hp</th>
                            <th width="15%">Tempat/Tanggal Lahir</th>
                            <th width="10%">Pekerjaan</th>
                            <th width="8%">Jenis Keluarga</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_keluarga as $keluarga): ?>
                            <tr style="font-size:14px;">
                                <td width="8%"><?php echo $keluarga->keluarga_nama; ?></td>
                                <td width="6%"><?php echo $keluarga->keluarga_kk; ?></td>
                                <td width="10%"><?php echo $keluarga->keluarga_ktp; ?></td>
                                <td width="8%"><?php echo $keluarga->keluarga_jenis_kelamin; ?></td>
                                <td width="8%"><?php echo $keluarga->keluarga_hp; ?></td>
                                <td width="6%"><?php echo $keluarga->keluarga_tempat_lahir.'/'.date('d-m-Y',strtotime($keluarga->keluarga_tanggal_lahir)); ?></td>
                                <td width="10%"><?php echo $keluarga->keluarga_pekerjaan; ?></td>
                                <td width="10%"><?php echo $keluarga->keluarga_jenis; ?></td>
                                <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- minat kerja -->
            <div class="tab-pane" id="minat">
                <table class="table table-striped" width="100%" id="minat_table">
                    <thead>
                        <tr>
                            <th width="15%">Tujuan Kerja</th>
                            <th width="10%">Upah Kerja</th>
                            <th width="8%">Keahlian</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;">
                            <td width="8%"><?php echo $result_minat->minat_tujuan; ?></td>
                            <td width="6%"><?php echo $result_minat->minat_upah; ?></td>
                            <td width="10%"><?php echo $result_minat->minat_keahlian; ?></td>
                            <td width="5%"><button class="btn btn-success btn-sm" id="btn_minat" 
                                data-id="<?php echo $result_minat->minat_nik; ?>"
                                data-tujuan="<?php echo $result_minat->minat_tujuan; ?>"
                                data-keahlian="<?php echo $result_minat->minat_keahlian; ?>"
                                data-upah="<?php echo $result_minat->minat_upah; ?>">
                                <i class="fa fa-edit"></i></button></td>
                        </tr>
                        <?php 
                            $data = [
                                ['name' => 'minat_tujuan','placeholder' => 'Tujuan Minat'],
                                ['name' => 'minat_upah','placeholder' => 'Minat Upah'],
                                ['name' => 'minat_keahlian','placeholder' => 'Keahlian'],
                            ];
                         ?>
                    </tbody>
                </table>
               
            </div>

            <div class="tab-pane" id="pengalaman">
                <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> tambah</button>
                <table class="table table-striped" width="100%">

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
                        <?php foreach ($result_pengalaman as $result): ?>
                            <tr>
                                <td width="10%"><?php echo $result->pengalaman_perusahaan; ?></td>
                                <td width="15%"><?php echo $result->pengalaman_mulai_kerja.' s/d '.$result->pengalaman_akhir_kerja ?></td>
                                <td width="10%"><?php echo $result->pengalaman_alasan_berhenti ?></td>
                                <td width="10%"><?php echo $result->pengalaman_upah; ?></td>
                                <td>
                                    <a href="<?php echo base_url('interview/pengalaman/update/'.$this->uri->segment(4).'/'.$result->pengalaman_id); ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="<?php echo base_url('interview/pengalaman/hapus/'.$this->uri->segment(4).'/'.$result->pengalaman_id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </body>
                </table>   
            </div>
            <!-- //pendidikan -->
            <div class="tab-pane" id="pendidikan">
                <table id="pendidikan" class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="15%">Nama Universitas</th>
                            <th width="10%">Fakultas/Jurusan</th>
                            <th width="8%">Sarjana</th>
                            <th width="10%">Kota Universitas</th>
                            <th width="8%">Kuliah Mulai</th>
                            <th width="8%">Total IPK</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;">
                            <td width="8%"><?php echo $result_pendidikan->sarjana_nama; ?></td>
                            <td width="6%"><?php echo $result_pendidikan->sarjana_fakultas.'/'.$result_pendidikan->sarjana_jurusan; ?></td>
                            <td width="6%"><?php echo $result_pendidikan->sarjana_jenis; ?></td>
                            <td width="6%"><?php echo $result_pendidikan->sarjana_kota; ?></td>
                            <td width="10%"><?php echo $result_pendidikan->sarjana_mulai.' - '.$result_pendidikan->sarjana_akhir; ?></td>
                            <td width="6%"><?php echo $result_pendidikan->sarjana_ipk; ?></td>
                            <td width="5%">
                                <button class="btn btn-primary btn-sm" id="btn_detail" data-id="<?php echo $result_pendidikan->pendidikan_nik; ?>"><i class="fa fa-info"></i></button>
                                <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- interview -->
            <div class="tab-pane" id="interview">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="8%">Tanggal Interview</th>
                            <th width="6%">Status Interview</th>
                            <th width="4%">Nomor ADM</th>
                            <th width="8%">Cabang Interview</th>
                            <th width="8%">Tanggal input</th>
                            <th width="8%">Keterangan Interview</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;">
                            <td width="8%"><?php echo date('d-m-Y',strtotime($result_interview->interview_tanggal)); ?></td>
                            <td width="6%"><?php echo $result_interview->interview_status; ?></td>
                            <td width="4%"><?php echo $result_interview->nomor_adm; ?></td>
                            <td width="8%"><?php echo $result_interview->interview_cabang; ?></td>
                            <td width="6%"><?php echo date('d-m-Y',strtotime($result_interview->interview_tanggal_input)); ?></td>
                            <td width="15%"><?php echo $result_interview->interview_keterangan; ?></td>
                            <td width="5%"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.tab-pane -->
        </div>
    <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
<!-- start modal -->
<div class="modal fade bd-example-modal-lg" id="modal_pendidikan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal__content">
      <div class="modal-header modal__header">
        <h5 class="modal-title" id="exampleModalLabel">Riwayat Pendidikan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
            <table class="table table-striped">
                <tr>
                    <td width="30%">Riwayat Pendidikan SD</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Nama Sekolah</td>
                    <td><?php echo $result_pendidikan->sd_nama; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Kota</td>
                    <td><?php echo $result_pendidikan->sd_kota; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Mulai Sekolah</td>
                    <td><?php echo $result_pendidikan->sd_mulai.' sampai '.$result_pendidikan->sd_akhir; ?></td>
                </tr>
                <tr>
                    <td width="30%">Riwayat Pendidikan SMP</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Nama Sekolah</td>
                    <td><?php echo $result_pendidikan->smp_nama; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Kota</td>
                    <td><?php echo $result_pendidikan->smp_kota; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Mulai Sekolah</td>
                    <td><?php echo $result_pendidikan->smp_mulai.' sampai '.$result_pendidikan->smp_akhir; ?></td>
                </tr>
                 <tr>
                    <td width="30%">Riwayat Pendidikan SMA</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Nama Sekolah</td>
                    <td><?php echo $result_pendidikan->sma_nama; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Kota</td>
                    <td><?php echo $result_pendidikan->sma_kota; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Mulai Sekolah</td>
                    <td><?php echo $result_pendidikan->sma_mulai.' sampai '.$result_pendidikan->sma_akhir; ?></td>
                </tr>
                <tr>
                    <td width="30%">Riwayat Pendidikan Sarjana</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Nama Universitas</td>
                    <td><?php echo $result_pendidikan->sarjana_nama; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Fakultas/Jurusan</td>
                    <td><?php echo $result_pendidikan->sarjana_fakultas.'/'.$result_pendidikan->sarjana_jurusan; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Sarjana</td>
                    <td><?php echo $result_pendidikan->sarjana_jenis; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Kota</td>
                    <td><?php echo $result_pendidikan->sarjana_kota; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">IPK</td>
                    <td><?php echo $result_pendidikan->sarjana_ipk; ?></td>
                </tr>
                <tr>
                    <td width="30%" style="padding-left: 80px;">Mulai Kuliah</td>
                    <td><?php echo $result_pendidikan->sarjana_mulai.' sampai '.$result_pendidikan->sarjana_akhir; ?></td>
                </tr>
            </table>
      </div>
      <div class="modal-footer modal__footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
 <?php 
    
    echo modal($data,'modal_minat','modal_size');
    echo modal($data_wali,'modal_wali','');
 ?>
