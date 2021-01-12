<?php echo $params['custom_css'];?>
<div class="modal-header">
    <center><font size="4"><b>Bucket 0 ALL Konsolidasi</b></font></center>
</div>
<div class="modal-body" style="overflow-x:auto">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="area-tab" data-toggle="pill" href="#area1" role="tab" aria-controls="area" aria-selected="true">Data Bucket 0 ALL</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" id="result-tab" data-toggle="pill" href="#result" role="tab" aria-controls="result" aria-selected="false">Hasil</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="area1" role="tabpanel" aria-labelledby="area-tab">
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
              <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                <h3>Konsolidasi</h3>
                <div class="table-responsive">
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
                    echo '<td>Konsolidasi</td>'; 
                    echo '<td>'.number_format($total_bd).'</td>';
                    echo '<td>'.number_format($row_console->bd_bucket_0).'</td>';
                    echo '<td>'.number_format($row_console->bd_bucket_1).'</td>';
                    echo '<td>'.number_format($row_console->bd_bucket_2).'</td>';
                    echo '<td>'.number_format($row_console->bd_bucket_3).'</td>';
                    echo '<td>'.number_format($row_console->bd_npl).'</td>';
                    echo '<td>'.$row_console->rasio_bucket_0.'</td>';
                    echo '<td>'.$row_console->rasio_bucket_1.'</td>';
                    echo '<td>'.$row_console->rasio_bucket_2.'</td>';
                    echo '<td>'.$row_console->rasio_bucket_3.'</td>';
                    echo '<td>'.$row_console->rasio_npl.'</td></tr>';
                $i++; } ?>   
            </tbody>
        </table>
    </div>
        <h3>Area</h3>
        <div class="table-responsive">
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
                    echo '<td>'.number_format($total_bd).'</td>';
                    echo '<td>'.number_format($row_area->bd_bucket_0).'</td>';
                    echo '<td>'.number_format($row_area->bd_bucket_1).'</td>';
                    echo '<td>'.number_format($row_area->bd_bucket_2).'</td>';
                    echo '<td>'.number_format($row_area->bd_bucket_3).'</td>';
                    echo '<td>'.number_format($row_area->bd_npl).'</td>';
                    echo '<td>'.$row_area->rasio_bucket_0.'</td>';
                    echo '<td>'.$row_area->rasio_bucket_1.'</td>';
                    echo '<td>'.$row_area->rasio_bucket_2.'</td>';
                    echo '<td>'.$row_area->rasio_bucket_3.'</td>';
                    echo '<td>'.$row_area->rasio_npl.'</td></tr>';
                $i++; } ?>   
            </tbody>
        </table>
    </div>
        <h3>Cabang</h3>
        <table id="listData3" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KANTOR</th>
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
                    echo '<td>'.number_format($total_bd).'</td>';
                    echo '<td>'.number_format($row_cabang->bd_bucket_0).'</td>';
                    echo '<td>'.number_format($row_cabang->bd_bucket_1).'</td>';
                    echo '<td>'.number_format($row_cabang->bd_bucket_2).'</td>';
                    echo '<td>'.number_format($row_cabang->bd_bucket_3).'</td>';
                    echo '<td>'.number_format($row_cabang->bd_npl).'</td>';
                    echo '<td>'.$row_cabang->rasio_bucket_0.'</td>';
                    echo '<td>'.$row_cabang->rasio_bucket_1.'</td>';
                    echo '<td>'.$row_cabang->rasio_bucket_2.'</td>';
                    echo '<td>'.$row_cabang->rasio_bucket_3.'</td>';
                    echo '<td>'.$row_cabang->rasio_npl.'</td></tr>';
                $i++; } ?>   
            </tbody>
        </table>
              </div>
            </div>
    
    </div>
<div class="modal-footer">
    <a href="javascript:void(0)" onclick="bucket_0_all_console_export()" class="btn btn-primary">Export to Excel</a>
    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger">Tutup</a>
</div>
<script>
    function bucket_0_all_console_export() {

    var data_tgl = $('input[name="date_0_all_console"]').val();
    var winURL        = "<?php echo base_url('modal_bootstrap_controller/bucket_0_all_console_export') ?>";
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
