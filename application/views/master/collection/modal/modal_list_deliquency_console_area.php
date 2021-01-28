
<div class="modal-header">
    <center><font size="4"><b>Deliquency Area</b></font></center>
</div>
<div class="modal-body" style="overflow-x:auto">
    <input type="hidden" name="date_deliquency_area" id="date_deliquency_area"/>
    <input type="hidden" name="kode_area" id="kode_area"/>
    <div class="table-responsive">
        <table id="myTable" width="100%" class="table table-striped table-bordered" style="white-space: nowrap; font-size:10px">
            <thead class="text-center">
                <tr>
                    <th colspan="16"><?php echo $tgl; ?></th>
                </tr>
                <tr>
                    <th rowspan="2" style="vertical-align:middle">AREA KERJA</th>
                    <th rowspan="2" style="vertical-align:middle">OS KREDIT</th>
                    <th colspan="2">0</th>
                    <th colspan="2">0+</th>
                    <th colspan="2">30+</th>
                    <th colspan="2">60+</th>
                    <th colspan="2">90+</th>
                    <th colspan="2">180+</th>
                    <th colspan="2">360+</th>
                </tr>
                <tr>
                    <th>BAKI DEBET</th>
                    <th>%</th>
                    
                    <th>BAKI DEBET</th>
                    <th>%</th>
                    
                    <th>BAKI DEBET</th>
                    <th>%</th>
                    
                    <th>BAKI DEBET</th>
                    <th>%</th>
                    
                    <th>BAKI DEBET</th>
                    <th>%</th>

                    <th>BAKI DEBET</th>
                    <th>%</th>

                    <th>BAKI DEBET</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result->result() as $res): ?>
                <tr>
                    <td><?php echo $res->nama_kantor ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_all, 0, ',', '.') ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_current, 0, ',', '.') ?></td>
                    <td style="text-align: right"><?php echo $res->rasio_current ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_0_plus, 0, ',', '.') ?></td>
                    <td style="text-align: right"><?php echo $res->rasio_0_plus ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_30_plus, 0, ',', '.') ?></td>
                    <td style="text-align: right"><?php echo $res->rasio_30_plus ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_60_plus, 0, ',', '.') ?></td>
                    <td style="text-align: right"><?php echo $res->rasio_60_plus ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_90_plus, 0, ',', '.') ?></td>
                    <td style="text-align: right"><?php echo $res->rasio_90_plus ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_180_plus, 0, ',', '.') ?>
                    </td>
                    <td style="text-align: right"><?php echo $res->rasio_180_plus ?></td>
                    <td style="text-align: right"><?php echo number_format($res->bd_360_plus, 0, ',', '.') ?>
                    </td>
                    <td style="text-align: right"><?php echo $res->rasio_180_plus ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </div>
<div class="modal-footer">
    <a href="javascript:void(0)" onclick="deliquency_console_export()" class="btn btn-primary">Export to Excel</a>
    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger">Tutup</a>
</div>
<script>
    function deliquency_console_export() {
    var data_tgl = $('input[name="date_deliquency_area"]').val();
    var data_kode_area = $('input[name="kode_area"]').val();

    var winURL        = "<?php echo base_url('modal_bootstrap_controller/deliquency_console_area_export') ?>";
    var winName       = "LAPORAN";
    var windowoption  = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';

    var input=[];
    input.push("<input type='hidden' name='data_tgl' value='"+data_tgl+"'><input type='hidden' name='data_kode_area' value='"+data_kode_area+"'>");


    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));

    var myWindowPrint = window.open('', winName,windowoption);
    $('body').find('form#frmprint').attr('target',winName).submit().remove();
}
</script>