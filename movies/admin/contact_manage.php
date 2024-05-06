<?php
	include("include/header.php");
	include("../include/config.php");
  include("../Models/Contact.php");
	session_start();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">New Messages</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">View All Queries</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <?php 
       if(isset($_SESSION['del']))
			{
			echo'<font color="red">'.$_SESSION['del'].'</font>';
		unset($_SESSION['del']);
		}
		
			if(isset($_SESSION['update']))
			{
			echo'<font color="green">'.$_SESSION['update'].'</font>';
		unset($_SESSION['update']);
			}
			if(isset($_SESSION['disable']))
			{
			echo'<font color="red">'.$_SESSION['disable'].'</font>';
		unset($_SESSION['disable']);
		}
		if(isset($_SESSION['enable']))
			{
			echo'<font color="green">'.$_SESSION['enable'].'</font>';
		unset($_SESSION['enable']);
		}
?>  
<thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>Message</th>
                      <th>Time</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
          <?php
              $mass= new Contact();
              $mass->recieveMessage();
             ?>
                    </tr>
                  </tbody>
                </table>
              </div>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>