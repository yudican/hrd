//menampilkan alamat base url
var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';

$(document).ready(function () {
	// datatable tingkatan
       var table = $("#tabel_tingkatan").dataTable({
           "bProcessing": false,
           "bServerSide": true,
           "sAjaxSource": base_url+"master_tingkatan/getTingkatan",
           "fnRowCallback": function( nRow, aoData, iDisplayIndex ) {
               var index = iDisplayIndex +1;
               $('td:eq(0)',nRow).html(index);
               return nRow;
            },
           "columns": [
               { "data": "nomor",orderable:false,searchable:false },
               { "data": "tingkatan_nama", "name": "tingkatan_upah.tingkatan_nama" },
               { "data": "tingkatan_jumlah", "name": "tingkatan_upah.tingkatan_jumlah" },
               { "data": "actions",orderable:false,searchable:false}
               
               
           ],
           "bJQueryUI": true,
           "sPaginationType": "full_numbers",
           "iDisplayStart ": 20,
           "fnServerData": function (sSource, aoData, fnCallback)
           {
               $.ajax
                       ({
                           "dataType": "json",
                           "type": "POST",
                           "url": sSource,
                           "data": aoData,
                           "success": fnCallback
                       });
           },
           "order": [
               [0, "asc"]
           ]
       });
     
   });