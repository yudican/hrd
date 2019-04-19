//menampilkan alamat base url

var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
$(document).on('click','#btn_tambah',function(){
    $('#modal_title').text('Input Tingkatan Upah');
    $('#tingkatan').modal('show');
    $('#form_tingkatan')[0].reset();
    $('.modal-footer').find('#simpan_tingkatan').replaceWith('<button id="simpan_tingkatan" type="button" class="btn btn-primary ">Simpan</button>');
});
$('.modal-footer').on('click','#simpan_tingkatan',function(){
    var id = $(this).data('id');
    var url;
    if (id) {
      url = base_url+'master/tingkatan/update/'+id
    }else{
      url = base_url+'master/tingkatan/input'
    }
    $.ajax({
      url:url,
      type:'post',
      data:$('#form_tingkatan').serialize(),
      dataType:'json',
      success:function(res){
        if (res.success == true) {
          $("#tabel_tingkatan").DataTable().ajax.reload();
          toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
          $('#tingkatan').modal('hide');
          $('#form_tingkatan')[0].reset();
          $('#tingkatan_nama').removeClass('is-valid').removeClass('is-invalid');
          $('#tingkatan_jumlah').removeClass('is-valid').removeClass('is-invalid');

          $('.text-danger').remove();

        }else{
          $.each(res.message,function(key,value) {
            $('#' + key).removeClass('is-invalid')
            $('#' + key).addClass(value.length > 0 ? 'is-invalid':'is-valid');
            var show = $('#' + key);
            show.closest('.form-group')
            
            // .addClass('is-valid')
            .removeClass(value.length > 0 ? 'text-danger':'')
            .find('.text-danger').remove()
            show.after(value);
          })
        }
      }
    })
});
$('#tabel_tingkatan').on('click','.edit_record',function(){

    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var jumlah = $(this).data('jumlah');
    $('#modal_title').text('Update Tingkatan Upah');
    $('#tingkatan').modal('show');

    $('#tingkatan_nama').val(nama);
    $('#tingkatan_jumlah').val(jumlah);
    $('.modal-footer').find('#simpan_tingkatan').replaceWith('<button id="simpan_tingkatan" type="button" data-id="'+id+'" class="btn btn-primary ">Simpan</button>');

});

//hapus record
$('#tabel_tingkatan').on('click','.hapus_record',function(){
    var id=$(this).data('id');
    $('#modal_hapus').modal('show');
    $('.modal-footer').find('#hapus_tingkatan').replaceWith('<button id="hapus_tingkatan" type="button" data-id="'+id+'" class="btn btn-primary ">Ya, hapus</button>');
});

