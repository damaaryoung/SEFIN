<div class="book">
	<div class="page" style="font-size: 10px;">
		<div class="table-responsive">
			<table border="0" style="width: 100%;font-size: 10px;">
				<tr>
					<th colspan="6" align="center" style="background-color: red;color: white;font-size: 12px">
						<center>DETAIL ACTIVITY TELE COLLECTION</center>
					</th>
				</tr>
				<tr>
					<th colspan="6" align="center" style="background-color: black;color: white;font-size: 10px"></th>
				</tr>
				<tbody style="font-size: 8px;">
					<tr>
						<td width="120">Total Call</td>
						<td width="2">:</td>
                        <td><?php echo $total_call ?></td>
                        <td>Total Denda</td>
						<td width="2">:</td>
                        <td><?php echo $total_denda?></td>
                    </tr>
                    <tr>
						<td width="120">Tanggal Telepon</td>
						<td width="2">:</td>
                        <td><?php echo $tanggal_telpon ?></td>
                        <td>Angsuran Ke</td>
						<td width="2">:</td>
                        <td><?php echo $angsuran_ke?></td>
                    </tr>
                    <tr>
						<td width="120">No. Kontrak</td>
						<td width="2">:</td>
                        <td><?php echo $nomor_kontrak ?></td>
                        <td>Tanggal Jatuh Tempo</td>
						<td width="2">:</td>
						<td><?php echo $tgl_jatuh_tempo ?></td>
                    </tr>
                    <tr>
						<td width="120">Nama Debitur</td>
						<td width="2">:</td>
                        <td><?php echo $nama_debitur ?></td>
                        <td>Pastdue</td>
						<td width="2">:</td>
						<td><?php echo $pastdue ?></td>
                    </tr>
                    <tr>
						<td width="120">Tanggal Lahir</td>
						<td width="2">:</td>
                        <td><?php echo $tanggal_lahir?></td>
                        <td>Nominal Angsuran</td>
						<td width="2">:</td>
						<td><?php echo $nominal_angsuran ?></td>
                    </tr>
                    <tr>
						<td width="120">Usia</td>
						<td width="2">:</td>
                        <td><?php echo $usia_debitur?> th</td>
                        <td>Baki Debet</td>
						<td width="2">:</td>
						<td><?php echo $baki_debet ?></td>
                    </tr>
                    <tr>
						<td width="120">No. Telp 1</td>
						<td width="2">:</td>
                        <td><?php echo $no_telp_1?></td>
                        <td>Total Pelunasan</td>
						<td width="2">:</td>
						<td><?php echo $total_pelunasan?></td>
                    </tr>
                    <tr>
						<td width="120">No Telp 2</td>
						<td width="2">:</td>
                        <td><?php echo $no_telp_2?></td>
                        <td>Karakter Debitur</td>
						<td width="2">:</td>
						<td><?php echo $karakter_debitur?></td>
                    </tr>
                    <tr>
						<td width="120">Update No. Telp</td>
						<td width="2">:</td>
                        <td><?php echo $no_telp_3?></td>
                        <td>Kondisi Pekerjaan</td>
						<td width="2">:</td>
						<td><?php echo $kondisi_pekerjaan?></td>
                    </tr>
                    <tr>
						<td width="120">Sisa Angsuran</td>
						<td width="2">:</td>
                        <td><?php echo $sisa_angsuran?></td>
						<td>Update Pekerjaan</td>
						<td width="2">:</td>
						<td><?php echo $update_pekerjaan?></td>
                    </tr>
                    <tr>
						<td width="120">Tgl Kredit Tabungan</td>
						<td width="2">:</td>
                        <td><?php echo $tgl_kredit_tabungan?></td>
						<td>Update Penghasilan</td>
						<td width="2">:</td>
						<td><?php echo $update_penghasilan ?></td>
                    </tr>
					<tr>
						<th colspan="6" align="left" style="background-color: yellow;font-size: 10px"> RESULT CALL</th>
					</tr>
					<tr>
						<td width="120">Result Call</td>
						<td width="2">:</td>
                        <td><?php echo $result?></td>
                        <td>Tanggal Janji Bayar</td>
						<td width="2">:</td>
						<td><?php echo $tgl_janji_bayar?></td>
                    </tr>
					<tr>
						<td width="120">Metode Pembayaran</td>
						<td width="2">:</td>
                        <td><?php echo $metode_pembayaran?></td>
                        <td>Notes</td>
						<td width="2">:</td>
						<td><?php echo $note_tele ?></td>
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