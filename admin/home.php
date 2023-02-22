<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  #bar-chart {
    width: 500px;
    height: 300px;
    position: relative;
  }

  #line-chart {
    width: 500px;
    height: 300px;
    position: relative;
  }

  #bar-chart::before,
  #line-chart::before {
    content: "";
    position: absolute;
    display: block;
    width: 240px;
    height: 30px;
    left: 155px;
    top: 254px;
    background: #FAFAFA;
    box-shadow: 1px 1px 0 0 #DDD;
  }

  #pie-chart {
    width: 500px;
    height: 250px;
    position: relative;
  }

  #pie-chart::before {
    content: "";
    position: absolute;
    display: block;
    width: 120px;
    height: 115px;
    left: 315px;
    top: 0;
    background: #FAFAFA;
    box-shadow: 1px 1px 0 0 #DDD;
  }

  #pie-chart::after {
    content: "";
    position: absolute;
    display: block;
    top: 260px;
    left: 70px;
    width: 170px;
    height: 2px;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
  }
</style>

<body>


  <div class="row">
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-danger card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Tổng sản phẩm <i class="mdi mdi-chart-line mdi-24px float-right"></i>
          </h4> <?php

                foreach ($listthongke as $thongke) {
                  extract($thongke);
                  echo '
                    <h2 class="mb-5">' . $tsp . '</h2>
                  ';
                } ?>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-info card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Tổng số danh mục <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h4>
          <?php

          foreach ($listthongke1 as $thongke) {
            extract($thongke);
            echo '
                    <h2 class="mb-5">' . $tdm . '</h2>
                  ';
          } ?>

        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-success card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Tổng đơn hàng <i class="mdi mdi-diamond mdi-24px float-right"></i>
          </h4>
          <?php

          foreach ($listthongke2 as $thongke) {
            extract($thongke);
            echo '
                    <h2 class="mb-5">' . $tdh . '</h2>
                  ';
          } ?>

        </div>

      </div>
    </div>


    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <h3>Phân tích danh mục</h3>
    <main style="display: flex;column-gap: 70px;">
       <br>
      <div style="float: left;" id="bar-chart"></div>
      <div style="width: 700px;float: right;">
      <h3>Đơn hàng mới</h3>
        <?php
        include "bill/listbill2.php";
        ?>
      </div>
    </main>


    <script>
      google.load("visualization", "1", {
        packages: ["corechart"]
      });
      google.setOnLoadCallback(drawCharts);

      function drawCharts() {

        var barData = google.visualization.arrayToDataTable([
          ['Day', 'Số lượng', 'Số lượng'],


          <?php
          $tongdm = count($listthongkebieudo);
          $i = 1;
          foreach ($listthongkebieudo as $thongke) {
            extract($thongke);
            $tr = 19990;
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "," . $thongke['countsp'] . "]" . $dauphay;
            $i += 1;
          }

          ?>
        ]);
        // set bar chart options
        var barOptions = {
          focusTarget: 'category',
          backgroundColor: 'transparent',
          colors: ['cornflowerblue', 'tomato'],
          fontName: 'Open Sans',
          chartArea: {
            left: 50,
            top: 10,
            width: '100%',
            height: '70%'
          },
          bar: {
            groupWidth: '80%'
          },
          hAxis: {
            textStyle: {
              fontSize: 11
            }
          },
          vAxis: {
            minValue: 0,
            maxValue: 10,
            baselineColor: '#DDD',
            gridlines: {
              color: '#DDD',
              count: 4
            },
            textStyle: {
              fontSize: 11
            }
          },
          legend: {
            position: 'bottom',
            textStyle: {
              fontSize: 12
            }
          },
          animation: {
            duration: 1200,
            easing: 'out',
            startup: true
          }
        };
        // draw bar chart twice so it animates
        var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
        //barChart.draw(barZeroData, barOptions);
        barChart.draw(barData, barOptions);

        // BEGIN LINE GRAPH

        function randomNumber(base, step) {
          return Math.floor((Math.random() * step) + base);
        }

        function createData(year, start1, start2, step, offset) {
          var ar = [];
          for (var i = 0; i < 12; i++) {
            ar.push([new Date(year, i), randomNumber(start1, step) + offset, randomNumber(start2, step) + offset]);
          }
          return ar;
        }


      };
    </script>



</body>

</html>