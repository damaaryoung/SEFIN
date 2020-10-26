<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
	body {
		font-size: 10px;
	    font-family: Arial;
	}

	table {
	    border-collapse:collapse;
	    text-align: center;
	    vertical-align: middle;
	}

	table, th, tr, td {
	    height: 1cm;
	    /* border: 1px solid black; */
	}

    th, tr, td {
	    border-bottom: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;
	}

    tr.tgl {
        border:0;
		padding-left: 2px;
		padding-right: 2px;
        text-align: left;
	}

	td {
		padding-left: 2px;
		padding-right: 2px;
	}

    td.tgl {
		padding-left: 2px;
		padding-right: 2px;
        text-align: left;
        border-right: none;
        border-left: none;
	}

    h1 {
        text-align: center;
    }

	.no {
	    width: 1cm;
	}

	.layanan {
		width: 10cm;
	}

	.nmpetugas {
		width: 10cm;
	}

    .jml {
		width: 6cm;
	}

	.sapu {
		width: 2cm;
	}

    .pu {
		width: 2cm;
	}
    
    .tipu {
		width: 2cm;
	}

	</style>
        <title>Report</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <p align="justify"> <h1>Laporan Polling Tingkat Kepuasan Masyarakat <br>Dinas Kependudukan dan Pencatatan Sipil <br>Kota Tangerang Selatan </h1>
        </p>
        <table align="center">
            <tr class="tgl">
                <td colspan="6" class="tgl"><b>
                <?php
                if (isset($_GET['tanggal_awal'])&isset($_GET['tanggal_awal'])) {
                    echo "tanggal : ".date('d F Y', strtotime($_GET['tanggal_awal'])) ." s/d ".date('d F Y', strtotime($_GET['tanggal_akhir']));
                }
                ?>
                </b></td>
            </tr>
            <tr>
                <th class="no" rowspan="2">No</th>
                <th class="nmpetugas" rowspan="2">Nama Petugas</th>
                <th class="layanan" rowspan="2">Loket</th>
                <th class="layanan" rowspan="2">Pelayanan</th>
                <th class="jml" colspan="4">Jumlah Rating</th>
            </tr>
            <tr>
                <th class="pu">Sangat Puas</th>
                <th class="pu">Puas</th>
                <th class="pu">Tidak Puas</th>
                <th class="pu">Score</th>
            </tr>
            <?php
                $no = 1; 
                foreach($data as $hasil) {
                    echo "
                        <tr>
                            <td class='no' align='center'>{$no}</td>
                            <td class='nmpetugas' align='center'>{$hasil['nama_petugas']}</td>
                            <td class='layanan' align='center'>{$hasil['nama_loket']}</td>
                            <td class='layanan' align='center'>{$hasil['nama_pelayanan']}</td>
                            <td class='sapu'>{$hasil['sp']}</td>
                            <td class='pu' align='center'>{$hasil['p']}</td>
                            <td class='tipu' align='center'>{$hasil['tp']}</td>
                            <td class='tipu' align='center'>{$hasil['total']}</td>
                        </tr>
                    ";

                    $no++;
                }
            ?>
        </table>
    
    </body>
</html>