<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Collection</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Collection</a>
                        </li>
                        <li class="breadcrumb-item active">Report Data Collection Daily</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-info">
                <h5 class="text-center">
                    <strong>Report Data Collection Daily</strong>
                </h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Filter Data</label>   
                            <input type="date" class="form-control col-md-6" id="filter_date" name="filter_date"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <div class="loading-data">

                        </div>
                        <div class="load-table">
                            <table id="listData" class="table table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th rowspan ="3" style="vertical-align: middle">Cabang</th>
                                        <th rowspan = "2" colspan = "5" style="text-align:center;vertical-align: middle">Angsuran Hari Ini</th>
                                        <th rowspan = "2" colspan = "5" style="text-align:center;vertical-align: middle">Baki Debet Hari Ini</th>
                                        <th colspan = "5" style="text-align:center;vertical-align: middle">HK Hari Ini <div id="hari_ke"></div></th>
                                        <th colspan = "5" style="text-align:center;vertical-align: middle">HK Bulan Lalu<div id="hk_bulan_lalu"></div></th>
                                        <th rowspan ="2" colspan = "5" style="text-align:center;vertical-align: middle">GAP (Hari ini VS Bulan Lalu)</th>
                                        <th colspan = "5" style="text-align:center;vertical-align: middle">HK Next Bulan Lalu<div id="hk_next_bulan_lalu"></div></th>
                                        <th rowspan ="2" colspan = "5" style="text-align:center;vertical-align: middle">GAP (Hari ini VS HK Next bulan lalu)</th>
                                    </tr>
                                    <tr>
                                        <th colspan = "5" style="text-align:center;vertical-align: middle" id="th_hi"></th>
                                        <th colspan = "5" style="text-align:center;vertical-align: middle" id="th_hl"></th>
                                        <th colspan = "5" style="text-align:center;vertical-align: middle" id="th_hln"></th>
                                    </tr>
                                    <tr>
                                        <th>CURRENT (Rp)</th>
                                        <th>Lancar+ (Rp)</th>
                                        <th>DPK (Rp)</th>
                                        <th>DPK+ (Rp)</th>
                                        <th>NPL (Rp)</th>
                                        <th>CURRENT (Rp)</th>
                                        <th>Lancar+ (Rp)</th>
                                        <th>DPK (Rp)</th>
                                        <th>DPK+ (Rp)</th>
                                        <th>NPL (Rp)</th>
                                        <th>CURRENT(%)</th>
                                        <th>Lancar+(%)</th>
                                        <th>DPK(%)</th>
                                        <th>DPK+(%)</th>
                                        <th>NPL(%)</th>
                                        <th>CURRENT(%)</th>
                                        <th>Lancar+(%)</th>
                                        <th>DPK(%)</th>
                                        <th>DPK+(%)</th>
                                        <th>NPL(%)</th>
                                        <th>CURRENT(%)</th>
                                        <th>Lancar+(%)</th>
                                        <th>DPK(%)</th>
                                        <th>DPK+(%)</th>
                                        <th>NPL(%)</th>
                                        <th>CURRENT(%)</th>
                                        <th>Lancar+(%)</th>
                                        <th>DPK(%)</th>
                                        <th>DPK+(%)</th>
                                        <th>NPL(%)</th>
                                        <th>CURRENT(%)</th>
                                        <th>Lancar+(%)</th>
                                        <th>DPK(%)</th>
                                        <th>DPK+(%)</th>
                                        <th>NPL(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="report_data_collection_daily_export()">Export to Excel</button>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
$(document).ready(function(){
    // get_hari_kerja = function(opts,tgl){
    //     var url = '<?php echo base_url();?>menu_controller/json_data_collection_daily/';
    //     if(tgl != undefined){
    //         url += tgl;
    //     }

    //     if(opts != undefined){
    //         var data = opts;
    //     }

    //     return $.ajax({
    //         url:url,
    //         data:data,
    //         dataType: "JSON",
    //         headers : {
    //             "Authorization" : "Bearer" + localStorage.getItem('token')
    //         }
    //     });
    // }
    // $('#filter_date').change(function(){
    //     var tgl= $('#filter_date').val();
    //     get_hari_kerja({},tgl).done(function(response){
    //         data = response;
    //         alert(data);
    //     })
    //     //$('#listData').find('tbody').append("<tr><td>MANTAP</td></tr>");

    // });
    function convertDateDBtoIndo(string) {
        bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

        tanggal = string.split("-")[2];
        bulan = string.split("-")[1];
        tahun = string.split("-")[0];

        return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun;
    }

    function setColorValue(value){
        var getColor;
        if(value.substring(0,1) !="-"){
            getColor = value.fontcolor("black");
        }else{
            getColor = value.fontcolor("red");
        }
        return getColor;
    }

    $('#filter_date').change(function(){
        var tgl = $('#filter_date').val();
        var url1 = '<?php echo base_url();?>menu_controller/json_get_hari_kerja/';
        var url2 = '<?php echo base_url();?>menu_controller/json_data_collection_daily/';
        var url3 = '<?php echo base_url();?>menu_controller/json_get_hk_bulan_lalu/';
        var url4 = '<?php echo base_url();?>menu_controller/json_get_next_hk_bulan_lalu/';
        var data = {
            'tgl' : tgl
        }

        $.ajax({
            url         : url1,
            type        : "POST",
            data        : data,
            dataType    : "JSON",
            success     : function(result){
               $('#hari_ke').html("("+result[0].hk+")");
            },
             error       : function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });

         $.ajax({
            url         : url4,
            type        : "POST",
            data        : data,
            dataType    : "JSON",
            success     : function(result){
               $('#hk_next_bulan_lalu').html("("+result[0].hk+")");
            },
             error       : function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });

         $.ajax({
            url         : url3,
            type        : "POST",
            data        : data,
            dataType    : "JSON",
            success     : function(result){
               $('#hk_bulan_lalu').html("("+result[0].hk+")");
            },
             error       : function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });
       
        $.ajax({
            url         : url2,
            type        : "POST",
            data        : data,
            dataType    : "JSON",
            beforeSend  : function(){
                 $("#listData tbody tr").remove();
                 $('.loading-data').show();
                 $('.loading-data').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
                 $(".load-table").hide();
            },
            success     : function(result){
                 // alert(result.length);
                 $('.loading-data').hide();
                 $(".load-table").show();
                 $('#th_hi').html(convertDateDBtoIndo(result[0].tgl_hi));
                 $('#th_hl').html(convertDateDBtoIndo(result[0].tgl_hl));
                 $('#th_hln').html(convertDateDBtoIndo(result[0].tgl_hln));
                 var res =  result.length;
                 // alert(res);
                 var tot_ang_current = 0;
                 var tot_ang_lancar = 0;
                 var tot_ang_dpk = 0;
                 var tot_ang_dpk_dpk = 0;
                 var tot_ang_npl = 0;
                 var a = 1;
                 for(var i = 0;i < res; i++){
                    if(a == res){
                        var boldStart = "<b>";
                        var boldEnd = "<b/>";
                    }else{
                        var boldStart = "";
                        var boldEnd = "";
                    }
                    $('#listData').find('tbody').append("<tr>"+
                        "<td>"+boldStart+result[i].nama_area_kerja+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_current)) ? 0 : parseInt(result[i].ang_current))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_lancar)) ? 0 : parseInt(result[i].ang_lancar))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_dpk)) ? 0 : parseInt(result[i].ang_dpk))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_dpk_dpk)) ? 0 : parseInt(result[i].ang_dpk_dpk))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_npl)) ? 0 : parseInt(result[i].ang_npl))+boldEnd+"</td>"+

                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_bd_current)) ? 0 : parseInt(result[i].ang_bd_current))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_bd_lancar)) ? 0 : parseInt(result[i].ang_bd_lancar))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_bd_dpk)) ? 0 : parseInt(result[i].ang_bd_dpk))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_bd_dpk_dpk)) ? 0 : parseInt(result[i].ang_bd_dpk_dpk))+boldEnd+"</td>"+
                        "<td>"+boldStart+numberWithCommas(isNaN(parseInt(result[i].ang_bd_npl)) ? 0 : parseInt(result[i].ang_bd_npl))+boldEnd+"</td>"+


                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_0_hi)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_1_hi)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_2_hi)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_3_hi)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_npl_hi)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_0_hl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_1_hl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_2_hl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_3_hl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_npl_hl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_current_hihl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_lancar_hihl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_dpk_hihl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_dpk_dpk_hihl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_npl_hihl)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_0_hln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_1_hln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_2_hln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_3_hln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].rasio_bucket_npl_hln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_current_hihln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_lancar_hihln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_dpk_hihln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_dpk_dpk_hihln)+boldEnd+"</td>"+
                        "<td>"+boldStart+setColorValue(result[i].gap_npl_hihln)+boldEnd+"</td>"+
                        "</tr>");
                    // tot_ang_current = tot_ang_current + parseInt(result[i].ang_current);
                    // tot_ang_lancar = tot_ang_lancar + parseInt(result[i].ang_lancar);
                    // tot_ang_dpk = tot_ang_dpk + parseInt(result[i].ang_dpk);
                    // tot_ang_dpk_dpk = tot_ang_dpk_dpk + parseInt(result[i].ang_dpk_dpk);
                    // tot_ang_npl = tot_ang_npl + parseInt(result[i].ang_npl);
                    a++;
                }
                // $('#listData').find('tbody').append('<tr>'+
                //     '<td><b>Total(Konsolidasi)</b></td>'+
                //     '<td><b>'+numberWithCommas(tot_ang_current)+'</b></td>'+
                //     '<td><b>'+numberWithCommas(tot_ang_lancar)+'</b></td>'+
                //     '<td><b>'+numberWithCommas(tot_ang_dpk)+'</b></td>'+
                //     '<td><b>'+numberWithCommas(tot_ang_dpk_dpk)+'</b></td>'+
                //     '<td><b>'+numberWithCommas(tot_ang_npl)+'</b></td>'+
                //     '</tr>');
            },
            error       : function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });
    });
});

function report_data_collection_daily_export() {
    var data_tgl = $('input[name="filter_date"]').val();

    var winURL        = "<?php echo base_url('Export/export_report_collection_daily') ?>";
    var winName       = "LAPORAN";
    var windowoption  = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';

    var input=[];
    input.push("<input type='hidden' name='data_tgl' value='"+data_tgl+"'>");


    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));

    var myWindowPrint = window.open('', winName,windowoption);
    $('body').find('form#frmprint').attr('target',winName).submit().remove();
}
</script>