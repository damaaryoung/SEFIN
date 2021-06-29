<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tracking Order Memo CA</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tracking Order Memo CA</li>
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
                        <option value="2020">2020</option>
                        <option value="2021" selected="selected">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Pilih CA :</label>
                    <?php
                        $pic_ca = $this->db->query("SELECT * FROM pic_ca WHERE jenis_pic = 'CREDIT ANALYST' AND flg_aktif = 1")->result(); 
                    ?>
                    <select id="pilih_ca" class="form-control" name="pilih_ca">
                        <option value="" selected="selected" disabled>- Pilih CA -</option>
                        <option value="*">KONSOLIDASI</option>
                        <?php foreach($pic_ca as $r): ?>
                            <option value="<?php echo $r->user_id; ?>"><?php echo $r->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Pilih Cabang :</label>
                    <div class="form-group">
                        <?php
                            $kode_cabang = $this->db->get('mk_cabang')->result(); 
                        ?>
                        <select id="kode_cabang" class="form-control" name="kode_cabang">
                            <option value="" selected="selected" disabled>- Pilih Cabang -</option>
                            <option value="*">Konsolidasi</option>
                            <?php foreach($kode_cabang as $r): ?>
                                <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="btn-group" style="margin-top: 35px; width: 100%">
                        <button class="btn btn-primary buttonCari" onclick="dashboard_tracking_order()"><i class="fa fa-user-check"> Cari</i></button>
                        <button class="btn btn-secondary buttonProses" disabled><i class="fas fa-spinner fa-pulse" ></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row" id="lihat_dashboard_tracking_order" style="padding-left: 15px; padding-right: 15px;">
            <div class="col-6" id="tracking_order_ca">
            </div>
            <div class="col-6" id="tracking_order_cabang">
            </div>
        </div>  
    </section>
</div>

<script>

$('.buttonProses').hide();

    function dashboard_tracking_order() {

        $('.buttonCari').hide();
        $('.buttonProses').show();

        var requestBody = {
            bulan        : $("#bulan option:selected").val(),
            tahun        : $("#tahun option:selected").val(),
            pilih_ca     : $("#pilih_ca option:selected").val(),
            kode_cabang  : $("#kode_cabang option:selected").val(),
        }

        if (requestBody.pilih_ca == "" && requestBody.kode_cabang == "") {
            $('.buttonCari').show();
            $('.buttonProses').hide();
            bootbox.alert("Pilih Salah Satu CA atau Cabang");
        } else if (requestBody.pilih_ca == "" || requestBody.kode_cabang == "") {
            $('.buttonCari').show();
            $('.buttonProses').hide();
            bootbox.alert("Pilih Salah Satu CA atau Cabang");
        } 
        else {
            $("#tracking_order_ca").empty();
            $("#tracking_order_cabang").empty();

            $.ajax({ 
                type : 'post',
                url : 'Ao_controller/get_data_tracking_order',
                data :  requestBody,
                cache: false,
                    success : function(res) {

                        $('.buttonCari').show();
                        $('.buttonProses').hide();

                        var data = JSON.parse(res);
                }
            });
        }
        
    }
</script>