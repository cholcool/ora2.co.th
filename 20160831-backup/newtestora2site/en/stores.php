<?php 
include "head.php"; 
?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="col-sm-12">
            <div class="langtop">
                <a href="../stores.php">th</a> |
                <a href="stores.php" class="disabled"> en</a>
            </div>
        </div>

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../images/logo-ora2.png" class="img-responsive" style="  margin: 0;" /></a>
                <a class="navbar-brand" href="http://www.sunstar.com/?id=4713" target="_blank"><img src="../images/logo-sunstar.png" class="img-responsive bolid"  /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
           <li class="page-scroll home ">
                        <a href="index.php">Home</a>
                    </li>

                    <li class="page-scroll ora2city ">
                        <a href="city.php">Ora<sup>2</sup> City</a>
                    </li>

                    <li class="page-scroll ora2care ">
                        <a href="ora2care.php">Ora<sup>2</sup> Care</a>
                    </li>

                    <li class="page-scroll products ">
                        <a href="products.php">Products</a>
                    </li>

           <li class="page-scroll stores active">
                        <a href="stores.php">Stores</a>
                    </li>
          
          
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

        <div class="col-sm-12 langcol">
            <div class="langbottom">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                    <a href="../stores.php" class="btn btn-info">ภาษาไทย</a>
                  </div>
                  <div class="btn-group" role="group">
                    <a href="stores.php" class="btn btn-info disabled">English</a>
                  </div>
                </div>
            </div>
        </div>

    </nav>

    <!-- Header -->


<div class="wrapper">


<div class="section topbar storestopbar"> 
  <div class="container">
         <div class="row">
        <div class="col-md-12 col-sm-12">      
          <h2>Stores</h2>
      </div>
    </div>
  </div>  
</div>


<section id="stores">
  <div class="container">  
      <form class="navbar-form" role="search" >
        <div class="srchstyle" style="display:none;"">
            <input type="text" class="form-control" placeholder="Highlight Words" name="hilite" id="searchItem" autosave="some_unique_value" >
        </div>
      </form>
    <nav>
      <center>
      <div class="col-sm-12">

        <ul class="pagination headstor">
          <li role="presentation" class="active"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_boots"><img src="../images/logo_boots.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_ufm"><img src="../images/logo_ufm_fuji_super.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_tsuruha"><img src="../images/logo_tsuruha.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_lab"><img src="../images/logo_lab_pharmacy.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#ta_ogenki"><img src="../images/logo_ogenki.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_ucare"><img src="../images/logo_ucare.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_gourmet_market"><img src="../images/logo_gourmet_market.png"></a></li>
<br class="none_br"><!-- display:none; br for tablet phone -->
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_matsumotokiyoshi"><img src="../images/logo_storematsumoto.png"></a></li>
          <li role="presentation"><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_home_fresh_mart"><img src="../images/logo_home_fresh_mart.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_central_food_hall"><img src="../images/logo_central_food_hall.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_tops_super_store"><img src="../images/logo_tops_super_store.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_tops_daily"><img src="../images/logo_tops_daily.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_tops_super_kum"><img src="../images/logo_top_super_khom.png"></a></li>
<br class="none_br">
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_pharmahof"><img src="../images/logo_fascino.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_lawson_108"><img src="../images/logo_lawson_108.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_central_drugs_house"><img src="../images/logo_central_drugs_house.png"></a></li>
          <li><a aria-controls="sakha" role="tab" data-toggle="tab" href="#tab_watson"><img src="../images/logo_watsons.png"></a></li>
        </ul>

      </div>
      </center>
    </nav>
      <div class="denie"></div>


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_boots"   /////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php 
include 'config.php';
  
  $sql_boots1 = "SELECT * FROM tbl_boots LIMIT 95";
  $query_boots1 = $conn->query($sql_boots1);

  $sql_boots2 = "SELECT * FROM tbl_boots LIMIT 95 OFFSET 95";
  $query_boots2 = $conn->query($sql_boots2);

  $sql_boots3 = "SELECT * FROM tbl_boots LIMIT 95 OFFSET 190";
  $query_boots3 = $conn->query($sql_boots3);
