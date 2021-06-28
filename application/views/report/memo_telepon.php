<style>
.border{
	border: 1px solid black;
	padding: 3px
}
.table {
	border-collapse: collapse;
}

</style>

<div class="book">
	<div class="page" style="font-size: 11px;">
		<div class="table-responsive">
			<table style="width: 100%;font-size: 11px;" cellspacing="-1">
				<tr>
					<th colspan="12" align="center" style="background-color: red;color: white;font-size: 13px">
						<center>HASIL VERIFIKASI TELEPON</center>
					</th>
				</tr>
				<tr>
					<th colspan="12" align="center" style="background-color: black;color: white;font-size: 10px"></th>
				</tr>
				<tr>
				 	<td colspan ="12">
						<table>
							<tr>
								<td width="120"><b>Nomor SO</b></td>
								<td width="2"><b>:</b></td>
								<td width="220"><b><?php echo $nomor_so ?></b></td>
								<td width="120"><b>Nama Debitur</b></td>
								<td width="2"><b>:</b></td>
								<td><b><?php echo $nama_debitur ?></b></td>
							</tr>
							<tr>
								<td width="120"><b>Nama SO</b></td>
								<td width="2"><b>:</b></td>
								<td width="220"><b><?php echo $nama_so ?></b></td>
								<td width="120"><b>Plafon</b></td>
								<td width="2"><b>:</b></td>
								<td><b><?php echo "Rp ".number_format($plafon, 2, ',', '.') ?></b></td>
							</tr>
							<tr>
								<td width="120"><b>Nama AO</b></td>
								<td width="2"><b>:</b></td>
								<td width="220"><b><?php echo $nama_ao ?></b></td>
								<td width="120"><b>Cabang</b></td>
								<td width="2"><b>:</b></td>
								<td><b><?php echo $kantor_cabang ?></b></td>
							</tr>
							<tr>
								<td width="120"><b>Tanggal Memo AO</b></td>
								<td width="2"><b>:</b></td>
								<td width="220"><b><?php echo $tgl_memo_ao ?></b></td>
								<td width="120"><b>Nama CA</b></td>
								<td width="2"><b>:</b></td>
								<td><b><?php echo $nama_ca ?></b></td>
							</tr>
						</table>
					</td>
				</tr>
				<br>
				<tbody>
					<tr>
						<td class="border" width="300" style="text-align:left"><b>Parameter</b></td>
						<td class="border" width="100" style="text-align:center;"><b>Sesuai</b></td>
						<td class="border" width="100" style="text-align:center;"><b>Tidak Sesuai</b></td>
						<td class="border" width="100" style="text-align:center;"><b>Ada Kejanggalan</b></td>
					</tr>
					<?php if ($result_telp != null) { ?>
						<?php foreach($result_telp as $r): ?>
							<tr>
								<td class="border" style="vertical-align: top"><?php echo $r->detail?></td>
								<?php if ($r->hasil == 1) {
									$r->hasil = "√"; ?>
									<td class="border" style="text-align: center"><b><?php echo $r->hasil ?></b></td>
									<td class="border" ></td>
									<td class="border" ></td>
								<?php } else if ($r->hasil == 2)  {
									$r->hasil = "√";?>
									<td class="border" ></td>
									<td class="border" style="text-align: center"><b><?php echo $r->hasil ?></b></td>
									<td class="border" ></td>
								<?php } else if ($r->hasil == 3)  {
									$r->hasil = "√";?>
									<td class="border" ></td>
									<td class="border" ></td>
									<td class="border" style="text-align: center"><b><?php echo $r->hasil ?></b></td>
								<?php } else { ?>
									<td colspan="3" class="border" style="text-align: left"><?php echo $r->keterangan ?></td>
								<?php } ?>
							</tr>
						<?php endforeach?>
					<?php } else { ?>
						<?php foreach($result_params as $row): ?>
							<?php if ($row->detail == "Keterangan") { ?>
								<tr>
									<td class="border"><?php echo $row->detail?></td>
									<td colspan="3" class="border"></td>
								</tr>
							<?php } else { ?>
								<tr>
									<td class="border"><?php echo $row->detail?></td>
									<td class="border"></td>
									<td class="border"></td>
									<td class="border"></td>
								</tr>
							<?php } ?>
						<?php endforeach?>
					<?php } ?>			
				</tbody>
            </table>
			<br>
			<?php if ($nama_ca != null) { ?>
				<table style="font-size: 10px;">
					<tr>
						<td><b>Diverifikasi Oleh: </b></td>
					</tr>
					<tr>
						<td><b><?php echo $nama_ca ?></b></td>
					</tr>
					<tr>
						<td>Dicetak pada: <b><?php echo date('d-m-Y, H:i:s') ?></b></td>
					</tr>
				</table>
			<?php } ?>
        </div>
    </div>
</div>