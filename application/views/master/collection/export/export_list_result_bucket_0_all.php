<?php
    header('Pragma: public');
    header('Cache-control: private');
    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-type: application/x-msexcel; charset=utf-8");
    header("Content-Disposition: attachment; filename=Report-Data-Nasabah-0_ALL-By-MB-Area.xlsx");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
        
        <h3>Console</h3>
        <table id="listData" class="table table-striped table-bordered table-hover dataTable">
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
        <table id="listData" class="table table-striped table-bordered table-hover dataTable">
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
        <table id="listData" class="table table-striped table-bordered table-hover dataTable">
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

