<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=FUNNEL_LENDING_DETAIL.xls");

?>



<!DOCTYPE html>

<html lang="en">

    <head>

        <title>FUNNEL LENDING DETAIL</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="<?php echo base_url('favicon.ico') ?>" rel="shortcut icon">

        <style>

        .border{

            border: 1px solid black;

        }

        .background{

            background-color: #b5b5b5;
        }

        </style>

    </head>

    <body>

        <?php if ($isKonsolidasi) { ?>
            <table>
                <tr>
                    <td></td>
                </tr>
            </table>
    
            <table class="border" style="width: 100%;">
    
                <tr>
    
                    <th class="border">Parameter</th>
    
                    <th class="border">Approved</th>
    
                    <th class="border">Waiting Cek CC</th>
    
                    <th class="border">Reject CC</th>
    
                    <th class="border">Reject AO</th>
    
                    <th class="border">No Status AO</th>
    
                    <th class="border">Proses Verif CA</th>
    
                    <th class="border">Reject CA</th>
    
                    <th class="border">Waiting Approve CAA</th>
                    
                    <th class="border">Reject CAA</th>
    
                    <th class="border">Waiting SHM in</th>
    
                    <th class="border">Waiting Hasil Cek</th>
    
                </tr>
    
                <tr>
    
                    <td class="border">Leads</td>
    
                    <td class="border" style="text-align: center"><?php echo $leadsData->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                </tr>
    
                <tr>
                    <td class="border">Prospek</td>
    
                    <td class="border" style="text-align: center"><?php echo $prospekApprove->id ?></td>
    
                    <td style="text-align: center"><?php echo $prospekWaiting->id ?></td>
    
                    <td style="text-align: center"><?php echo $prospekReject->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
                </tr>
    
                <tr>
                    <td class="border">Rekomendasi AO</td>
    
                    <td class="border" style="text-align: center"><?php echo $aoApprove->id ?></td>
                    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td style="text-align: center"><?php echo $aoReject->id ?></td>
    
                    <td style="text-align: center"><?php echo $status_ao ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
                </tr>
    
                <tr>
                    <td class="border">Rekomendasi CA</td>
    
                    <td class="border" style="text-align: center"><?php echo $caApprove->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td style="text-align: center"><?php echo $verif_ca ?></td>
    
                    <td style="text-align: center"><?php echo $caReject->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
                </tr>
    
                <tr>
                    <td class="border">Commite CAA</td>
    
                    <td class="border" style="text-align: center"><?php echo $caaApprove->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
                    
                    <td style="text-align: center"><?php echo $caaWaiting ?></td>
    
                    <td style="text-align: center"><?php echo $caaReject->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
                </tr>
    
                <tr>
                    <td class="border">Cek Sertipikat</td>
    
                    <td class="border" style="text-align: center"><?php echo $ceksertipikatApprove->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td style="text-align: center"><?php echo $ceksertipikatWaiting ?></td>
    
                    <td class="background"></td>
                </tr>
    
                <tr>
                    <td class="border">Lending</td>
    
                    <td class="border" style="text-align: center"><?php echo $lendingApprove->id ?></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td class="background"></td>
    
                    <td style="text-align: center"><?php echo $lendingWaiting->id ?></td>
                </tr>
    
            </table>
    
            <table>
                <tr>
                    <td></td>
                </tr>
            </table>
    
            <table class="border" style="width: 100%;">
    
                <tr>
    
                    <td class="border">Leads to Prospek</td>
    
                    <td class="border">
                        <?php 
                            $leadstoprospek = ($prospekApprove->id / $leadsData->id) * 100;
    
                            echo number_format($leadstoprospek, 2, '.', '')."%";
                        ?>
                    </td>
    
                </tr>
    
                <tr>
    
                    <td class="border">Prospek to Rekom AO</td>           
                    
                    <td class="border">
                        <?php 
                            $prospektoao = ($aoApprove->id / $prospekApprove->id) * 100;
    
                            echo number_format($prospektoao, 2, '.', '')."%";
                        ?>
                    </td>
    
                </tr>
    
                <tr>
    
                    <td class="border">Rekom AO to Rekom CA</td>           
                    
                    <td class="border">
                        <?php 
                            $aotoca = ($caApprove->id / $aoApprove->id) * 100;
    
                            echo number_format($aotoca, 2, '.', '')."%";
                        ?>
                    </td>
    
                </tr>
    
                <tr>
    
                    <td class="border">Rekom CA to Final Approve</td>
    
                    <td class="border">
                        <?php 
                            $catocaa = ($caaApprove->id / $caApprove->id) * 100;
    
                            echo number_format($catocaa, 2, '.', '')."%";
                        ?>
                    </td>
    
                </tr>
    
                <tr>
    
                    <td class="border">Final Approve to Cek SHM</td>
    
                    <td class="border">
                        <?php 
                            $caatocek = ($ceksertipikatApprove->id / $caaApprove->id) * 100;
    
                            echo number_format($caatocek, 2, '.', '')."%";
                        ?>
                    </td>
    
                </tr>
    
                <tr>
    
                    <td class="border">Rekom AO to Lending</td>
    
                    <td class="border">
                        <?php 
                            $aotolending = ($lendingApprove->id / $aoApprove->id) * 100;
    
                            echo number_format($aotolending, 2, '.', '')."%";
                        ?>
                    </td>
    
                </tr>
                
            </table>

        <?php } else { ?>
            <?php 
                $flag = true;
                foreach ($leadsDataCabang as $datumLeads) { 
                    $flag = false;
                    $prospekRejectDataCabangTemp = new stdClass();
                    foreach ($prospekRejectDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $prospekRejectDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $prospekRejectDataCabangTemp->total_per_cabang = 0;
                        $prospekRejectDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $prospekWaitingDataCabangTemp = new stdClass();
                    foreach ($prospekWaitingDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $prospekWaitingDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $prospekWaitingDataCabangTemp->total_per_cabang = 0;
                        $prospekWaitingDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $prospekApproveDataCabangTemp = new stdClass();
                    foreach ($prospekApproveDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $prospekApproveDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $prospekApproveDataCabangTemp->total_per_cabang = 0;
                        $prospekApproveDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $aoRejectDataCabangTemp = new stdClass();
                    foreach ($aoRejectDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $aoRejectDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $aoRejectDataCabangTemp->total_per_cabang = 0;
                        $aoRejectDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $aoApproveDataCabangTemp = new stdClass();
                    foreach ($aoApproveDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $aoApproveDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $aoApproveDataCabangTemp->total_per_cabang = 0;
                        $aoApproveDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $caRejectDataCabangTemp = new stdClass();
                    foreach ($caRejectDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $caRejectDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $caRejectDataCabangTemp->total_per_cabang = 0;
                        $caRejectDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $caApproveDataCabangTemp = new stdClass();
                    foreach ($caApproveDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $caApproveDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $caApproveDataCabangTemp->total_per_cabang = 0;
                        $caApproveDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $caaRejectDataCabangTemp = new stdClass();
                    foreach ($caaRejectDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $caaRejectDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $caaRejectDataCabangTemp->total_per_cabang = 0;
                        $caaRejectDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $caaApproveDataCabangTemp = new stdClass();
                    foreach ($caaApproveDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $caaApproveDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $caaApproveDataCabangTemp->total_per_cabang = 0;
                        $caaApproveDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $ceksertipikatApproveDataCabangTemp = new stdClass();
                    foreach ($ceksertipikatApproveDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $ceksertipikatApproveDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $ceksertipikatApproveDataCabangTemp->total_per_cabang = 0;
                        $ceksertipikatApproveDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $lendingWaitingDataCabangTemp = new stdClass();
                    foreach ($lendingWaitingDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $lendingWaitingDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $lendingWaitingDataCabangTemp->total_per_cabang = 0;
                        $lendingWaitingDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }

                    $flag = false;
                    $lendingApproveDataCabangTemp = new stdClass();
                    foreach ($lendingApproveDataCabang as $dataCabang) {
                        if ($dataCabang->nama_cabang == $datumLeads->nama_cabang) {
                            $lendingApproveDataCabangTemp = $dataCabang;
                            $flag = true;
                        }
                    };
                    if (!$flag) {
                        $lendingApproveDataCabangTemp->total_per_cabang = 0;
                        $lendingApproveDataCabangTemp->nama_cabang = $datumLeads->nama_cabang;
                    }
            ?>
                <table>
                    <tr>
                        <td><?php echo $kode_area; ?> - <?php echo $datumLeads->nama_cabang; ?></td>
                    </tr>
                </table>

                <table class="border" style="width: 100%;">
    
                    <tr>
        
                        <th class="border">Parameter</th>
        
                        <th class="border">Approved</th>
        
                        <th class="border">Waiting Cek CC</th>
        
                        <th class="border">Reject CC</th>
        
                        <th class="border">Reject AO</th>
        
                        <th class="border">No Status AO</th>
        
                        <th class="border">Proses Verif CA</th>
        
                        <th class="border">Reject CA</th>
        
                        <th class="border">Waiting Approve CAA</th>
                        
                        <th class="border">Reject CAA</th>
        
                        <th class="border">Waiting SHM in</th>
        
                        <th class="border">Waiting Hasil Cek</th>
        
                    </tr>
        
                    <tr>
        
                        <td class="border">Leads</td>
        
                        <td class="border" style="text-align: center"><?php echo $datumLeads->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                    </tr>
        
                    <tr>
                        <td class="border">Prospek</td>
        
                        <td class="border" style="text-align: center"><?php echo $prospekApproveDataCabangTemp->total_per_cabang ?></td>
        
                        <td style="text-align: center"><?php echo $prospekWaitingDataCabangTemp->total_per_cabang ?></td>
        
                        <td style="text-align: center"><?php echo $prospekRejectDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
                    </tr>
        
                    <tr>
                        <td class="border">Rekomendasi AO</td>
        
                        <td class="border" style="text-align: center"><?php echo $aoApproveDataCabangTemp->total_per_cabang ?></td>
                        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td style="text-align: center"><?php echo $aoRejectDataCabangTemp->total_per_cabang ?></td>
        
                        <td style="text-align: center"><?php echo $prospekApproveDataCabangTemp->total_per_cabang - ( $aoApproveDataCabangTemp->total_per_cabang + $aoRejectDataCabangTemp->total_per_cabang) // Status AO ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
                    </tr>
        
                    <tr>
                        <td class="border">Rekomendasi CA</td>
        
                        <td class="border" style="text-align: center"><?php echo $caApproveDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td style="text-align: center"><?php echo $aoApproveDataCabangTemp->total_per_cabang - ( $caApproveDataCabangTemp->total_per_cabang + $caRejectDataCabangTemp->total_per_cabang ); // Verif CA ?></td>
        
                        <td style="text-align: center"><?php echo $caRejectDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
                    </tr>
        
                    <tr>
                        <td class="border">Commite CAA</td>
        
                        <td class="border" style="text-align: center"><?php echo $caaApproveDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
                        
                        <td style="text-align: center"><?php echo ($caApproveDataCabangTemp->total_per_cabang + $caRejectDataCabangTemp->total_per_cabang) - ( $caaApproveDataCabangTemp->total_per_cabang + $caaRejectDataCabangTemp->total_per_cabang ) // CAA Waiting ?></td>
        
                        <td style="text-align: center"><?php echo $caaRejectDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
                    </tr>
        
                    <tr>
                        <td class="border">Cek Sertipikat</td>
        
                        <td class="border" style="text-align: center"><?php echo $ceksertipikatApproveDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td style="text-align: center"><?php echo $caaApproveDataCabangTemp->total_per_cabang - $ceksertipikatApproveDataCabangTemp->total_per_cabang // ceksertipikatWaiting ?></td>
        
                        <td class="background"></td>
                    </tr>
        
                    <tr>
                        <td class="border">Lending</td>
        
                        <td class="border" style="text-align: center"><?php echo $lendingApproveDataCabangTemp->total_per_cabang ?></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td class="background"></td>
        
                        <td style="text-align: center"><?php echo $lendingWaitingDataCabangTemp->total_per_cabang ?></td>
                    </tr>
        
                </table>
    
                <table>
                    <tr>
                        <td></td>
                    </tr>
                </table>
    
                <table class="border" style="width: 100%;">
        
                    <tr>
        
                        <td class="border">Leads to Prospek</td>
        
                        <td class="border">
                            <?php 
                                $leadstoprospek = ($prospekApproveDataCabangTemp->total_per_cabang / $datumLeads->total_per_cabang) * 100;
                                if (is_nan($leadstoprospek)) {
                                    $leadstoprospek = 0;
                                }
                                echo number_format($leadstoprospek, 2, '.', '')."%";
                            ?>
                        </td>
        
                    </tr>
        
                    <tr>
        
                        <td class="border">Prospek to Rekom AO</td>           
                        
                        <td class="border">
                            <?php 
                                $prospektoao = ($aoApproveDataCabangTemp->total_per_cabang / $prospekApproveDataCabangTemp->total_per_cabang) * 100;
                                if (is_nan($prospektoao)) {
                                    $prospektoao = 0;
                                }
                                echo number_format($prospektoao, 2, '.', '')."%";
                            ?>
                        </td>
        
                    </tr>
        
                    <tr>
        
                        <td class="border">Rekom AO to Rekom CA</td>           
                        
                        <td class="border">
                            <?php 
                                $aotoca = ($caApproveDataCabangTemp->total_per_cabang / $aoApproveDataCabangTemp->total_per_cabang) * 100;
                                if (is_nan($aotoca)) {
                                    $aotoca = 0;
                                }
                                echo number_format($aotoca, 2, '.', '')."%";
                            ?>
                        </td>
        
                    </tr>
        
                    <tr>
        
                        <td class="border">Rekom CA to Final Approve</td>
        
                        <td class="border">
                            <?php 
                                $catocaa = ($caaApproveDataCabangTemp->total_per_cabang / $caApproveDataCabangTemp->total_per_cabang) * 100;
                                if (is_nan($catocaa)) {
                                    $catocaa = 0;
                                }
                                echo number_format($catocaa, 2, '.', '')."%";
                            ?>
                        </td>
        
                    </tr>
        
                    <tr>
        
                        <td class="border">Final Approve to Cek SHM</td>
        
                        <td class="border">
                            <?php 
                                $caatocek = ($ceksertipikatApproveDataCabangTemp->total_per_cabang / $caaApproveDataCabangTemp->total_per_cabang) * 100;
                                if (is_nan($caatocek)) {
                                    $caatocek = 0;
                                }
                                echo number_format($caatocek, 2, '.', '')."%";
                            ?>
                        </td>
        
                    </tr>
        
                    <tr>
        
                        <td class="border">Rekom AO to Lending</td>
        
                        <td class="border">
                            <?php 
                                $aotolending = ($lendingApproveDataCabangTemp->total_per_cabang / $aoApproveDataCabangTemp->total_per_cabang) * 100;
                                if (is_nan($aotolending)) {
                                    $aotolending = 0;
                                }
                                echo number_format($aotolending, 2, '.', '')."%";
                            ?>
                        </td>
        
                    </tr>
                    
                </table>

                <table>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            <?php } ?>                
        <?php } ?>

    </body>

</html>