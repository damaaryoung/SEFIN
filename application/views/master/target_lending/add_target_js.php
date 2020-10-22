<script>
   $(function(){
        
        get_area = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/master/area_kerja';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
        get_area_cabang = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/master/area_cabang';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
       tambah_target_lending = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>/api/master/target/tambah';
        var data = opts;

        return $.ajax({
            url : url,
            type: 'POST',
            contentType: false,
            processData: false,
            data: data,
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
        }
        get_area()
        .done(function(res){
            console.log(res)
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.nama_area+'">'+e.nama_area+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_data_target select[name=area]').html(select);
        })
        get_area_cabang ()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.nama_cabang+'">'+e.nama_cabang+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_data_target select[name=area_kerja]').html(select);
        })
        

        $('#form_data_target').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('kode_kantor',$('input[name=kode_kantor]',this).val());
            formData.append('area_kerja',$('select[name=area_kerja]',this).val());
            formData.append('area',$('select[name=area]',this).val());
            formData.append('target',$('input[name=target]',this).val());
            formData.append('bulan',$('input[name=bulan]',this).val());
            formData.append('tahun',$('input[name=tahun]',this).val());

            tambah_target_lending(formData)
            .done(function(res){
            //   console.log(res);
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                        $('#form_data_target')[0].reset();
                        hide_all();
                        $('#lihat_kantor_cabang').show();
                });
                 
            })
            .fail(function(jqXHR){
                var data = jqXHR.responseJSON;
                var error = "";

                if(typeof data == 'string') {
                    error = '<p>'+ data +'</p>';
                } else {
                    $.each(data, function(index, item){
                        error += '<p>'+ item +'</p>'+"\n";
                    });
                }

                bootbox.alert(error);
            })
        });
                
 
});


</script>