<form id="edit-master">
    <div class="modal-header">
        <h4 class="modal-title">Edit Data Master</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputCode">Kode kantor</label>
                    <input type="hidden" name="id" value="<?= $data_edit['data'][0]['id']; ?>">
                    <input type="text" name="kode_kantor" class="form-control" id="exampleInputCode" placeholder="Enter code" value="<?= $data_edit['data'][0]['kode_kantor']; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputAreaKerja">Area kerja</label>
                    <select class="form-control" name="area_kerja" id="exampleInputAreaKerja">
                        <?php foreach ($data_area_kerja as $key): ?>
                            <option value="<?= $key->nama_area_kerja; ?>" <?= ($data_edit['data'][0]['area_kerja']==$key->nama_area_kerja) ? 'selected' : '' ; ?> ><?= $key->nama_area_kerja; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputArea">Area</label>
                    <select class="form-control" name="area" id="exampleInputArea">
                        <?php foreach ($data_area as $key): ?>
                            <option value="<?= $key['kode_area']; ?>" <?= ($data_edit['data'][0]['area']==$key['kode_area']) ? 'selected' : '' ; ?>><?= $key['kode_area']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputTarget">Target</label>
                    <input type="text" name="target" class="form-control" id="exampleInputTarget" placeholder="Enter Target" value="<?= $data_edit['data'][0]['target']; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputBulan">Bulan</label>
                    <select class="form-control" name="bulan" id="exampleInputBulan">
                        <?php for ($i=1; $i <= 12; $i++) { ?>
                            <option value="<?=$i;?>" <?= ($data_edit['data'][0]['bulan']==$i) ? 'selected' : '' ; ?>><?=$i;?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputTahun">Tahun</label>
                    <select class="form-control" name="tahun" id="exampleInputTahun">
                        <?php $now=date('Y'); for ($a=2010;$a<=$now;$a++){?>
                        <option value='<?= $a; ?>' <?= ($data_edit['data'][0]['tahun']==$a) ? "selected" : "" ;?>><?= $a; ?></option>";
                        <?php } ?>
                    </select>
                </div>
            </div>
            
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>