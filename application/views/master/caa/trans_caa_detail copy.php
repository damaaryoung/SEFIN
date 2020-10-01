<div class="modal-header">
    <h5 class="modal-title">Form Credit Analyst Approval</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
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
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>Data Pengajuan</b>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <small>Nama Nasabah : <b><?php echo strtoupper($nama_debitur) ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Penyimpangan : <b><?php echo strtoupper($penyimpangan) ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Team CAA : <b><?php echo strtoupper($team_caa) ?></b></small>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><b>Rekomendasi AO : <?php echo $rekomendasi_ao ?></b></small>
                            </div>
                            <div class="form-group">
                                <small class="text-info"><b>Rekomendasi CA : <?php echo $rekomendasi_ca ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Notes :</small>
                                <textarea name="rincian" class="form-control form-control-sm" placeholder="Masukan notes atau keterangan subject anda" rows="5" readonly><?php echo $rincian ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Fasilitas Kredit</b>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <small>Jenis Pinjaman : <b><?php echo $jenis_pinjaman ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Produk : <b><?php if (isset($produk)) echo $produk ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Plafon : <b><?php echo number_format($plafon, 0, '', '.') ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Tenor : <b><?php echo $tenor ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Suku Bunga : <b><?php echo $suku_bunga ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Pembayaran Bunga : <b><?php echo $pembayaran_bunga ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Rekomendasi Angsuran : <b><?php echo number_format($rekomendasi_angsuran, 0, '', '.') ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <b>Biaya-biaya</b>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <small>Biaya Provisi : <b><?php echo $biaya_provisi ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Biaya Administrasi : <b><?php echo $biaya_administrasi ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Ansuransi Jiwa : <b><?php echo $asuransi_jiwa ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Asuransi Jaminan : <b><?php echo $asuransi_jaminan ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Biaya Tabungan : <b><?php echo $biaya_tabungan ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Biaya Notaris : <b><?php echo $biaya_notaris ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Angsuran Pertama Bunga Berjalan : <b><?php echo $angsuran_pertama_bungan_berjalan ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Pelunasan Nasabah RO : <b><?php echo $pelunasan_nasabah_ro ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Pelunasan Tempat Lain : <b><?php echo $pelunasan_tempat_lain ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Blokir Tempat Lain : <b><?php echo $tempat_lain ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Blokir 2x Angsuran Kredit : <b><?php echo $dua_kali_angsuran_kredit ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Biaya Reguler : <b><?php echo $biaya_reguler ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Biaya Hold Dana : <b><?php echo $biaya_hold_dana ?></b></small>
                            </div>
                            <div class="form-group">
                                <small>Total : <b><?php echo $jml_total ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <b>Data Agunan</b>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tanah-tab" data-toggle="tab" href="#tanah" role="tab" aria-controls="tanah" aria-selected="true">Tanah</a>
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
                                                    <th>No Ukur</th>
                                                    <th>Lampiran Depan</th>
                                                    <th>Lampiran Kanan</th>
                                                    <th>Lampiran Kiri</th>
                                                    <th>Lampiran Belakang</th>
                                                    <th>Lampiran Dalam</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < count($agunan_tanah); $i++) : ?>
                                                    <tr>
                                                        <td><?php echo $agunan_tanah[$i]['jenis'] ?></td>
                                                        <td><?php echo $agunan_tanah[$i]['tipe_lokasi'] ?></td>
                                                        <td><?php echo $agunan_tanah[$i]['luas']['tanah'] ?></td>
                                                        <td><?php echo $agunan_tanah[$i]['luas']['bangunan'] ?></td>
                                                        <td><?php echo $agunan_tanah[$i]['tgl_berlaku_shgb'] ?></td>
                                                        <td><?php echo $agunan_tanah[$i]['nama_pemilik_sertifikat'] ?></td>
                                                        <td><?php echo $agunan_tanah[$i]['tgl_atau_no_ukur'] ?></td>
                                                        <td><a href="<?php echo $url . $agunan_tanah[$i]['lampiran']['agunan_depan'] ?>" target="_blank">Agunan Depan</a></td>
                                                        <td><a href="<?php echo $url . $agunan_tanah[$i]['lampiran']['agunan_kanan'] ?>" target="_blank">Agunan Kanan</a></td>
                                                        <td><a href="<?php echo $url . $agunan_tanah[$i]['lampiran']['agunan_kiri'] ?>" target="_blank">Agunan Kiri</a></td>
                                                        <td><a href="<?php echo $url . $agunan_tanah[$i]['lampiran']['agunan_belakang'] ?>" target="_blank">Agunan Belakang</a></td>
                                                        <td><a href="<?php echo $url . $agunan_tanah[$i]['lampiran']['agunan_dalam'] ?>" target="_blank">Agunan Dalam</a></td>
                                                    </tr>
                                                <?php endfor ?>
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
                                                <?php for ($i = 0; $i < count($agunan_kendaraan); $i++) : ?>
                                                    <tr>
                                                        <td><?php echo $agunan_kendaraan[$i]['jenis'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['tipe_kendaraan'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['merk'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['tgl_kadaluarsa_pajak'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['tgl_kadaluarsa_stnk'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['nama_pemilik'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['no_bpkb'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['no_polisi'] ?></td>
                                                        <td><?php echo $agunan_kendaraan[$i]['no_stnk'] ?></td>
                                                        <td><a href="<?php echo $url . $agunan_kendaraan[$i]['lampiran']['agunan_depan'] ?>" target="_blank">Agunan Depan</a></td>
                                                        <td><a href="<?php echo $url . $agunan_kendaraan[$i]['lampiran']['agunan_kanan'] ?>" target="_blank">Agunan Kanan</a></td>
                                                        <td><a href="<?php echo $url . $agunan_kendaraan[$i]['lampiran']['agunan_kiri'] ?>" target="_blank">Agunan Kiri</a></td>
                                                        <td><a href="<?php echo $url . $agunan_kendaraan[$i]['lampiran']['agunan_belakang'] ?>" target="_blank">Agunan Belakang</a></td>
                                                        <td><a href="<?php echo $url . $agunan_kendaraan[$i]['lampiran']['agunan_dalam'] ?>" target="_blank">Agunan Dalam</a></td>
                                                    </tr>
                                                <?php endfor ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <b>Lampiran Lainnya</b>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <small>File AO : <a href="<?php echo $url . $file_report_mao ?>" target="_blank">Lampiran AO</a></small>
                            </div>
                            <div class="form-group">
                                <small>File CA : <a href="<?php echo $url . $file_report_mca ?>" target="_blank">Lampiran CA</a></small>
                            </div>
                            <div class="form-group">
                                <small>
                                    File Agunan :
                                    <ol>
                                        <?php for ($i = 0; $i < count($file_agunan); $i++) : ?>
                                            <li><a href="<?php echo $url . $file_agunan[$i] ?>" target="_blank">Lampiran</a></li>
                                        <?php endfor ?>
                                    </ol>
                                </small>
                            </div>
                            <div class="form-group">
                                <small>
                                    File Usaha :
                                    <ol>
                                        <?php for ($i = 0; $i < count($file_usaha); $i++) : ?>
                                            <li><a href="<?php echo $url . $file_usaha[$i] ?>" target="_blank">Lampiran</a></li>
                                        <?php endfor ?>
                                    </ol>
                                </small>
                            </div>
                            <div class="form-group">
                                <small>File Tempat Tinggal : <a href="<?php echo $url . $file_tempat_tinggal ?>" target="_blank">Lampiran Tempat Tinggal</a></small>
                            </div>
                            <div class="form-group">
                                <small>File Lain : <a href="<?php echo $url . $file_lain ?>" target="_blank">Lampiran Lain</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                <input type="number" name="plafon" placeholder="Plafon" class="form-control form-control-sm" value="<?php echo $plafon_ca ?>" onkeyup="radio_done()">
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

                                    <div class="form-group">
                                        <div class="row">
                                            <!-- <div class="col-md-2">
                                            <input type="radio" name="status" value="<?php echo $status_app ?>">
                                            <small><?php echo ucfirst($status_app) . $forward_to ?></small>
                                        </div> -->
                                            <div class="col-md-4 radio_done"></div>
                                            <div class="col-md-4">
                                                <input type="radio" name="status" value="return"> <small>Return To CA</small>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="status" value="not recommended"> <small>Not Recommended</small>
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
                                    <small><?php echo $result_team_caa_list['plafon'] . "-" . $result_team_caa_list['tenor'] ?> Bulan</small>
                                    <p>
                                        <?php echo $result_team_caa_list['rincian'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
                </div>
        </div>
    </div>

    <script>
        radio_done();

        function radio_done() {
            var plafon = '<?php echo $plafon ?>';
            var plafon_max = '<?php echo $plafon_max ?>';
            var input_plafon = parseInt($('input[name="plafon"]').val());
            console.log(plafon + ' <= ' + plafon_max)
            if (plafon <= plafon_max) {
                if (input_plafon > plafon_max) {
                    var radio_done = "" +
                        "<input type='radio' id='status' name='status' value='<?php echo $status_app ?>'> " +
                        "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
                    $('.radio_done').html(radio_done);
                } else {
                    var radio_done = "<input type='radio' id='status' name='status' value='accept'> <small>Accept</small>";
                    $('.radio_done').html(radio_done);
                }
            } else {
                var radio_done = "" +
                    "<input type='radio' id='status' name='status' value='<?php echo $status_app ?>'> " +
                    "<small><?php echo ucfirst($status_app) . $forward_to ?></small>";
                $('.radio_done').html(radio_done);
            }
        }

        $('#frm_app_team_caa').on('submit', function(e) {
            if (document.getElementById('select_kabupaten_ktp').value == "") {
                bootbox.alert("Kabupaten/Kota KTP Debitur Belum Di Pilih !!!");
                return (true);
            }
            var url = $('input[name=url_api]').val();
            var plafon_max = '<?php echo $plafon_max ?>';
            e.preventDefault();
            var formData = new FormData();
            formData.append('plafon', $('input[name=plafon]', this).val());
            formData.append('tenor', $('input[name=tenor]', this).val());
            formData.append('rincian', $('textarea[name=rincian]', this).val());
            formData.append('status', $('input[name=status]:checked', this).val());
            formData.append('tujuan_forward', $('input[name=tujuan_forward]', this).val());

            var input_plafon = parseInt($('input[name=plafon]', this).val());
            var notes = $('textarea[name=rincian]', this).val();
            var status = $('input[name=status]:checked', this).val();

            // if(input_plafon > plafon_max){
            //     alert('Plafon anda melebih maksimal '+plafon_max);
            // }else
            if (notes.length < 10) {
                alert('Notes terlalu pendek')
            } else if (status === undefined) {
                alert('Status approval masih kosong');
            } else if (input_plafon < 10000000) {
                alert('Plafon yang anda masukan kurang dari 10.000.000');
            } else {
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
                        alert('Approval gagal pastikan semua form terisi');
                        $('.btn_approve_team_caa').html('<button class="btn btn-primary btn-sm" type="submit" disabled>Approve</button>');
                        // bootbox.alert(error);
                    });
            }
        });
    </script>