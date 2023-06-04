<h6 style='text-align:right;'>
			<?php 
				echo"<span style='background-color:green; color:white; padding:0.7em;  width:2em;padding-right:0em;' >Current Date: ".date('d M Y | D ');
                echo"<span style='background-color:red; color:white; padding:0.7em;  width:2em;' >Time: ".date('H:i A ');
			?>
				</h6>
<h1 class="text-dark">Welcome to <?php echo $_settings->info('name') ?></h1>
<?php
?>
<hr>
<div style='background-color:blue; color :white; padding:0.7em'>
<h5>Bank Info :</h5>

<li style='margin-left:5%;padding:0.4em;'>Branch : Greater Noida </li>
<li style='margin-left:5%;padding:0.4em;'>IFCS CODE : ABBONP24527J </li>
<li style='margin-left:5%;padding:0.4em;'>HEAD OFFICE : Mumbai </li>
<li style='margin-left:5%;padding:0.4em;'>MANAGER : Virat Kohli</li>

</div>
<hr>
<div class="container-fluid">
<div class="row">

          <div class="col-12 col-sm-6 col-md-3">
         
            <div class="info-box">
            
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-id-card"></i></span>
              <i style='background-color:red; color:white;padding:0px;'>
              <div class="info-box-content">
                <span class="info-box-text">Total Accounts</span>
                <span class="info-box-box">
               
                  <?php 
                    echo number_format($conn->query("SELECT * FROM accounts")->num_rows);
                  ?>
                  Client
                </span>
              </div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          </i>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-bill"></i></span>
              <i style='background-color:green; color:white'>
              <div class="info-box-content ">
                <span class="info-box-text" >Total Accounts Balance</span>
                <span class="info-box-number" >
                    Rs. <?php echo number_format($conn->query("SELECT sum(balance) as total FROM accounts")->fetch_assoc()['total']); ?>
                </span>
               
              </div>
             
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <!-- /.col -->
        </div>
        </i>
</div>
