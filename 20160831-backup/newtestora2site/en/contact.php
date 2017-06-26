<?php 
include 'header.php'; 
?>


<div class="wrapper">



<div class="section topbar">	
	<div class="container">
	       <div class="row">
				<div class="col-md-12 col-sm-12">      
					<h2>Stores</h2>
			</div>
		</div>
	</div>	
</div>



<section id="contact">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<center>
					<h4>DKSH Thailand</h4>
					<p>2106 Sukhumvit Road, Bangchak, Phrakhanong, <br/>
					Bangkok 10260, Thailand <br/>
					Tel: +66 2 220 9000</p>
				</center>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="contform">
					<form name="form1" action="contact.php" method="post" >
						<center><h2>แบบฟอร์ม</h2></center>
				    		<br>
				    		
				    	<p class="name">
				        	<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="ชื่อ-นามสกุล" id="name" />
				    	</p>
				    	<p class="email">
				    		<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="อีเมลล์" />
				    	</p>
				    	<p class="text">
				    	<textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="ข้อความ"></textarea>
				    	</p>
				    	<div class="submit">
				    		<input type="submit" value="ส่ง" id="button-blue"/>
				    	<div class="ease"></div>
				    	</div>
						
					</form>
				</div>
			</div>

		</div>
	</div>
</section>


</div>


<?php 
include 'footer.php'; 
?>