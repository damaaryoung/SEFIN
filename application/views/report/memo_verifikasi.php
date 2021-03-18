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
                        <th colspan="6" align="left" style="background-color: yellow;font-size: 10px;">DEBITUR</th>
                    </tr>
					<tr>
						<td rowspan="9">
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
                            <tr>
                                <td width="120"> Diverifikasi Oleh</td>
                                <td width="2">:</td>
                                <td><?php echo $verif_debitur_result?> <?php echo $verif_debitur_update_result?></td>
                            </tr>
                        </td>
                    </tr>

                    <?php if ($id_pasangan != null) { ?>
                    
                        <tr>
                            <th colspan="6" align="left" style="background-color: yellow;font-size: 10px;">PASANGAN</th>
                        </tr>
                        <tr>
                            <td rowspan="9">
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
                                <tr>
                                    <td width="120"> Diverifikasi Oleh</td>
                                    <td width="2">:</td>
                                    <td><?php echo $verif_pasangan_result?> <?php echo $verif_pasangan_update_result?></td>
                                </tr>
                            </td>
                        </tr>
                    
                    <?php } ?>
                                        
                    <?php foreach($result_penjamin as $r): ?>
                        <?php if ($r->id_penjamin != null) { ?>
                            <?php $url = $this->config->item('img_url') ?>
                            <tr>
                                <th colspan="6" align="left" style="background-color: yellow;font-size: 10px;">PENJAMIN</th>
                            </tr>
                            <tr>
                                <td rowspan="9">
                                    <?php if ($r->photo_penjamin == null) { ?>
                                        <img width= "150" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />
                                    <?php } else { ?>
                                        <img width= "150" src="<?php echo "$url$r->photo_penjamin"?>"></img>
                                    <?php } ?> 
                                </td>
                                <td>
                                    <tr>
                                        <td colspan="3"><b>DATA PENJAMIN</b></td>
                                        <td><b>HASIL VERIFIKASI</b></td>
                                    </tr>
                                    <tr>
                                        <td width="120"> Foto</td>
                                        <td width="2">:</td>
                                        <td></td>
                                        <?php if ($r->photo_penjamin_result > 70) { ?>
                                            <td style="width: 120" class="btn_verif" ><?php echo $r->photo_penjamin_result ?> %</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" ><?php echo $r->photo_penjamin_result ?> %</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td width="120"> Nama Penjamin</td>
                                        <td width="2">:</td>
                                        <td><?php echo $r->nama_penjamin ?></td>
                                        <?php if ($r->nama_penjamin_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td width="120"> Tempat Lahir</td>
                                        <td width="2">:</td>
                                        <td><?php echo $r->tempat_lahir_penjamin ?></td>
                                        <?php if ($r->tempat_lahir_penjamin_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td width="120"> Tanggal Lahir</td>
                                        <td width="2">:</td>
                                        <td><?php echo $r->tgl_lahir_penjamin ?></td>
                                        <?php if ($r->tgl_lahir_penjamin_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td width="120"> Alamat</td>
                                        <td width="2">:</td>
                                        <td><?php echo $r->alamat_penjamin ?></td>
                                        <?php if ($r->alamat_penjamin_result != null) { ?>
                                            <td><?php echo $r->alamat_penjamin_result ?></td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td width="120"> Income</td>
                                        <td width="2">:</td>
                                        <td><?php echo $r->pemasukan_penjamin ?></td>
                                        <?php if ($r->pemasukan_penjamin_result == "BELOW" || $r->pemasukan_penjamin_result == "below") { ?>
                                            <td style="width: 120" class="btn_notverif" >BELOW</td>
                                        <?php } else if ($r->pemasukan_penjamin_result == "AMIDST" || $r->pemasukan_penjamin_result == "amidst") { ?>
                                            <td style="width: 120" class="btn_amidst" >AMIDST</td>
                                        <?php } else if ($r->pemasukan_penjamin_result == "ABOVE" || $r->pemasukan_penjamin_result == "above") { ?>
                                            <td style="width: 120" class="btn_verif" >ABOVE</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td width="120"> Diverifikasi Oleh</td>
                                        <td width="2">:</td>
                                        <?php if ($r->verif_penjamin_update_result != null) { ?> 
                                            <td><?php echo $r->verif_penjamin_result?> <?php echo date('d-m-Y | H:i:s',strtotime($r->verif_penjamin_update_result))?></td>
                                        <?php  } else  {?>
                                            <td></td>
                                        <?php } ?>
                                    </tr>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php endforeach?>

                    <?php foreach($result_properti as $row) : ?>
                        <?php if($row->id_agunan_tanah != null ) { ?>
                            <tr>
                                <th colspan="6" align="left" style="background-color: yellow;font-size: 10px;">PROPERTI</th>
                            </tr>
                            <tr>
                                <td>
                                    <tr>
                                        <td colspan="4"><b>DATA PROPERTI</b></td>
                                        <td><b>HASIL VERIFIKASI</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">NOP</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->nop ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nama Properti</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->nama_properti ?></td>
                                        <?php if ($row->nama_properti_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Alamat Properti</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->alamat_properti ?></td>
                                        <td><?php echo $row->alamat_properti_result ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Luas Bangunan Properti</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->luas_bangunan ?></td>
                                        <?php if ($row->luas_bangunan_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Luas Tanah Properti</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->luas_tanah ?></td>
                                        <?php if ($row->luas_tanah_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Estimasi Properti</td>
                                        <td width="2">:</td>
                                        <td></td>
                                        <?php if ($row->estimasi_result == "BELOW" || $row->estimasi_result == "below") { ?>
                                            <td style="width: 120" class="btn_notverif" >BELOW</td>
                                        <?php } else if ($row->estimasi_result == "AMIDST" || $row->estimasi_result == "amidst") { ?>
                                            <td style="width: 120" class="btn_amidst" >AMIDST</td>
                                        <?php } else if ($row->estimasi_result == "ABOVE" || $row->estimasi_result == "above") { ?>
                                            <td style="width: 120" class="btn_verif" >ABOVE</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">No. Sertifikat</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->no_sertifikat ?></td>
                                        <?php if ($row->no_sertifikat_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nama Pemilik Sertifikat</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->nama_pemilik_sertifikat ?></td>
                                        <?php if ($row->nama_pemilik_sertifikat_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jenis Sertifikat</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->tipe_sertifikat ?></td>
                                        <?php if ($row->tipe_sertifikat_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Tanggal Sertifikat</td>
                                        <td width="2">:</td>
                                        <td><?php echo $row->tgl_sertifikat ?></td>
                                        <?php if ($row->tgl_sertifikat_result == 1) { ?>
                                            <td style="width: 120" class="btn_verif" >VERIFIED</td>
                                        <?php } else { ?>
                                            <td style="width: 120" class="btn_notverif" >NOT VERIFIED</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Diverifikasi Oleh</td>
                                        <td width="2">:</td>
                                        <?php if ($row->verif_properti_update_result != null) { ?> 
                                            <td><?php echo $row->verif_properti_result?> <?php echo date('d-m-Y | H:i:s',strtotime($row->verif_properti_update_result))?></td>
                                        <?php  } else  {?>
                                            <td></td>
                                        <?php } ?>
                                    </tr>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php endforeach?>

                </tbody>
            </table>
		</div>
	</div>

</div>