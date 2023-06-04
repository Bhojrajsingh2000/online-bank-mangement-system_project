<h1 class="text-dark">Welcome to <?php echo $_settings->info('name') ?></h1>
<?php
?>
<hr>
<div class="container">
  <div class="card">
    <div class="card-body">
    <h4 style='background-color:red; padding:0.3em;padding-left:0em; color:white'><i style='background-color:green; padding:0.3em; color:white;margin-left:0px;'> Bank Holder : &nbsp;&nbsp; &nbsp; &nbsp;  </i> &nbsp; <?php echo $_settings->userdata('firstname') ?>&nbsp;<?php echo $_settings->userdata('lastname') ?></h4>
        <h4 style='background-color:red; padding:0.3em;padding-left:0em; color:white'><i style='background-color:green; padding:0.3em; color:white;margin-left:0px;'>Account Number : </i> &nbsp; <?php echo $_settings->userdata('account_number') ?></h4>
        <h4 style='background-color:red;padding:0.3em;padding-left:0em;color:white'><i style='background-color:green; padding:0.3em; color:white;margin-left:0px;'>Current Balance: &nbsp; &nbsp;</i>&nbsp;  <?php echo number_format($_settings->userdata('balance'),2) ?></h4>
    </div>
  </div>
</div>
    
