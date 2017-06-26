<?php 
include 'head.php'; 
?>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="col-sm-12">
            <div class="langtop">
                <a href="products.php" class="disabled">th</a> |
                <a href="en/products.php"> en</a>
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
                <a class="navbar-brand" href="index.php"><img src="images/logo-ora2.png" class="img-responsive" style="  margin: 0;" /></a>
                <a class="navbar-brand" href="http://www.sunstar.com/?id=4713" target="_blank"><img src="images/logo-sunstar.png" class="img-responsive bolid"  /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li class="page-scroll home">
                        <a href="index.php">Home</a>
                    </li>

                    <li class="page-scroll ora2city">
                        <a href="city.php">Ora<sup>2</sup> City</a>
                    </li>

                    <li class="page-scroll ora2care">
                        <a href="ora2care.php">Ora<sup>2</sup> Care</a>
                    </li>

                    <li class="page-scroll products active">
                        <a href="products.php">Products</a>
                    </li>

					 <li class="page-scroll stores">
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
                    <a href="products.php" class="btn btn-info disabled">ภาษาไทย</a>
                  </div>
                  <div class="btn-group" role="group">
                    <a href="en/products.php" class="btn btn-info">English</a>
                  </div>
                </div>
            </div>
        </div>

    </nav>

    <!-- Header -->


<div class="wrapper">


<div class="section topbar productstopbar">	
	<div class="container">
	    <div class="row">
			<div class="col-md-12 col-sm-12">    
				<!--h2>Products</h2-->
				<h2>ผลิตภัณฑ์</h2>
			</div>
		</div>
	</div>	
</div>


<!-- About Section -->
<section id="products" >
        <div class="container">
            <div class="row products">
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_1.jpg" data-featherlight="image"><img src="images/product_th1.jpg" class="img-responsive" ></a>
	        		</div>
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_2.jpg" data-featherlight="image"><img src="images/product_th2.jpg" class="img-responsive" ></a>
	        		</div>
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_3.jpg" data-featherlight="image"><img src="images/product_th3.jpg" class="img-responsive" ></a>
	        		</div>    				
            </div>
			<div class="row products">
		
					<div class="col-md-4 col-sm-4">
					<a href="images/product_th_details_4.jpg" data-featherlight="image"><img src="images/product_th4.jpg" class="img-responsive" ></a>
	        		</div>
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_5.jpg" data-featherlight="image"><img src="images/product_th5.jpg" class="img-responsive" ></a>
	        		</div>
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_6.jpg" data-featherlight="image"><img src="images/product_th6.jpg" class="img-responsive" ></a>
	        		</div>
		
				</div>
				<div class="row products">
		
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_7.jpg" data-featherlight="image"><img src="images/product_th7.jpg" class="img-responsive" ></a>
	        		</div>
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_8.jpg" data-featherlight="image"><img src="images/product_th8.jpg" class="img-responsive" ></a>
	        		</div>
					<div class="col-md-4 col-sm-4">
						<a href="images/product_th_details_9.jpg" data-featherlight="image"><img src="images/product_th9.jpg" class="img-responsive" ></a>
	        		</div>
		
				</div>
        </div>
</section>


</div>




<?php include 'footer.php'; ?>