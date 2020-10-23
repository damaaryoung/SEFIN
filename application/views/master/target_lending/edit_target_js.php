<script>
   
get_area_kerja();
    function get_area_kerja() {
            var url = '<?php echo $this->config->item('api_url');?>api/master/area_kerja';
            $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                },
            dataType: "json",
            success: function (response) {
                // console.log(response);
                if(response.status==='success') {
                    var html = [];
                    for(var i=0; i<response.count; i++) {
                        var opt = [
                            "<option>" + response.data[i].nama_area + "</option>"
                        ].join('\n');
                        html.push(opt)
                    }
                    // $('#area_kerjas').append(html);
                }
            }
        });

//     $('#form_edit_target').on('submit',function(e){
//     e.preventDefault();
//     // NProgress.start();

//     $.ajax({
//         url : '<?php echo base_url('Target_lending_controller/update') ?>',
//         dataType: 'html'
//     })
//     .done(function(response){
//         $('#main-content').html(response);
//         // NProgress.done();
//     })
//     .fail(function(jqXHR){
//         $('#main-content').load('<?php echo base_url('Rusak') ?>');
//     //    NProgress.done();
//     });
//   });


        update_target = function(opts,id){
        var data = opts;
        var url = '<?php echo $this->config->item('api_url');?>api/master/target/update/'+id;
        return $.ajax({
            url: url,
            data: data,
            type: 'POST',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        })
    }


        $('#form_edit_target').on('submit',function(e){
        var id = $('input[name=id]',this).val();
        e.preventDefault();
        var formData = new FormData();
        var data ={
            kode_kantor: $('input[name=kode_kantor]',this).val(),
            area: $('select[name=area]',this).val(),
            area_kerja: $('select[name=area_kerja]',this).val(),
            target: $('input[name=target]',this).val()
            bulan: $('input[name=bulan]',this).val()
            tahun: $('input[name=tahun]',this).val()
        }
        update_target(data, id)
        .done(function(res){
            var data = res.data;
            bootbox.alert('Data berhasil diubah',function(){
                
                load_data();
                $('#form_edit_target')[0].reset();
                hide_all();
                $('#lihat_data_target').show();
            });
        })
        .fail(function(jqXHR){
            // var data = jqXHR.responseJSON;
            // var error = "";

            // if(typeof data == 'string') {
            //     error = '<p>'+ data +'</p>';
            // } else {
            //     $.each(data, function(index, item){
            //         error += '<p>'+ item +'</p>'+"\n";
            //     });
            // }
            bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
            // bootbox.alert(error);
        });
    });
    

    
    </script>
