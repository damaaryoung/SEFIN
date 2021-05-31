<style type="text/css">
    pre {
        white-space: pre-wrap;
        word-wrap: break-word;
    }
</style>

<div class="book">
	<div class="page">
		<div class="table-responsive">
			<table style="font-size: 10px;" border="1" cellspacing="-1">
                <tbody>
                    <tr>
                        <th colspan="12" align="center" style="font-size: 11px;background-color: red;color: black; border:1px solid">
                            <center>MEMORANDUM CREDIT ANALIST</center>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="12" align="center" style="font-size: 11px;background-color: orange;color: black; border:1px solid">
                            <center>RINGKASAN ANALISA DAN REKOMENDASI</center>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="12" align="center" style="font-size: 11px;background-color: yellow;color: black; border:1px solid">
                            <center>ASPEK CREDIT CHECKING</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="12">
                            <table>
                                <tr>
                                    <td colspan="12" height="70" style="vertical-align:top; line-height: 1.6">
                                        <?php
                                            $jml_plafon = 0;
                                            $jml_bakidebet = 0;
                                            $jml_angsuran = 0;
                                            $jml_collectabilitas = 0;

                                            foreach ($aspek_kredit_checking->result_array() as $key) {

                                            $nama_bank = $key['nama_bank'];
                                            $plafon = $key['plafon'];
                                            $jml_plafon += $plafon;
                                            $baki_debet = $key['baki_debet'];
                                            $jml_bakidebet += $baki_debet;
                                            $angsuran = $key['angsuran'];
                                            $jml_angsuran += $angsuran;
                                            $collectabilitas = $key['collectabilitas'];
                                            // $jml_collectabilitas .= $collectabilitas;
                                            $jenis_kredit = $key['jenis_kredit'];
                                        ?>
                                        
                                        <b><?php echo $nama_bank . ", Plafond " . number_format($plafon) . ", BD " . number_format($baki_debet) . ",Angsuran " . number_format($angsuran) . ", Coll " . number_format($collectabilitas) . ", Jns krdt " . $jenis_kredit ?></b>
                                        <?php   } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <b>Total Plafond : <?php echo number_format($jml_plafon) ?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <b>Total Baki Debet : <?php echo number_format($jml_bakidebet) ?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <b>Total Angsuran : <?php echo number_format($jml_angsuran) ?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <b>Collectabilitas Terendah : <?php echo  $max_coll ?></b>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>                    

                    <tr>
                        <th colspan="12" align="center" style="font-size: 11px;background-color: yellow;color: black;border-left: 1px solid; border-right: 1px solid" >
                            <center>ASPEK KUANTITATIF</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="12">
                            <table>
                                <tr>
                                    <td width="140">a. Total Pendapatan/bulan</td>
                                    <td width="2">:</td>
                                    <td width="85"><?php echo 'Rp.' . number_format($kuantitatif_ttl_pendapatan) ?></td>
                                    <td width="120">d. Angsuran/bulan</td>
                                    <td width="2">:</td>
                                    <td width="85"><?php echo 'Rp.' . number_format($kuantitatif_angsuran) ?></td>
                                    <td width="100">g. DSR (max. 35%)</td>
                                    <td width="2">:</td>
                                    <td><?php echo $kuantitatif_dsr . "%" ?></td>
                                </tr>
                                <tr>
                                    <td>b. Total Pengeluaran</td>
                                    <td>:</td>
                                    <td><?php echo 'Rp.', number_format($kuantitatif_ttl_pengeluaran) ?></td>
                                    <td>e. IDR (max 80%)</td>
                                    <td>:</td>
                                    <td><?php echo $kuantitatif_idir . '%' ?></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <td height="25" style="vertical-align: top">c. Disposible Income</td>
                                    <td style="vertical-align: top">:</td>
                                    <td style="vertical-align: top"><?php echo 'Rp.' . number_format($kuantitatif_ttl_pendapatan - $kuantitatif_ttl_pengeluaran - $kuantitatif_angsuran) ?></td>
                                    <td style="vertical-align: top">f. LTV (max 70%)</td>
                                    <td style="vertical-align: top">:</td>
                                    <td style="vertical-align: top"><?php echo $kuantitatif_ltv . '%' ?></td>
                                    <td style="vertical-align: top"><b>HASIL</b></td>
                                    <td style="vertical-align: top">:</td>
                                    <td colspan="4" style="vertical-align: top"><b><?php echo $kuantitatif_hasil ?></b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="12" align="center" style="font-size: 11px;background-color: yellow;color: black; border-left: 1px solid; border-right: 1px solid">
                            <center>KAPASITAS DEBITUR (BULANAN)</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="6"></td>
                            <table>
                                <tr>
                                    <td width="200"><b>Total Pendapatan</b></td>
                                    <td width="2">:</td>
                                    <td><b><?php echo number_format($total_pemasukan) ?></b></td>
                                </tr>
                                <tr>
                                    <td>Calon Debitur</td>
                                    <td>:</td>
                                    <td><?php echo number_format($pemasukan_cadebt) ?></td>
                                </tr>
                                <tr>
                                    <td>Pasangan</td>
                                    <td>:</td>
                                    <td><?php echo number_format($pemasukan_pasangan) ?></td>
                                </tr>
                                <tr>
                                    <td>Penjamin</td>
                                    <td>:</td>
                                    <td><?php echo number_format($pemasukan_penjamin) ?></td>
                                </tr>
                                <tr>
                                    <td><b>Total Pengeluaran</b></td>
                                    <td>:</td>
                                    <td><?php echo number_format($total_pengeluaran) ?></td>
                                </tr>
                                <tr>
                                    <td>Rumah Tangga</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_rumah_tangga) ?></td>
                                </tr>
                                <tr>
                                    <td>Transport</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_transport) ?></td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_pendidikan) ?></td>
                                </tr>
                                <tr>
                                    <td>Telp, Listrik, Air</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_telp_listr_air) ?></td>
                                </tr>
                                <tr>
                                    <td>Angsuran Lain-lain</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_lain) ?></td>
                                </tr>
                                <tr>
                                    <td>Lainnya</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td height="25" style="vertical-align: top"><b>Disposible Income</b></td>
                                    <td style="vertical-align: top">:</td>
                                    <td style="vertical-align: top"><b><?php echo 'Rp.' . number_format($kuantitatif_ttl_pendapatan - $kuantitatif_ttl_pengeluaran - $kuantitatif_angsuran) ?></b></td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="6"></td>
                            <table>
                                <tr>
                                    <td width="200"><b>Pendapatan Usaha</b></td>
                                    <td width="2">:</td>
                                    <td><b><?php echo number_format($total_pemasukan_usaha) ?></b></td>
                                </tr>
                                <tr>
                                    <td>Tunai</td>
                                    <td>:</td>
                                    <td><?php echo number_format($pemasukan_tunai) ?></td>
                                </tr>
                                <tr>
                                    <td>Kredit (Penerimaan Piutang)</td>
                                    <td>:</td>
                                    <td><?php echo number_format($pemasukan_kredit) ?></td>
                                </tr>
                                <tr>
                                    <td><b>Pengeluaran Usaha</b></td>
                                    <td>:</td>
                                    <td><?php echo number_format($total_pengeluaran_usaha) ?></td>
                                </tr>
                                <tr>
                                    <td>Pembelian Barang</td>
                                    <td>:</td>
                                    <td><?php number_format($biaya_belanja_brg) ?></td>
                                </tr>
                                <tr>
                                    <td>Gaji Karyawan</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_gaji_pegawai) ?></td>
                                </tr>
                                <tr>
                                    <td>Telp, Listrik dan Air (Usaha)</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_telp_listr_air_usaha) ?></td>
                                </tr>
                                <tr>
                                    <td>Sewa Tempat Usaha</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_sewa) ?></td>
                                </tr>
                                <tr>
                                    <td>Biaya Kirim Barang</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_kirim_barang) ?></td>
                                </tr>
                                <tr>
                                    <td>Pembayaran Hutang Dagang</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_hutang_dagang) ?></td>
                                </tr>
                                <tr>
                                    <td>Pembayaran Angsuran Usaha</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_angsuran_usaha) ?></td>
                                </tr>
                                <tr>
                                    <td>Pengeluaran Usaha Lainnya</td>
                                    <td>:</td>
                                    <td><?php echo number_format($biaya_lain_lain) ?></td>
                                </tr>
                                <tr>
                                    <td height="25" style="vertical-align: top"><b>Keuntungan Usaha</b></td>
                                    <td style="vertical-align: top">:</td>
                                    <td style="vertical-align: top"><b><?php echo number_format($laba_usaha) ?></b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="6" align="center" style="font-size: 11px;background-color: yellow;color: black;">
                            <center>REKENING BANK</center>
                        </th>
                        <th colspan="6" align="center" style="font-size: 11px;background-color: yellow;color: black;">
                            <center>RINGKASAN DATA KEUANGAN</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="6" style="vertical-align:top;">
                            <table style="font-size:8px">
                                <?php
                                    $i = 0;
                                    foreach ($data_mutasi_bank->result_array() as $key) {
                                        $id = $key['id'];
                                        $urutan_mutasi = $key['urutan_mutasi'];
                                        $nama_bank = $key['nama_bank'];
                                        $no_rekening = $key['no_rekening'];
                                        $nama_pemilik = $key['nama_pemilik'];
                                        $periode = $key['periode'];
                                        $frek_debet = $key['frek_debet'];
                                        $nominal_debet = $key['nominal_debet'];
                                        $frek_kredit = $key['frek_kredit'];
                                        $nominal_kredit = $key['nominal_kredit'];
                                        $saldo = $key['saldo'];

                                        $exp_periode = explode(';', $periode);
                                        $exp_frek_debet = explode(';', $frek_debet);
                                        $exp_nominal_debet = explode(';', $nominal_debet);
                                        $exp_frek_kredit = explode(';', $frek_kredit);
                                        $exp_nominal_kredit = explode(';', $nominal_kredit);
                                        $exp_saldo = explode(';', $saldo);
                                ?>
                                <tr>
                                    <td><b>Bank</b></td>
                                    <td colspan="3"><b>: <?php echo $nama_bank ?> A/C : <?php echo $no_rekening ?></b></td>
                                    <td><b>Pemilik</b></td>
                                    <td><b>: <?php echo $nama_pemilik ?></b></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" ><b>Periode (bulanan)</b></td>
                                    <td colspan="2">
                                        <center><b>Mutasi debitur</b></center>
                                    </td>
                                    <td colspan="2">
                                        <center><b>Mutasi kredit</b></center>
                                    </td>
                                    <td rowspan="2"><b>Saldo Rp.(000)</b></td>
                                </tr>
                                <tr>
                                    <td width="15">
                                        <center><b>Frekuensi</b></center>
                                    </td>
                                    <td width="15">
                                        <center><b>Rp.(000)</b></center>
                                    </td>
                                    <td width="15">
                                        <center><b>Frekuensi</b></center>
                                    </td>
                                    <td width="15">
                                        <center><b>Rp.(000)</b></center>
                                    </td>
                                </tr>

                                <?php
                                    for ($i = 0; $i < count($exp_periode); $i++) { ?>
                                        <tr>
                                            <td><?php echo $exp_periode[$i] ?></td>
                                            <td style="font-size: 8px">
                                                <center><?php echo $exp_frek_debet[$i] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $exp_nominal_debet[$i] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $exp_frek_kredit[$i] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $exp_nominal_kredit[$i] ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $exp_saldo[$i] ?></center>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                <?php  } ?>
                            </table>
                        </td>

                        <td colspan="6" style="vertical-align:top;">
                            <table>
                                <tr>
                                    <td width="150">Tujuan Pembukaan rekening</td>
                                    <td>: <?php echo $tujuan_pembukaan_rek ?></td>
                                </tr>
                                <tr>
                                    <td>Penghasilan utama pertahun</td>
                                    <td>: <?php echo number_format($penghasilan_per_tahun) ?></td>
                                </tr>
                                <tr>
                                    <td>Sumber penghasilan</td>
                                    <td>: <?php echo $sumber_penghasilan ?></td>
                                </tr>
                                <tr>
                                    <td>Pemasukan perbulan</td>
                                    <td>: <?php if ($pemasukan_per_bulan == "A") {
                                            echo "< RP.1.000.000";
                                        } else if ($pemasukan_per_bulan == "B") {
                                            echo "RP.1.000.000,- s/d RP.2.000.000,-";
                                        } else if ($pemasukan_per_bulan == "C") {
                                            echo "> RP.2.000.000,- s/d RP.5.000.000,-";
                                        } else if ($pemasukan_per_bulan == "D") {
                                            echo "> RP.5.000.000,- s/d RP.10.000.000,-";
                                        } else if ($pemasukan_per_bulan == "E") {
                                            echo "> RP.10.000.000,-";
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengeluaran perbulan</td>
                                    <td>: <?php if ($pengeluaran_per_bulan == "A") {
                                            echo "< RP.1.000.000";
                                        } else if ($pengeluaran_per_bulan == "B") {
                                            echo "RP.1.000.000,- s/d RP.2.000.000,-";
                                        } else if ($pengeluaran_per_bulan == "C") {
                                            echo "> RP.2.000.000,- s/d RP.5.000.000,-";
                                        } else if ($pengeluaran_per_bulan == "D") {
                                            echo "> RP.5.000.000,- s/d RP.10.000.000,-";
                                        } else if ($pengeluaran_per_bulan == "E") {
                                            echo "> RP.10.000.000,-";
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Frek. Trans Pengeluaran</td>
                                    <td>: <?php if ($frek_trans_pengeluaran == "A") {
                                            echo "0-5 Kali";
                                        } else if ($frek_trans_pengeluaran == "B") {
                                            echo "6-10 Kali";
                                        } else if ($frek_trans_pengeluaran == "C") {
                                            echo "11-15 Kali";
                                        } else if ($frek_trans_pengeluaran == "D") {
                                            echo "> RP.5.000.000,- s/d RP.10.000.000,-";
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sumber dana utama setoran</td>
                                    <td>: <?php echo $sumber_dana_setoran ?></td>
                                </tr>
                                <tr>
                                    <td>Tujuan penggunaan dana</td>
                                    <td>: <?php echo $tujuan_pengeluaran_dana ?></td>
                                </tr>
                                <tr>
                                    <td height="25" style="vertical-align: top">No Rek Bank</td>
                                    <td style="vertical-align: top">: <?php echo $no_rekening ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="12" align="center" style="font-size: 11px;background-color: yellow;color: black;">
                            <center>STRUKTUR PINJAMAN</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="6" style="vertical-align: top">
                            <table>
                                <tr>
                                    <td width="150">Produk</td>
                                    <td>: <?php echo $produk_ca ?></td>
                                </tr>
                                <tr>
                                    <td>Plafon Kredit</td>
                                    <td>: <?php echo number_format($plafon_kredit_ca) ?></td>
                                </tr>
                                <tr>
                                    <td>Jangka Waktu</td>
                                    <td>: <?php echo $jangka_waktu_ca ?></td>
                                </tr>
                                <tr>
                                    <td>Suku Bunga</td>
                                    <td>: <?php echo $suku_bunga_ca . "%" ?></td>
                                </tr>
                                <tr>
                                    <td>Pembayaran Bunga/bln</td>
                                    <td>: <?php echo number_format($pembayaran_bunga_ca) ?></td>
                                </tr>
                                <tr>
                                    <td>Akad Kredit</td>
                                    <td>: <?php echo $akad_kredit_ca ?></td>
                                </tr>
                                <tr>
                                    <td>Ikatan Agunan</td>
                                    <td>: <?php echo $ikatan_agunan_ca ?></td>
                                </tr>
                                <tr>
                                    <td>Biaya Provisi</td>
                                    <td>: <?php echo number_format($biaya_provisi_ca) ?></td>
                                </tr>
                                <tr>
                                    <td>Biaya Adminisrasi</td>
                                    <td>: <?php echo number_format($biaya_administrasi_ca) ?></td>
                                </tr>
                                <tr>
                                    <td>Biaya Credit Checking</td>
                                    <td>: <?php echo number_format($biaya_credit_checking_ca) ?></td>
                                </tr>
                                <tr>
                                    <td>Notaris</td>
                                    <td>: <?php echo number_format($notaris_ca) ?></td>
                                </tr>
                                <tr>
                                    <td>Biaya Tabungan</td>
                                    <td>: <?php echo number_format($biaya_tabungan_ca) ?></td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="6">
                            <table>
                                <tr>
                                    <td width="160"><b>Asuransi jiwa</b></td>
                                </tr>
                                <tr>
                                    <td>Nama Asuransi</td>
                                    <td>: <?php echo $nama_asuransi ?></td>
                                </tr>
                                <tr>
                                    <td>Jangka Waktu</td>
                                    <td>: <?php echo $jangka_waktu_asuransi ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai Pertanggungan</td>
                                    <td>: <?php echo number_format($nilai_pertanggungan) ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Jatuh Tempo</td>
                                    <td>: <?php echo $jatuh_tempo ?></td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                    <td>: <?php echo $berat_badan_asuransi ?> kg</td>
                                </tr>
                                <tr>
                                    <td>Tinggi Badan</td>
                                    <td>: <?php echo $tinggi_badan_asuransi ?> cm</td>
                                </tr>
                                <tr>
                                    <td>Umur Nasabah</td>
                                    <td>: <?php echo $umur_nasabah ?></td>
                                </tr>

                                <tr>
                                    <td><b>Asuransi Jaminan Kebakaran</b></td>
                                </tr>
                                <tr>
                                    <td>Nama Asuransi</td>
                                    <td>: <?php echo $nama_asuransi_jaminan_kebakaran ?></td>
                                </tr>
                                <tr>
                                    <td>Jangka Waktu</td>
                                    <td>: <?php echo $jangka_waktu_jaminan_kebakaran ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai Pertanggungan</td>
                                    <td>: <?php echo number_format($nilai_pertanggungan_jaminan_kebakaran) ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Jatuh Tempo</td>
                                    <td>: <?php echo $jatuh_tempo_jaminan_kebakaran ?></td>
                                </tr>

                                <tr>
                                    <td><b>Asuransi Jaminan Kendaraan</b></td>
                                </tr>
                                <tr>
                                    <td>Nama Asuransi</td>
                                    <td>: <?php echo $nama_asuransi_jaminan_kendaraan ?></td>
                                </tr>
                                <tr>
                                    <td>Jangka Waktu</td>
                                    <td>: <?php echo $jangka_waktu_jaminan_kendaraan ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai Pertanggungan</td>
                                    <td>: <?php echo number_format($nilai_pertanggungan_jaminan_kendaraan) ?></td>
                                </tr>
                                <tr>
                                    <td height="25" style="vertical-align: top">Tanggal Jatuh Tempo</td>
                                    <td style="vertical-align: top">: <?php echo $jatuh_tempo_jaminan_kendaraan ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="6" align="center" style="font-size: 11px;background-color: yellow;color: black">
                            <center>ASPEK KUALITATIF (VERIFIKASI BY PHONE & DOKUMEN)</center>
                        </th>
                        <th colspan="6" rowspan="2" align="center" style="font-size: 11px;vertical-align: middle;background-color: yellow;color: black;">
                            <center>PENYIMPANGAN</center>
                        </th>
                    </tr>
                    
                    <tr>
                        <th colspan="6" align="center" style="background-color: yellow;color: black;font-size: 8px">
                            <center>Analisa Kualitatif (1P + 5C)</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="6" style="vertical-align: top">
                            <table style="font-size: 9px;">
                                <tr>
                                    <td>
                                        <pre><?php echo $kualitatif_analisa ?></pre>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="6" style="vertical-align: top">
                            <table style="font-size: 9px;">
                                <tr>
                                    <td>Penyimpangan Struktur Dan Resiko : </td>
                                </tr>
                                <tr>
                                    <td>
                                        <pre><?php echo $penyimpangan_struktur ?> </pre>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="6" align="center" style="vertical-align: middle;background-color: yellow;color: black;font-size: 9px">
                            <center>Analisa SWOT</center>
                        </th>
                        <th colspan="6" align="center" style="font-size: 11px;background-color: yellow;color: black;">
                            <center>REKOMENDASI CA</center>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="6" style="vertical-align: top" >
                            <table style="vertical-align: top; font-size: 9px">
                                <tr>
                                    <td>Strength</td>
                                    <td>:</td>
                                    <td>
                                        <pre class="form-control"><?php echo $kualitatif_strenght ?></pre>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Weaknes</td>
                                    <td>:</td>
                                    <td>
                                        <pre class="form-control"><?php echo $kualitatif_weakness ?></pre>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>: </td>
                                    <td>
                                        <pre class="form-control"><?php echo $kualitatif_opportunity ?></pre>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Threatnes</td>
                                    <td>:</td>
                                    <td>
                                        <pre class="form-control"><?php echo $kualitatif_threatness ?></pre>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="6" style="vertical-align: top">
                            <table style="font-size: 9px">
                                <tr>
                                    <td width="150">Rekomendasi Nilai pinjaman</td>
                                    <td>: <?php echo number_format($recom_nilai_pinjaman) ?></td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Tenor</td>
                                    <td>: <?php echo number_format($recom_tenor) ?></td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Angsuran</td>
                                    <td>: <?php echo number_format($recom_angsuran) ?></td>
                                </tr>
                                <tr>
                                    <td>Rekomendasi Produk kredit</td>
                                    <td>: <?php echo $produk_ca ?></td>
                                </tr>
                                <tr>
                                    <td>Bunga pijaman</td>
                                    <td>: <?php echo $suku_bunga_ca . "%" ?></td>
                                </tr>
                                <tr>
                                    <td>Nama credit analist</td>
                                    <td>: <?php echo $nama_ca ?></td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>