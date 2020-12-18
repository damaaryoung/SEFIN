<script type="text/javascript">
var loading='<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var urlapi="http://103.234.254.186/riskcan";
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

$(function(){
  url = urlapi+"/dashboard/kredit/kredit_controller/npl_console_area";
  $.ajax({
    type: "POST",
    url:url,
    async: false,
    data: {'api': 'Y'},
    dataType: "JSON",
    beforeSend: function(result)
    {
      for(var i = 0; i < result.length; i++)
      {
        $('[id="NPL_AREA_'+i+'"]').html(loading);
      }
    },
     success: function(result) {
      for(var i = 0; i < result.length; i++)
      {
        var chart = new CanvasJS.Chart("NPL_AREA_" + i, 
        {
          title:{
            text:result[i].kode_area,
            fontSize:12
          },
          theme: "light2",
          animationEnabled: true,
          responsive: true,
          maintainAspectRatio: true,
          data: [{
            type: "pie",
            toolTipContent: "Percentage : <strong>{y}</strong><br/>BD NPL : <strong>{yn}</strong><br/>NOA NPL : <strong>{yb}</strong>",
            indexLabelFontSize: 18,
            indexLabel: "{label} - {y}",
            yValueFormatString: "###0.0\"%\"",
            click: explodePie,
            dataPoints: [
              { y:parseFloat(result[i].rasio_npl),yn: parseFloat(result[i].bd_npl), yb: parseFloat(result[i].noa_npl), label: "NPL"},
              { y:parseFloat(result[i].rasio_nonnpl),yn: parseFloat(result[i].bd_nonnpl), yb: parseFloat(result[i].noa_nonnpl), label: "NON NPL"}
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

        //CABANG
        url2 = urlapi+"/dashboard/kredit/kredit_controller/npl_console_cabang";
        $.ajax({
          type: "POST",
          url:url2,
          async: false,
          data: {'api': 'Y','kode_area' : result[i].kode_area},
           dataType: "JSON",
          beforeSend: function(result2)
          {
              
                for(var j = 0; j < result2.length; j++)
                {
                    $('[id="NPL_AREA_'+i+'_CABANG_'+j+'"]').html(loading);
                }
              
          },
           success: function(result2) {
                //$('[id="NPL_AREA_'+i+'"]').html(loading);
              for(var j = 0; j < result2.length; j++)
              {
                  var chart = new CanvasJS.Chart("NPL_AREA_" + i +"_CABANG_"+ j, 
                  {
                    title:{
                      text:result2[j].nama_area_kerja,
                      fontSize:12
                    },
                  theme: "light2",
                  animationEnabled: true,
                  responsive: true,
                  maintainAspectRatio: true,
                  data: [{
                    type: "pie",
                    toolTipContent: "Percentage : <strong>{y}</strong><br/>BD NPL : <strong>{yn}</strong><br/>NOA NPL : <strong>{yb}</strong>",
                    indexLabelFontSize: 18,
                    indexLabel: "{label} - {y}",
                    yValueFormatString: "###0.0\"%\"",
                    click: explodePie,
                    dataPoints: [
                      { y:parseFloat(result2[j].rasio_npl),yn: parseFloat(result2[j].bd_npl), yb: parseFloat(result2[j].noa_npl), label: "NPL"},
                      { y:parseFloat(result2[j].rasio_nonnpl),yn: parseFloat(result2[j].bd_nonnpl), yb: parseFloat(result2[j].noa_nonnpl), label: "NON NPL"}
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
            
          }
        });
      }
    }
  });
});

$(function(){
  var url=urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console_area";
  $.ajax({
    type: "POST",
    url: url,
    async: false,
    data:{'api':'Y'},
    dataType: "JSON",
    beforeSend: function(result) {
      for(var i = 0; i < result.length; i++)
      {
        $('[id="BUCKET_0_AREA_'+i+'"]').html(loading);
      }
    },
      success: function(result) {
        for(var i = 0; i < result.length; i++)
        {
          var chart = new CanvasJS.Chart("BUCKET_0_AREA_"+i,
          {
            theme: "light2",
            data: [{
              type: "pie",
              toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
              showInLegend: true,
              legendText: "{indexLabel}",
              dataPoints: [
                {  y: parseFloat(result[i].rasio_bucket_0),yn: parseFloat(result[i].noa_bucket_0),yb: parseFloat(result[i].bd_bucket_0), indexLabel: "Bucket 0" },
                {  y: parseFloat(result[i].rasio_bucket_1),yn: parseFloat(result[i].noa_bucket_1),yb: parseFloat(result[i].bd_bucket_1), indexLabel: "Bucket 1" },
                {  y: parseFloat(result[i].rasio_bucket_2),yn: parseFloat(result[i].noa_bucket_2),yb: parseFloat(result[i].bd_bucket_2), indexLabel: "Bucket 2" },
                {  y: parseFloat(result[i].rasio_npl),yn: parseFloat(result[i].noa_npl),yb: parseFloat(result[i].bd_npl), indexLabel: "NPL"}
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
          //CABANG
          url2 = urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console_cabang";
          $.ajax({
            type: "POST",
            url:url2,
            async: false,
            data: {'api': 'Y','kode_area' : result[i].kode_area},
             dataType: "JSON",
            beforeSend: function(result2)
            {
                
                  for(var j = 0; j < result2.length; j++)
                  {
                      $('[id="BUCKET0_AREA_'+i+'_CABANG_'+j+'"]').html(loading);
                  }
                
            },
             success: function(result2) {
                  //$('[id="NPL_AREA_'+i+'"]').html(loading);
                for(var j = 0; j < result2.length; j++)
                {
                    var chart = new CanvasJS.Chart("BUCKET0_AREA_" + i +"_CABANG_"+ j, 
                    {
                      title:{
                        text:result2[j].nama_area_kerja,
                        fontSize:12
                      },
                    theme: "light2",
                    animationEnabled: true,
                    responsive: true,
                    maintainAspectRatio: true,
                    data: [{
                      type: "pie",
                      toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                      indexLabelFontSize: 18,
                      indexLabel: "{label} - {y}",
                      yValueFormatString: "###0.0\"%\"",
                      click: explodePie,
                      dataPoints: [
                        {  y: parseFloat(result[j].rasio_bucket_0),yn: parseFloat(result[j].noa_bucket_0),yb: parseFloat(result[j].bd_bucket_0), indexLabel: "Bucket 0" },
                        {  y: parseFloat(result[j].rasio_bucket_1),yn: parseFloat(result[j].noa_bucket_1),yb: parseFloat(result[j].bd_bucket_1), indexLabel: "Bucket 1" },
                        {  y: parseFloat(result[j].rasio_bucket_2),yn: parseFloat(result[j].noa_bucket_2),yb: parseFloat(result[j].bd_bucket_2), indexLabel: "Bucket 2" },
                        {  y: parseFloat(result[j].rasio_npl),yn: parseFloat(result[j].noa_npl),yb: parseFloat(result[j].bd_npl), indexLabel: "NPL"}
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
            }
          });
        }
      }
    });
  });

  url4 = urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console_cabang";
  




// Bucket Zero
</script>