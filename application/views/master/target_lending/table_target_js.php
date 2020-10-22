<script type="text/javascript">
   
   var delete_target;


   hide_all = function(){
        $('#table_target_lending').hide();
        $('#edit_target').hide();
    }
    hide_all();
    $('#table_target_lending').show();



        $(document).ready(function tampil_data(){
        $('#table_target_lending').DataTable( {
        processing: true,
      serverSide: true,
        ajax: "<?= base_url(); ?>Target_lending_controller/tampil_data",
        columns: [{
                data: 'kode_kantor',name:'kode_kantor'
            },
            {
                data: 'area_kerja',name:'area_kerja'
            },
            {
                data: 'area',name:'area'
            },
            {
                data: 'target',name:'target'
            },
            {
                data: 'bulan',name:'bulan'
            },
            {
                data: 'tahun',name:'tahun'
            },
            {
                data : 'delete',name:'delete'
            },
            {
                data : 'edit',name:'edit'
            }
            // {
            // '<button type="button" class="btn btn-info btn-sm edit" data-target="#update" data="'$key['id']'"><i class="fas fa-pencil-alt"></i></button>',
            // '<button type="button" class="btn btn-danger btn-sm delete" data="'$key['id']'"><i class="fas fa-trash-alt"></i></button>', 
            // }           
        ]
        });
    });

   
    $('#addButton').on('click', function(e){
        e.preventDefault();
        // NProgress.start();

        $.ajax({
            url : '<?php echo base_url('Target_lending_controller/create') ?>',
            dataType: 'html',
            success: function(response) {
                $('#main-content').html(response);
            }
        })
        // .done(function(response){
        //     $('#main-content').html(response);
        //     NProgress.done();
        // })
        // .fail(function(jqXHR){
        //     $('#main-content').load('<?php echo base_url('Rusak') ?>');
        //     NProgress.done();
        // });
    });

    // ('#edit').on('click', function(e){
    //     e.preventDefault();
    //     NProgress.start();

    //     $.ajax({
    //         url : '<?php echo base_url('Target_lending_controller/edit') ?>',
    //         dataType: 'html'
    //     })
    //     .done(function(response){
    //         $('#main-content').html(response);
    //         NProgress.done();
    //     })
    //     .fail(function(jqXHR){
    //         $('#main-content').load('<?php echo base_url('Rusak') ?>');
    //         NProgress.done();
    //     });
    // });

    
     function delete_target(id){
        var url = '<?php echo $this->config->item('api_url');?>api/master/target/delete/'+id;

        return $.ajax({
            url : url,
            type: 'DELETE',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }
    function view(id) {
    //    console.log(id)
       var txt;
        var r = confirm("Press a button!");
            if (r == true) {
            txt = "You pressed OK!";
            delete_target(id)
                    .done(function(res){
                        reload_table();
                        bootbox.alert('Data berhasil dihapus')
                    
            })
            } else {
            txt = "You pressed Cancel!";
                    }
    }

    function edit(id) {
    //    console.log(id)
    //    var txt;
    //     var r = confirm("Press a button!");
    //         if (r == true) {
    //         txt = "You pressed OK!";
    //         edit_target(id)
    //                 .done(function(res){
    //                     reload_table();
    //                     bootbox.alert('Data berhasil dihapus')
                    
    //         })
    //         } else {
    //         txt = "You pressed Cancel!";
    //                 }
        $.ajax({
            method: 'post',
            url: 'Target_lending_controller/edit',
            data: 'id='+id,
            success: function(res) {
                $('#load_edit').html(res);
                // console.log(res) v
            }
        })
    }
    

    // edit_target = function(opts,id){
    //     var data = opts;
    //     var url = '<?php echo $this->config->item('api_url');?>api/master/target/'+id;
    //     return $.ajax({
    //         url: url,
    //         data: data,
    //         type: 'GET',
    //         headers : {
    //             'Authorization': 'Bearer '+localStorage.getItem('token')
    //         }
    //     })
    // }



    // $('#table_target_lending').on('click', '.edit', function edit(e){
    //         e.preventDefault();

    //         var id = $(this).attr('data');

    //         tampil_data({}, id)
    //         .done(function(response){
    //             var data = response.data;
    //             // console.log(data);
                
    //             $('#edit_target input[type=hidden][name=id]').val(data.id);
    //             $('#edit_target input[name=area]').val(data.area);
    //             $('#edit_target input[name=area_kerja]').val(data.area_kerja);
    //             $('#edit_target input[name=kode_kantor]').val(data.kode_kantor);
    //             $('#edit_target input[name=target]').val(data.target);
    //             $('#edit_target input[name=bulan]').val(data.bulan);
    //             $('#edit_target input[name=tahun]').val(data.tahun);

    //         })

    //         .fail(function(jqXHR){
    //             bootbox.alert('Data tidak ditemukan');
    //         });
    //         hide_all();
    //         $('#edit_target').show();
    //     });

    //     $('#edit_target').on('submit',function(e){
    //         var id = $('input[name=id]',this).val();
    //         e.preventDefault();
    //         var formData = new FormData();
    //         var data ={
    //             nama_jenis: $('input[name=nama_jenis_1]',this).val(),
    //             keterangan: $('input[name=keterangan_1]',this).val(),
    //         }
    //         update_jenis_pic(data, id)
    //         .done(function(res){
    //             // console.log(res);
    //             var data = res.data;
    //             bootbox.alert('Data berhasil diubah',function(){

    //                 load_data();
    //                 $('#edit_target')[0].reset();
    //                 hide_all();
    //                 $('#table_target_lending').show();
    //             });
    //         })
    //         .fail(function(jqXHR){
    //             // var data = jqXHR.responseJSON;
    //             // var error = "";

    //             // if(typeof data == 'string') {
    //             //     error = '<p>'+ data +'</p>';
    //             // } else {
    //             //     $.each(data, function(index, item){
    //             //         error += '<p>'+ item +'</p>'+"\n";
    //             //     });
    //             // }
    //             bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
    //             // bootbox.alert(error);
    //         });
    //     });





    










    // $('#show_data').on('click','.delete',function(e){
    //     e.preventDefault();
    //     var id = $(this).attr('data');
        
        // bootbox.confirm({
        //     message :"Apakah data ini ingin dihapus?",
        //     bottons : {
        //         confirm :{
        //             label : 'Ya',
        //             className : 'btn-success'
        //         },
        //         cancel : {
        //             label: ' Tidak',
        //             bottons : 'btn-danger'
        //         }
        //     },
        //     callback: function(result){
        //         if(result){
        //             delete_target(id)
        //             .done(function(res){
        //                 load_data();
        //                 bootbox.alert('Data berhasil dihapus')
        //             })
        //             .fail(function(jqXHR){
        //                 bootbox.alert('Data gagal dihapus, Silahkan cek jaringan anda dan coba lagi !!')
        //             })
        //         }
        //     }   
        // });




    </script>