
             <div class="modal-header">
                 <h4 class="modal-title title-chart-area">Data Nasabah</h4>
                 <button type="button" class="close" id="close-modal-1" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputArea" class="col-sm-3 col-form-label">Nama</label>
                            <input type="text" name="nama_nasabah" class="form-control col-sm-8" value="<?php echo $get_data_nasabah_id->NAMA_NASABAH;?>" readonly/>
                        </div>
                        <div class="form-group row">
                            <label for="inputCabang" class="col-sm-3 col-form-label">Alamat</label>
                            <textarea class="form-control col-sm-8" disabled><?php echo $get_data_nasabah_id->ALAMAT;?></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="inputArea" class="col-sm-3 col-form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control col-sm-8" value="<?php echo $get_data_nasabah_id->KECAMATAN;?>" readonly/>
                        </div>
                        <div class="form-group row">
                            <label for="inputArea" class="col-sm-3 col-form-label">Kelurahan</label>
                            <input type="text" name="nama_nasabah" class="form-control col-sm-8" value="<?php echo $get_data_nasabah_id->DESA;?>" readonly/>
                        </div>
                        <div class="form-group row">
                            <label for="inputArea" class="col-sm-3 col-form-label">Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control col-sm-8" value="<?php echo $get_data_nasabah_id->kodepos;?>" readonly/>
                        </div>
                    </form>
                </div>
                 </div>
             </div>

 <!-- Modal -->

 <script>
  $('#close-modal-1').click(function(){
    $('#modal-1').modal('hide');
  });
</script>