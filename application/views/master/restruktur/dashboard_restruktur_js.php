<script type="text/javascript">
var loading='<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var urlapi="http://103.234.254.186/riskcan";
// var urlapi='http://192.168.1.31/SIMAR';
function rubah(angka) {
    var reverse = angka.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return ribuan;
}
show_data();
function show_data() {
    $.ajax({
        type: "POST",
        url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/os_normal_dan_restruktur",
        async: false,
        data:{'api':'Y'},
        dataType: "JSON",
        beforeSend: function() {
          $('[id="os_total"]').html(loading);
          $('[id="os_normal"]').html(loading);
          $('[id="os_restruktur"]').html(loading);
        },
        success: function(data) {
            var baki_debet = Math.ceil(data.baki_debet);
            var baki_normal_komulatif = Math.ceil(data.baki_normal_komulatif);
            var baki_rest_kumulatif = Math.ceil(data.baki_rest_kumulatif);
            $('[id="os_total"]').text(rubah(baki_debet));
            $('[id="os_normal"]').text(rubah(baki_normal_komulatif));
            $('[id="os_restruktur"]').text(rubah(baki_rest_kumulatif));
        }
    });
}
// KOMPOSISI NORMAL DAN RESTRUKTUR
komposisi_normal_dan_restruktur();
function komposisi_normal_dan_restruktur(){
  var date = $('input[name="date_komposisi_normal_dan_restruktur"]').val();
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/komposisi_normal_dan_restruktur",
      async: false,
      data:{'api':'Y','date':date},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="loading-data-normal"]').html(loading);
      },
      success: function(data) {
        // rendernya disini bossskuh
        var chart = new CanvasJS.Chart("loading-data-normal", {
            title:{
              text: "Data Komposisi Normal & Restruktur"
            },
            data: [
                {
                 type: "pie",
                 dataPoints: [
                    {
                        y:  data.rasio_normal_kumulatif,
                        label: "Normal Kumulatif",
                        bd: parseFloat(data.baki_rest_kumulatif)
                    },
                    {
                        y: data.rasio_rest_kumulatif,
                        label: "Restruktur Kumulatif",
                        bd: parseFloat(data.baki_rest_kumulatif)
                    }
                ]
               }
             ]
           });
          chart.render();
        // rendernya disini bossskuh
      }
  });
}
// KOMPOSISI NORMAL DAN RESTRUKTUR

// Model Restruktur Kredit By NOA start
modelRestrukturByNoa();
function modelRestrukturByNoa(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/model_restruktur_kredit_by_noa",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="modelRestrukturByNoa"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("modelRestrukturByNoa", {
        title:{
          text: "Model Restruktur Kredit By NOA"
        },
        data: [//array of dataSeries
          { //dataSeries object
           type: "column",
           dataPoints: [
           { label: 'step up', y: parseFloat(result[0].satu[0]) },
           { label: 'step & pertenor', y: parseFloat(result[0].dua[0]) },
           { label: 'grace period', y: parseFloat(result[0].tiga[0]) },
           { label: 'penurunan bunga', y: parseFloat(result[0].empat[0]) }
           ]
         }
         ]
       });

      chart.render();

      }
  });
}
// Model Restruktur Kredit By NOA end

