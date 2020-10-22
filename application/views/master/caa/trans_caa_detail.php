<style type="text/css">
    p.preee {
        white-space: pre;
    }
</style>
<div class="modal-header">
    <h5 class="modal-title">Form Credit Authority Approval</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body" style="height:500px; overflow-y:scroll">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pengajuan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="approval-tab" data-toggle="tab" href="#approval" role="tab" aria-controls="approval" aria-selected="false">Approval</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <small>Nama Nasabah :</small>
                        <input type="text" class="form-control form-control-sm" value="<?php echo strtoupper($nama_debitur) ?>" readonly>
                    </div>
                    <div class="col-md-2">
                        <small>Non Standard :</small>
                        <input type="text" class="form-control form-control-sm" value="<?php echo strtoupper($penyimpangan_caa) ?>" readonly>
                    </div>
                    <div class="col-md-2">
                        <small>Team CAA :</small>
                        <select class="form-control form-control-sm" readonly>
                            <?php
                            $explode_team = explode(",", $team_caa);
                            echo "<option>$team_caa</option>";
                            foreach ($explode_team as $res) :
                                echo "<option>$res</option>";
                            endforeach
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <small>Plafon</small>
                        <input type="text" class="form-control form-control-sm" value="<?php echo number_format($plafon, 0, '', '.') ?>" readonly>
                    </div>
                    <div class="col-md-1">
                        <small>Tenor</small>
                        <input type="text" class="form-control form-control-sm" value="<?php echo number_format($tenor, 0, '', '.') ?>" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <small class="text-danger"><b>Rekomendasi AO :</b></small>

                        <input type="text" class="form-control form-control-sm" value="<?php echo $rekomendasi_ao ?>" readonly>

                        <small>Notes :</small>
                        <textarea name="rincian" class="form-control form-control-sm" placeholder="Notes AO" rows="3" readonly><?php echo $catatan_ao ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <small class="text-info"><b>Rekomendasi CA :</b></small>

                        <input type="text" class="form-control form-control-sm" value="<?php echo $rekomendasi_ca ?>" readonly>

                        <small>Notes :</small>
                        <textarea name="rincian" class="form-control form-control-sm" placeholder="Notes CA" rows="3" readonly><?php echo $catatan_ca ?></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <small class="text-warning"><b>1P + 5C (CA):</b></small>
                        <textarea name="rincian" class="form-control form-control-sm" placeholder="1P + 5C (CA)" rows="5" readonly><?php echo $kualitatif_analisa ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <small class="text-warning"><b>Non Standard Transaction:</b></small>
                        <textarea name="rincian" class="form-control form-control-sm" placeholder="Non Standard Transaction" rows="5" readonly><?php echo $hasil_nst ?></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <small>Info Analisa CC</small>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm" style="white-space: nowrap;font-size:12px">
                        <thead class="bg-danger">
                            <tr>
                                <th>Nama Bank</th>
                                <th>Plafon</th>
                                <th>Baki Debet</th>
                                <th>Angsuran</th>
                                <th>Klektabilitas</th>
                                <th>Jenis Kredit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($info_analisa_cc['table']) : ?>
                                <?php foreach ($info_analisa_cc['table'] as $iacc) : ?>
                                    <tr>
                                        <td><?php echo $iacc['nama_bank'] ?></td>
                                        <td class="text-right"><?php echo number_format($iacc['plafon'], 0, '', '.') ?></td>
                                        <td class="text-right"><?php echo number_format($iacc['baki_debet'], 0, '', '.') ?></td>
                                        <td class="text-right"><?php echo number_format($iacc['angsuran'], 0, '', '.') ?></td>
                                        <td class="text-right"><?php echo number_format($iacc['collectabilitas'], 0, '', '.') ?></td>
                                        <td><?php echo $iacc['jenis_kredit'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <tr>
                                    <th>Jumlah</th>
                                    <th class="text-right"><?php echo number_format($info_analisa_cc['ttl_plafon'], 0, '', '.') ?></th>
                                    <th class="text-right"><?php echo number_format($info_analisa_cc['ttl_debet'], 0, '', '.') ?></th>
                                    <th class="text-right"><?php echo number_format($info_analisa_cc['ttl_angsuran'], 0, '', '.') ?></th>
                                    <th class="text-right"><?php echo number_format($info_analisa_cc['collectabilitas_terendah'], 0, '', '.') ?></th>
                                    <th></th>
                                </tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="form-group">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php if (isset($agunan_tanah)) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" id="tanah-tab" data-toggle="tab" href="#tanah" role="tab" aria-controls="tanah" aria-selected="true">Tanah</a>
                        </li>
                    <?php endif ?>
                    <?php if (isset($agunan_kendaraan)) : ?>
                        <li class="nav-item">
                            <a class="nav-link" id="kendaraan-tab" data-toggle="tab" href="#kendaraan" role="tab" aria-controls="kendaraan" aria-selected="false">Kendaraan</a>
                        </li>
                    <?php endif ?>
                </ul>
                <div class="tab-content" id="myTabContent" style="font-size:12px">
                    <?php if (isset($agunan_tanah)) : ?>
                        <div class="tab-pane fade show active" id="tanah" role="tabpanel" aria-labelledby="tanah-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th>Jenis</th>
                                            <th>Lokasi</th>
                                            <th>Luas Tanah</th>
                                            <th>Luas Bangunan</th>
                                            <th>Tgl Berlaku SHGB</th>
                                            <th>Pemilik Sertifikat</th>
                                            <th>No Ukur</th>
                                            <th>Lampiran Bagian Depan</th>
                                            <th>Lampiran Bagian Jalan</th>
                                            <th>Lampiran Bagian Ruang Tamu</th>
                                            <th>Lampiran Bagian Kamar Mandi</th>
                                            <th>Lampiran Bagian Dapur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $jml_agunan_tanah = isset($agunan_tanah) ? count($agunan_tanah) : 0;
                                        for ($i = 0; $i < $jml_agunan_tanah; $i++) :
                                            $jenis_agunan                   = $agunan_tanah[$i]['jenis'];
                                            $lokasi_agunan                  = $agunan_tanah[$i]['tipe_lokasi'];
                                            $tanah_agunan                   = $agunan_tanah[$i]['luas']['tanah'];
                                            $bangunan_agunan                = $agunan_tanah[$i]['luas']['bangunan'];
                                            $tgl_berlaku_shgb_agunan        = $agunan_tanah[$i]['tgl_berlaku_shgb'];
                                            $nama_pemilik_sertifikat_agunan = $agunan_tanah[$i]['nama_pemilik_sertifikat'];
                                            $tgl_atau_no_ukur_agunan        = $agunan_tanah[$i]['tgl_atau_no_ukur'];
                                            $agunan_bag_depan               = $agunan_tanah[$i]['lampiran']['agunan_bag_depan'];
                                            $agunan_bag_jalan               = $agunan_tanah[$i]['lampiran']['agunan_bag_jalan'];
                                            $agunan_bag_ruangtamu           = $agunan_tanah[$i]['lampiran']['agunan_bag_ruangtamu'];
                                            $agunan_bag_kamarmandi          = $agunan_tanah[$i]['lampiran']['agunan_bag_kamarmandi'];
                                            $agunan_bag_dapur               = $agunan_tanah[$i]['lampiran']['agunan_bag_dapur'];
                                            echo "<tr>";

                                            if ($jenis_agunan != null) {
                                                echo "<td>$jenis_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($lokasi_agunan != null) {
                                                echo "<td>$lokasi_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($tanah_agunan != null) {
                                                echo "<td>$tanah_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($bangunan_agunan != null) {
                                                echo "<td>$bangunan_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($tgl_berlaku_shgb_agunan != null) {
                                                echo "<td>$tgl_berlaku_shgb_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($nama_pemilik_sertifikat_agunan != null) {
                                                echo "<td>$nama_pemilik_sertifikat_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($tgl_atau_no_ukur_agunan != null) {
                                                echo "<td>$tgl_atau_no_ukur_agunan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($agunan_bag_depan != null) {
                                                echo "<td><a href='$url$agunan_bag_depan' target='_blank'>Agunan Bagian Depan</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($agunan_bag_jalan != null) {
                                                echo "<td><a href='$url$agunan_bag_jalan' target='_blank'>Agunan Bagian Jalan</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($agunan_bag_ruangtamu != null) {
                                                echo "<td><a href='$url$agunan_bag_ruangtamu' target='_blank'>Agunan Bagian Ruang Tamu</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($agunan_bag_kamarmandi != null) {
                                                echo "<td><a href='$url$agunan_bag_kamarmandi' target='_blank'>Agunan Bagian Kamar Mandi</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($agunan_bag_dapur != null) {
                                                echo "<td><a href='$url$agunan_bag_dapur' target='_blank'>Agunan Bagian Dapur</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            echo "</tr>";
                                        endfor
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (isset($agunan_kendaraan)) : ?>
                        <div class="tab-pane fade" id="kendaraan" role="tabpanel" aria-labelledby="kendaraan-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th>Jenis</th>
                                            <th>Tipe</th>
                                            <th>Merk</th>
                                            <th>Tgl Pajak</th>
                                            <th>Tgl Stnk</th>
                                            <th>Pemilik Kendaraan</th>
                                            <th>No BPKB</th>
                                            <th>No Polisi</th>
                                            <th>No STNK</th>
                                            <th>Lampiran Depan</th>
                                            <th>Lampiran Kanan</th>
                                            <th>Lampiran Kiri</th>
                                            <th>Lampiran Belakang</th>
                                            <th>Lampiran Dalam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $jml_agunan_kendaraan = isset($agunan_kendaraan) ? count($agunan_kendaraan) : 0;
                                        for ($i = 0; $i < $jml_agunan_kendaraan; $i++) :
                                            $jenis_kendaraan                = $agunan_kendaraan[$i]['jenis'];
                                            $tipe_kendaraan                 = $agunan_kendaraan[$i]['tipe_kendaraan'];
                                            $merk_kendaraan                 = $agunan_kendaraan[$i]['merk'];
                                            $tgl_kadaluarsa_pajak_kendaraan = $agunan_kendaraan[$i]['tgl_kadaluarsa_pajak'];
                                            $tgl_kadaluarsa_stnk_kendaraan  = $agunan_kendaraan[$i]['tgl_kadaluarsa_stnk'];
                                            $nama_pemilik_kendaraan         = $agunan_kendaraan[$i]['nama_pemilik'];
                                            $no_bpkb_kendaraan              = $agunan_kendaraan[$i]['no_bpkb'];
                                            $no_polisi_kendaraan            = $agunan_kendaraan[$i]['no_polisi'];
                                            $no_stnk_kendaraan              = $agunan_kendaraan[$i]['no_stnk'];
                                            $kendaraan_bag_depan            = $agunan_kendaraan[$i]['lampiran']['agunan_depan'];
                                            $kendaraan_bag_kanan            = $agunan_kendaraan[$i]['lampiran']['agunan_kanan'];
                                            $kendaraan_bag_kiri             = $agunan_kendaraan[$i]['lampiran']['agunan_kiri'];
                                            $kendaraan_bag_belakang         = $agunan_kendaraan[$i]['lampiran']['agunan_belakang'];
                                            $kendaraan_bag_dalam            = $agunan_kendaraan[$i]['lampiran']['agunan_dalam'];

                                            echo "<tr>";

                                            if ($jenis_kendaraan != null) {
                                                echo "<td>$jenis_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($tipe_kendaraan != null) {
                                                echo "<td>$tipe_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($merk_kendaraan != null) {
                                                echo "<td>$merk_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($tgl_kadaluarsa_pajak_kendaraan != null) {
                                                echo "<td>$tgl_kadaluarsa_pajak_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($tgl_kadaluarsa_stnk_kendaraan != null) {
                                                echo "<td>$tgl_kadaluarsa_stnk_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($nama_pemilik_kendaraan != null) {
                                                echo "<td>$nama_pemilik_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($no_bpkb_kendaraan != null) {
                                                echo "<td>$no_bpkb_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($no_polisi_kendaraan != null) {
                                                echo "<td>$no_polisi_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($no_stnk_kendaraan != null) {
                                                echo "<td>$no_stnk_kendaraan</td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($kendaraan_bag_depan != null) {
                                                echo "<td><a href='$url_img$kendaraan_bag_depan' target='_blank'>Kendaraan Bagian Depan</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($kendaraan_bag_kanan != null) {
                                                echo "<td><a href='$url_img$kendaraan_bag_kanan' target='_blank'>Kendaraan Bagian Kanan</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($kendaraan_bag_kiri != null) {
                                                echo "<td><a href='$url_img$kendaraan_bag_kiri' target='_blank'>Kendaraan Bagian Kiri</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($kendaraan_bag_belakang != null) {
                                                echo "<td><a href='$url_img$kendaraan_bag_belakang' target='_blank'>Kendaraan Bagian Belakang</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            if ($kendaraan_bag_dalam != null) {
                                                echo "<td><a href='$url_img$kendaraan_bag_dalam' target='_blank'>Kendaraan Bagian Dalam</a></td>";
                                            } else {
                                                echo "<td>-</td>";
                                            }

                                            echo "</tr>";
                                        endfor
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>

            <div class="form-group">
                <b>Analisa Kuantitatif</b>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <small>Total Pendapatan</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo number_format($kuantitatif_ttl_pendapatan, 0, '', '.') ?>" readonly>
                </div>
                <div class="col-md-6">
                    <small>Total Pengeluaran</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo number_format($kuantitatif_ttl_pengeluaran, 0, '', '.') ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <small>Penghasilan Bersih</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo number_format($kuantitatif_pendapatan_bersih, 0, '', '.') ?>" readonly>
                </div>
                <div class="col-md-6">
                    <small>Angsuran</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo number_format($kuantitatif_angsuran, 0, '', '.') ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <small>LTV</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo $kuantitatif_ltv . " %" ?>" readonly>
                </div>
                <div class="col-md-6">
                    <small>DSR</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo $kuantitatif_dsr . " %" ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <small>IDIR</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo $kuantitatif_idir . " %" ?>" readonly>
                </div>
                <div class="col-md-6">
                    <small>HASIL</small>
                    <input type="text" class="form-control form-control-sm" value="<?php echo strtoupper($kuantitatif_hasil) ?>" readonly>
                </div>
            </div>
            <br>

        </div>

        <div class="tab-pane fade" id="approval" role="tabpanel" aria-labelledby="approval-tab">
            <?php if ($btn_app == 'Y') : ?>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingACAA">
                            <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target="#collapseACAA" aria-expanded="true" aria-controls="collapseACAA">
                                <i class="fa fa-comment"></i>
                            </button>
                            <small>Approval Team CAA</small>
                        </div>

                        <div id="collapseACAA" class="collapse" aria-labelledby="headingACAA" data-parent="#accordionExample">
                            <div class="card-body">
                                <form id="frm_app_team_caa">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <label><small>Plafon</small></label>
                                                <input id="rupiah" type="text" name="plafon" placeholder="Plafon" class="form-control form-control-sm" value="<?php echo number_format($plafon_ca, 0, '', '.') ?>" onkeyup="radio_done()">
                                            </div>
                                            <div class="col-md-2">
                                                <label><small>Tenor</small></label>
                                                <input type="number" name="tenor" placeholder="Tenor" class="form-control form-control-sm" value="<?php echo $tenor_ca ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="rincian" placeholder="Notes..."></textarea>
                                    </div>
                                    <input type="hidden" value="SEFIN Approval Pengajuan Debitur <?php echo strtoupper($nama_debitur) ?>" id="subyek">
                                    <input type="hidden" value="<?php echo $email ?>" id="tujuan">
                                    <input type="hidden" value="welly@kreditmandiri.co.id" id="cc">
                                    <textarea hidden id="pesan" class="form-control">
                                        Dear Bapak/Ibu
                                        <?php echo $nama ?>
                                        Di tempat

                                        Mohon bantu proses approval pengajuan pinjaman atas nama debitur <?php echo strtoupper($nama_debitur) ?> dengan plafon sebesar <?php echo number_format($plafon, 0, '', '.') ?> dan tenor selama <?php echo number_format($tenor, 0, '', '.') ?> dari kantor cabang <?php echo strtoupper($cabang) ?>.

                                        Atas perhatiannya kami ucapkan terima kasih

                                        SEFIN SYSTEM
                                    </textarea>

                                    <div class=" form-group">
                                        <div class="row">
                                            <!-- <div class="col-md-2">
                                            <input type="radio" name="status" value="<?php echo $status_app ?>">
                                            <small><?php echo ucfirst($status_app) . $forward_to ?></small>
                                        </div> -->

                                            <div class="col-md-3 radio_done"></div>
                                            <div class="col-md-3 radio_accept"></div>
                                            <div class="col-md-3">
                                                <input type="radio" name="status" value="return"> <small>Return To CA</small>
                                            </div>
                                            <div class="col-md-3" id="not_recommend">
                                                <input type="radio" name="status" value="reject"> <small>Not Recommended</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm" type="submit">Approve</button>
                                        <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm">Batal</a>
                                    </div>

                                    <input type="hidden" name="url_api" value="<?php echo $url_api ?>">
                                    <input type="hidden" name="tujuan_forward" value="<?php echo $tujuan_forward ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

                <?php if (!empty($result_team_caa)) : ?>
                    <?php foreach ($result_team_caa['data'] as $result_team_caa_list) : ?>
                        <?php if (!empty($result_team_caa_list['user_id'])) : ?>
                            <div class="card" style="font-size:10pt">
                                <div class="card-header text-primary">
                                    <?php echo $result_team_caa_list['nama_pic'] ?><br>
                                    <small><?php echo date('h:i d-m-Y', strtotime($result_team_caa_list['tanggal'])) ?></small>
                                </div>
                                <div class="card-body">
                                    <textarea class="preee" disabled="" style="width:100%;height:-webkit-fill-available; background-color:#fff;">
                                        <?php echo $result_team_caa_list['rincian'] ?>
                                   </textarea>
                                    <small class="text-success"><?php echo number_format($result_team_caa_list['plafon'], 0, '', '.') . "-" . $result_team_caa_list['tenor'] ?> Bulan</small>

                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
                </div>
        </div>
    </div>

    <script>
        // console.log($('input[id=tujuan]', this).val());
        // console.log('<?php echo $status_crm ?>');

        radio_done();

        function radio_done() {
            var plafon = '<?php echo $plafon ?>';
            var plafon_max = '<?php echo $plafon_max ?>';
            var input_plafon = parseInt($('input[name="plafon"]').val());
            var status = '<?php echo $status_app ?>';
            var plafon_ca = '<?php echo $plafon_ca ?>';
            var nama_pic = ' <?php echo $nama_user['data']['nama'] ?>';
            var id_mj_pic = ' <?php echo $id_mj_pic ?>';
            var status_crm = '<?php echo $status_crm ?>';
            // console.log(id_mj_pic);
            console.log(status_crm);
            console.log(status);

            // if (plafon <= plafon_max) {
            // if (input_plafon > plafon_max) {
            //     var radio_done = "" +
            //         "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
            //         "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
            //     $('.radio_done').html(radio_done);
            // } else 
            // if (status == 'forward' && nama_pic !== ' EDY SUKAYAT') {
            //     var radio_done = "" +
            //         "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
            //         "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
            //     $('.radio_done').html(radio_done);
            //     // var radio_accept = "" +
            //     //     "<input type='radio' name='status' value='accept'><small>Accept</small>";
            //     // $('.radio_accept').html(radio_accept);
            // } else 
            if (status == 'forward' && id_mj_pic == ' 9') {
                var radio_done = "" +
                    "<input type='radio' name='status_crm' value='Ya'> " +
                    "<input type='radio' hidden name='status' value='forward' checked> " +
                    "<small>Ya</small>";
                $('.radio_done').html(radio_done);
                var radio_accept = "" +
                    "<input type='radio' name='status_crm' value='Tidak'><small>Tidak</small>";
                $('.radio_accept').html(radio_accept);
                $('#not_recommend').hide();
            } else if (status == 'forward' && id_mj_pic == ' 6') {
                var radio_done = "" +
                    "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
                    "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
                $('.radio_done').html(radio_done);
                var radio_accept = "" +
                    "<input type='radio' name='status' value='accept'><small>Accept</small>";
                $('.radio_accept').html(radio_accept);
            } else if (status == 'forward' && id_mj_pic == ' 8') {
                var radio_done = "" +
                    "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
                    "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
                $('.radio_done').html(radio_done);
                var radio_accept = "" +
                    "<input type='radio' name='status' value='accept'><small>Accept</small>";
                $('.radio_accept').html(radio_accept);
            } else if (status_crm == 'Ya' && id_mj_pic == ' 11') {
                var radio_done = "<input type='radio' name='status' value='accept'> <small>Accept</small>";
                $('.radio_done').html(radio_done);
            } else if (status_crm == 'Tidak' && id_mj_pic == ' 11') {
                var radio_done = "" +
                    "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
                    "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
                $('.radio_done').html(radio_done);
            } else if (status == 'accept') {
                var radio_done = "<input type='radio' name='status' value='accept'> <small>Accept</small>";
                $('.radio_done').html(radio_done);
            }
            // } 
            else {
                var radio_done = "" +
                    "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
                    "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
                $('.radio_done').html(radio_done);

                // var radio_accept = "" +
                //     "<input type='radio' name='status' value='accept'><small>Accept</small>";
                // $('.radio_accept').html(radio_accept);
            }

            // var plafon = '<?php echo $plafon ?>';
            // var plafon_max = '<?php echo $plafon_max ?>';
            // var penyimpangan = '<?php echo $penyimpangan ?>';
            // var status_accept = '<?php echo $status_app ?>';
            // // var input_plafon = parseInt($('input[name="plafon"]').val());
            // var _input_plafon;
            // if (_input_plafon === undefined) {
            //     _input_plafon = $('input[name="plafon"]').val();
            // }
            // var input_plafon = parseInt(_input_plafon.replace(/[^\d,]/g, ""));

            // if ($result_team_caa.rows > 1) {
            // }

            // if (plafon <= plafon_max) {
            //     if (input_plafon > plafon_max) {
            //         var radio_done = "" +
            //             "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
            //             "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
            //         $('.radio_done').html(radio_done);
            //     } else {
            //         if (penyimpangan == 'TIDAK') {
            //             var radio_done = "<input type='radio' name='status' value='accept'> <small>Accept</small>";
            //         } else {
            //             var radio_done = "" +
            //                 "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
            //                 "<small><?php echo ucfirst($status_app) . $forward_to ?></small>" +
            //                 "<input type='radio' name='status' value='accept'> <small>Accept</small>";
            //         }
            //         $('.radio_done').html(radio_done);
            //     }
            // } else {
            //     var radio_done = "" +
            //         "<input type='radio' name='status' value='<?php echo $status_app ?>'> " +
            //         "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
            //     $('.radio_done').html(radio_done);

            // var radio_accept = "" +
            //     "<input type='radio' name='status' value='accept'><small>Accept</small>";
            // $('.radio_accept').html(radio_accept);
            // }
        }

        $('#frm_app_team_caa').on('submit', function(e) {
            var _input_plafon = $('input[name=plafon]', this).val();
            var input_plafon = parseInt(_input_plafon.replace(/[^\d,]/g, ""));
            var notes = $('textarea[name=rincian]', this).val();
            var status = $('input[name=status]:checked', this).val();
            if (status === 'return') {
                var url = $('input[name=url_api]').val();
                var plafon_max = '<?php echo $plafon_max ?>';
                e.preventDefault();
                var formData = new FormData();
                // formData.append('plafon',$('input[name=plafon]',this).val());
                formData.append('tenor', $('input[name=tenor]', this).val());
                formData.append('rincian', $('textarea[name=rincian]', this).val());
                formData.append('status', $('input[name=status]:checked', this).val());
                formData.append('tujuan_forward', $('input[name=tujuan_forward]', this).val());
                formData.append('status_crm', $('input[name=status_crm]:checked', this).val());

                // var input_plafon = parseInt($('input[name=plafon]',this).val());


                formData.append('plafon', input_plafon);

                $.ajax({
                        url: url,
                        data: formData,
                        type: 'POST',
                        processData: false,
                        contentType: false,
                        cache: false,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        beforeSend: function() {
                            $('.btn_approve_team_caa').html('<button class="btn btn-secondary btn-sm" type="submit" disabled>Approve</button>');
                        },
                    })
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil Approved', function() {
                            $.ajax({
                                    url: '<?php echo base_url('menu_controller/caa') ?>',
                                    dataType: 'html'
                                })
                                .done(function(response) {
                                    $('#main-content').html(response);
                                    NProgress.done();
                                })
                                .fail(function(jqXHR) {
                                    $('#main-content').load('<?php echo base_url('Rusak') ?>');
                                    NProgress.done();
                                });
                            $('.modal').modal('hide');
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        // alert('Approval gagal pastikan semua form terisi');
                        $('.btn_approve_team_caa').html('<button class="btn btn-primary btn-sm" type="submit" disabled>Approve</button>');
                        bootbox.alert(error);
                    });
            } else if (status === 'forward') {
                // if(input_plafon > plafon_max){
                //     alert('Plafon anda melebih maksimal '+plafon_max);
                // }else
                if (notes.length < 10) {
                    alert('Notes terlalu pendek')
                } else if (status === undefined) {
                    alert('Status approval masih kosong');
                }
                // else if(input_plafon < 10000000) {
                //     alert('Plafon yang anda masukan kurang dari 10.000.000');
                // }
                else {
                    var url = $('input[name=url_api]').val();
                    var plafon_max = '<?php echo $plafon_max ?>';
                    e.preventDefault();
                    var formData = new FormData();
                    // formData.append('plafon',$('input[name=plafon]',this).val());
                    formData.append('tenor', $('input[name=tenor]', this).val());
                    formData.append('rincian', $('textarea[name=rincian]', this).val());
                    formData.append('status', $('input[name=status]:checked', this).val());
                    formData.append('tujuan_forward', $('input[name=tujuan_forward]', this).val());
                    formData.append('status_crm', $('input[name=status_crm]:checked', this).val());

                    // var input_plafon = parseInt($('input[name=plafon]',this).val());
                    var _input_plafon = $('input[name=plafon]', this).val();
                    var input_plafon = parseInt(_input_plafon.replace(/[^\d,]/g, ""));
                    var notes = $('textarea[name=rincian]', this).val();
                    var status = $('input[name=status]:checked', this).val();

                    formData.append('plafon', input_plafon);

                    //email
                    formData.append('subyek', $('input[id=subyek]', this).val());
                    formData.append('tujuan', $('input[id=tujuan]', this).val());
                    formData.append('cc', $('input[id=cc]', this).val());
                    formData.append('pesan', $('textarea[id=pesan]', this).val());
                    console.log($('input[id=tujuan]', this).val());

                    $.ajax({
                            url: url,
                            data: formData,
                            type: 'POST',
                            processData: false,
                            contentType: false,
                            cache: false,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.btn_approve_team_caa').html('<button class="btn btn-secondary btn-sm" type="submit" disabled>Approve</button>');
                            },
                        })
                        .done(function(res) {
                            var data = res.data;
                            bootbox.alert('Data berhasil Approved', function() {
                                $.ajax({
                                        url: '<?php echo base_url('index.php/menu_controller/caa') ?>',
                                        dataType: 'html'
                                    })
                                    .done(function(response) {
                                        $('#main-content').html(response);
                                        NProgress.done();
                                    })
                                    .fail(function(jqXHR) {
                                        $('#main-content').load('<?php echo base_url('Rusak') ?>');
                                        NProgress.done();
                                    });
                                $('.modal').modal('hide');
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            // alert('Approval gagal pastikan semua form terisi');
                            $('.btn_approve_team_caa').html('<button class="btn btn-primary btn-sm" type="submit" disabled>Approve</button>');
                            bootbox.alert(error);
                        });
                }
            } else if (status === 'accept') {
                // if(input_plafon > plafon_max){
                //     alert('Plafon anda melebih maksimal '+plafon_max);
                // }else
                if (notes.length < 10) {
                    alert('Notes terlalu pendek')
                } else if (status === undefined) {
                    alert('Status approval masih kosong');
                }
                // else if(input_plafon < 10000000) {
                //     alert('Plafon yang anda masukan kurang dari 10.000.000');
                // }
                else {
                    var url = $('input[name=url_api]').val();
                    var plafon_max = '<?php echo $plafon_max ?>';
                    e.preventDefault();
                    var formData = new FormData();
                    // formData.append('plafon',$('input[name=plafon]',this).val());
                    formData.append('tenor', $('input[name=tenor]', this).val());
                    formData.append('rincian', $('textarea[name=rincian]', this).val());
                    formData.append('status', $('input[name=status]:checked', this).val());
                    formData.append('tujuan_forward', $('input[name=tujuan_forward]', this).val());
                    formData.append('status_crm', $('input[name=status_crm]:checked', this).val());

                    // var input_plafon = parseInt($('input[name=plafon]',this).val());
                    var _input_plafon = $('input[name=plafon]', this).val();
                    var input_plafon = parseInt(_input_plafon.replace(/[^\d,]/g, ""));
                    var notes = $('textarea[name=rincian]', this).val();
                    var status = $('input[name=status]:checked', this).val();

                    formData.append('plafon', input_plafon);

                    //email
                    // formData.append('subyek', $('input[id=subyek]', this).val());
                    // formData.append('tujuan', $('input[id=tujuan]', this).val());
                    // formData.append('cc', $('input[id=cc]', this).val());
                    // formData.append('pesan', $('textarea[id=pesan]', this).val());
                    // console.log($('input[id=tujuan]', this).val());

                    $.ajax({
                            url: url,
                            data: formData,
                            type: 'POST',
                            processData: false,
                            contentType: false,
                            cache: false,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.btn_approve_team_caa').html('<button class="btn btn-secondary btn-sm" type="submit" disabled>Approve</button>');
                            },
                        })
                        .done(function(res) {
                            var data = res.data;
                            bootbox.alert('Data berhasil Approved', function() {
                                $.ajax({
                                        url: '<?php echo base_url('index.php/menu_controller/caa') ?>',
                                        dataType: 'html'
                                    })
                                    .done(function(response) {
                                        $('#main-content').html(response);
                                        NProgress.done();
                                    })
                                    .fail(function(jqXHR) {
                                        $('#main-content').load('<?php echo base_url('Rusak') ?>');
                                        NProgress.done();
                                    });
                                $('.modal').modal('hide');
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            // alert('Approval gagal pastikan semua form terisi');
                            $('.btn_approve_team_caa').html('<button class="btn btn-primary btn-sm" type="submit" disabled>Approve</button>');
                            bootbox.alert(error);
                        });
                }
            } else if (status === 'reject') {
                var url = $('input[name=url_api]').val();
                var plafon_max = '<?php echo $plafon_max ?>';
                e.preventDefault();
                var formData = new FormData();
                // formData.append('plafon',$('input[name=plafon]',this).val());
                formData.append('tenor', $('input[name=tenor]', this).val());
                formData.append('rincian', $('textarea[name=rincian]', this).val());
                formData.append('status', $('input[name=status]:checked', this).val());
                formData.append('tujuan_forward', $('input[name=tujuan_forward]', this).val());
                formData.append('status_crm', $('input[name=status_crm]:checked', this).val());

                // var input_plafon = parseInt($('input[name=plafon]',this).val());

                formData.append('plafon', input_plafon);

                $.ajax({
                        url: url,
                        data: formData,
                        type: 'POST',
                        processData: false,
                        contentType: false,
                        cache: false,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        beforeSend: function() {
                            $('.btn_approve_team_caa').html('<button class="btn btn-secondary btn-sm" type="submit" disabled>Approve</button>');
                        },
                    })
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil Approved', function() {
                            $.ajax({
                                    url: '<?php echo base_url('menu_controller/caa') ?>',
                                    dataType: 'html'
                                })
                                .done(function(response) {
                                    $('#main-content').html(response);
                                    NProgress.done();
                                })
                                .fail(function(jqXHR) {
                                    $('#main-content').load('<?php echo base_url('Rusak') ?>');
                                    NProgress.done();
                                });
                            $('.modal').modal('hide');
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        // alert('Approval gagal pastikan semua form terisi');
                        $('.btn_approve_team_caa').html('<button class="btn btn-primary btn-sm" type="submit" disabled>Approve</button>');
                        bootbox.alert(error);
                    });
            }
        });


        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, '');
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
        }
    </script>