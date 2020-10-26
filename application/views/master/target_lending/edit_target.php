<!-- <div id="lihat_detail" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Target Lending</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Target Lending</li>
                </ol>
            </div>
        </div>
    </div>
</section>
    <div class='container'> -->
    <div class='edit_target'>
    <!-- <?php print_r($get_data['data']['data'][0]['bulan']) ?> -->
        <form method="post" id="form_edit_target">
            
            <div class="form-group">
                <label>Area</label>
                <select name="area" id="area" class="area form-control">
                <option value="<?php echo $get_data['data']['data'][0]['area'] ?>">
                    <?php echo $get_data['data']['data'][0]['area'] ?></option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Area Kerja</label>
                <select name="area_kerja" id="area_kerjas" class="area_kerja form-control">
                    <option value="<?php echo $get_data['data']['data'][0]['area_kerja'] ?>">
                    <?php echo $get_data['data']['data'][0]['area_kerja'] ?></option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Kode Kantor</label>
                <input type="text" name="kode_kantor" class="form-control" id="kd_kantor" value='<?php echo $get_data['data']['data'][0]['kode_kantor'] ?>'>
            </div>
            
            <div class="form-group">
                <label>Target</label>
                <input type="text" name="target" class="form-control" id="target" value='<?php echo $get_data['data']['data'][0]['target'] ?>']>
            </div>

            <div class="form-group">
                <label>Bulan</label>
                <input type="text" name="bulan" class="form-control" 
                placeholder="Masukkan Bulan" id="bulan" value='<?php echo $get_data['data']['data'][0]['bulan'] ?>'>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun" value='<?php echo $get_data['data']['data'][0]['tahun'] ?>'>
            </div>
            
            <button type="submit" id="save" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<!-- </div> -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<?php $this->view('master/target_lending/edit_target_js.php'); ?>