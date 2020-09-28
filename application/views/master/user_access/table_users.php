<div id="lihat_user_access" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data User Access</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User Access</li>
                     </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <table id="table_users" class="table table-bordered table-hover table-sm">
                                <thead style="font-size: 14px">
                                    <tr>
                                        <th width="10px">No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>     
</div>

<div class="modal fade" id="modal-users">
    <div class="modal-dialog modal-md">
        <div class="modal-content" id="view-modal-users"></div>
    </div>
</div>

<script>
    $('#table_users').DataTable({ 
        "bSort" : false,
        "processing": true, 
        "serverSide": true,
         
        "ajax": {
            "url": "menu_controller/get_users",
            "type": "POST"
        },

        "columns": [
            { "data": "0" },
            { "data": "1" },
            { "data": "2" },
            { "data": "3" },
            { "data": "4" },
        ],
        "order": [],
        "createdRow": function (row, data) {

            $(row).find("td").attr('ondblclick', 'modalusers("'+data[5]+'")');
        }
    });

    function modalusers(e){
        var data = e;
        $.ajax({
            type: "post",
            url: "menu_controller/get_access",
            data: "idx="+data,
            // dataType: "json",
            beforeSend: function(){
                $('#modal-users').modal('show');
                $("#view-modal-users").html("<div class='text-center p-5'><i class='fas fa-spinner fa-spin fa-4x'></i></div>");
            },
            success: function (response) {
                $('#view-modal-users').html(response);
            }
        });
    };

    function set_access(){
        var data = $('#frm_access').serialize();
        $.ajax({
            type: "post",
            url: "menu_controller/set_access",
            data: data,
            dataType: "json",
            success: function (response) {
                var isValid = response.isValid;
                if(isValid == 1){
                    $('#view-modal-users').html('<div class="p-5 text-center"><i class="fa fa-check fa-4x text-success"></i><br><button class="btn btn-danger btn-sm btn-block" data-dismiss="modal">Tutup</button></div>');
                    // setInterval(function(){
                    //     $('#modal-users').modal('hide');
                    // }, 1000);
                }else{
                    alert('Kesalahan!!!');
                }
            }
        });
    }
</script>