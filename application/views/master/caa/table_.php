<link href="<?php echo base_url('assets/dist/css/datepicker.min.css')?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js')?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CAA</h1>
                    <label>Credit Authority Approval</label>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Credit Authority Approval</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                        <?php if($get_user['data']['divisi_id'] == 'CA' || $get_user['data']['divisi_id'] == 'IT'): ?>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-id="00" data-target="#modal_caa">Pengajuan CAA</button>
                        <?php endif ?>
                            <table id="table_caa" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="10px"></th>
                                        <th>Nomor SO</th>
                                        <th>Nama Cadeb</th>
                                        <th>Plafon</th>
                                        <th>Tenor</th>
                                        <th>Rekomendasi AO</th>
                                        <th>Rekomendasi CA</th>
                                        <th>DSH</th>
                                        <th>DOO MGR</th>
                                        <th>AM</th>
                                        <th>CRM</th>
                                        <th>KEPATUHAN</th>
                                        <th>DIR BIS</th>
                                        <th>DIR RISK</th>
                                        <th>DIRUT</th>
                                    </tr>
                                </thead>
                                <tbody id="data_table_caa" style="font-size: 13px">
                                <?php if($result != 1): ?>
                                <?php $no=1;foreach($result['data'] as $res): ?>
                                    <?php if($res['status_caa']=='recommend'): ?>
                                    <tr ondblclick="app_team_caa(<?php echo $res['id_trans_so'] ?>)" style="cursor:pointer">
                                        <td>
                                            <form method="post" target="_blank" action="<?php echo base_url().'index.php/report/Memo_caa' ?>"> 
                                            <input type="hidden" name="id" value="<?php echo $res['id_trans_so'] ?>">
                                            <button type="submit" class="btn btn-success btn-sm edit" ><i class=" fa fa-file-pdf"></i></button>
                                            </form>
                                        </td>
                                        <td><?php echo $res['nomor_so'] ?></td>
                                        <td><?php echo $res['nama_debitur'] ?></td>
                                        <td class="text-right"><?php echo number_format($res['pengajuan']['plafon'],0,'','.') ?></td>
                                        <td class="text-right"><?php echo $res['pengajuan']['tenor'] ?></td>
                                        <td class="text-right"><?php echo number_format($res['rekomendasi_ao']['plafon'],0,'','.') ?></td>
                                        <td class="text-right"><?php echo number_format($res['rekomendasi_ca']['plafon'],0,'','.') ?></td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'DSH'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'DOO MGR'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'AM'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'CRM'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'KEPATUHAN'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'DIR BIS'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'DIR RISK'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                        <td class="text-right">
                                        <?php
                                            $team_caa_plafon = '-';
                                            for($i=0; $i<count($res['approval']); $i++):
                                                if($res['approval'][$i]['jabatan'] == 'DIR UT'){
                                                    if($res['approval'][$i]['plafon'] != NULL) {
                                                        if($res['approval'][$i]['status'] == 'accept'){
                                                            $team_caa_plafon = "<b class='text-success'>".number_format($res['approval'][$i]['plafon'], 0, '', '.')."</b>";
                                                        }else{
                                                            $team_caa_plafon = number_format($res['approval'][$i]['plafon'], 0, '', '.');
                                                        }
                                                    }else{
                                                        $team_caa_plafon = '0';
                                                    }
                                                }
                                            endfor;
                                            echo $team_caa_plafon;
                                        ?>
                                        </td>
                                    </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
</div>

<div class="modal fade in" id="modal_caa" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="view_modal_caa"></div>
    </div>
</div>

<div class="modal fade in" id="modal_caa_add" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content" id="view_modal_caa_add"></div>
    </div>
</div>

<div class="modal fade in" id="modal_trans_caa" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="view_modal_trans_caa"></div>
    </div>
</div>

<script>
    function formatRupiah(bilangan) {
        var	number_string = bilangan.toString(),
            sisa 	= number_string.length % 3,
            rupiah 	= number_string.substr(0, sisa),
            ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        return rupiah;
    }

$(document).ready(function () {
    $('#modal_caa').on('show.bs.modal', function (e) {
        let idx = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'caa_controller/pengajuan_caa',
            data :  'kode_cabang='+ idx,
            beforeSend: function(){
                let html =  "<div class='modal-body text-center'>"+
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>"+
                                "<a href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>"+
                            "</div>";
                $('#view_modal_caa').html(html);
            },
            success : function(data){
                $('#view_modal_caa').html(data);
            }
        })
    });

});

function app_team_caa(id)
{
    $('#modal_trans_caa').modal('show');
    $.ajax({
        type : 'post',
        url : 'caa_controller/trans_caa_detail',
        data :  'idx='+ id,
        beforeSend: function(){
            let html =  "<div class='modal-body text-center'>"+
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>"+
                            "<a href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>"+
                        "</div>";
            $('#view_modal_trans_caa').html(html);
        },
        success : function(data){
            $('#view_modal_trans_caa').html(data);
        }
    })
}
</script>