// restruktur kumulatif by noa start
restrukturKumulatifByNoa();
function restrukturKumulatifByNoa(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/line_noa_kumulatif",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="restrukturKumulatifByNoa"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("restrukturKumulatifByNoa", {
        	animationEnabled: true,
        	exportEnabled: true,
        	title:{
        		text: "Restruktur Kumulatif"
        	},
        	toolTip: {
        		shared: true
        	},
        	legend:{
        		cursor:"pointer",
        		itemclick: toggleDataSeries
        	},
        	data: [{
        		type: "spline",
        		name: "Kumulatif",
        		showInLegend: true,
        		dataPoints: [
              { label: result[0].bulan , y: parseFloat(result[0].noa_rest_kumulatif) },
              { label: result[1].bulan , y: parseFloat(result[1].noa_rest_kumulatif) },
              { label: result[2].bulan , y: parseFloat(result[2].noa_rest_kumulatif) },
              { label: result[3].bulan , y: parseFloat(result[3].noa_rest_kumulatif) },
              { label: result[4].bulan , y: parseFloat(result[4].noa_rest_kumulatif) },
              { label: result[5].bulan , y: parseFloat(result[5].noa_rest_kumulatif) },
              { label: result[6].bulan , y: parseFloat(result[6].noa_rest_kumulatif) },
              { label: result[7].bulan , y: parseFloat(result[7].noa_rest_kumulatif) },
              { label: result[8].bulan , y: parseFloat(result[8].noa_rest_kumulatif) },
              { label: result[9].bulan , y: parseFloat(result[9].noa_rest_kumulatif) },
              { label: result[10].bulan , y: parseFloat(result[10].noa_rest_kumulatif) },
        			{ label: result[11].bulan , y: parseFloat(result[11].noa_rest_kumulatif) }
        		]
        	},
        	{
        		type: "spline",
        		name: "Restruktur",
        		showInLegend: true,
        		dataPoints: [
              { label: result[0].bulan , y: parseFloat(result[0].noa_rest_bulan) },
              { label: result[1].bulan , y: parseFloat(result[1].noa_rest_bulan) },
              { label: result[2].bulan , y: parseFloat(result[2].noa_rest_bulan) },
              { label: result[3].bulan , y: parseFloat(result[3].noa_rest_bulan) },
              { label: result[4].bulan , y: parseFloat(result[4].noa_rest_bulan) },
              { label: result[5].bulan , y: parseFloat(result[5].noa_rest_bulan) },
              { label: result[6].bulan , y: parseFloat(result[6].noa_rest_bulan) },
              { label: result[7].bulan , y: parseFloat(result[7].noa_rest_bulan) },
              { label: result[8].bulan , y: parseFloat(result[8].noa_rest_bulan) },
              { label: result[9].bulan , y: parseFloat(result[9].noa_rest_bulan) },
              { label: result[10].bulan , y: parseFloat(result[10].noa_rest_bulan) },
        			{ label: result[11].bulan , y: parseFloat(result[11].noa_rest_bulan) }
        		]
        	}]
        });
        chart.render();
        function toggleDataSeries(e) {
        	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        		e.dataSeries.visible = false;
        	}
        	else {
        		e.dataSeries.visible = true;
        	}
        	chart.render();
        }
      }
  });
}
// restruktur kumulatif by noa extend
// restruktur kumulatif by baki debet start
restrukturKumulatifByBakiDebet();
function restrukturKumulatifByBakiDebet(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/line_noa_kumulatif",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="restrukturKumulatifByBakiDebet"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("restrukturKumulatifByBakiDebet", {
        	animationEnabled: true,
        	exportEnabled: true,
        	title:{
        		text: "Restruktur Kumulatif"
        	},
        	toolTip: {
        		shared: true
        	},
        	legend:{
        		cursor:"pointer",
        		itemclick: toggleDataSeries
        	},
        	data: [{
        		type: "spline",
        		name: "Kumulatif",
        		showInLegend: true,
        		dataPoints: [
              { label: result[0].bulan , y: parseFloat(result[0].baki_rest_kumulatif) },
              { label: result[1].bulan , y: parseFloat(result[1].baki_rest_kumulatif) },
              { label: result[2].bulan , y: parseFloat(result[2].baki_rest_kumulatif) },
              { label: result[3].bulan , y: parseFloat(result[3].baki_rest_kumulatif) },
              { label: result[4].bulan , y: parseFloat(result[4].baki_rest_kumulatif) },
              { label: result[5].bulan , y: parseFloat(result[5].baki_rest_kumulatif) },
              { label: result[6].bulan , y: parseFloat(result[6].baki_rest_kumulatif) },
              { label: result[7].bulan , y: parseFloat(result[7].baki_rest_kumulatif) },
              { label: result[8].bulan , y: parseFloat(result[8].baki_rest_kumulatif) },
              { label: result[9].bulan , y: parseFloat(result[9].baki_rest_kumulatif) },
              { label: result[10].bulan , y: parseFloat(result[10].baki_rest_kumulatif) },
        			{ label: result[11].bulan , y: parseFloat(result[11].baki_rest_kumulatif) }
        		]
        	},
        	{
        		type: "spline",
        		name: "Restruktur",
        		showInLegend: true,
        		dataPoints: [
              { label: result[0].bulan , y: parseFloat(result[0].baki_rest_bulan) },
              { label: result[1].bulan , y: parseFloat(result[1].baki_rest_bulan) },
              { label: result[2].bulan , y: parseFloat(result[2].baki_rest_bulan) },
              { label: result[3].bulan , y: parseFloat(result[3].baki_rest_bulan) },
              { label: result[4].bulan , y: parseFloat(result[4].baki_rest_bulan) },
              { label: result[5].bulan , y: parseFloat(result[5].baki_rest_bulan) },
              { label: result[6].bulan , y: parseFloat(result[6].baki_rest_bulan) },
              { label: result[7].bulan , y: parseFloat(result[7].baki_rest_bulan) },
              { label: result[8].bulan , y: parseFloat(result[8].baki_rest_bulan) },
              { label: result[9].bulan , y: parseFloat(result[9].baki_rest_bulan) },
              { label: result[10].bulan , y: parseFloat(result[10].baki_rest_bulan) },
        			{ label: result[11].bulan , y: parseFloat(result[11].baki_rest_bulan) }
        		]
        	}]
        });
        chart.render();
        function toggleDataSeries(e) {
        	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        		e.dataSeries.visible = false;
        	}
        	else {
        		e.dataSeries.visible = true;
        	}
        	chart.render();
        }
      }
  });
}
// restruktur kumulatif by baki debet end

