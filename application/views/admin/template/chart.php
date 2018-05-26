<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
if(isset($beli)){
    foreach($beli as $item){
        $datanew[] = "['$item->barang',$item->jumlah]";
    }
}
?>

<section class="content-header">
  <h1>
    Dashboard
  </h1>
  </section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body"><h4><i class="fa fa-chart"></i> Data Barang Terlaris</h4></div>
    <div id="container" style="height: 400px"></div>
  </div>


  </section>
  <!-- right col -->

 <!-- highchart -->
 <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45,
                        beta: 0
                    }
                },
                title: {
                    text: 'Top 5 Barang Terlaris'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Ratio',
                    data: [<?php echo join($datanew,',')?>]
                }]
            });

    </script>
