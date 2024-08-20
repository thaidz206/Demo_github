<style>

  /* General styles for content wrapper */
.content-wrapper {
    background-color: #f9fafc;
    padding: 20px;
}

/* Small box styles */
.small-box {
    border-radius: 5px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.small-box .inner {
    padding: 10px;
    color: #fff;
}

.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.small-box p {
    font-size: 15px;
}

.small-box .icon {
    top: -20px;
    right: 10px;
    z-index: 0;
    color: rgba(0, 0, 0, 0.15);
    position: absolute;
    transition: all 0.3s linear;
}

.small-box:hover .icon {
    font-size: 95px;
}

.small-box-footer {
    display: block;
    padding: 10px;
    background: rgba(0, 0, 0, 0.1);
    text-align: center;
    color: #fff;
    text-decoration: none;
    transition: background 0.3s;
}

.small-box-footer:hover {
    background: rgba(0, 0, 0, 0.15);
}

/* Box styles */
.box {
    background: #fff;
    border-radius: 5px;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
    background: #f5f5f5;
    border-bottom: 1px solid #ddd;
}

.box-title {
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-tools .btn {
    background: none;
    color: #333;
    border: none;
    margin: 0;
    padding: 0;
}

.box-body {
    padding: 10px;
}

/* Description block styles */
.description-block {
    text-align: center;
    padding: 10px;
}

.description-header {
    font-size: 20px;
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.description-text {
    font-size: 14px;
    color: #888;
}

/* Chart styles */
#chart_div {
    width: 100%;
    height: 250px;
}

/* Scrollbar Customization for WebKit-based browsers */
.content-wrapper {
    scrollbar-width: thin; /* For Firefox */
    scrollbar-color: #495057 #343a40; /* For Firefox */
}

.content-wrapper::-webkit-scrollbar {
    width: 8px; /* Width of the scrollbar */
}

.content-wrapper::-webkit-scrollbar-track {
    background: #343a40; /* Background of the scrollbar track */
}

.content-wrapper::-webkit-scrollbar-thumb {
    background-color: #495057; /* Color of the scrollbar thumb */
    border-radius: 10px; /* Roundness of the scrollbar thumb */
    border: 2px solid #343a40; /* Padding around the thumb */
} 
</style>

<?php
$d=getdate();
$year=$d['year'];
$total = 0; $cost = 0;
for ($i=1; $i <= 12 ; $i++) 
{   
  $list_orrders = $this->Morders->order_follow_month($year, $i);
  $sum = 0;
  foreach ($list_orrders as $row_orrder) 
  {
    $order_detail = $this->Morderdetail->orderdetail_orderid($row_orrder['id']);
    foreach ($order_detail as $value) {
      $sum += $value['count'];
    }
    $total += $row_orrder['money'];
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-olive-active">
          <div class="inner">
            <h3><?php echo $total1; ?></h3>
            <p>Sản phẩm</p>
            <div class="icon">
            <i class="fa-solid fa-person-walking-luggage"></i>
            </div>
          </div>
          <a href="<?php echo base_url() ?>admin/product" class="small-box-footer">Danh sách sản phẩm</a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal-active">
          <div class="inner">
            <h3><?php echo $total2; ?></h3>
            <p>Bài viết</p>
          </div>
          <div class="icon">
          <i class="fa-regular fa-newspaper"></i>
          </div>
          <a href="<?php echo base_url() ?>admin/content" class="small-box-footer">Danh sách bài viết</a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-light-blue-active">
          <div class="inner">
            <h3><?php echo $total3; ?></h3>
            <p>Liên hệ</p>
          </div>
          <div class="icon">
          <i class="fa-solid fa-address-card"></i>
          </div>
          <a href="<?php echo base_url() ?>admin/customer" class="small-box-footer">Liên hệ khách hàng</a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-active">
          <div class="inner">
            <h3><?php echo $total4; ?></h3>
            <p>Đơn hàng</p>
          </div>
          <div class="icon">
          <i class="fa-solid fa-box-open"></i>
          </div>
          <a href="<?php echo base_url() ?>admin/orders" class="small-box-footer">Danh sách đơn hàng</a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </section>
  <section class="content">
    <div class="row">
      <!-- /.col (LEFT) -->
      <div class="col-md-12">
        <!-- LINE CHART -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Bán hàng & Doanh thu</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <div id="chart_div" style="width: 100%; height: 250px;"></div>
            </div>
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 col-xs-6">
                <div class="description-block border-right">
               
                  <span class="description-text">DOANH THU</span>
                  <h5 class="description-header" ><?php echo number_format($total);?> <span style="color: #e90000;"> VNĐ</span></h5>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <?php
          $d=getdate();
          $year=$d['year'];
          for ($i=1; $i <= 12 ; $i++) 
          {   
            $list_orrders = $this->Morders->order_follow_month($year, $i);
            $total_month = 0;
            foreach ($list_orrders as $row_orrder) 
            {
              $total_month += $row_orrder['money'];
            }
            echo '<div class="col-sm-4 col-xs-6">
                <div class="description-block border-right" style="display: inline-flex;">
                  <span class="description-text">Doanh thu tháng '.$i.' :  </span> 
                  <h5 class="description-header"padding-left: 10px;">'.number_format($total_month).' <span style="color: #e90000;" > VNĐ</span></h5>
                </div>
                <!-- /.description-block -->
              </div>';
          }
          ?>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawVisualization);

   function drawVisualization() {
    var data = google.visualization.arrayToDataTable([
     ['Month', 'Bán ra', 'Đơn hàng'],
     <?php
     $d=getdate();
     $year=$d['year'];
     for ($i=1; $i <= 12 ; $i++) 
     {   
      $list_orrders = $this->Morders->order_follow_month($year, $i);
      $sum = 0;
      foreach ($list_orrders as $row_orrder) 
      {
        $order_detail = $this->Morderdetail->orderdetail_orderid($row_orrder['id']);
        foreach ($order_detail as $value) {
          $sum += $value['count'];
        }
      }
      if($i >= 1 && $i <=9)
      {
        echo "['0".$i.'/'.$year."',".$sum.",".count($list_orrders)."],";
      }
      else
      {
        echo "['".$i.'/'.$year."',".$sum.",".count($list_orrders)."],";
      }
    }
    ?>

    ]);

    var options = {
      title: ' 01-2024 đến 12-2024 ',
      seriesType: 'bars'
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  } 
</script>