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
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
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

                <div class="tab-pane" id="settings">

                </div>
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
            <!-- susunan anak -->
            <div class="tab-pane" id="sao">

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
            <!-- darurat -->
            <div class="tab-pane" id="sao">

            </div>
            
            <!-- /.tab-pane -->
        </div>
    <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>