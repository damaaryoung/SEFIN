
<!-- data target approval periodik -->
<div id="lihat_target_approval_periodik" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Target Approval Periodik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Target Approval Periodik</li>
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
                            <button class="btn btn-primary tambah" id="click_tambah_target_approval_periodik" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="5px">
                                            No
                                        </th>
                                        <th>
                                            Bulan
                                        </th>
                                        <th>
                                            Tahun
                                        </th>
                                        <th>
                                            Periode
                                        </th>
                                        <th>
                                            Target (dalam %)
                                        </th>
                                        <th width="10px">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_target_approval_periodik" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
</div>

<!-- tambah target approval periodik -->
<div id="tambah_target_approval_periodik" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Target Approval Periodik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Target Approval Periodik</li>
                        <li class="breadcrumb-item active">Tambah Target Approval Periodik</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                                <!-- <h3 class="card-title">Tambah Target approval Periodik</h3> -->
                            </div>
                        <form role="form" id="form_tambah_target_approval_periodik">
                            <div class="card-body">
                                <div class="form-group">
                                <label>Bulan<span class="required_notification">*</span></label>
                                    <select name="bulan" id="bulan" class="form-control">
                                        <?php
                                        $bulan = $this->input->post('bulan');
                                        $tahun = $this->input->post('tahun');

                                        if(empty($bulan && $tahun)) {
                                            $bulan = date('m');
                                            $tahun = date('Y');
                                        }
                                            if($bulan=='1'):
                                                $month = 'Januari';
                                            elseif($bulan=='2'):
                                                $month = 'Februari';
                                            elseif($bulan=='3'):
                                                $month = 'Maret';
                                            elseif($bulan=='4'):
                                                $month = 'April';
                                            elseif($bulan=='5'):
                                                $month = 'Mei';
                                            elseif($bulan=='6'):
                                                $month = 'Juni';
                                            elseif($bulan=='7'):
                                                $month = 'Juli';
                                            elseif($bulan=='8'):
                                                $month = 'Agustus';
                                            elseif($bulan=='9'):
                                                $month = 'September';
                                            elseif($bulan=='10'):
                                                $month = 'Oktober';
                                            elseif($bulan=='11'):
                                                $month = 'November';
                                            elseif($bulan=='12'):
                                                $month = 'Desember';
                                            endif;

                                            if($bulan):
                                                echo "<option value='$bulan'>$month</option>";
                                            endif;
                                        ?>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>Tahun<span class="required_notification">*</span></label>
                                    <select name="tahun" id="tahun" class="form-control">
                                        <?php
                                            if($tahun):
                                                echo "<option value='$tahun'>$tahun</option>";
                                            endif;
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>Periode<span class="required_notification">*</span></label>
                                    <select id="periode" name="periode" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>Target (dalam %)<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" name="target_persen" id="target_persen">
                                </div>
                            </div>
                            <div class="card-footer" style="float: right; background-color: #ffffff">
                                <!-- <button id ="submit" class="btn btn-primary">Submit</button> -->
                                <a style="float: right; color: #fff"  class="btn btn-primary" onclick="submit()">
                                    Submit
                                </a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>

