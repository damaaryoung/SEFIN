<style>
    .btn_verif {
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        padding: 0.1rem 0.5rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #ffffff;
        background-color: #28a745;
        border-color: #28a745;
        width: 100%;
    }
    .btn_notverif {
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        padding: 0.1rem 0.5rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #ffffff;
        background-color: #e74c3c;
        border-color: #e74c3c;
        width:100%;
    }
    .btn_amidst {
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        padding: 0.1rem 0.5rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #ffffff;
        background-color: #17a2b8;
        border-color: #17a2b8;
        width:100%;
    }
    .btn_null {
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        padding: 0.1rem 0.5rem;
        font-size: 1rem;
        width:100%;
    }

</style>

<div class="book">
	<div class="page" style="font-size: 10px;">
		<div class="table-responsive">
			<table border="0" style="width: 100%;font-size: 10px;">
				<tr>
					<th colspan="6" align="center" style="background-color: red;color: white;font-size: 12px">
						<center>HASIL VERIFIKASI</center>
					</th>
				</tr>
				<tr>
					<th colspan="6" align="center" style="background-color: black;color: white;font-size: 10px"></th>
				</tr>
				<tbody style="font-size: 9px;">
                    <?php $url = $this->config->item('img_url') ?>
                    <tr>
                        <th colspan="6" align="left" style="background-color: yellow;font-size: 10px;">DATA DEBITUR</th>
                    </tr>
					<tr>
						<td rowspan="8">
                            <?php if ($photo_debitur == null) { ?>
                                <img width= "150" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />
                            <?php } else { ?>
                                <img width= "150" src="<?php echo "$url$photo_debitur"?>"></img>
                            <?php } ?> 
                        </td>
                        <td>
                            <tr>
                                <td colspan="3"><b>DATA DEBITUR</b></td>
                                <td><b>HASIL VERIFIKASI</b></td>
                            </tr>
                            <tr>
                                <td width="120"> Foto</td>
                                <td width="2">:</td>
                                <td></td>
                                <?php if ($photo_debitur_result > 70) { ?>
                                    <td style="width: 120" class="btn_verif" ><?php echo $photo_debitur_result ?> %</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" ><?php echo $photo_debitur_result ?> %</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Nama Debitur</td>
                                <td width="2">:</td>
                                <td><?php echo $nama_debitur ?></td>
                                <?php if ($nama_debitur_result == 1) { ?>
                                    <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Tempat Lahir</td>
                                <td width="2">:</td>
                                <td><?php echo $tempat_lahir_debitur ?></td>
                                <?php if ($tempat_lahir_debitur_result == 1) { ?>
                                    <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Tanggal Lahir</td>
                                <td width="2">:</td>
                                <td><?php echo $tgl_lahir_debitur ?></td>
                                <?php if ($tgl_lahir_debitur_result == 1) { ?>
                                    <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Alamat</td>
                                <td width="2">:</td>
                                <td><?php echo $alamat_debitur ?></td>
                                <?php if ($alamat_debitur_result != null) { ?>
                                    <td><?php echo $alamat_debitur_result ?></td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Income</td>
                                <td width="2">:</td>
                                <td><?php echo $pemasukan_debitur ?></td>
                                <?php if ($pemasukan_debitur_result == "BELOW" || $pemasukan_debitur_result == "below") { ?>
                                    <td style="width: 120" class="btn_notverif" >BELOW</td>
                                <?php } else if ($pemasukan_debitur_result == "AMIDST" || $pemasukan_debitur_result == "amidst") { ?>
                                    <td style="width: 120" class="btn_amidst" >AMIDST</td>
                                <?php } else if ($pemasukan_debitur_result == "ABOVE" || $pemasukan_debitur_result == "above") { ?>
                                    <td style="width: 120" class="btn_verif" >ABOVE</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                        </td>
                    </tr>
                    
                    <tr>
                        <th colspan="6" align="left" style="background-color: yellow;font-size: 10px;">DATA PASANGAN</th>
                    </tr>
					<tr>
						<td rowspan="8">
                            <?php if ($photo_pasangan == null) { ?>
                                <img width= "150" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />
                            <?php } else { ?>
                                <img width= "150" src="<?php echo "$url$photo_pasangan"?>"></img>
                            <?php } ?> 
                        </td>
                        <td>
                            <tr>
                                <td colspan="3"><b>DATA PASANGAN</b></td>
                                <td><b>HASIL VERIFIKASI</b></td>
                            </tr>
                            <tr>
                                <td width="120"> Foto</td>
                                <td width="2">:</td>
                                <td></td>
                                <?php if ($photo_pasangan_result > 70) { ?>
                                    <td style="width: 120" class="btn_verif" ><?php echo $photo_pasangan_result ?> %</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" ><?php echo $photo_pasangan_result ?> %</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Nama Debitur</td>
                                <td width="2">:</td>
                                <td><?php echo $nama_pasangan ?></td>
                                <?php if ($nama_pasangan_result == 1) { ?>
                                    <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Tempat Lahir</td>
                                <td width="2">:</td>
                                <td><?php echo $tempat_lahir_pasangan ?></td>
                                <?php if ($tempat_lahir_pasangan_result == 1) { ?>
                                    <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Tanggal Lahir</td>
                                <td width="2">:</td>
                                <td><?php echo $tgl_lahir_pasangan ?></td>
                                <?php if ($tgl_lahir_pasangan_result == 1) { ?>
                                    <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Alamat</td>
                                <td width="2">:</td>
                                <td><?php echo $alamat_pasangan ?></td>
                                <?php if ($alamat_pasangan_result != null) { ?>
                                    <td><?php echo $alamat_pasangan_result ?></td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td width="120"> Income</td>
                                <td width="2">:</td>
                                <td><?php echo $pemasukan_pasangan ?></td>
                                <?php if ($pemasukan_pasangan_result == "BELOW" || $pemasukan_pasangan_result == "below") { ?>
                                    <td style="width: 120" class="btn_notverif" >BELOW</td>
                                <?php } else if ($pemasukan_pasangan_result == "AMIDST" || $pemasukan_pasangan_result == "amidst") { ?>
                                    <td style="width: 120" class="btn_amidst" >AMIDST</td>
                                <?php } else if ($pemasukan_pasangan_result == "ABOVE" || $pemasukan_pasangan_result == "above") { ?>
                                    <td style="width: 120" class="btn_verif" >ABOVE</td>
                                <?php } else { ?>
                                    <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                <?php } ?>
                            </tr>
                        </td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>

</div>