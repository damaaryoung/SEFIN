<div class="modal-header">
    <h5 class="modal-title">Data Memorandum Credit Analyst</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body" style="height:500px; overflow-y:scroll">
    <div class="table-responsive">
        <table id="table_pengajuan_caa" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
            <thead style="font-size: 14px" class="bg-danger">
                <tr>
                    <th></th>
                    <th>No Aplikasi CA</th>
                    <th>Calon Debitur</th>
                    <!-- <th>Jaminan</th> -->
                    <th>Plafon</th>
                    <th>Tenor</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody style="font-size: 11px">
                <?php if($result['code']=='200'): ?>
                    <?php foreach($result['data'] as $res): ?>
                    <?php if($res['status_caa'] == 'null' || $res['status_caa'] == 'waiting'): ?>
                        <?php
                            // for($i=0;$i<count($res['agunan']['tanah']);$i++):
                            //     $arr_at[] = $res['agunan']['tanah'][$i]['jenis'];
                            // endfor;
                            // if(count($arr_at) > 0){
                            //     $data_at = implode(",", $arr_at);
                            // }else{
                            //     $data_at = null;
                            // }

                            // for($i=0;$i<count($res['agunan']['kendaraan']);$i++):
                            //     $arr_ak[] = $res['agunan']['kendaraan'][$i]['jenis'];
                            // endfor;
                            // if(count($arr_ak) > 0){
                            //     $data_ak = ",".implode(",", $arr_ak);
                            // }else{
                            //     $data_ak = null;
                            // }
                            // $data_agunana = $data_at.$data_ak;
                        ?>
                <tr>
                    <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_caa_add" data-id="<?php echo $res['id_trans_so'] ?>"><i class="fa fa-check"></i></button></td>
                    <td><?php echo $res['nomor_ca'] ?></td>
                    <td><?php echo strtoupper($res['nama_debitur']) ?></td>
                    <!-- <td><?php echo strtoupper($data_agunana) ?></td> -->
                    <td class="text-right"><?php echo number_format($res['pengajuan']['plafon'],0,'','.') ?></td>
                    <td class="text-right"><?php echo $res['pengajuan']['tenor'] ?></td>
                    <td><?php echo strtoupper($res['status_caa']) ?></td>
                    <td><?php echo $res['tgl_transaksi'] ?></td>
                </tr>
                    <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function () {
    $('#table_pengajuan_caa').DataTable({ 
        "bSort" : false,
    });

    $('#modal_caa_add').on('show.bs.modal', function (e) {
        let idx = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'caa_controller/pengajuan_caa_ca',
            data :  'idx='+ idx,
            beforeSend: function(){
                let html =  "<div class='modal-body text-center'>"+
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>"+
                                "<a href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>"+
                            "</div>";
                $('#view_modal_caa_add').html(html);
            },
            success : function(data){
                $('#view_modal_caa_add').html(data);
            }
        })
    });

});
</script>