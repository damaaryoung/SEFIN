<div class="book">
	<div class="page" style="font-size: 10px;">
		<div class="table-responsive">
			<table border="0" style="width: 100%;font-size: 10px;">
				<tr>
					<th colspan="6" align="center" style="background-color: red;color: white;font-size: 12px">
						<center>DETAIL ACTIVITY TELE SALES</center>
					</th>
				</tr>
				<tr>
					<th colspan="6" align="center" style="background-color: black;color: white;font-size: 10px"></th>
				</tr>
				<tbody style="font-size: 8px;">
                    <tr>
						<td width="120">Tanggal Telepon</td>
						<td width="2">:</td>
                        <td><?php echo $tgl_telp ?></td>
                        <td>Plafon Awal</td>
						<td width="2">:</td>
						<td><?php echo $plafon_awal ?></td>
                    </tr>
                    <tr>
						<td width="120">No. Kontrak</td>
						<td width="2">:</td>
                        <td><?php echo $no_kontrak ?></td>
                        <td>Angsuran Ke</td>
						<td width="2">:</td>
						<td><?php echo $angsuran_ke ?></td>
                    </tr>
                    <tr>
						<td width="120">Nama Debitur</td>
						<td width="2">:</td>
                        <td><?php echo $nama_debitur ?></td>
                        <td>Sisa Angsuran</td>
						<td width="2">:</td>
						<td><?php echo $sisa_angsuran?></td>
                    </tr>
                    <tr>
						<td width="120">Tanggal Lahir</td>
						<td width="2">:</td>
                        <td><?php echo $tanggal_lahir?></td>
                        <td>Max. Pastdue</td>
						<td width="2">:</td>
						<td><?php echo $max_pastdue ?></td>
                    </tr>
                    <tr>
						<td width="120">Usia</td>
						<td width="2">:</td>
                        <td><?php echo $usia_debitur?> th</td>
                        <td>Nominal Angsuran</td>
						<td width="2">:</td>
						<td><?php echo $nominal_angsuran ?></td>
                    </tr>
                    <tr>
						<td width="120">No. Telp 1</td>
						<td width="2">:</td>
                        <td><?php echo $no_telp_1?></td>
                        <td>Taksasi Agunan</td>
						<td width="2">:</td>
						<td><?php echo $taksasi_agunan?></td>
                    </tr>
                    <tr>
						<td width="120">No Telp 2</td>
						<td width="2">:</td>
                        <td><?php echo $no_telp_2?></td>
                        <td>Baki Debet</td>
						<td width="2">:</td>
						<td><?php echo $baki_debet?></td>
                    </tr>
                    <tr>
						<td width="120">Update No. Telp</td>
						<td width="2">:</td>
                        <td><?php echo $no_telp_3?></td>
                        <td>Total Denda</td>
						<td width="2">:</td>
						<td><?php echo $total_denda ?></td>
                    </tr>
                    <tr>
						<td width="120">Alamat</td>
						<td width="2">:</td>
                        <td><?php echo $alamat_domisili?></td>
                        <td>Total Pelunasan</td>
						<td width="2">:</td>
						<td><?php echo $total_pelunasan?></td>
                    </tr>
                    <tr>
						<td width="120">Update Pekerjaan</td>
						<td width="2">:</td>
                        <td><?php echo $update_pekerjaan?></td>
                        <td>Jenis Agunan</td>
						<td width="2">:</td>
						<td><?php echo $jenis_agunan?></td>
                    </tr>
                    <tr>
						<td width="120">Update Penghasilan</td>
						<td width="2">:</td>
                        <td><?php echo $update_penghasilan?></td>
                        <td>SHGB Expired</td>
						<td width="2">:</td>
						<td><?php echo $shgb_expired?></td>
                    </tr>
                    <tr>
						<th colspan="6" align="left" style="background-color: yellow;font-size: 10px">DATA CREDIT CHECKING</th>
					</tr>
                    <tr>
						<td width="120">Pengajuan RO</td>
						<td width="2">:</td>
                        <td><?php echo $pengajuan_ro ?></td>
                        <td>Biaya Administrasi</td>
						<td width="2">:</td>
						<td><?php echo $biaya_adm?></td>
                    </tr>
                    <tr>
						<td width="120">Tenor</td>
						<td width="2">:</td>
                        <td><?php echo $tenor ?></td>
                        <td>Biaya Credit Checking</td>
						<td width="2">:</td>
						<td><?php echo $biaya_cc?></td>
                    </tr>
                    <tr>
						<td width="120"> Produk Kredit</td>
						<td width="2">:</td>
                        <td><?php echo $produk_kredit ?></td>
                        <td>DSR (35%)</td>
						<td width="2">:</td>
						<td><?php echo $dsr?></td>
                    </tr>
                    <tr>
						<td width="120">Rate/Bln (%)</td>
						<td width="2">:</td>
                        <td><?php echo $rate_bulan ?></td>
                        <td>IDIR (80%)</td>
						<td width="2">:</td>
						<td><?php echo $idir?></td>
                    </tr>
                    <tr>
						<td width="120">Angsuran</td>
						<td width="2">:</td>
                        <td><?php echo $angsuran ?></td>
                        <td>LTV (70%)</td>
						<td width="2">:</td>
						<td><?php echo $ltv?></td>
                    </tr>
                    <tr>
						<td width="120">Biaya Provisi</td>
						<td width="2">:</td>
                        <td><?php echo $biaya_provisi ?></td>
                        <td>Total Pencairan (Estimasi)</td>
						<td width="2">:</td>
						<td><?php echo $total_pencairan?></td>
                    </tr>
                    <tr>
						<th colspan="6" align="left" style="background-color: yellow;font-size: 10px"> RESULT CALL</th>
					</tr>
                    <tr>
						<td width="120">Result Call</td>
						<td width="2">:</td>
                        <td><?php echo $result?></td>
                        <td>Notes</td>
						<td width="2">:</td>
						<td><?php echo $note_tele?></td>
                    </tr>
                </tbody>
            </table>
            <br>
			<table style="font-size: 10px;">
				<tr>
					<td><b>Dicetak Oleh: </b></td>
				</tr>
				<tr>
					<td><b><?php echo $pic ?></b></td>
				</tr>
                <tr>
                    <td><b><?php echo date('d/m/Y, H:i:s') ?></b></td>
                </tr>
			</table>
		</div>
	</div>

</div>