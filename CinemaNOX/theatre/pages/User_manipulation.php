<?php
include('header.php');
?>
 <link rel="stylesheet" href="../../validation/dist/css/bootstrapValidator.css"/>
    
    <script type="text/javascript" src="../../validation/dist/js/bootstrapValidator.js"></script>
      <!-- =============================================== -->
      <?php
        include('../../form.php');
        $frm=new formBuilder;      
      ?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>User Management</title>
</head>
<body>
    <div class="content-wrapper">
    <section class="content-header">
      <h1>
      User Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Theatre</li>
      </ol>
    </section>
    <section class="content">
    <!-- Add User Form -->
    <div class="box">
        <div class="box-body">
    <h2>Add User</h2>
    <form action="user_management.php" method="post" id="form1">
    <div class="form-group">
        <label for="username">Username:</label>
        <input class="form-control" type="text" id="username" name="username" required><br>
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" required><br>
        </div>
        <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="password" id="password" name="password" required><br>
        </div>
        <div class="form-group">
                <button class="btn btn-success">Add User</button>
              </div>
    </form>

    <!-- Delete User Form -->
    <h2>Delete User</h2>
    <form action="user_management.php" method="post">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required><br>

        <input type="submit" name="delete_user" value="Delete User">
    </form>

    <!-- Update User Form -->
    <h2>Update User</h2>
    <form action="user_management.php" method="post">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required><br>

        <label for="username">New Username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="email">New Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">New Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="update_user" value="Update User">
    </form>

    <!-- Search User Form -->
    <h2>Search User</h2>
    <form action="user_management.php" method="post">
        <label for="search_query">Search Query:</label>
        <input type="text" id="search_query" name="search_query" required><br>

        <input type="submit" name="search_user" value="Search User">
    </form>
</div>
</div>
</section>
</div>
    <!-- List Users -->
    <h2>List of Users</h2>
    <?php
    // Include the PHP file containing user management logic
    // include("user_management.php");
    ?>
</body>
</html>
<?php
include('../../footer.php'); ?>