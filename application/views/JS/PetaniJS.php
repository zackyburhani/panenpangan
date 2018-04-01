<script type="text/javascript">
var dtusername;
$(function () {
        var columns = [
            {"data": "nik", "title": "Kode Dosen", searchable: true, "sClass": "alignmid", orderable: true}
            , {"data": "nm_dosen", "title": "Nama Dosen", "sClass": "alignmid", searchable: true, orderable: true}
            , {"data": "nik", "title": "Action", "sClass": "actdiv alignmid", orderable: true, "render": function (data, type, row) {
              result="";

               result='<a href="#" onclick="showmedbox(\'Edit Dosen\',\'<?php blink('Dosen/Edit')?>/'+data+'\')" id="btnedit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit </a> <a href="#" class="btn btn-danger btn-sm" onclick="showbigbox(\'Delete Dosen\',\'<?php blink('Dosen/Delete')?>/'+data+'\')" id="btndelete"><i class="fa fa-trash-o"></i> Delete</a>';
                return result;
              }}
        ];

        dtusername = generateTable('usernametable', columns, "<?php blink('Dosen/listUsernameJson')?>", false);
    });
</script>
