<div id='contentData'>
    <div id="lihat_data_target" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Target Lending</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Target Lending</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" id="load_edit">
                            <div class="box-body table-responsive no-padding">
                                <button class="btn btn-primary tambah" id="addButton" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                <table id="table_target_lending" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;"
                                >
                                    <thead style="font-size: 12px;text-align:center;" class="bg-danger">
                                                            <!-- <tr>
                                        <th rowspan="2" colspan="1" >
                                            Nama area kerja
                                        </th>
                                        <th rowspan="2" colspan="1">
                                            Kategori
                                        </th>
                                        <th rowspan="1" colspan="5" >
                                            Marketing
                                        </th>
                                    </tr>
                                    <tr>
                                        <th >Target Lending</th>
                                        <th >Target Baki Debet</th>
                                    </tr>                                 -->

                                    <tr>
                                        <th>Kode Kantor</th>
                                        <th>Area Kerja</th>
                                        <th>Area</th>
                                        <th>Target</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        

                                    </tr>
                                    </thead>
                                    <tbody id='show_data'>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
    </div>
</div>


    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_target_lending').DataTable();
        
     } );
        </script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<?php $this->view('master/target_lending/table_target_js.php'); ?>
