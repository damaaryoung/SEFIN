<div class="modal-header">
    <h5 class="modal-title">Form Credit Authority Approval</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body" style="height:500px; overflow-y:scroll">
    <form id="frm_pengajuan_caa" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <small>Nama Nasabah :</small>
                <input type="text" placeholder="Nama Nasabah" value="<?php echo strtoupper($pengajuan_nama) ?>" class="form-control form-control-sm" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <small>Plafon Pengajuan</small>
                <input type="text" placeholder="Tenor Pengajuan" class="form-control form-control-sm" value="<?php echo number_format($pengajuan_plafon, 0, '', '.') ?>" readonly>
            </div>
            <div class="col-md-2">
                <small>Tenor</small>
                <input type="text" placeholder="Tenor Pengajuan" class="form-control form-control-sm" value="<?php echo $pengajuan_tenor ?>" readonly>
            </div>
        </div>

        <div class="row text-danger">
            <div class="col-md-8">
                <small>Rekomendasi AO (<?php echo $rekomendasi_ao_nama ?>)</small>
            </div>
            <div class="col-md-4 text-right">
                <small><?php echo number_format($rekomendasi_ao_plafon, 0, '', '.') . "-" . $rekomendasi_ao_tenor . " Bulan" ?></small>
            </div>
        </div>

        <div class="form-group">
            <textarea name="rincian" class="form-control form-control-sm" placeholder="Notes keterangan AO" rows="3" readonly><?php echo $rekomendasi_ao_notes ?></textarea>
        </div>

        <div class="row text-info">
            <div class="col-md-8">
                <small>Rekomendasi CA (<?php echo $rekomendasi_ca_nama ?>)</small>
            </div>
            <div class="col-md-4 text-right">
                <small><?php echo number_format($rekomendasi_ca_plafon, 0, '', '.') . "-" . $rekomendasi_ca_tenor . " Bulan" ?></small>
                <input type="hidden" name="plafon_rekomendasi_ca" value="<?php echo $rekomendasi_ca_plafon ?>">
            </div>
        </div>

        <div class=" form-group">
            <textarea name="rincian" class="form-control form-control-sm" placeholder="Notes keterangan CA" rows="3" readonly><?php echo $rekomendasi_ca_notes ?></textarea>
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
                            <th>Kolektabilitas</th>
                            <th>Jenis Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_analisa_cc['table'] as $iacc) : ?>
                            <tr>
                                <td><?php echo $iacc['nama_bank'] ?></td>
                                <td class="text-right"><?php echo number_format($iacc['plafon'], 0, '', '.') ?></td>
                                <td class="text-right"><?php echo number_format($iacc['baki_debet'], 0, '', '.') ?></td>
                                <td class="text-right"><?php echo number_format($iacc['angsuran'], 0, '', '.') ?></td>
                                <td class="text-right"><?php echo $iacc['collectabilitas'] ?></td>
                                <td><?php echo $iacc['jenis_kredit'] ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <th>Jumlah</th>
                            <th class="text-right"><?php echo number_format($info_analisa_cc['ttl_plafon'], 0, '', '.') ?></th>
                            <th class="text-right"><?php echo number_format($info_analisa_cc['ttl_debet'], 0, '', '.') ?></th>
                            <th class="text-right"><?php echo number_format($info_analisa_cc['ttl_angsuran'], 0, '', '.') ?></th>
                            <th class="text-right"><?php echo $info_analisa_cc['collectabilitas_terendah'] ?></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="form-group">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tanah-tab" data-toggle="tab" href="#tanah" role="tab" aria-controls="tanah" aria-selected="true">Sertifikat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kendaraan-tab" data-toggle="tab" href="#kendaraan" role="tab" aria-controls="kendaraan" aria-selected="false">Kendaraan</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent" style="font-size:12px">
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
                                    <th>Tgl/No Ukur</th>
                                    <th>Lampiran Bagian Depan</th>
                                    <th>Lampiran Bagian Jalan</th>
                                    <th>Lampiran Bagian Ruang Tamu</th>
                                    <th>Lampiran Bagian Kamar Mandi</th>
                                    <th>Lampiran Bagian Dapur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($agunan_tanah); $i++) :
                                    $jenis_agunan           = $agunan_tanah[$i]['jenis'];
                                    $tipe_lokasi            = $agunan_tanah[$i]['tipe_lokasi'];
                                    $luas_tanah            = $agunan_tanah[$i]['luas']['tanah'];
                                    $luas_bangunan          = $agunan_tanah[$i]['luas']['bangunan'];
                                    $tgl_berlaku_shgb       = $agunan_tanah[$i]['tgl_berlaku_shgb'];
                                    $nama_pemilik_sertifikat = $agunan_tanah[$i]['nama_pemilik_sertifikat'];
                                    $tgl_atau_no_ukur       = $agunan_tanah[$i]['tgl_atau_no_ukur'];
                                    $agunan_bag_depan       = $agunan_tanah[$i]['lampiran']['agunan_bag_depan'];
                                    $agunan_bag_jalan       = $agunan_tanah[$i]['lampiran']['agunan_bag_jalan'];
                                    $agunan_bag_ruangtamu   = $agunan_tanah[$i]['lampiran']['agunan_bag_ruangtamu'];
                                    $agunan_bag_kamarmandi  = $agunan_tanah[$i]['lampiran']['agunan_bag_kamarmandi'];
                                    $agunan_bag_dapur       = $agunan_tanah[$i]['lampiran']['agunan_bag_dapur'];
                                    echo "<tr>";

                                    if ($jenis_agunan != null) {
                                        echo "<td>$jenis_agunan</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($tipe_lokasi != null) {
                                        echo "<td>$tipe_lokasi</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }


                                    if ($luas_tanah != null) {
                                        echo "<td>$luas_tanah</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($luas_bangunan != null) {
                                        echo "<td>$luas_bangunan</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }


                                    if ($tgl_berlaku_shgb != null) {
                                        echo "<td>$tgl_berlaku_shgb</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }


                                    if ($nama_pemilik_sertifikat != null) {
                                        echo "<td>$nama_pemilik_sertifikat</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }


                                    if ($jenis_agunan != null) {
                                        echo "<td>$jenis_agunan</td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($agunan_bag_depan != null) {
                                        $_url_img = $url_img . $agunan_bag_depan;
                                        echo "<td><a href='$_url_img' target='_blank'>Agunan Bagian Depan</a></td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($agunan_bag_jalan != null) {
                                        $_url_img = $url_img . $agunan_bag_jalan;
                                        echo "<td><a href='$_url_img' target='_blank'>Agunan Bagian Jalan</a></td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($agunan_bag_ruangtamu != null) {
                                        $_url_img = $url_img . $agunan_bag_ruangtamu;
                                        echo "<td><a href='$_url_img' target='_blank'>Agunan Bagian Ruang Tamu</a></td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($agunan_bag_kamarmandi != null) {
                                        $_url_img = $url_img . $agunan_bag_kamarmandi;
                                        echo "<td><a href='$_url_img' target='_blank'>Agunan Bagian Kamar Mandi</a></td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    if ($agunan_bag_dapur != null) {
                                        $_url_img = $url_img . $agunan_bag_dapur;
                                        echo "<td><a href='$_url_img' target='_blank'>Agunan Bagian Dapur</a></td>";
                                    } else {
                                        echo "<td>-</td>";
                                    }

                                    echo "</tr>";
                                endfor ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                                if (isset($agunan_kendaraan)) :
                                    for ($i = 0; $i < count($agunan_kendaraan); $i++) :
                                        $jenis_kendaraan                = $agunan_kendaraan[$i]['jenis'];
                                        $tipe_kendaraan                 = $agunan_kendaraan[$i]['tipe_kendaraan'];
                                        $merk_kendaraan                 = $agunan_kendaraan[$i]['merk'];
                                        $tgl_kadaluarsa_pajak_kendaraan = $agunan_kendaraan[$i]['tgl_kadaluarsa_pajak'];
                                        $tgl_kadaluarsa_stnk_kendaraan  = $agunan_kendaraan[$i]['tgl_kadaluarsa_stnk'];
                                        $nama_pemilik_kendaraan         = $agunan_kendaraan[$i]['nama_pemilik'];
                                        $no_bpkb_kendaraan              = $agunan_kendaraan[$i]['no_bpkb'];
                                        $no_polisi_kendaraan            = $agunan_kendaraan[$i]['no_polisi'];
                                        $no_stnk_kendaraan              = $agunan_kendaraan[$i]['no_stnk'];
                                        $kendaraan_bag_depan    = $agunan_kendaraan[$i]['lampiran']['agunan_depan'];
                                        $kendaraan_bag_kanan    = $agunan_kendaraan[$i]['lampiran']['agunan_kanan'];
                                        $kendaraan_bag_kiri     = $agunan_kendaraan[$i]['lampiran']['agunan_kiri'];
                                        $kendaraan_bag_belakang = $agunan_kendaraan[$i]['lampiran']['agunan_belakang'];
                                        $kendaraan_bag_dalam    = $agunan_kendaraan[$i]['lampiran']['agunan_dalam'];

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
                                            $_url_img = $url_img . $kendaraan_bag_depan;
                                            echo "<td><a href='$_url_img' target='_blank'>Kendaraan Bagian Depan</a></td>";
                                        } else {
                                            echo "<td>-</td>";
                                        }

                                        if ($kendaraan_bag_kanan != null) {
                                            $_url_img = $url_img . $kendaraan_bag_kanan;
                                            echo "<td><a href='$_url_img' target='_blank'>Kendaraan Bagian Kanan</a></td>";
                                        } else {
                                            echo "<td>-</td>";
                                        }

                                        if ($kendaraan_bag_kiri != null) {
                                            $_url_img = $url_img . $kendaraan_bag_kiri;
                                            echo "<td><a href='$_url_img' target='_blank'>Kendaraan Bagian Kiri</a></td>";
                                        } else {
                                            echo "<td>-</td>";
                                        }

                                        if ($kendaraan_bag_belakang != null) {
                                            $_url_img = $url_img . $kendaraan_bag_belakang;
                                            echo "<td><a href='$_url_img' target='_blank'>Kendaraan Bagian Belakang</a></td>";
                                        } else {
                                            echo "<td>-</td>";
                                        }

                                        if ($kendaraan_bag_dalam != null) {
                                            $_url_img = $url_img . $kendaraan_bag_dalam;
                                            echo "<td><a href='$_url_img' target='_blank'>Kendaraan Bagian Dalam</a></td>";
                                        } else {
                                            echo "<td>-</td>";
                                        }

                                        echo "</tr>";
                                    endfor;
                                endif
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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

        <div class="form-group">
            <small>Non Standard Transaction:</small>
            <div class="row">
                <div class="col-md-6">
                    <input type="radio" value="TIDAK" name="penyimpangan"> <small>Tidak</small>
                </div>
                <div class="col-md-6">
                    <input type="radio" value="ADA" name="penyimpangan"> <small>Ya</small>
                </div>
            </div>
            <div id="penyimpangan_optional"></div>
        </div>

        <div class="form-group">
            <input type="hidden" value="<?php echo $cabang ?>" id="cabang">
            <small>Team CAA :</small>
            <div id="team_caa"></div>
        </div>

        <div class="form-group">
            <input type="hidden" value="<?php echo $id ?>" name="idx">
            <div class="btn_approve_pengajuan_caa">
                <button type="submit" class="btn btn-secondary btn-sm" style="float: right;" disabled>Approve</button>
            </div>
            <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm">Batal</a>
        </div>
    </form>
</div>

<script>
    $('input[type=radio][name=penyimpangan]').change(function() {
        var data = $('input[type=radio][name=penyimpangan]:checked').val();
        var cabang = $('#cabang').val();
        let html;
        var plafonPengajuan = '<?php echo $pengajuan_plafon ?>';
        var plafonRekomenCa = '<?php echo $rekomendasi_ca_plafon ?>';
        if (data == 'ADA') {
            html = "" +
                "<div class='form-group small pt-2'>" +
                "<input type='checkbox' name='penyimpangan_struktur_pembiayaan' value='1' onchange='struktur_pembiayaan()'> Struktur Pembiayaan" +
                "<div id='penyimpangan_struktur_pembiayaan'></div>" +
                "</div>" +
                "<div class='form-group small'>" +
                "<input type='checkbox' name='penyimpangan_kolektabilitas' value='1' onchange='kolektabilitas()'> Kolektabilitas / RISIKO LAINNYA" +
                "<div id='penyimpangan_kolektabilitas'></div>" +
                "</div>";
            $('#penyimpangan_optional').html(html);
            $('#team_caa').html('');
            $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-secondary btn-sm" style="float: right;" disabled>Approve</button>');
        } else {
            $('#penyimpangan_optional').html('');
            $.ajax({
                type: "post",
                url: "caa_controller/get_teamCAA",
                data: "plafon=" + plafonPengajuan + "&nst=" + data + "&cabang=" + cabang + "&plafon_rekomendasi_ca=" + plafonRekomenCa,
                beforeSend: function() {
                    $('#team_caa').html('<i class="fa fa-spinner fa-spin text-sm"></i> Generate Team CAA');
                    $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-secondary btn-sm" style="float: right;" disabled>Approve</button>');
                },
                success: function(response) {
                    $('#team_caa').html(response);
                    $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-success btn-sm" style="float: right;">Approve</button>');
                }
            });
        }
    });

    function struktur_pembiayaan() {
        var data = $('input[name="penyimpangan_struktur_pembiayaan"]:checked').val();
        if (data == 1) {
            var html = "" +
                "<ul class='list-group'>" +
                // "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='BIAYA PROVISI'> BIAYA PROVISI</li>" +
                // "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='BIAYA ADMIN'> BIAYA ADMIN</li>" +
                // "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='BIAYA KREDIT'> BIAYA KREDIT</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='STRUKTUR KREDIT'> STRUKTUR KREDIT</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='PASTDUE RO'> PASTDUE RO</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='LTV'> LTV</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_struktur[]' value='TENOR'> TENOR</li>" +
                "</ul>";
            $('#penyimpangan_struktur_pembiayaan').html(html);
        } else {
            $('#penyimpangan_struktur_pembiayaan').html('');
        }
        nst_struktur();
    }

    function nst_struktur() {
        var formData = new FormData();
        var plafonPengajuan = '<?php echo $pengajuan_plafon ?>';
        var cabang = $('#cabang').val();

        formData.append('plafon', plafonPengajuan);
        formData.append('cabang', cabang);
        $.each($('input[name="nst_struktur[]"]:checked'), function(i, e) {
            formData.append('nst_struktur[]', e.value);
        });
        $.each($('input[name="nst_kolektabilitas[]"]:checked'), function(i, e) {
            formData.append('nst_struktur[]', e.value);
        });
        $.ajax({
            type: "post",
            url: "caa_controller/get_teamCAA",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#team_caa').html('<i class="fa fa-spinner fa-spin text-sm"></i> Generate Team CAA');
                $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-secondary btn-sm" style="float: right;" disabled>Approve</button>');
            },
            success: function(response) {
                $('#team_caa').html(response);
                $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-success btn-sm" style="float: right;">Approve</button>');
            }
        });
    }

    function kolektabilitas() {
        var data = $('input[name="penyimpangan_kolektabilitas"]:checked').val();
        if (data == 1) {
            var html = "" +
                "<ul class='list-group'>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_kolektabilitas[]' value='KTA'> KTA / Kartu Kredit / (Sertifikat/BPKB, Coll >=2, BD <50 Jt)</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_kolektabilitas[]' value='BD50'> Sertifikat/BPKB, Coll >=2, BD 50 s/d 150 Jt</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_kolektabilitas[]' value='BD150'> Sertifikat/BPKB, Coll >=2, BD >150 Jt</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_kolektabilitas[]' value='PROFESI BERESIKO'> Profesi Beresiko</li>" +
                "<li class='list-group-item'><input type='checkbox' onchange='nst_struktur()' name='nst_kolektabilitas[]' value='JAMINAN DI PERKAMPUNGAN'> Jaminan Di Perkampungan Tenor 48 Bulan</li>" +
                "</ul>";
            $('#penyimpangan_kolektabilitas').html(html);
        } else {
            $('#penyimpangan_kolektabilitas').html('');
        }
        nst_struktur();
    }

    $('#frm_pengajuan_caa').on('submit', function(e) {
        var id = $('input[name=idx]', this).val();
        var url = '<?php echo $this->config->item('api_url'); ?>api/master/mcaa/' + id;
        e.preventDefault();
        var formData = new FormData();
        formData.append('penyimpangan', $('input[name=penyimpangan]:checked', this).val());
        $.each($('input[name="team_caa[]"]:checked'), function(i, e) {
            formData.append('team_caa[]', e.value);
        });
        $.each($('input[name="nst_struktur[]"]:checked'), function(i, e) {
            if (e.value == 'BIAYA PROVISI') {
                formData.append('biaya_provisi', '1');
            }

            if (e.value == 'BIAYA ADMIN') {
                formData.append('biaya_admin', '1');
            }

            if (e.value == 'BIAYA KREDIT') {
                formData.append('biaya_kredit', '1');
            }

            if (e.value == 'STRUKTUR KREDIT') {
                formData.append('struktur_kredit', '1');
            }

            if (e.value == 'PASTDUE RO') {
                formData.append('past_due_ro', '1');
            }

            if (e.value == 'LTV') {
                formData.append('ltv', '1');
            }

            if (e.value == 'TENOR') {
                formData.append('tenor', '1');
            }
        });
        $.each($('input[name="nst_kolektabilitas[]"]:checked'), function(i, e) {
            if (e.value == 'KTA') {
                formData.append('kartu_pinjaman', '1');
            }

            if (e.value == 'BD50') {
                formData.append('sertifikat_diatas_50', '1');
            }

            if (e.value == 'BD150') {
                formData.append('sertifikat_diatas_150', '1');
            }

            if (e.value == 'PROFESI BERESIKO') {
                formData.append('profesi_beresiko', '1');
            }

            if (e.value == 'JAMINAN DI PERKAMPUNGAN') {
                formData.append('jaminan_kp_tenor_48', '1');
            }
        });

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
                    $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-secondary btn-sm" style="float: right;" disabled>Approve</button>');
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
                if (data.message.penyimpangan[0] != undefined) {
                    error += data.message.penyimpangan[0];
                } else {
                    error += "Team CAA belum terisi";
                }
                bootbox.alert(error);
                $('.btn_approve_pengajuan_caa').html('<button type="submit" class="btn btn-success btn-sm" style="float: right;">Approve</button>');
            });
    });
</script>