<script>

    var target_persen = document.getElementById('target_persen');
	target_persen.addEventListener('keyup', function(e)
	{
		target_persen.value = formatRupiah(this.value);
	});
	
	target_persen.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

	function formatRupiah(bilangan, prefix)
	{
		var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
	}

    function removePoint(stringBilangan) {
        var formattedBilangan = stringBilangan;
        formattedBilangan = stringBilangan.replaceAll(".", "");
        formattedBilangan = formattedBilangan.replace(",", ".");
        return formattedBilangan;
    }
	
	function limitCharacter(event)
	{
		key = event.which || event.keyCode;
		if ( key != 188 // Comma
			 && key != 8 // Backspace
			 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
			 && (key < 48 || key > 57) // Non digit
			) 
		{
			event.preventDefault();
			return false;
		}
    }
    
    function submit() {
        var requestBody = {
            periode         : $("#periode option:selected").val(),
            bulan           : $("#bulan option:selected").val(),
            tahun           : $("#tahun option:selected").val(),
            target_persen   : $("#target_persen").val(),
        }

        if (requestBody.periode == "") {
             alert("Periode tidak boleh kosong!");
        } else if (requestBody.target_persen == "") {
             alert("Target tidak boleh kosong!");
        } else {
            $.ajax({ 
                type : 'POST',
                url : 'Target_approval_periodik_controller/submit',
                data :  requestBody,
                cache: false,
                success : function(res) {
                    var jsonResponse = JSON.parse(res);
                    var flagSuccess = true;
                    var errorList = [];
                    var flagAlredySubmitted = false;
                    var message;
                    let arrayAjax = [];

                    for (var key in jsonResponse.detail_hk) {
                        var formData = new FormData();
                        formData.append('periode', requestBody.periode);
                        formData.append('bulan', requestBody.bulan);
                        formData.append('tahun', requestBody.tahun);
                        formData.append('target_persen', removePoint(requestBody.target_persen));
                        formData.append('hk', key);
                        formData.append('tgl', jsonResponse.detail_hk[key].tanggal);
                        
                        arrayAjax.push(tambah_target_approval_periodik(formData));
                    }

                    Promise.all(arrayAjax).then((result) => {
                        if (result[0].code == 402) {
                            flagAlredySubmitted = true;
                            message = result[0].message;
                        }

                        if (flagSuccess) {
                            if (flagAlredySubmitted) {
                                bootbox.alert(message,function(){
                                });
                            } else {
                                bootbox.alert('Data berhasil ditambah',function(){
                                });
                            }
                            $('#form_tambah_target_approval_periodik')[0].reset();
                            hide_all();
                            $('#lihat_target_approval_periodik').show();
                            load_data();
                        } else {
                            errorList.forEach( (error) => {
                                bootbox.alert(error);
                            })
                        }
                    }).catch((err) => {
                        console.log(err, "error")
                    })
                }
            });
        }
    }

    function getBulan(bulan) {
        var daftarBulan = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember" ];
        return daftarBulan[bulan-1];
    }

    function confirmDelete(bulan, tahun, periode) {
        bootbox.confirm({
            message :"Apakah data ini ingin dihapus?",
            bottons : {
                confirm :{
                    label : 'Ya',
                    className : 'btn-success'
                },
                cancel : {
                    label: ' Tidak',
                    bottons : 'btn-danger'
                }
            },
            callback: function(result){
                if(result){
                    delete_target_approval_periodik(bulan, tahun, periode)
                    .done(function(res){
                        // console.log(res);
                        load_data();
                    })
                    .fail(function(jqXHR){
                        console.log(jqXHR);
                    })
                }
            }   
        });
    }

    $(function(){
        
        hide_all = function(){
            $('#lihat_target_approval_periodik').hide();
            $('#tambah_target_approval_periodik').hide();
        }

        hide_all();

        $('#lihat_target_approval_periodik').show();

        $('#click_tambah_target_approval_periodik').click(function(){
            hide_all();
            $('#tambah_target_approval_periodik').show();
        });

        tambah_target_approval_periodik = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/master/MasterActivity/approval';
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

        delete_target_approval_periodik = function(bulan, tahun, periode){
            var url = '<?php echo $this->config->item('api_url');?>api/master/MasterActivity/approval/delete/'+bulan+'/'+tahun+'/'+periode;

            return $.ajax({
                url : url,
                type: 'DELETE',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        get_target_approval_periodik = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/master/MasterActivity/indexapproval';

            if(id != undefined){
                url+=id;
            }

            if(opts != undefined){
                var data = opts;
            }

            return $.ajax({
                type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
        
        load_data = function(pagin){
            get_target_approval_periodik()
            .done(function(response){
                var data = response.data;
                var html = [];
                var no   = 0;
                
                if(data.length === 0 ){
                    var tr =[
                    '<tr valign="midle">',
                    '<td colspan="8" style="text-align: center">Tidak ada data</td>',
                    '</tr>'
                    ].join('\n');
                    $('#data_target_approval_periodik').html(tr);

                    return;
                }

                $.each(data,function(index,item){
                    no++;
                    var tr = [
                    '<tr>',
                        '<td>'+ no+'</td>',
                        '<td>'+ getBulan(Number(item.bulan)) +'</td>',
                        '<td>'+ item.tahun +'</td>',
                        '<td>'+ item.periode +'</td>',
                        '<td>'+ item.target_persen +'</td>',
                        '<td style="text-align: center">',
                            '<button type="button" class="btn btn-danger btn-sm delete" onclick="confirmDelete('+ item.bulan +', '+ item.tahun +', '+ item.periode +')"><i class="fas fa-trash-alt"></i></button>',
                        '</td>',
                    '</tr>'
                    ].join('\n');
                    html.push(tr);
                });

                $('#data_target_approval_periodik').html(html);
                $('#example2').DataTable({
                    "paging": true,
                    "retrieve": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            })

            .fail(function(response){
                $('#data_target_approval_periodik').html('<tr><td colspan="8" style="text-align: center">Tidak ada data</td></tr>');
            });
        }

        $('#data_target_approval_periodik').show();
        load_data();

    });

</script>