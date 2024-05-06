<?php
	include("include/header.php");
	include("../include/config.php");
	include("../Models/User.php");
	$id=$_GET['id'];
	$user= new User($id);

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Users</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
	</div>
	<div class="card-body">
		<form action="../Models/Admin.php?ed=1" method="post">
			<div class="form-group">
				<label>User Name</label>
				<input type="text" class="form-control" name="rnm" value="<?php echo $user->getUsername(); ?>" required>
			</div>
			<div class="form-group">
				<label>User Age</label>
				<input type="text" class="form-control" name="age" value="<?php echo$user->getAge(); ?>" required>
			</div>
			
			
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="gender" >
				<option value ="Male">Male</option>
				<option value ="Female">Female</option>
				</select>
			    <input type="hidden" name="id" value ="<?php echo$user->getuser_Id(); ?>" >
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo$user->getEmail(); ?>" required>
				
			</div>
			<div class="form-group">
				<label>Mobile No.</label>
				<input type="text" class="form-control" name="mno" value="<?php echo$user->getPhone(); ?>" required>
			</div>
			<input type="submit" class="btn btn-success btn-sm" value="Submit">
			<!-- <a href="user_disable.php?id=<php echo$row['r_id']; ?>" class="btn btn-danger btn-sm">Disable</a> -->
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>