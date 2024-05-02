<?php
include('header.php');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User List
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <?php include('../../msgbox.php');?>
              <ul class="todo-list">
                 <?php 
                        $qry7=mysqli_query($con,"select * from tbl_login where user_type = 2");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {
                        ?>
                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-film"></i>
                        
                      </span>
                  <!-- checkbox -->
                  <!-- todo text -->
                  <span class="text"><?php echo $c['Uname'];?></span>
                  <span class="text" style="margin-left: 30%; "><?php echo "\t";?></span>
                  <span class="text"><?php echo $c['username'];?></span>
                  <!-- Emphasis label -->
                  
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    
                    <a class="btn btn-primary" href="up_user.php" role="button">Update</a>
                    <button class="fa fa-trash-o" onclick="del(<?php echo $c['user_id'];?>)"></button>
                    
                  </div>
                </li>
                  <?php
                       }}
                     ?>
                      
            </div>
          </div>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <?php
include('../../footer.php');
?>
<script>
function del(m)
    {
        if (confirm("Are you want to delete this movie") == true) 
        {
            window.location="del_user.php?mid="+m;
        } 
    }
    </script>