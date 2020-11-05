<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Master <small>Promosi</small></h3>
  </div>
  <!-- form start -->
  <form id="form-promosi">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Promosi</label>
            <input type="text" readonly disabled name="tanggal_promosi" value="<?= date('Y-m-d H:i:s') ?>" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputPassword1">Lokasi Promosi</label>
            <input type="text" readonly disabled name="tanggal_promosi" class="form-control lokasi-kordinat">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputFile">Swafoto</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="swafoto">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <!-- form ended -->
</div>