?>

  <div class="tab-content ">
    <div id="tab_boots" role="tabpanel" class="tab-pane fade in active " >
      <div class="sakha col-sm-12">
        <span>Boots</span>
      </div>

      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_boots1->num_rows > 0) {
     while($row_boots1 = $query_boots1->fetch_assoc()) {
         echo "<p> ". $row_boots1["boots_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?> 

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_boots2->num_rows > 0) {
     while($row_boots2 = $query_boots2->fetch_assoc()) {
         echo "<p> ". $row_boots2["boots_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?> 

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_boots3->num_rows > 0) {
     while($row_boots3 = $query_boots3->fetch_assoc()) {
          echo "<p> ". $row_boots3["boots_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?> 

      </div>
    </div>


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_watson"   ////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_watson1 = "SELECT * FROM tbl_watson LIMIT 92";
  $query_watson1 = $conn->query($sql_watson1);

  $sql_watson2 = "SELECT * FROM tbl_watson LIMIT 92 OFFSET 92";
  $query_watson2 = $conn->query($sql_watson2);

  $sql_watson3 = "SELECT * FROM tbl_watson LIMIT 92 OFFSET 184";
  $query_watson3 = $conn->query($sql_watson3);
?>
    <div id="tab_watson" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Watsons</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_watson1->num_rows > 0) {
     while($row_watson1 = $query_watson1->fetch_assoc()) {
         echo "<p> ". $row_watson1["watson_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_watson2->num_rows > 0) {
     while($row_watson2 = $query_watson2->fetch_assoc()) {
         echo "<p> ". $row_watson2["watson_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_watson3->num_rows > 0) {
     while($row_watson3 = $query_watson3->fetch_assoc()) {
         echo "<p> ". $row_watson3["watson_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_lab"   ////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_lab1 = "SELECT * FROM tbl_lab LIMIT 5";
  $query_lab1 = $conn->query($sql_lab1);

  $sql_lab2 = "SELECT * FROM tbl_lab LIMIT 5 OFFSET 5";
  $query_lab2 = $conn->query($sql_lab2);

  $sql_lab3 = "SELECT * FROM tbl_lab LIMIT 5 OFFSET 10";
  $query_lab3 = $conn->query($sql_lab3);
?>
    <div id="tab_lab" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>LAB PHARMACY</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_lab1->num_rows > 0) {
     while($row_lab1 = $query_lab1->fetch_assoc()) {
         echo "<p> ". $row_lab1["lab_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_lab2->num_rows > 0) {
     while($row_lab2 = $query_lab2->fetch_assoc()) {
         echo "<p> ". $row_lab2["lab_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_lab3->num_rows > 0) {
     while($row_lab3 = $query_lab3->fetch_assoc()) {
         echo "<p> ". $row_lab3["lab_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_tsuruha"   ////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_tsuruha1 = "SELECT * FROM tbl_tsuruha LIMIT 8";
  $query_tsuruha1 = $conn->query($sql_tsuruha1);

  $sql_tsuruha2 = "SELECT * FROM tbl_tsuruha LIMIT 8 OFFSET 8";
  $query_tsuruha2 = $conn->query($sql_tsuruha2);

  $sql_tsuruha3 = "SELECT * FROM tbl_tsuruha LIMIT 8 OFFSET 16";
  $query_tsuruha3 = $conn->query($sql_tsuruha3);
?>
    <div id="tab_tsuruha" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>TSURUHA</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tsuruha1->num_rows > 0) {
     while($row_tsuruha1 = $query_tsuruha1->fetch_assoc()) {
         echo "<p> ". $row_tsuruha1["tsuruha_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tsuruha2->num_rows > 0) {
     while($row_tsuruha2 = $query_tsuruha2->fetch_assoc()) {
         echo "<p> ". $row_tsuruha2["tsuruha_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tsuruha3->num_rows > 0) {
     while($row_tsuruha3 = $query_tsuruha3->fetch_assoc()) {
         echo "<p> ". $row_tsuruha3["tsuruha_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_pharmahof"   ////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_pharmahof1 = "SELECT * FROM tbl_pharmahof LIMIT 4";
  $query_pharmahof1 = $conn->query($sql_pharmahof1);

  $sql_pharmahof2 = "SELECT * FROM tbl_pharmahof LIMIT 4 OFFSET 4";
  $query_pharmahof2 = $conn->query($sql_pharmahof2);

  $sql_pharmahof3 = "SELECT * FROM tbl_pharmahof LIMIT 4 OFFSET 8";
  $query_pharmahof3 = $conn->query($sql_pharmahof3);
?>
    <div id="tab_pharmahof" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Fascino always care</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_pharmahof1->num_rows > 0) {
     while($row_pharmahof1 = $query_pharmahof1->fetch_assoc()) {
         echo "<p> ". $row_pharmahof1["pharmahof_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_pharmahof2->num_rows > 0) {
     while($row_pharmahof2 = $query_pharmahof2->fetch_assoc()) {
         echo "<p> ". $row_pharmahof2["pharmahof_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_pharmahof3->num_rows > 0) {
     while($row_pharmahof3 = $query_pharmahof3->fetch_assoc()) {
         echo "<p> ". $row_pharmahof3["pharmahof_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_ufm"   ////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_ufm1 = "SELECT * FROM tbl_ufm";
  $query_ufm1 = $conn->query($sql_ufm1);
?>
    <div id="tab_ufm" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>UFM Fuji Super</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_ufm1->num_rows > 0) {
     while($row_ufm1 = $query_ufm1->fetch_assoc()) {
         echo "<p> ". $row_ufm1["ufm_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">
      </div>
      <div class="col-sm-4 col-xs-12">
      </div>
    </div>


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_matsumotokiyoshi"   ////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_matsumotokiyoshi1 = "SELECT * FROM tbl_matsumotokiyoshi";
  $query_matsumotokiyoshi1 = $conn->query($sql_matsumotokiyoshi1);
?>
    <div id="tab_matsumotokiyoshi" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Matsumoto Kiyoshi</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_matsumotokiyoshi1->num_rows > 0) {
     while($row_matsumotokiyoshi1 = $query_matsumotokiyoshi1->fetch_assoc()) {
         echo "<p> ". $row_matsumotokiyoshi1["matsumotokiyoshi_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">
      </div>
      <div class="col-sm-4 col-xs-12">
      </div>
    </div>

    
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_gourmet_market"   ////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_gourmet_market1 = "SELECT * FROM tbl_gourmet_market LIMIT 4";
  $query_gourmet_market1 = $conn->query($sql_gourmet_market1);

  $sql_gourmet_market2 = "SELECT * FROM tbl_gourmet_market LIMIT 4 OFFSET 4";
  $query_gourmet_market2 = $conn->query($sql_gourmet_market2);

  $sql_gourmet_market3 = "SELECT * FROM tbl_gourmet_market LIMIT 4 OFFSET 8";
  $query_gourmet_market3 = $conn->query($sql_gourmet_market3);
?>
    <div id="tab_gourmet_market" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Gourmet market</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_gourmet_market1->num_rows > 0) {
     while($row_gourmet_market1 = $query_gourmet_market1->fetch_assoc()) {
         echo "<p> ". $row_gourmet_market1["gourmet_market_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_gourmet_market2->num_rows > 0) {
     while($row_gourmet_market2 = $query_gourmet_market2->fetch_assoc()) {
         echo "<p> ". $row_gourmet_market2["gourmet_market_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_gourmet_market3->num_rows > 0) {
     while($row_gourmet_market3 = $query_gourmet_market3->fetch_assoc()) {
         echo "<p> ". $row_gourmet_market3["gourmet_market_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_tops_super_kum"   ////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_tops_super_kum1 = "SELECT * FROM tbl_tops_super_kum LIMIT 65";
  $query_tops_super_kum1 = $conn->query($sql_tops_super_kum1);

  $sql_tops_super_kum2 = "SELECT * FROM tbl_tops_super_kum LIMIT 65 OFFSET 65";
  $query_tops_super_kum2 = $conn->query($sql_tops_super_kum2);

  $sql_tops_super_kum3 = "SELECT * FROM tbl_tops_super_kum LIMIT 65 OFFSET 129";
  $query_tops_super_kum3 = $conn->query($sql_tops_super_kum3);
?>
    <div id="tab_tops_super_kum" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Tops Super Kum </span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum1->num_rows > 0) {
     while($row_tops_super_kum1 = $query_tops_super_kum1->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum1["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum2->num_rows > 0) {
     while($row_tops_super_kum2 = $query_tops_super_kum2->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum2["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum3->num_rows > 0) {
     while($row_tops_super_kum3 = $query_tops_super_kum3->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum3["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_tops_super_kum"   ////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_tops_super_kum1 = "SELECT * FROM tbl_tops_super_kum LIMIT 65";
  $query_tops_super_kum1 = $conn->query($sql_tops_super_kum1);

  $sql_tops_super_kum2 = "SELECT * FROM tbl_tops_super_kum LIMIT 65 OFFSET 65";
  $query_tops_super_kum2 = $conn->query($sql_tops_super_kum2);

  $sql_tops_super_kum3 = "SELECT * FROM tbl_tops_super_kum LIMIT 65 OFFSET 129";
  $query_tops_super_kum3 = $conn->query($sql_tops_super_kum3);
?>
    <div id="tab_tops_super_store" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Tops SUPER STORE</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum1->num_rows > 0) {
     while($row_tops_super_kum1 = $query_tops_super_kum1->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum1["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum2->num_rows > 0) {
     while($row_tops_super_kum2 = $query_tops_super_kum2->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum2["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum3->num_rows > 0) {
     while($row_tops_super_kum3 = $query_tops_super_kum3->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum3["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////  QUERY table "tbl_tops_super_kum"   ////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
  $sql_tops_super_kum1 = "SELECT * FROM tbl_tops_super_kum LIMIT 65";
  $query_tops_super_kum1 = $conn->query($sql_tops_super_kum1);

  $sql_tops_super_kum2 = "SELECT * FROM tbl_tops_super_kum LIMIT 65 OFFSET 65";
  $query_tops_super_kum2 = $conn->query($sql_tops_super_kum2);

  $sql_tops_super_kum3 = "SELECT * FROM tbl_tops_super_kum LIMIT 65 OFFSET 129";
  $query_tops_super_kum3 = $conn->query($sql_tops_super_kum3);
?>
    <div id="tab_tops_daily" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>Tops daily</span>
      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum1->num_rows > 0) {
     while($row_tops_super_kum1 = $query_tops_super_kum1->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum1["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum2->num_rows > 0) {
     while($row_tops_super_kum2 = $query_tops_super_kum2->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum2["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
      <div class="col-sm-4 col-xs-12">

<?php 
if ($query_tops_super_kum3->num_rows > 0) {
     while($row_tops_super_kum3 = $query_tops_super_kum3->fetch_assoc()) {
         echo "<p> ". $row_tops_super_kum3["tops_super_kum_name"] . "</p>";
     }
} else {
     echo "<h3>DATABASE LOSE</h3>";
}
?>

      </div>
    </div>


    <div id="tab_ucare" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>U CARE</span>
      </div>
    </div>


    <div id="tab_home_fresh_mart" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>HOME Fresh MART</span>
      </div>
    </div>

    <div id="tab_central_food_hall" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>CENTRAL FOOD HALL</span>
      </div>
    </div>


    <div id="tab_lawson_108" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>LAWSON 108</span>
      </div>
    </div>

    <div id="tab_central_drugs_house" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>CENTRAL DRUGS HOUSE</span>
      </div>
    </div>

    <div id="ta_ogenki" class="tab-pane fade">
      <div class="sakha col-sm-12">
        <span>OGENKI</span>
      </div>
    </div>

  </div>

  </div>
</section>


</div>




<?php 
$conn->close();

include 'footer.php'; 
?>