<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google;
?>

  <div class='row kreport-title'>
    <h1>Sales By Years</h1>
  </div>
  <div class='row kreport-horizontal-line-0'>&nbsp;</div>
  <div class='row kreport-section-title'>
    <h3>Years - Months</h3>
  </div>
  <div class='row kreport-horizontal-line-1'>&nbsp;</div>
  <div class='row'>
    <div class="col-md-6">
      <?php 
        Table::create(array(
          "dataStore" => $this->dataStore('salesYearMonth'),
        ));
      ?>
    </div>
    <div class="col-md-6">
      <?php 
        google\ColumnChart::create(array(
          "dataStore"=>$this->dataStore('salesYearNoAll'),
          "options"=>array(
            'title' => 'Yearly Sales',
            'isStacked' => true,
            'legend' => 'bottom'
          ),
          'width' => '100%',
        ));
      ?>
    </div>
  </div>
  <div class='row'>
      <?php 
        google\AreaChart::create(array(
          "dataStore"=>$this->dataStore('salesYearMonthNoAll'),
          "options"=>array(
            'title' => 'Monthly Sales by Years',
          ),
          "width"=>'100%',
          // 'height'=>'300px',
        ));
      ?>
  </div>
  <div class='row kreport-horizontal-line-2'>&nbsp;</div>
  
  <div class='row kreport-section-title'>
    <h3>Years - Categories</h3>
  </div>
  <div class='row kreport-horizontal-line-1'>&nbsp;</div>
  <div class='row'>
    <div class="col-md-5">
      <?php 
        Table::create(array(
          "dataStore" => $this->dataStore('salesYearCategory'),
        ));
      ?>
    </div>
    <div class="col-md-7">
      <?php 
        google\PieChart::create(array(
          "dataStore"=>$this->dataStore('salesYearCategoryAll'),
          "options"=>array(
            'title' => 'Categories\' Sales',
            'isStacked' => true
          ),
          // 'height'=>'220px',
          'width'=>'100%',
        ));
      ?>
    </div>
  </div>
  <div class='row'>
    <div class="col-md-12">
      <?php 
        google\BarChart::create(array(
          "dataStore"=>$this->dataStore('salesYearCategoryNoAll'),
          "options"=>array(
            'title' => 'Categories\' Sales by Years',
            'isStacked' => true
          ),
          "width"=>'100%',
          // 'height'=>'300px',
        ));
      ?>
    </div>
  </div>
  <div class='row kreport-horizontal-line-2'>&nbsp;</div>
