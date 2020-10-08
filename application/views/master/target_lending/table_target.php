<section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <!-- <button class="btn btn-primary tambah" id="add_target_lending" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button> -->
                            <table id="table_target_lending" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;"
                            >
                                <thead style="font-size: 12px;text-align:center;" class="bg-warning">
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
                                    <th>Area Kerja</th>
                                    <th>Area</th>
                                    <th>Target</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                </tr>
                                </thead>
                                <tbody>
                            <?php
                            foreach ($data as $t){
                                ?>
                                <tr>
                                <td><?php echo $t['area_kerja']; ?></td>
                                <td><?php echo $t['area']; ?></td>
                                <td><?php echo $t['target']; ?></td>
                                <td><?php echo $t['bulan']; ?></td>
                                <td><?php echo $t['tahun']; ?></td>
                                </tr>
                                
                        
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