$('.modal-footer').on('click','#hapus_tingkatan',function(){
    var id = $(this).data('id');
    var url;
    url = base_url+'master/tingkatan/hapus/'+id
    $.ajax({
      url:url,
      type:'post',
      dataType:'json',
      success:function(res){
          $("#tabel_tingkatan").DataTable().ajax.reload();
          toastr.success('Successfully Deleted Post!', 'Success Alert', {timeOut: 5000});
          $('#modal_hapus').modal('hide');
          $('.modal-footer').find('#hapus_tingkatan').replaceWith('<button id="hapus_tingkatan" type="button" class="btn btn-primary ">Ya, hapus</button>');
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});





//master kategori
$('#btn_tambah').on('click',function(){
    $('#modal_title').text('Input Kategori');
    $('#Kategori').modal('show');
    $('#form_Kategori')[0].reset();
    $('.modal-footer').find('#simpan_kategori').replaceWith('<button id="simpan_kategori" type="button" class="btn btn-primary ">Simpan</button>');
});
$('.modal-footer').on('click','#simpan_kategori',function(){
    var id = $(this).data('id');
    var url;
    if (id) {
      url = base_url+'master/kategori/update/'+id
    }else{
      url = base_url+'master/kategori/input'
    }
    $.ajax({
      url:url,
      type:'post',
      data:$('#form_Kategori').serialize(),
      dataType:'json',
      success:function(res){
        if (res.success == true) {
          $("#tabel_kategori").DataTable().ajax.reload();
          toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
          $('#Kategori').modal('hide');
          $('#form_Kategori')[0].reset();
          $('#kategori_nama').removeClass('is-valid').removeClass('is-invalid');

          $('.text-danger').remove();

        }else{
          $.each(res.message,function(key,value) {
            $('#' + key).removeClass('is-invalid')
            $('#' + key).addClass(value.length > 0 ? 'is-invalid':'is-valid');
            var show = $('#' + key);
            show.closest('.form-group')
            
            // .addClass('is-valid')
            .removeClass(value.length > 0 ? 'text-danger':'')
            .find('.text-danger').remove()
            show.after(value);
          })
        }
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});
$('#tabel_kategori').on('click','.edit_record',function(){

    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var jumlah = $(this).data('jumlah');
    $('#modal_title').text('Update Kategori');
    $('#Kategori').modal('show');

    $('#kategori_nama').val(nama);
    $('.modal-footer').find('#simpan_kategori').replaceWith('<button id="simpan_kategori" type="button" data-id="'+id+'" class="btn btn-primary ">Simpan</button>');

});

//hapus record
$('#tabel_kategori').on('click','.hapus_record',function(){
    var id=$(this).data('id');
    $('#modal_hapus').modal('show');
    $('.modal-footer').find('#hapus_kategori').replaceWith('<button id="hapus_kategori" type="button" data-id="'+id+'" class="btn btn-primary ">Ya, hapus</button>');
});

$('.modal-footer').on('click','#hapus_kategori',function(){
    var id = $(this).data('id');
    var url;
    url = base_url+'master/kategori/hapus/'+id
    $.ajax({
      url:url,
      type:'post',
      dataType:'json',
      success:function(res){
          $("#tabel_kategori").DataTable().ajax.reload();
          toastr.success('Successfully Deleted Post!', 'Success Alert', {timeOut: 5000});
          $('#modal_hapus').modal('hide');
          $('.modal-footer').find('#hapus_kategori').replaceWith('<button id="hapus_kategori" type="button" class="btn btn-primary ">Ya, hapus</button>');
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});


//master jabatan
$('#btn_tambah_jabatan').on('click',function(){
    $('#modal_title').text('Input jabatan');
    $('#jabatan').modal('show');
    $('#form_jabatan')[0].reset();
    $('.modal-footer').find('#simpan_jabatan').replaceWith('<button id="simpan_jabatan" type="button" class="btn btn-primary ">Simpan</button>');
});
$('.modal-footer').on('click','#simpan_jabatan',function(){
    var id = $(this).data('id');
    var url;
    if (id) {
      url = base_url+'master/jabatan/update/'+id
    }else{
      url = base_url+'master/jabatan/input'
    }
    $.ajax({
      url:url,
      type:'post',
      data:$('#form_jabatan').serialize(),
      dataType:'json',
      success:function(res){
        if (res.success == true) {
          $("#tabel_jabatan").DataTable().ajax.reload();
          toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
          $('#jabatan').modal('hide');
          $('#form_jabatan')[0].reset();
          $('#jabatan_nama').removeClass('is-valid').removeClass('is-invalid');

          $('.text-danger').remove();

        }else{
          $.each(res.message,function(key,value) {
            $('#' + key).removeClass('is-invalid')
            $('#' + key).addClass(value.length > 0 ? 'is-invalid':'is-valid');
            var show = $('#' + key);
            show.closest('.form-group')
            
            // .addClass('is-valid')
            .removeClass(value.length > 0 ? 'text-danger':'')
            .find('.text-danger').remove()
            show.after(value);
          })
        }
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});
$('#tabel_jabatan').on('click','.edit_record',function(){

    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var kode = $(this).data('kode');
    $('#modal_title').text('Update jabatan');
    $('#jabatan').modal('show');

    $('#jabatan_nama').val(nama);
    $('#jabatan_kode').val(kode);
    $('.modal-footer').find('#simpan_jabatan').replaceWith('<button id="simpan_jabatan" type="button" data-id="'+id+'" class="btn btn-primary ">Simpan</button>');

});

//hapus record
$('#tabel_jabatan').on('click','.hapus_record',function(){
    var id=$(this).data('id');
    $('#modal_hapus').modal('show');
    $('.modal-footer').find('#hapus_jabatan').replaceWith('<button id="hapus_jabatan" type="button" data-id="'+id+'" class="btn btn-primary ">Ya, hapus</button>');
});

$('.modal-footer').on('click','#hapus_jabatan',function(){
    var id = $(this).data('id');
    var url;
    url = base_url+'master/jabatan/hapus/'+id
    $.ajax({
      url:url,
      type:'post',
      dataType:'json',
      success:function(res){
          $("#tabel_jabatan").DataTable().ajax.reload();
          toastr.success('Successfully Deleted Post!', 'Success Alert', {timeOut: 5000});
          $('#modal_hapus').modal('hide');
          $('.modal-footer').find('#hapus_jabatan').replaceWith('<button id="hapus_jabatan" type="button" class="btn btn-primary ">Ya, hapus</button>');
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});



//master bagian
$('#btn_tambah_bagian').on('click',function(){
    $('#modal_title').text('Input Bagian');
    $('#bagian').modal('show');
    $('#form_bagian')[0].reset();
    $('.modal-footer').find('#simpan_bagian').replaceWith('<button id="simpan_bagian" type="button" class="btn btn-primary ">Simpan</button>');
});
$('.modal-footer').on('click','#simpan_bagian',function(){
    var id = $(this).data('id');
    var url;
    if (id) {
      url = base_url+'master/bagian/update/'+id
    }else{
      url = base_url+'master/bagian/input'
    }
    $.ajax({
      url:url,
      type:'post',
      data:$('#form_bagian').serialize(),
      dataType:'json',
      success:function(res){
        if (res.success == true) {
          $("#tabel_bagian").DataTable().ajax.reload();
          toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
          $('#bagian').modal('hide');
          $('#form_bagian')[0].reset();
          $('#nama_bagian').removeClass('is-valid').removeClass('is-invalid');
          $('#kategori_bagian').removeClass('is-valid').removeClass('is-invalid');
          $('.text-danger').remove();

        }else{
          $.each(res.message,function(key,value) {
            $('#' + key).removeClass('is-invalid')
            $('#' + key).addClass(value.length > 0 ? 'is-invalid':'is-valid');
            var show = $('#' + key);
            show.closest('.form-group')
            
            // .addClass('is-valid')
            .removeClass(value.length > 0 ? 'text-danger':'')
            .find('.text-danger').remove()
            show.after(value);
          })
        }
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});
$('#tabel_bagian').on('click','.edit_record',function(){

    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var kategori = $(this).data('kategori');
    $('#modal_title').text('Update bagian');
    $('#bagian').modal('show');

    $('#nama_bagian').val(nama);
    $('#kategori_bagian').val(kategori);
    $('.modal-footer').find('#simpan_bagian').replaceWith('<button id="simpan_bagian" type="button" data-id="'+id+'" class="btn btn-primary ">Simpan</button>');

});

//hapus record
$('#tabel_bagian').on('click','.hapus_record',function(){
    var id=$(this).data('id');
    $('#modal_hapus').modal('show');
    $('.modal-footer').find('#hapus_bagian').replaceWith('<button id="hapus_bagian" type="button" data-id="'+id+'" class="btn btn-primary ">Ya, hapus</button>');
});

$('.modal-footer').on('click','#hapus_bagian',function(){
    var id = $(this).data('id');
    var url;
    url = base_url+'master/bagian/hapus/'+id
    $.ajax({
      url:url,
      type:'post',
      dataType:'json',
      success:function(res){
          $("#tabel_bagian").DataTable().ajax.reload();
          toastr.success('Successfully Deleted Post!', 'Success Alert', {timeOut: 5000});
          $('#modal_hapus').modal('hide');
          $('.modal-footer').find('#hapus_bagian').replaceWith('<button id="hapus_bagian" type="button" class="btn btn-primary ">Ya, hapus</button>');
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});








//menampilkan detail pendidikan
$(document).on('click','#btn_detail',function () {
    $('#modal_pendidikan').modal('show');
    var id = $(this).data('id');
})
//menampilkan modal minat kerja
$(document).on('click','#btn_minat',function () {
    $('#modal_minat').modal('show');
    var id = $(this).data('id');
    
    $('#modal_title').text('Update Minat Kerja');
    $('#minat_tujuan').val($(this).data('tujuan'));
    $('#minat_upah').val($(this).data('upah'));
    $('#minat_keahlian').val($(this).data('keahlian'));
    $('.modal-footer').find('#simpan').replaceWith('<button id="simpan" type="button" data-id="'+id+'" class="btn btn-primary ">Simpan</button>');
});
$('.modal-footer').on('click','#simpan',function(e){
	e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
      url:base_url+'interview/minat/simpan/'+id,
      type:'post',
      data:$('#form_modal_minat').serialize(),
      dataType:'json',
      success:function(res){
        if (res.success == true) {
        	toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
        	$('#modal_minat').modal('hide');
        }else{
        	alert('error');
        }
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});




//form pengiriman
$('.modal-footer').on('click','#simpan_pengiriman',function(){
    $.ajax({
      url:base_url+'interview/pengiriman/input',
      type:'post',
      data:$('#form_pengiriman').serialize(),
      dataType:'json',
      success:function(res){
        if (res.success == true) {
          $("#tabel_interview_cadangan").DataTable().ajax.reload();
          toastr.success('Successfully Inserted Post!', 'Success Alert', {timeOut: 5000});
          $('#pengiriman').modal('hide');
          $('#form_pengiriman')[0].reset();
          $('#pengiriman_nik').removeClass('is-valid').removeClass('is-invalid');
          $('#pengiriman_cabang').removeClass('is-valid').removeClass('is-invalid');
          $('#pengiriman_bagian').removeClass('is-valid').removeClass('is-invalid');
          $('#pengiriman_keterangan').removeClass('is-valid').removeClass('is-invalid');
          $('#pengiriman_jam').removeClass('is-valid').removeClass('is-invalid');
          $('.text-danger').remove();

        }else{
          $.each(res.message,function(key,value) {
            $('#' + key).removeClass('is-invalid')
            $('#' + key).addClass(value.length > 0 ? 'is-invalid':'is-valid');
            var show = $('#' + key);
            show.closest('.form-group')
            // .addClass('is-valid')
            .removeClass(value.length > 0 ? 'text-danger':'')
            .find('.text-danger').remove()
            show.after(value);
          })
        }
      },
      error:function(){
        toastr.error('Errors Was Post Data!', 'Errors Alert', {timeOut: 5000});
      }
    })
});