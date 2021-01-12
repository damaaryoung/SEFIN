<div class="modal-header">
    <center><font size="4"><b>Bucket 0 ALL</b></font></center>
</div>
<div class="modal-body" style="overflow-x:auto">
    <div class="table-responsive">
        <h3>Console</h3>
        <table id="listData1" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>CONSOLE</th>
                    <th>TOTAL BD</th>
                    <th>BD CURRENT</th>
                    <th>BD LANCAR</th>
                    <th>BD DPK</th>
                    <th>BD DPK+</th>
                    <th>BD NPL</th>
                    <th>% CRN</th>
                    <th>% LCR</th>
                    <th>% DPK</th>
                    <th>% DPK+</th>
                    <th>% NPL</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;foreach($result_console->result() as $row_console){
                    $total_bd = $row_console->bd_bucket_0 + $row_console->bd_bucket_1 + $row_console->bd_bucket_2 + $row_console->bd_bucket_3 + $row_console->bd_npl;
                    echo '<tr><td>'.$i.'</td>';
                    echo '<td>Nasional</td>'; 
                    echo '<td>'.number_format(intval($total_bd)).'</td>';
                    echo '<td>'.number_format(intval($row_console->bd_bucket_0)).'</td>';
                    echo '<td>'.number_format(intval($row_console->bd_bucket_1)).'</td>';
                    echo '<td>'.number_format(intval($row_console->bd_bucket_2)).'</td>';
                    echo '<td>'.number_format(intval($row_console->bd_bucket_3)).'</td>';
                    echo '<td>'.number_format(intval($row_console->bd_npl)).'</td>';
                    echo '<td>'.number_format(intval($row_console->rasio_bucket_0)).'</td>';
                    echo '<td>'.number_format(intval($row_console->rasio_bucket_1)).'</td>';
                    echo '<td>'.number_format(intval($row_console->rasio_bucket_2)).'</td>';
                    echo '<td>'.number_format(intval($row_console->rasio_bucket_3)).'</td>';
                    echo '<td>'.number_format(intval($row_console->rasio_npl)).'</td></tr>';
                $i++; } ?>   
            </tbody>
        </table>
        <h3>Area</h3>
        <table id="listData2" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>AREA KERJA</th>
                    <th>TOTAL BD</th>
                    <th>BD CURRENT</th>
                    <th>BD LANCAR</th>
                    <th>BD DPK</th>
                    <th>BD DPK+</th>
                    <th>BD NPL</th>
                    <th>% CRN</th>
                    <th>% LCR</th>
                    <th>% DPK</th>
                    <th>% DPK+</th>
                    <th>% NPL</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;foreach($result_area->result() as $row_area){
                    $total_bd = $row_area->bd_bucket_0 + $row_area->bd_bucket_1 + $row_area->bd_bucket_2 + $row_area->bd_bucket_3 + $row_area->bd_npl;
                    echo '<tr><td>'.$i.'</td>';
                    echo '<td>'.$row_area->kode_area.'</td>'; 
                    echo '<td>'.number_format(intval($total_bd)).'</td>';
                    echo '<td>'.number_format(intval($row_area->bd_bucket_0)).'</td>';
                    echo '<td>'.number_format(intval($row_area->bd_bucket_1)).'</td>';
                    echo '<td>'.number_format(intval($row_area->bd_bucket_2)).'</td>';
                    echo '<td>'.number_format(intval($row_area->bd_bucket_3)).'</td>';
                    echo '<td>'.number_format(intval($row_area->bd_npl)).'</td>';
                    echo '<td>'.number_format(intval($row_area->rasio_bucket_0)).'</td>';
                    echo '<td>'.number_format(intval($row_area->rasio_bucket_1)).'</td>';
                    echo '<td>'.number_format(intval($row_area->rasio_bucket_2)).'</td>';
                    echo '<td>'.number_format(intval($row_area->rasio_bucket_3)).'</td>';
                    echo '<td>'.number_format(intval($row_area->rasio_npl)).'</td></tr>';
                $i++; } ?>   
            </tbody>
        </table>
        <h3>Cabang</h3>
        <table id="listData3" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>cabang KERJA</th>
                    <th>TOTAL BD</th>
                    <th>BD CURRENT</th>
                    <th>BD LANCAR</th>
                    <th>BD DPK</th>
                    <th>BD DPK+</th>
                    <th>BD NPL</th>
                    <th>% CRN</th>
                    <th>% LCR</th>
                    <th>% DPK</th>
                    <th>% DPK+</th>
                    <th>% NPL</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;foreach($result_cabang->result() as $row_cabang){
                    $total_bd = $row_cabang->bd_bucket_0 + $row_cabang->bd_bucket_1 + $row_cabang->bd_bucket_2 + $row_cabang->bd_bucket_3 + $row_cabang->bd_npl;
                    echo '<tr><td>'.$i.'</td>';
                    echo '<td>'.$row_cabang->nama_area_kerja.'</td>'; 
                    echo '<td>'.number_format(intval($total_bd)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->bd_bucket_0)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->bd_bucket_1)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->bd_bucket_2)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->bd_bucket_3)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->bd_npl)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->rasio_bucket_0)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->rasio_bucket_1)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->rasio_bucket_2)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->rasio_bucket_3)).'</td>';
                    echo '<td>'.number_format(intval($row_cabang->rasio_npl)).'</td></tr>';
                $i++; } ?>   
            </tbody>
        </table>
    </div>
</div>
<div class="modal-footer">
    <a href="javascript:void(0)" onclick="result_bucket_0_all_export()" class="btn btn-primary">Export to Excel</a>
    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger">Tutup</a>
</div>
<script>
    function result_bucket_0_all_export() {
    var data_tgl = $('input[name="date_0ns_console"]').val();
    var winURL        = "<?php echo base_url('modal_bootstrap_controller/export_list_result_bucket_0_all') ?>";
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

