<?php echo $params['custom_css'];?>
<script src="<?php echo base_url();?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/sweetalert2/sweetalert2.min.css">
<div class="content-wrapper" id="content">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Task Assignment Collector</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Collection</a>
            </li>
            <li class="breadcrumb-item active">Assignment</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="callout callout-info">
        <form class="form-horizontal">
                            <div class="form-group row ml-1 mr-1">
                                <label for="norek" class="col-form-label col-3">No Rekening:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" />
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddRekening"><i class="fa fa-plus-square"></i> PILIH</button>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                 <label for="collector" class="col-form-label col-3">Nama Kolektor:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_kolektor" name="nama_kolektor" />
                                    <input type="hidden" name="kode_group3" id="kode_group3"/>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddColektor"><i class="fa fa-plus-square"></i> PILIH</button>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="cabang" class="col-form-label col-3">Cabang:</label>
                                <div class="col-sm-5">
                                    <select class="form-control select2" name="cabang" id="cabang"></select>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="ospokok" class="col-form-label col-3">OS Pokok:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="os_pokok" name="os_pokok" />
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="tgl_jth_tempo" class="col-form-label col-3">Tanggal Jatuh Tempo:</label>
                                <div class="col-sm-5">
                                   <input type="date" class="form-control" id="tgl_jt_tempo" name="tgl_jt_tempo"  data-date-format="d-m-Y"/>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="ftangsuran" class="col-form-label col-3">FT Angsuran:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="ft_angsuran" name="ft_angsuran"/>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="fthari" class="col-form-label col-3">FT Hari:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="ft_hari" name="ft_hari"/>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="jml_angsuran" class="col-form-label col-3">Jumlah Angsuran:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="jumlah_angsuran" name="jumlah_angsuran" />
                                </div>
                            </div>
                             <div class="form-group row ml-1 mr-1">
                                <label for="denda" class="col-form-label col-3">Denda:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="denda" name="denda" />
                                </div>
                            </div>
                        </form>
      </div>
    </div>
  </section>
</div>