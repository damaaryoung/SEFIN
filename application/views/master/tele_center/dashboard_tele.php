<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Tele Center</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Tele Center</li>
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
                        <?php
                            if($tahun):
                                echo "<option value='$tahun'>$tahun</option>";
                            endif;
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kode_area">Pilih Area :</label>
                    <div class="form-group">
                        <?php
                            $kode_area = $this->db->get('mk_area')->result(); 
                        ?>
                        <select id="kode_area" class="form-control" name="kode_area">
                            <option value="" selected="selected">- Pilih Area -</option>
                            <option value="*">KONSOLIDASI</option>
                            <?php foreach($kode_area as $r): ?>
                                <option value="<?php echo $r->nama; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="kode_kantor">Pilih Cabang :</label>
                    <div class="form-group">
                        <?php
                            $kode_kantor = $this->db->get('mk_cabang')->result(); 
                        ?>
                        <select id="kode_kantor" class="form-control" name="kode_kantor">
                            <option value="" selected="selected">- Pilih Kantor -</option>
                            <option value="*">Konsolidasi</option>
                            <?php foreach($kode_kantor as $r): ?>
                                <option value="<?php echo $r->kode_kantor; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <a style="width: 100%; margin-top: 35px" href="javascript:void(0)" title="" class="btn btn-primary btn-sm mr-3" onclick="dashboard_tele()">
                        Cari
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row" id="lihat_dashboard_tele" style="padding-left: 15px; padding-right: 15px;">
            <div class="col-6" id="tele_table_sales">
            </div>
            <div class="col-6" id="tele_table_collection">
            </div>
        </div>  
    </section>
</div>