// 5 cabang by amount
lima_cabang_by_amount();
function lima_cabang_by_amount(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/master_data_restruktur_lima_cabang_terbesar",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="chart5cabangByAmount"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("chart5cabangByAmount", {
        title:{
          text: "5 Cabang Terbesar By Amount"
        },
        data: [//array of dataSeries
          { //dataSeries object
           type: "column",
           dataPoints: [
           { label: result[0].nama_area_kerja[0], y: parseFloat(result[0].total_os[0]) },
           { label: result[0].nama_area_kerja[1], y: parseFloat(result[0].total_os[1]) },
           { label: result[0].nama_area_kerja[2], y: parseFloat(result[0].total_os[2]) },
           { label: result[0].nama_area_kerja[3], y: parseFloat(result[0].total_os[3]) },
           { label: result[0].nama_area_kerja[4], y: parseFloat(result[0].total_os[4]) }
           ]
         }
         ]
       });

      chart.render();

      }
  });
}
// 5 cabang by amount
// 5 cabang by noa
lima_cabang_by_noa();
function lima_cabang_by_noa(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/master_data_restruktur_lima_cabang_terbesar",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="chart5cabangByNoa"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("chart5cabangByNoa", {
        title:{
          text: "5 Cabang Terbesar By Noa"
        },
        data: [//array of dataSeries
          { //dataSeries object
           type: "column",
           dataPoints: [
           { label: result[0].nama_area_kerja[0], y: parseFloat(result[0].jumlah_noa[0]) },
           { label: result[0].nama_area_kerja[1], y: parseFloat(result[0].jumlah_noa[1]) },
           { label: result[0].nama_area_kerja[2], y: parseFloat(result[0].jumlah_noa[2]) },
           { label: result[0].nama_area_kerja[3], y: parseFloat(result[0].jumlah_noa[3]) },
           { label: result[0].nama_area_kerja[4], y: parseFloat(result[0].jumlah_noa[4]) }
           ]
         }
         ]
       });

      chart.render();

      }
  });
}
// 5 cabang by amount
// area terbesar by amount
chartAreaTerbesarByAmount();
function chartAreaTerbesarByAmount(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/area_terbesar",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="chartAreaTerbesarByAmount"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("chartAreaTerbesarByAmount", {
        title:{
          text: "Area Terbesar"
        },
        data: [//array of dataSeries
          { //dataSeries object
           type: "column",
           dataPoints: [
           { label: 'area bekasi', y: parseFloat(result.area_bekasi) },
           { label: 'area bandung', y: parseFloat(result.area_bandung) },
           { label: 'area tangerang', y: parseFloat(result.area_tangerang) },
           { label: 'area bogor', y: parseFloat(result.area_bogor) },
           { label: 'area karawang', y: parseFloat(result.area_karawang) },
           { label: 'area cirebon', y: parseFloat(result.area_cirebon) }
           ]
         }
         ]
       });

      chart.render();

      }
  });
}
// area terbesar by amount
// area terbesar by noa
chartAreaTerbesarByNoa();
function chartAreaTerbesarByNoa(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/area_terbesar",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="chartAreaTerbesarByNoa"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("chartAreaTerbesarByNoa", {
        title:{
          text: "Area Terbesar"
        },
        data: [//array of dataSeries
          {
           type: "column",
           dataPoints: [
           { label: 'area bekasi', y: parseFloat(result.noa_bekasi) },
           { label: 'area bandung', y: parseFloat(result.noa_bandung) },
           { label: 'area tangerang', y: parseFloat(result.noa_tangerang) },
           { label: 'area bogor', y: parseFloat(result.noa_bogor) },
           { label: 'area karawang', y: parseFloat(result.noa_karawang) },
           { label: 'area cirebon', y: parseFloat(result.noa_cirebon) }
           ]
         }
         ]
       });

      chart.render();

      }
  });
}
// area terbesar by noa
// Noa Restruktur Kredit By Plafon
NoaRestrukturKreditByPlafon();
function NoaRestrukturKreditByPlafon(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/grafik_plafon",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="NoaRestrukturKreditByPlafon"]').html(loading);
      },
      success: function(result) {
        // alert(result[0].kategory);
        var chart = new CanvasJS.Chart("NoaRestrukturKreditByPlafon", {
        data: [
          {
           type: "column",
           dataPoints: [
           { label: result[0].kategory, y: parseFloat(result[0].jml_noa) },
           { label: result[1].kategory, y: parseFloat(result[1].jml_noa) },
           { label: result[2].kategory, y: parseFloat(result[2].jml_noa) },
           { label: result[3].kategory, y: parseFloat(result[3].jml_noa) },
           { label: result[4].kategory, y: parseFloat(result[4].jml_noa) },
           { label: result[5].kategory, y: parseFloat(result[5].jml_noa) }
           ]
         }
         ]
       });
      chart.render();
      }
  });
}
// Noa Restruktur Kredit By Plafon
// Collection Rasio
CollectionRasio();
function CollectionRasio(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/line_current_rasio",
      async: false,
      data:{'api':'Y'},
      beforeSend: function() {
        $('[id="CollectionRasio"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("CollectionRasio", {
          	animationEnabled: true,
          	exportEnabled: true,
          	toolTip: {
          		shared: true
          	},
          	legend:{
          		cursor:"pointer",
          		itemclick: toggleDataSeries
          	},
          	data: [{
          		type: "spline",
          		name: "US",
          		showInLegend: true,
          		dataPoints: [
          			{ label: result[0].bulan , y:parseFloat(result[0].jml_noa)},
          			{ label: result[1].bulan, y:parseFloat(result[1].jml_noa)},
          			{ label: result[2].bulan, y:parseFloat(result[2].jml_noa)}
          		]
          	}]
          });
          chart.render();
          function toggleDataSeries(e) {
          	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
          		e.dataSeries.visible = false;
          	}
          	else {
          		e.dataSeries.visible = true;
          	}
          	chart.render();
          }
      }
  });
}
// Collection Rasio
// Current Rasio
CurrentRasio();
function CurrentRasio(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/pie_current_rasio",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="CurrentRasio"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("CurrentRasio", {
        	theme: "light2",
        	animationEnabled: true,
        	data: [{
        		type: "pie",
        		indexLabelFontSize: 18,
        		radius: 80,
        		indexLabel: "{label} - {y}",
        		yValueFormatString: "###0.0\"%\"",
        		click: explodePie,
        		dataPoints: [
        			{ y: parseFloat(result.belum_bayar), label: "Belum_bayar" },
        			{ y: parseFloat(result.rasio_bucket_0), label: "Bayar"}
        		]
        	}]
        });
        chart.render();

        function explodePie(e) {
        	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        		if(i !== e.dataPointIndex)
        			e.dataSeries.dataPoints[i].exploded = false;
        	}
        }
      }
  });
}
// Current Rasio
// NSRestruktur
NSRestruktur();
function NSRestruktur(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/internal/restruktur/restruktur_controller/pie_ns_restruktur",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="NSRestruktur"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("NSRestruktur", {
        	theme: "light2",
        	animationEnabled: true,
        	data: [{
        		type: "pie",
            toolTipContent: "{label}<br/>rasio, <strong>{y}</strong><br/>noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
        		indexLabelFontSize: 18,
        		radius: 80,
        		indexLabel: "{label} - {y}",
        		yValueFormatString: "###0.0\"%\"",
        		click: explodePie,
        		dataPoints: [
        			{ y: parseFloat(result.ns_paid_rasio),yn:parseFloat(result.ns_paid_noa),yb:parseFloat(result.ns_paid_baki_debet), label: "Paid"},
        			{ y: parseFloat(result.ns_unpaid_rasio),yn:parseFloat(result.ns_unpaid_noa),yb:parseFloat(result.ns_unpaid_baki_debet), label: "Unpaid"}
        		]
        	}]
        });
        chart.render();
        function explodePie(e) {
        	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        		if(i !== e.dataPointIndex)
        			e.dataSeries.dataPoints[i].exploded = false;
        	}
        }
      }
  });
}
// NSRestruktur
// NPL
NPL();
function NPL(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kredit_controller/npl_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="NPL"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("NPL", {
        	theme: "light2",
        	animationEnabled: true,
        	data: [{
        		type: "pie",
            toolTipContent: "{label}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
        		indexLabelFontSize: 18,
        		radius: 80,
        		indexLabel: "{label} - {y}",
        		yValueFormatString: "###0.0\"%\"",
        		click: explodePie,
        		dataPoints: [
        			{ y: parseFloat(result.rasio_npl),yn:parseFloat(result.noa_npl),yb:parseFloat(result.bd_npl), label: "NPL"},
        			{ y: parseFloat(result.rasio_nonnpl),yn:parseFloat(result.noa_nonnpl),yb:parseFloat(result.bd_nonnpl), label: "Non NPL"}
        		]
        	}]
        });
        chart.render();
        function explodePie(e) {
        	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        		if(i !== e.dataPointIndex)
        			e.dataSeries.dataPoints[i].exploded = false;
        	}
        }
      }
  });
}
// NPL
// Bucket Zero
Bucket_0();
function Bucket_0(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="Bucket_0"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("Bucket_0",
      	{
      		theme: "light2",
      		data: [
      		{
      			type: "pie",
            toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
      			showInLegend: true,
      			legendText: "{indexLabel}",
      			dataPoints: [
      				{  y: parseFloat(result.rasio_bucket_0),yn: parseFloat(result.noa_bucket_0),yb: parseFloat(result.bd_bucket_0), indexLabel: "Bucket 0" },
      				{  y: parseFloat(result.rasio_bucket_1),yn: parseFloat(result.noa_bucket_1),yb: parseFloat(result.bd_bucket_1), indexLabel: "Bucket 1" },
      				{  y: parseFloat(result.rasio_bucket_2),yn: parseFloat(result.noa_bucket_2),yb: parseFloat(result.bd_bucket_2), indexLabel: "Bucket 2" },
      				{  y: parseFloat(result.rasio_npl),yn: parseFloat(result.noa_npl),yb: parseFloat(result.bd_npl), indexLabel: "NPL"}
      			]
      		}
      		]
      	});
      	chart.render();
      }
  });
}
// Bucket Zero
// 0NS
ZeroNS();
function ZeroNS(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kreditrisk_controller/ns_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="ZeroNS"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("ZeroNS",
      	{
      		theme: "light2",
      		data: [
      		{
      			type: "pie",
            toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
      			showInLegend: true,
      			legendText: "{indexLabel}",
      			dataPoints: [
      				{  y: parseFloat(result.rasio_paid),yn: parseFloat(result.noa_paid),yb: parseFloat(result.bd_paid), indexLabel: "Paid" },
      				{  y: parseFloat(result.rasio_unpaid),yn: parseFloat(result.noa_unpaid),yb: parseFloat(result.bd_unpaid), indexLabel: "Unpaid" }
      			]
      		}
      		]
      	});
      	chart.render();
      }
  });
}
// 0NS

