<script>
    show_data();

    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    var divisi = '<?php echo $get_user['data']['divisi_id'] ?>';
    console.log(divisi);

    if (divisi === 'IT') {
        $('#content').show()
    } else {
        $('#content').hide();
    }

    // get_5_cabang_ammount = function(opts) {
    //     return $.ajax({
    //         type: "POST",
    //         url: "<!?= base_url(); ?>/Dashboard_restruktur_controller/get_data5_cabang_by_amount",
    //         async: false,
    //         dataType: "JSON",
    //
    //     });
    // }
    get_5_cabang_ammount();
    function get_5_cabang_ammount() {
        $.ajax({
            type: "POST",
            // url: "<!?= base_url(); ?>/Dashboard_restruktur_controller/get_data5_cabang_by_amount",
            url: "http://192.168.1.31/SIMAR/dashboard/internal/restruktur/restruktur_controller/master_data_restruktur_lima_cabang_terbesar",
            data:{'api':'Y'},
            async: false,
            success:function(e){
              console.log(e);
            }
        });
    }

    get_5_cabang_noa = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_data5_cabang_by_noa') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_area_cabang_ammount = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_data_area_cabang_by_amount') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_area_cabang_noa = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_data_area_cabang_by_noa') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_restruktur_kredit_by_noa = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_model_restruktur_kredit_by_noa') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_noa_restruktur_kredit_by_plafon = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_noa_restruktur_kredit_by_plafon') ?>",
            async: false,
            dataType: "JSON",
        });
    }


    get_komposisi_area = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_data_komp_normal_rest_area') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_komposisi = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_data_komp_normal_rest') ?>",
            async: false,
            dataType: "JSON",
        });
    }


    get_collection_rasio = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_collection_rasio') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_collection_rasio = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_collection_rasio') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_current_rasio = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_current_rasio') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    get_ns_restruktur = function(opts) {
        return $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_ns_restruktur') ?>",
            async: false,
            dataType: "JSON",
        });
    }

    function modal_area_komposisi_normal_dan_restruktur() {
        $("#modal_komposisi_per_area").modal('show');

        var normal_res_bandung = Highcharts.chart('container_bandung', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                }
            },
            series: [{
                type: 'pie',
                data: []
            }]
        });

        var normal_res_bekasi = Highcharts.chart('container_bekasi', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                }
            },
            series: [{
                type: 'pie',
                data: []
            }]
        });

        var normal_res_bogor = Highcharts.chart('container_bogor', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    // showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                data: []
            }]
        });

        var normal_res_cirebon = Highcharts.chart('container_cirebon', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    // showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                data: []
            }]
        });

        var normal_res_karawang = Highcharts.chart('container_karawang', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    // showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                data: []
            }]
        });

        var normal_res_tangerang = Highcharts.chart('container_tangerang', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    // showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                data: []
            }]
        });

        get_komposisi_area()
            .done(function(res) {
                var data_area_bandung = [];
                var data_area_bekasi = [];
                var data_area_bogor = [];
                var data_area_cirebon = [];
                var data_area_karawang = [];
                var data_area_tangerang = [];

                // $('#normal_bandung_span').text('Normal: ' + res[0].rasio_normal_kumulatif + '%');
                let html =
                    "<span class='mr-2'><i class='fas fa-circle' style='color:#4d86bd'></i>Normal: " + res[0].rasio_normal_kumulatif + "%</span><span class='mr-2'><i class='fas fa-circle' style='color:#3d3d42'></i>Restruktur: " + res[0].rasio_rest_kumulatif + "%</span>";
                $('#span_bandung').html(html);

                let html1 =
                    "<span class='mr-2'><i class='fas fa-circle' style='color:#4d86bd'></i>Normal: " + res[1].rasio_normal_kumulatif + "%</span><span class='mr-2'><i class='fas fa-circle' style='color:#3d3d42'></i>Restruktur: " + res[1].rasio_rest_kumulatif + "%</span>";
                $('#span_bekasi').html(html1);

                let html2 =
                    "<span class='mr-2'><i class='fas fa-circle' style='color:#4d86bd'></i>Normal: " + res[2].rasio_normal_kumulatif + "%</span><span class='mr-2'><i class='fas fa-circle' style='color:#3d3d42'></i>Restruktur: " + res[2].rasio_rest_kumulatif + "%</span>";
                $('#span_bogor').html(html2);

                let html3 =
                    "<span class='mr-2'><i class='fas fa-circle' style='color:#4d86bd'></i>Normal: " + res[3].rasio_normal_kumulatif + "%</span><span class='mr-2'><i class='fas fa-circle' style='color:#3d3d42'></i>Restruktur: " + res[3].rasio_rest_kumulatif + "%</span>";
                $('#span_cirebon').html(html3);

                let html4 =
                    "<span class='mr-2'><i class='fas fa-circle' style='color:#4d86bd'></i>Normal: " + res[4].rasio_normal_kumulatif + "%</span><span class='mr-2'><i class='fas fa-circle' style='color:#3d3d42'></i>Restruktur: " + res[4].rasio_rest_kumulatif + "%</span>";
                $('#span_karawang').html(html4);

                let html5 =
                    "<span class='mr-2'><i class='fas fa-circle' style='color:#4d86bd'></i>Normal: " + res[5].rasio_normal_kumulatif + "%</span><span class='mr-2'><i class='fas fa-circle' style='color:#3d3d42'></i>Restruktur: " + res[5].rasio_rest_kumulatif + "%</span>";
                $('#span_tangerang').html(html5);

                var komposisi_bandung = [{
                    "nama": 'Normal',
                    "noa": res[0].noa_normal_kumulatif,
                    "bd": Math.ceil(res[0].baki_normal_kumulatif),
                    "rs": res[0].rasio_normal_kumulatif
                }, {
                    "nama": 'Restruktur',
                    "noa": res[0].noa_rest_kumulatif,
                    "bd": Math.ceil(res[0].baki_rest_kumulatif),
                    "rs": res[0].rasio_rest_kumulatif
                }];

                var komposisi_bekasi = [{
                    "nama": 'Normal',
                    "noa": res[1].noa_normal_kumulatif,
                    "bd": Math.ceil(res[1].baki_normal_kumulatif),
                    "rs": res[1].rasio_normal_kumulatif
                }, {
                    "nama": 'Restruktur',
                    "noa": res[1].noa_rest_kumulatif,
                    "bd": Math.ceil(res[1].baki_rest_kumulatif),
                    "rs": res[1].rasio_rest_kumulatif
                }];

                var komposisi_bogor = [{
                    "nama": 'Normal',
                    "noa": res[2].noa_normal_kumulatif,
                    "bd": Math.ceil(res[2].baki_normal_kumulatif),
                    "rs": res[2].rasio_normal_kumulatif
                }, {
                    "nama": 'Restruktur',
                    "noa": res[2].noa_rest_kumulatif,
                    "bd": Math.ceil(res[2].baki_rest_kumulatif),
                    "rs": res[2].rasio_rest_kumulatif
                }];

                var komposisi_cirebon = [{
                    "nama": 'Normal',
                    "noa": res[3].noa_normal_kumulatif,
                    "bd": Math.ceil(res[3].baki_normal_kumulatif),
                    "rs": res[3].rasio_normal_kumulatif
                }, {
                    "nama": 'Restruktur',
                    "noa": res[3].noa_rest_kumulatif,
                    "bd": Math.ceil(res[3].baki_rest_kumulatif),
                    "rs": res[3].rasio_rest_kumulatif
                }];

                var komposisi_karawang = [{
                    "nama": 'Normal',
                    "noa": res[4].noa_normal_kumulatif,
                    "bd": Math.ceil(res[4].baki_normal_kumulatif),
                    "rs": res[4].rasio_normal_kumulatif
                }, {
                    "nama": 'Restruktur',
                    "noa": res[4].noa_rest_kumulatif,
                    "bd": Math.ceil(res[4].baki_rest_kumulatif),
                    "rs": res[4].rasio_rest_kumulatif
                }];

                var komposisi_tangerang = [{
                    "nama": 'Normal',
                    "noa": res[5].noa_normal_kumulatif,
                    "bd": Math.ceil(res[5].baki_normal_kumulatif),
                    "rs": res[5].rasio_normal_kumulatif
                }, {
                    "nama": 'Restruktur',
                    "noa": res[5].noa_rest_kumulatif,
                    "bd": Math.ceil(res[5].baki_rest_kumulatif),
                    "rs": res[5].rasio_rest_kumulatif
                }];

                $.each(komposisi_bandung, function(i, e) {
                    var jumlah_noa = (rubah(e.noa));
                    data_area_bandung.push({
                        name: 'NOA:' + jumlah_noa + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                        y: parseFloat(e.rs)
                    });
                });
                $.each(komposisi_bekasi, function(i, e) {
                    var jumlah = (rubah(e.noa));
                    data_area_bekasi.push({
                        name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                        y: parseFloat(e.rs)
                    });
                });
                $.each(komposisi_bogor, function(i, e) {
                    var jumlah = (rubah(e.noa));
                    data_area_bogor.push({
                        name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                        y: parseFloat(e.rs)
                    });
                });
                $.each(komposisi_cirebon, function(i, e) {
                    var jumlah = (rubah(e.noa));
                    data_area_cirebon.push({
                        name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                        y: parseFloat(e.rs)
                    });
                });
                $.each(komposisi_karawang, function(i, e) {
                    var jumlah = (rubah(e.noa));
                    data_area_karawang.push({
                        name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                        y: parseFloat(e.rs)
                    });
                });
                $.each(komposisi_tangerang, function(i, e) {
                    var jumlah = (rubah(e.noa));
                    data_area_tangerang.push({
                        name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                        y: parseFloat(e.rs)
                    });
                });

                normal_res_bandung.series[0].setData(data_area_bandung);
                normal_res_bekasi.series[0].setData(data_area_bekasi);
                normal_res_bogor.series[0].setData(data_area_bogor);
                normal_res_cirebon.series[0].setData(data_area_cirebon);
                normal_res_karawang.series[0].setData(data_area_karawang);
                normal_res_tangerang.series[0].setData(data_area_tangerang);

            })
            .fail(function(xhr) {
                console.log(xhr);
            })


    }

    function show_data() {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Dashboard_restruktur_controller/get_data_dashboard') ?>",
            async: false,
            dataType: "JSON",
            success: function(data) {
                var baki_debet = Math.ceil(data[0].baki_debet);
                var baki_normal_komulatif = Math.ceil(data[0].baki_normal_komulatif);
                var baki_rest_kumulatif = Math.ceil(data[0].baki_rest_kumulatif);
                $('[id="os_total"]').text(rubah(baki_debet));
                $('[id="os_normal"]').text(rubah(baki_normal_komulatif));
                $('[id="os_restruktur"]').text(rubah(baki_rest_kumulatif));
            }
        });
    }

    //KOMPOSISI NORMAL & RESTRUKTUR
    var normal_res = Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                // showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            // color: '#2c94ff',
            data: []
        }]
    });

    get_komposisi()
        .done(function(res) {

            var data_normal = [];

            var komposisi = [{
                "nama": 'Normal',
                "noa": res[0].noa_normal_kumulatif,
                "bd": Math.ceil(res[0].baki_normal_kumulatif),
                "rs": res[0].rasio_normal_kumulatif
            }, {
                "nama": 'Restruktur',
                "noa": res[0].noa_rest_kumulatif,
                "bd": Math.ceil(res[0].baki_rest_kumulatif),
                "rs": res[0].rasio_rest_kumulatif
            }];

            $.each(komposisi, function(i, e) {
                var jumlah = (rubah(e.noa));
                data_normal.push({
                    name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                    y: parseFloat(e.rs)
                });
            });

            normal_res.series[0].setData(data_normal);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
    //===============================================================================

    //MODEL RESTRUKTUR KREDIT By NOA
    var get_model_restruktur_kredit_by_noa = Highcharts.chart('container1', {

        chart: {
            type: 'column',

        },
        title: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            },

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: false,
                    // format: '{point.y:.3f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<b style="font-size:11px">{point.name}</b><br>',
            pointFormat: '<b>NOA: {point.y}</b><br/>'
        },
        credits: {
            enabled: false
        },
        subtitle: {
            enabled: false
        },

        series: [{
            // name: "Browsers",
            color: '#f46300',
            type: 'column',
            data: []
        }],

    });

    get_restruktur_kredit_by_noa()
        .done(function(res) {
            console.log(res[0]);
            var data_area_bandung = [];


            var data_model_restruktur_kred_by_noa = [];

            var data = [{
                "nama": 'Step Up',
                "noa": res[0].satu
            }, {
                "nama": 'Step Up & Perpanjang tenor',
                "noa": res[0].dua
            }, {
                "nama": 'Grace Period',
                "noa": res[0].tiga
            }, {
                "nama": 'Penurunan Bunga',
                "noa": res[0].empat
            }];


            $.each(data, function(i, e) {
                // var jumlah_noa = (rubah(e.noa));
                data_model_restruktur_kred_by_noa.push({
                    name: e.nama,
                    y: parseFloat(e.noa)
                });
            });
            get_model_restruktur_kredit_by_noa.series[0].setData(data_model_restruktur_kred_by_noa);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
    //=============================================================================

    // 5 CABANG TERBESAR BY AMOUNT
    // var get_cabang_by_ammount = Highcharts.chart('container2', {
    //
    //     chart: {
    //         type: 'column',
    //
    //     },
    //     title: {
    //         text: ''
    //     },
    //     accessibility: {
    //         announceNewData: {
    //             enabled: true
    //         }
    //     },
    //     xAxis: {
    //         type: 'category'
    //     },
    //     yAxis: {
    //         title: {
    //             text: ''
    //         },
    //     },
    //     legend: {
    //         enabled: false
    //     },
    //     plotOptions: {
    //         series: {
    //             borderWidth: 0,
    //             dataLabels: {
    //                 enabled: false,
    //                 // format: '{point.y:.3f}'
    //             }
    //         }
    //     },
    //
    //     tooltip: {
    //         headerFormat: '<b style="font-size:11px">{point.name}</b><br>',
    //         pointFormat: '<b>RP. {point.y}</b><br/>'
    //     },
    //     credits: {
    //         enabled: false
    //     },
    //     subtitle: {
    //         enabled: false
    //     },
    //
    //     series: [{
    //         // name: "Browsers",
    //         color: '#2c94ff',
    //         type: 'column',
    //         data: []
    //     }],
    //
    // });

    // get_5_cabang_ammount()
    //     .done(function(res) {
    //         var data_5_cabang_ammount = [];
    //         $.each(res, function(i, e) {
    //             var jumlah = parseFloat(e.total_os);
    //             data_5_cabang_ammount.push({
    //                 name: e.nama_area_kerja,
    //                 y: jumlah
    //             });
    //         });
    //         console.log(res);
    //         get_cabang_by_ammount.series[0].setData(data_5_cabang_ammount);
    //     }).fail(function(xhr) {
    //         console.log(xhr);
    //     })
    //=====================================================================================

    // 5 CABANG TERBESAR BY NOA
    var get_cabang_by_noa = Highcharts.chart('container3', {

        chart: {
            type: 'column',

        },
        title: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            },

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: false,
                    // format: '{point.y:.3f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<b style="font-size:11px">{point.name}</b><br>',
            pointFormat: '<b>NOA: {point.y}</b><br/>'
        },
        credits: {
            enabled: false
        },
        subtitle: {
            enabled: false
        },

        series: [{
            // name: "Browsers",
            color: '#2c94ff',
            type: 'column',
            data: []
        }],

    });

    get_5_cabang_noa()
        .done(function(res) {
            // console.log(nama_area_kerja);
            var data_5_cabang_noa = [];

            $.each(res, function(i, e) {
                var jumlah = parseFloat(e.jumlah_noa);

                data_5_cabang_noa.push({
                    name: e.nama_area_kerja,
                    y: jumlah
                });
            });

            get_cabang_by_noa.series[0].setData(data_5_cabang_noa);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
    //================================================================================
    // AREA TERBESAR BY AMOUNT
    var get_area_by_ammount = Highcharts.chart('container4', {

        chart: {
            type: 'column',

        },
        title: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            },
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: false,
                    // format: '{point.y:.3f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<b style="font-size:11px">{point.name}</b><br>',
            pointFormat: '<b>RP. {point.y}</b><br/>'
        },
        credits: {
            enabled: false
        },
        subtitle: {
            enabled: false
        },

        series: [{
            // name: "Browsers",
            color: '#2c94ff',
            type: 'column',
            data: []
        }],

    });

    get_area_cabang_ammount()
        .done(function(res) {
            // console.log(nama_area_kerja);
            var get_area_cabang_ammount = [];

            $.each(res, function(i, e) {
                var jumlah = parseFloat(e.total_os);

                get_area_cabang_ammount.push({
                    name: e.nama_area_kerja,
                    y: jumlah
                });
            });

            get_area_by_ammount.series[0].setData(get_area_cabang_ammount);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
        // ======================================================================
        // AREA TERBESAR BY NOA
    var get_area_by_noa = Highcharts.chart('container5', {

        chart: {
            type: 'column',

        },
        title: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            },
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: false,
                    // format: '{point.y:.3f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<b style="font-size:11px">{point.name}</b><br>',
            pointFormat: '<b>RP. {point.y}</b><br/>'
        },
        credits: {
            enabled: false
        },
        subtitle: {
            enabled: false
        },

        series: [{
            // name: "Browsers",
            color: '#2c94ff',
            type: 'column',
            data: []
        }],

    });

    get_area_cabang_noa()
    .done(function(res) {
        // console.log(nama_area_kerja);
        var get_area_cabang_noa = [];

        $.each(res, function(i, e) {
            var jumlah = parseFloat(e.total_os);

            get_area_cabang_noa.push({
                name: e.nama_area_kerja,
                y: jumlah
            });
        });

        get_area_by_noa.series[0].setData(get_area_cabang_noa);

    })
    .fail(function(xhr) {
        console.log(xhr);
    })
        // ======================================================================

    //===============================================================================
    // NOA RESTRUKTUR KREDIT BY PLAFON
    var noa_restruktur_kredit_by_plafon = Highcharts.chart('container7', {

        chart: {
            type: 'column',

        },
        title: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            },
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: false,
                    // format: '{point.y:.3f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<b style="font-size:11px">{point.name}</b><br>',
            pointFormat: '<b>RP. {point.y}</b><br/>'
        },
        credits: {
            enabled: false
        },
        subtitle: {
            enabled: false
        },

        series: [{
            // name: "Browsers",
            color: '#2c94ff',
            type: 'column',
            data: []
        }],

    });

    get_noa_restruktur_kredit_by_plafon()
    .done(function(res) {
        // console.log(nama_area_kerja);
        var get_noa_restruktur_kredit_by_plafon = [];

        $.each(res, function(i, e) {
            var jumlah = parseFloat(e.total_os);

            get_noa_restruktur_kredit_by_plafon.push({
                name: e.nama_area_kerja,
                y: jumlah
            });
        });

        noa_restruktur_kredit_by_plafon.series[0].setData(get_noa_restruktur_kredit_by_plafon);

    })
    .fail(function(xhr) {
        console.log(xhr);
    })
    // ======================================================================

    //===============================================================================

    //===============================================================================
    //COLLECTION RASIO
    var collection_rasio = Highcharts.chart('container10', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                // showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            // color: '#2c94ff',
            data: []
        }]
    });

    get_collection_rasio()
        .done(function(res) {

            var data_normal = [];

            var komposisi = [{
                "nama": 'Normal',
                "noa": res[0].noa_normal_kumulatif,
                "bd": Math.ceil(res[0].baki_normal_kumulatif),
                "rs": res[0].rasio_normal_kumulatif
            }, {
                "nama": 'Restruktur',
                "noa": res[0].noa_rest_kumulatif,
                "bd": Math.ceil(res[0].baki_rest_kumulatif),
                "rs": res[0].rasio_rest_kumulatif
            }];

            $.each(komposisi, function(i, e) {
                var jumlah = (rubah(e.noa));
                data_normal.push({
                    name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                    y: parseFloat(e.rs)
                });
            });

            collection_rasio.series[0].setData(data_normal);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
    //===============================================================================//CURRENT RASIO
    var current_rasio = Highcharts.chart('container11', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                // showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            // color: '#2c94ff',
            data: []
        }]
    });

    get_current_rasio()
        .done(function(res) {

            var data_normal = [];

            var komposisi = [{
                "nama": 'Normal',
                "noa": res[0].noa_normal_kumulatif,
                "bd": Math.ceil(res[0].baki_normal_kumulatif),
                "rs": res[0].rasio_normal_kumulatif
            }, {
                "nama": 'Restruktur',
                "noa": res[0].noa_rest_kumulatif,
                "bd": Math.ceil(res[0].baki_rest_kumulatif),
                "rs": res[0].rasio_rest_kumulatif
            }];

            $.each(komposisi, function(i, e) {
                var jumlah = (rubah(e.noa));
                data_normal.push({
                    name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                    y: parseFloat(e.rs)
                });
            });

            current_rasio.series[0].setData(data_normal);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
    //===============================================================================//NS RESTRUKTUR
    var ns_restruktur = Highcharts.chart('container12', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                // showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            // color: '#2c94ff',
            data: []
        }]
    });

    get_ns_restruktur()
        .done(function(res) {

            var data_normal = [];

            var komposisi = [{
                "nama": 'Normal',
                "noa": res[0].noa_normal_kumulatif,
                "bd": Math.ceil(res[0].baki_normal_kumulatif),
                "rs": res[0].rasio_normal_kumulatif
            }, {
                "nama": 'Restruktur',
                "noa": res[0].noa_rest_kumulatif,
                "bd": Math.ceil(res[0].baki_rest_kumulatif),
                "rs": res[0].rasio_rest_kumulatif
            }];

            $.each(komposisi, function(i, e) {
                var jumlah = (rubah(e.noa));
                data_normal.push({
                    name: 'NOA:' + jumlah + '|BD:' + (rubah(e.bd)) + '|Rasio(%):' + e.rs,
                    y: parseFloat(e.rs)
                });
            });

            ns_restruktur.series[0].setData(data_normal);

        })
        .fail(function(xhr) {
            console.log(xhr);
        })
    //===============================================================================
</script>
