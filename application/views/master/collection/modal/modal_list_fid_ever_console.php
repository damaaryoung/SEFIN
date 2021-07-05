<?php echo $params['custom_css'];?>
<div class="modal-header">
    <center><font size="4"><b>FID EVER Konsolidasi</b></font></center>
</div>
<div class="modal-body" style="overflow-x:auto">
    <div class="table-responsive">
        <table id="listData" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>AREA KERJA</th>
                    <th>NO REKENING</th>
                    <th>NAMA NASABAH</th>
                    <th>TGL REALISASI</th>
                    <th>KOLEK BI</th>
                    <th>FT HARI</th>
                    <th>FT ANGSURAN</th>
                    <th>PLAFON</th>
                    <th>TENOR</th>
                    <th>BAKI DEBET</th>
                    <th>ANGSURAN</th>
                    <th>ASAL DATA</th>
                    <th>TUJUAN PENGGUNAAN</th>
                    <th>PRODUK</th>
                    <th>SEGMENTASI</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
    </div>
<div class="modal-footer">
    <a href="javascript:void(0)" onclick="fid_ever_console_export()" class="btn btn-primary">Export to Excel</a>
    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger">Tutup</a>
</div>
<script>
    function fid_ever_console_export() {
    var data_tgl = $('input[name="date-fid-ever"]').val();

    var winURL        = "<?php echo base_url('modal_bootstrap_controller/fid_ever_console_export') ?>";
    var winName       = "LAPORAN";
    var windowoption  = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';

    var input=[];
    input.push("<input type='hidden' name='tgl' value='"+data_tgl+"'>");


    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));

    var myWindowPrint = window.open('', winName,windowoption);
    $('body').find('form#frmprint').attr('target',winName).submit().remove();
}
</script>
<?php echo $params['custom_js'];?>