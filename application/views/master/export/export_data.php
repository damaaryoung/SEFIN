<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Export Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Export Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" id="form_report">
                        <?php echo form_open_multipart('Export/export'); ?>
                        <div class="row">
                            <div class="form-group col-md">
                                <label>Dari Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="dari_tgl" name="dari_tgl" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <label>Sampai Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="sampai_tgl" name="sampai_tgl" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md">
                                <label>Keperluan<span class="required_notification">*</span></label>
                                <select name="select_keperluan" id="select_keperluan" class="form-control select2 select2-danger Keperluan" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="IDEB">IDEB</option>
                                    <option value="HM">HM</option>
                                    <option value="AO">AO</option>
                                    <option value="CA">CA</option>
                                    <option value="CAA">CAA</option>
                                    <option value="LPDK">LPDK</option>
                                    <option value="Pipeline Lending">Pipeline Lending</option>
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <div style="display: none;" id="status_hm_selected">
                                    <label>Status HM<span class="required_notification">*</span></label>
                                    <select name="select_status_hm" id="select_keperluan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option value="">--Pilih--</option>
                                        <option value="1">APPROVED</option>
                                        <option value="2">REJECTED</option>
                                        <option value="0">WAITING</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <label>Area</label>
                                <select name="select_area" id="select_area" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <label>Cabang</label>
                                <select name="select_cabang" id="select_cabang" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                </select>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success" style="float: right;"><img src="<?php echo base_url('assets/dist/img/excel.png') ?>" style="width: 26px;"></img>EXPORT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script type="text/javascript">
    $( ".Keperluan" ).change(function() {
      var Keperluan=$( ".Keperluan" ).val();
      if (Keperluan==='HM') {
        $("#status_hm_selected").css({display: "block"});
      }else{
        $("#status_hm_selected").css({display: "none"});
      }
    });

    var keperluanSelect = document.getElementById("select_keperluan");
    keperluanSelect.addEventListener("change", function(e) {
        var selectedKeperluan = $("#select_keperluan option:selected").val();

        if (selectedKeperluan == "Pipeline Lending") {
            $('#select_area').prop('disabled', 'disabled');
            $('#select_cabang').prop('disabled', 'disabled');
        } else {
            $('#select_area').prop('disabled', false);
            $('#select_cabang').prop('disabled', false);
        }
        
    });
    
    $('#form_report').on('submit', function(e) {
        if (document.getElementById('dari_tgl').value == "") {
            bootbox.alert("Dari Tanggal Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('sampai_tgl').value == "") {
            bootbox.alert("Sampai Tanggal Di Isi !!!");
            return (false);
        }
        if (document.getElementById('select_keperluan').value == "") {
            bootbox.alert("Keperluan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_area').value == "") {
            if (document.getElementById('select_keperluan').value !== "Pipeline Lending"){
                bootbox.alert("Area Belum Di Pilih !!!");
                return (false);
            }
            
        }
        if (document.getElementById('select_cabang').value == "") {
            if (document.getElementById('select_keperluan').value !== "Pipeline Lending"){
                bootbox.alert("Cabang Belum Di Pilih !!!");
                return (false);
            }
        }
    })

    get_area = function(opts, id) {
        var url = '<?php echo $this->config->item('api_url'); ?>api/master/area_kerja';
        var data = opts;

        return $.ajax({
            type: 'GET',
            url: url,
            data: data,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    get_cabang = function(opts, id) {
        var url = '<?php echo $this->config->item('api_url'); ?>api/master/area_cabang';
        var data = opts;

        return $.ajax({
            type: 'GET',
            url: url,
            data: data,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    get_area()
        .done(function(res) {
            var select = [];
            var select1 = '<option value="" >--Pilih--</option>';
            var select2 = '<option value="SEMUA AREA">SEMUA AREA</option>';
            $.each(res.data, function(i, e) {
                var option = [
                    '<option value="' + e.nama_area + '">' + e.nama_area + '</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_report select[id=select_area]').html(select1 + select2 + select);
        })

    get_cabang()
        .done(function(res) {
            var select = [];
            var select1 = '<option value="">--Pilih--</option>';
            var select2 = '<option value="SEMUA CABANG">SEMUA CABANG</option>';
            $.each(res.data, function(i, e) {
                var option = [
                    '<option value="' + e.nama_cabang + '">' + e.nama_cabang + '</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_report select[id=select_cabang]').html(select1 + select2 + select);
        })
</script>