// fidever
fidever();
function fidever(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kreditrisk_controller/fid_ever_06_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="fid-ever"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("fid-ever",
      	{
      		theme: "light2",
      		data: [
      		{
      			type: "pie",
            toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
      			showInLegend: true,
      			legendText: "{indexLabel}",
      			dataPoints: [
      				{  y: parseFloat(result.rasio_fid),yn: parseFloat(result.noa_fid),yb: parseFloat(result.bd_fid), indexLabel: "FID" },
      				{  y: parseFloat(result.rasio_nonfid),yn: parseFloat(result.noa_nonfid),yb: parseFloat(result.bd_nonfid), indexLabel: "UnFID" }
      			]
      		}
      		]
      	});
      	chart.render();
      }
  });
}
// fidever

// fidcompre
fidcompre();
function fidcompre(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kreditrisk_controller/fid_compre_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="fid-compre"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("fid-compre",
      	{
      		theme: "light2",
      		data: [
      		{
      			type: "pie",
            toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
      			showInLegend: true,
      			legendText: "{indexLabel}",
      			dataPoints: [
      				{  y: parseFloat(result.rasio_fid),yn: parseFloat(result.noa_fid),yb: parseFloat(result.bd_fid), indexLabel: "FID" },
      				{  y: parseFloat(result.rasio_nonfid),yn: parseFloat(result.noa_nonfid),yb: parseFloat(result.bd_nonfid), indexLabel: "UnFID" }
      			]
      		}
      		]
      	});
      	chart.render();
      }
  });
}
// fidcompre
</script>
