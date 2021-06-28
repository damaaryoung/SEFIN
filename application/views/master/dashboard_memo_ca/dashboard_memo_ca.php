<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Load Memo CA</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Load Memo CA</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label>Pilih Bulan :</label>
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
                <div class="col-md-2">
                    <label>Pilih Tahun :</label>
                    <select name="tahun" id="tahun" class="form-control">
                        <option value="2021">2020</option>
                        <option value="2021" selected="selected">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <div class="btn-group" style="margin-top: 35px; width: 100%">
                        <button class="btn btn-primary buttonCari" onclick="load_memo_ca()"><i class="fa fa-user-check"> Cari</i></button>
                        <button class="btn btn-secondary buttonProses" disabled><i class="fas fa-spinner fa-pulse" ></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row" id="lihat_load_memo_ca" style="padding-left: 15px; padding-right: 15px; margin-top: 20px">
            <div class="col-12" id="load_memo_ca">
            </div>
        </div>  
    </section>
</div>

<script>

$('.buttonProses').hide();

    function load_memo_ca() {
        $('.buttonCari').hide();
        $('.buttonProses').show();

        var requestBody = {
            bulan        : $("#bulan option:selected").val(),
            tahun        : $("#tahun option:selected").val(),
        }

        $("#load_memo_ca").empty();

        $.ajax({ 
            type : 'post',
            url : 'Dashboard_memo_ca/get_data_memo_ca',
            data :  requestBody,
            cache: false,
            success : function(res) {
                $('.buttonCari').show();
                 $('.buttonProses').hide();

                var memo_ca_response = JSON.parse(res);
                console.log(memo_ca_response);

                var hk = memo_ca_response.hk;
                var total_kerja = memo_ca_response.total_kerja;
                var user_id = memo_ca_response.user_id_ca;
                var total_region = memo_ca_response.region;

                <?php 
                    $region_ca = $this->db->query("SELECT region FROM pic_ca WHERE flg_aktif = 1 AND jenis_pic = 'CREDIT ANALYST' GROUP BY region")->result(); 
                    
                ?>

                <?php 
                    $pic_ca = $this->db->query("SELECT * FROM pic_ca WHERE flg_aktif = 1 AND jenis_pic = 'CREDIT ANALYST' ")->result(); 
                ?>

                var html_hk = [];
                $.each(hk, function(index,item){
                    var arr = [
                        '<td align="center" style="background-color: #72a5ff; border:2px solid">'+ item.hk + '</td>'
                    ];
                    html_hk.push(arr);
                });

                var html_tgl = []
                $.each(hk,function(index,item){
                    var arr = [
                        '<td style="font-size: 10px; background-color: #cfd1d4; border:2px solid" align="center"><b>'+ formatTanggal(item.tanggal) +'</b></td>'
                    ];
                    html_tgl.push(arr);
                });

                var html_memo_hk = [];
                $.each(hk, function(index,item){
                    var arr = [
                        '<td></td>'
                    ];
                    html_memo_hk.push(arr);
                });

                var html_memo_hk = [];
                $.each(hk, function(index,item){
                    var arr = [
                        '<td></td>'
                    ];
                    html_memo_hk.push(arr);
                });

                function get_hk_td(userId, list_hk) {
                    var array_hk = [];

                    for (var key in list_hk) {
                        if (array_hk[key] == 0) {
                            stringTd = `<td align="center" style="background-color: red" id="${userId}_${key}"></td>`;
                        } else {
                            stringTd = `<td align="center" id="${userId}_${key}"></td>`;
                        }
                        array_hk.push(stringTd);
                    }
                    
                    return array_hk.join("");
                };

                <?php foreach($region_ca as $row): ?>
                    
                    $("#load_memo_ca").append(`
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <b>LOAD MEMORANDUM CA - REGIONAL <?php echo $row->region ?></b>
                            </div>
                            <div class="card-body">
                                <div class="box-body table-responsive no-padding">
                                    <table border="2" cellspacing="-1">
                                        <tr>
                                            <th rowspan="3" align="center" width="300" style="background-color: #00ffff; border:2px solid">
                                                <center>NAMA CA</center>
                                            </th>
                                            <th colspan="${total_kerja}" align="center" style="background-color: #00ffff; border:2px solid">
                                                <center>Total Kerja</center>
                                            </th>
                                            <th width="70" rowspan="3" align="center" style="border:2px solid">
                                                <center>TOTAL</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            ${html_hk.join("")}
                                        </tr>
                                        <tr>
                                            ${html_tgl.join("")}
                                        </tr>
                                        <?php foreach($pic_ca as $r): ?>
                                            <?php if ($r->region == $row->region) { ?>
                                                <tr style="font-size: 13px">
                                                    <td style="border:2px solid; padding-left: 5px" height="30"><b><?php echo $r->nama?></b></td>
                                                    ${get_hk_td(<?php echo $r->user_id?>, hk)}
                                                    <td align="center" id="total_<?php echo $r->user_id ?>"></td>
                                                </tr>
                                            <?php } ?>
                                        <?php endforeach?>
                                        <tr style="font-size: 13px">
                                            <td style="border:2px solid; padding-left: 5px" height="30"><b>Total Naik CA</b></td>
                                            ${html_memo_hk.join("")}
                                            <td align="center" id="total_regional_<?php echo $row->region?>"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    `);
                <?php endforeach ?>


                user_id.forEach( (user) => {
                    $(`#total_${user.id}`).html(user.total_memo);
                
                    for (var hari in user.memo_pertanggal) {
                        $(`#${user.id}_${hari}`).html(user.memo_pertanggal[hari]);
                    }
                });

                total_region.forEach( (region) => {
                    $(`#total_regional_${region.regional}`).html(region.memo_region);
                })



            }
        });
        
    }

    function formatTanggal(tanggal) {
        var formattedTanggal = tanggal.split("-").reverse().join("-");

        return `${formattedTanggal}`
    }

</script>