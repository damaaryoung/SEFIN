<?php echo $params['custom_css'];?>
<div class="modal-header">
    <center><font size="4"><b>Data Roll Kredit Area</b></font></center>
</div>
<div class="modal-body" style="height: 500px;overflow-x:auto">
    <input type="text" name="date_roll_console_area" id="date_roll_console_area"/>
    <input type="text" name="kode_area" id="kode_area"/>
    <div class="table-responsive">
        <table id="listData" width="100%" class="table table-striped table-bordered" style="white-space: nowrap; font-size:10px">
            <thead class="text-center">
                <tr>
                    <th>NO</th>
                    <th>KANTOR</th>
                    <th>NO REKENING</th>
                    <th>NAMA NASABAH</th>
                    <th>TGL REALISASI</th>
                    <th>BAKI DEBET</th>
                    <th>KOLEK BI</th>
                    <th>FTB LALU</th>
                    <th>FTB NOW</th>
                    <th>FTP LALU</th>
                    <th>FTP NOW</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<div class="modal-footer">
    <a class="btn btn-primary" href="javascript:void(0)" onclick="bucket_roll_console_export()">Export to Excel</a>
    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger">Tutup</a>
</div>
<?php echo $params['custom_js'];?>

<script>
function bucket_roll_console_export() {
    var data_tgl = $('input[name="date_roll_console_area"]').val();
    var data_kode_area = $('input[name="date_roll_console_area"]').val();
    var winURL        = "<?php echo base_url('modal_bootstrap_controller/bucket_roll_console_area_export') ?>";
    var winName       = "LAPORAN";
    var windowoption  = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';

    var input=[];
    input.push("<input type='hidden' name='tgl' value='"+data_tgl+"'><input type='hidden' name='kode_area' value='"+data_kode_area+"'>");


    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));

    var myWindowPrint = window.open('', winName,windowoption);
    $('body').find('form#frmprint').attr('target',winName).submit().remove();
}

</script>