<script>

    $("#lihat_dashboard_tele").hide();

    var areaSelect = document.getElementById("kode_area");
    areaSelect.addEventListener("change", function(e) {
        var selectedArea = $("#kode_area option:selected").val();

        if (selectedArea !== "") {
            $('#kode_kantor').prop('disabled', 'disabled');
        } else {
            $('#kode_kantor').prop('disabled', false);
        }
        
    });

    var cabangSelect = document.getElementById("kode_kantor");
    cabangSelect.addEventListener("change", (e) => {
        var selectedCabang = $("#kode_kantor option:selected").val();

        if (selectedCabang !== "") {
            $('#kode_area').prop('disabled', 'disabled');
        } else {
            $('#kode_area').prop('disabled', false);
        }
        
    });

    function dashboard_tele() {

        var requestBody = {
            kode_kantor  : $("#kode_kantor option:selected").val(),
            kode_area    : $("#kode_area option:selected").val(),
            bulan        : $("#bulan option:selected").val(),
            tahun        : $("#tahun option:selected").val(),
        }

        if (requestBody.kode_area == "" && requestBody.kode_kantor == "") {
             alert("Salah satu dari Area atau Cabang tidak boleh kosong!");
        } else {
            $("#tele_table_sales").empty();
            $("#tele_table_collection").empty();

            $.ajax({ 
                type : 'post',
                url : 'Dashboard_tele_controller/get_data_tele',
                data :  requestBody,
                cache: false,
                success : function(res) {
                    var dataTeleCollResponse = JSON.parse(res).teleDataColl;
                    var dataTeleSalesResponse = JSON.parse(res).teleDataSales;

                    var titleResponse = JSON.parse(res).title;
                    var allcabangResponse = JSON.parse(res).all_cabang_by_area;

                    var formattedDataTeleColl;
                    var formattedDataTeleSales;

                    if (allcabangResponse != undefined && allcabangResponse.length != 0) {
                        allcabangResponse.forEach(cabang => {
                            var requestBodyForLoop = {
                                kode_kantor  : cabang.kode_kantor,
                                bulan        : $("#bulan option:selected").val(),
                                tahun        : $("#tahun option:selected").val(),
                            }

                            $.ajax({ 
                                type : 'post',
                                url : 'Dashboard_tele_controller/get_data_single_tele',
                                data :  requestBodyForLoop,
                                cache: false,
                                success : function(res) {
                                    var { tele_coll_data_kantor, tele_sales_data_kantor, title_kantor } = JSON.parse(res);
                                    formattedDataTeleColl = formattingResponseColl(tele_coll_data_kantor);
                                    formattedDataTeleSales = formattingResponseSales(tele_sales_data_kantor);

                                    $("#tele_table_sales").append(`
                                    <div class="card">
                                        <div class="card-header">
                                            <b>TELE SALES - ${title_kantor}</b>
                                        </div>
                                        <div class="card-body">
                                            <div class="box-body table-responsive no-padding">
                                                <div class="row justify-content-center">
                                                    <div class="col-6">
                                                        <table class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                                            <thead style="font-size: 14px" class="bg-danger">
                                                                <tr>
                                                                    <th>
                                                                        Parameter
                                                                    </th>
                                                                    <th>
                                                                        Total
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-size: 13px">
                                                                <tr>
                                                                    <td>
                                                                        Prospek
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.prospek}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Interest
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.interest}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Call Back
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.callBack}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Hang Up
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.hangUp}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Unprospek
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.unProspek}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Miss Customer
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.missCustomer}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Nobody Pick Up
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.nobodyPickUp}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Busy Line
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.busyLine}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Inactive
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.inactive}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Invalid Number
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.invalidNumber}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        No Dial Tone
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.noDialTone}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #a8b4ae" colspan="2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total Data Assignment
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.totalDataAssignment}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total Connected
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.totalConnected}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total UnConnected
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.totalUnconnected}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total UnContacted
                                                                    </td>
                                                                    <td>${formattedDataTeleSales.totalUncontacted}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`);
                                    
                                    $("#tele_table_collection").append(`
                                    <div class="card">
                                        <div class="card-header">
                                            <b>TELE COLLECTION - ${title_kantor}</b>
                                        </div>
                                        <div class="card-body">
                                            <div class="box-body table-responsive no-padding">
                                                <div class="row justify-content-center">
                                                    <div class="col-6">
                                                        <table class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                                            <thead style="font-size: 14px" class="bg-danger">
                                                                <tr>
                                                                    <th>
                                                                        Parameter
                                                                    </th>
                                                                    <th>
                                                                        Total
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-size: 13px">
                                                                <tr>
                                                                    <td>
                                                                        PTP
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.ptp}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        UnPTP
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.unptp}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Already Paid
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.alreadyPaid}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Call Back
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.callBack}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Hang Up
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.hangUp}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Miss Customer
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.missCustomer}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Nobody Pick Up
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.nobodyPickUp}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Busy Line
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.busyLine}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Inactive
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.inactive}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Invalid Number
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.invalidNumber}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        No Dial Tone
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.noDialTone}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #a8b4ae" colspan="2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total Data Assignment
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.totalDataAssignment}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total Connected
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.totalConnected}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total UnConnected
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.totalUnconnected}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Total UnContacted
                                                                    </td>
                                                                    <td>${formattedDataTeleColl.totalUncontacted}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`);
                                }
                            });
                        });           
                    } else {
                            formattedDataTeleColl = formattingResponseColl(dataTeleCollResponse);
                            formattedDataTeleSales = formattingResponseSales(dataTeleSalesResponse);

                            $("#tele_table_sales").append(`
                            <div class="card">
                                <div class="card-header">
                                    <b>TELE SALES - ${titleResponse}</b>
                                </div>
                                <div class="card-body">
                                    <div class="box-body table-responsive no-padding">
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <table class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                                    <thead style="font-size: 14px" class="bg-danger">
                                                        <tr>
                                                            <th>
                                                                Parameter
                                                            </th>
                                                            <th>
                                                                Total
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 13px">
                                                        <tr>
                                                            <td>
                                                                Prospek
                                                            </td>
                                                            <td>${formattedDataTeleSales.prospek}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Interest
                                                            </td>
                                                            <td>${formattedDataTeleSales.interest}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Call Back
                                                            </td>
                                                            <td>${formattedDataTeleSales.callBack}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Hang Up
                                                            </td>
                                                            <td>${formattedDataTeleSales.hangUp}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Unprospek
                                                            </td>
                                                            <td>${formattedDataTeleSales.unProspek}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Miss Customer
                                                            </td>
                                                            <td>${formattedDataTeleSales.missCustomer}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Nobody Pick Up
                                                            </td>
                                                            <td>${formattedDataTeleSales.nobodyPickUp}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Busy Line
                                                            </td>
                                                            <td>${formattedDataTeleSales.busyLine}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Inactive
                                                            </td>
                                                            <td>${formattedDataTeleSales.inactive}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Invalid Number
                                                            </td>
                                                            <td>${formattedDataTeleSales.invalidNumber}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                No Dial Tone
                                                            </td>
                                                            <td>${formattedDataTeleSales.noDialTone}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: #a8b4ae" colspan="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total Data Assignment
                                                            </td>
                                                            <td>${formattedDataTeleSales.totalDataAssignment}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total Connected
                                                            </td>
                                                            <td>${formattedDataTeleSales.totalConnected}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total UnConnected
                                                            </td>
                                                            <td>${formattedDataTeleSales.totalUnconnected}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total UnContacted
                                                            </td>
                                                            <td>${formattedDataTeleSales.totalUncontacted}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`);

                            $("#tele_table_collection").append(`
                            <div class="card">
                                <div class="card-header">
                                    <b>TELE COLLECTION - ${titleResponse}</b>
                                </div>
                                <div class="card-body">
                                    <div class="box-body table-responsive no-padding">
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <table class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                                    <thead style="font-size: 14px" class="bg-danger">
                                                        <tr>
                                                            <th>
                                                                Parameter
                                                            </th>
                                                            <th>
                                                                Total
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 13px">
                                                        <tr>
                                                            <td>
                                                                PTP
                                                            </td>
                                                            <td>${formattedDataTeleColl.ptp}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                UnPTP
                                                            </td>
                                                            <td>${formattedDataTeleColl.unptp}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Already Paid
                                                            </td>
                                                            <td>${formattedDataTeleColl.alreadyPaid}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Call Back
                                                            </td>
                                                            <td>${formattedDataTeleColl.callBack}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Hang Up
                                                            </td>
                                                            <td>${formattedDataTeleColl.hangUp}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Miss Customer
                                                            </td>
                                                            <td>${formattedDataTeleColl.missCustomer}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Nobody Pick Up
                                                            </td>
                                                            <td>${formattedDataTeleColl.nobodyPickUp}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Busy Line
                                                            </td>
                                                            <td>${formattedDataTeleColl.busyLine}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Inactive
                                                            </td>
                                                            <td>${formattedDataTeleColl.inactive}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Invalid Number
                                                            </td>
                                                            <td>${formattedDataTeleColl.invalidNumber}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                No Dial Tone
                                                            </td>
                                                            <td>${formattedDataTeleColl.noDialTone}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: #a8b4ae" colspan="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total Data Assignment
                                                            </td>
                                                            <td>${formattedDataTeleColl.totalDataAssignment}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total Connected
                                                            </td>
                                                            <td>${formattedDataTeleColl.totalConnected}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total UnConnected
                                                            </td>
                                                            <td>${formattedDataTeleColl.totalUnconnected}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Total UnContacted
                                                            </td>
                                                            <td>${formattedDataTeleColl.totalUncontacted}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`);
                    }
                }
            });

            $("#lihat_dashboard_tele").show();
        }
    }

    function formattingResponseColl(dataTeleColl) {
        var mappedObject = {
            ptp: 0,
            unptp: 0,
            alreadyPaid: 0,
            callBack: 0,
            hangUp: 0,
            missCustomer: 0,
            nobodyPickUp: 0,
            busyLine: 0,
            inactive: 0,
            invalidNumber: 0,
            noDialTone: 0,
            totalDataAssignment: dataTeleColl.length,
            totalConnected: 0,
            totalUnconnected: 0,
            totalUncontacted: 0
        };


        dataTeleColl.forEach( (tele) => {
            if (tele.contacted != null) {
                if (tele.contacted != "") {
                    
                    mappedObject.totalConnected += 1;

                    switch (tele.contacted) {
                        case "PTP":
                            mappedObject.ptp += 1;
                            break;
                        case "Already Paid":
                            mappedObject.alreadyPaid += 1;
                            break;
                        case "Call Back":
                            mappedObject.callBack += 1;
                            break;
                        case "Hang Up":
                            mappedObject.hangUp += 1;
                            break;
                        case "UnPTP":
                            mappedObject.unptp += 1;
                            break;
                        case "Miss Customer":
                            mappedObject.missCustomer += 1;
                            break;
                        default:
                            break;
                    }
                }
            }
            
            if (tele.uncontacted != null) {
                if (tele.uncontacted != "") {

                    mappedObject.totalUncontacted += 1;

                    switch (tele.uncontacted) {
                        case "Nobody Pick Up":
                            mappedObject.nobodyPickUp += 1;
                            break;
                        case "Busy Line":
                            mappedObject.busyLine += 1;
                            break;
                        default:
                            break;
                    }
                }
            } 
            
            if (tele.unconnected != null) {
                if (tele.unconnected != "") {

                    mappedObject.totalUnconnected += 1;

                    switch (tele.unconnected) {
                        case "Invalid Number":
                            mappedObject.invalidNumber += 1;
                            break;
                        case "No Dial Tone":
                            mappedObject.noDialTone += 1;
                            break;
                        case "Inactive":
                            mappedObject.inactive += 1;
                            break;
                        default:
                            break;
                    }
                }
            }
        })

        return mappedObject;
    }

    function formattingResponseSales(dataTeleSales) {
        var mappedObject = {
            prospek: 0,
            interest: 0,
            callBack: 0,
            hangUp: 0,
            unProspek: 0,
            missCustomer: 0,
            nobodyPickUp: 0,
            busyLine: 0,
            inactive: 0,
            invalidNumber: 0,
            noDialTone: 0,
            totalDataAssignment: dataTeleSales.length,
            totalConnected: 0,
            totalUnconnected: 0,
            totalUncontacted: 0
        };


        dataTeleSales.forEach( (tele) => {
            if (tele.result_contacted != null) {
                if (tele.result_contacted != "") {
                    
                    mappedObject.totalConnected += 1;

                    switch (tele.result_contacted) {
                        case "Prospek":
                            mappedObject.prospek += 1;
                            break;
                        case "Interest":
                            mappedObject.interest += 1;
                            break;
                        case "Call Back":
                            mappedObject.callBack += 1;
                            break;
                        case "Hang Up":
                            mappedObject.hangUp += 1;
                            break;
                        case "Unprospek":
                            mappedObject.unProspek += 1;
                            break;
                        case "Miss Customer":
                            mappedObject.missCustomer += 1;
                            break;
                        default:
                            break;
                    }
                }
            }
            
            if (tele.result_uncontacted != null) {
                if (tele.result_uncontacted != "") {

                    mappedObject.totalUncontacted += 1;

                    switch (tele.result_uncontacted) {
                        case "No Body Pick Up":
                            mappedObject.nobodyPickUp += 1;
                            break;
                        case "Busy Line":
                            mappedObject.busyLine += 1;
                            break;
                        default:
                            break;
                    }
                }
            } 
            
            if (tele.result_unconnected != null) {
                if (tele.result_unconnected != "") {

                    mappedObject.totalUnconnected += 1;

                    switch (tele.result_unconnected) {
                        case "Invalid Number":
                            mappedObject.invalidNumber += 1;
                            break;
                        case "No Dial Tone":
                            mappedObject.noDialTone += 1;
                            break;
                        case "Inactive":
                            mappedObject.inactive += 1;
                            break;
                        default:
                            break;
                    }
                }
            }
        })

        return mappedObject;
    }
</script>