<?php echo $params['custom_css'];?>
<div class="modal-header">
    <center><font size="4"><b>Data Roll Kredit Cabang</b></font></center>
</div>
<div class="modal-body" style="height: 500px;overflow-x:auto">
    <div class="table-responsive">
        <table id="listData2" width="100%" class="table table-striped table-bordered" style="white-space: nowrap; font-size:10px">
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
    <a class="btn btn-primary" href="javascript:void(0)" onclick="roll_console_export()">Export to Excel</a>
    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger">Tutup</a>
</div>
<?php echo $params['custom_js'];?>