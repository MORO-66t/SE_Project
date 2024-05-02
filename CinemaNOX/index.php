<html>
<body>
<?php
include('header.php');
?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/testom.css">
</head>
<div class="content">
	<div class="wrap">
	
	<section id="testimonials">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-pause="hover" data-keyboard="true">
        <h1>Best sales cars</h1>
          <div class="carousel-inner">
            <?php
           
            $sql = "SELECT * From tbl_movie";
            $result = mysqli_query($con , $sql);
            $row = mysqli_fetch_assoc($result);
           ?>
		   
<div class='carousel-item active'>
<a href = "about.php?Id=<?php echo $row['movie_id'] ?>">

<h2 class='testimonial-text'><?php echo $row['movie_name'] ?></h2>
<img class='img-section ' src='<?php echo $row['image'] ?>' alt='dog-profile'>
<em><?php echo $row['desc'] ?>$</em>
</a></div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div><!-- end carousel-inner -->

      </div>
    </section>
             
		<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Upcoming Movies</h2>
					<?php 
					$qry3=mysqli_query($con,"SELECT * FROM tbl_news LIMIT 5");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
				<div class="content-left">
					<div class="listimg listimg_1_of_2">
						 <img src="admin/<?php echo $n['attachment'];?>">
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap">
						  	<span style="text-color:#000" class="data"><strong><?php echo $n['name'];?></strong><br>
						  	<span style="text-color:#000" class="data"><strong>Cast :<?php echo $n['cast'];?></strong><br>
                                <div class="data">Release Date :<?php echo $n['news_date'];?></div>
                                
                                
                                
                                <span class="text-top"><?php echo $n['description'];?></span>
                          </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php
				}
				?>
				
			
		</div>				
		<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Movie Trailers</h2>
						<div class="middle-list">
					<?php 
					$qry4=mysqli_query($con,"SELECT * FROM tbl_movie ORDER BY rand() LIMIT 6");
				
					while($nm=mysqli_fetch_array($qry4))
					{
					?>
					
						<div class="listimg1">
							 <a target="_blank" href="<?php echo $nm['video_url'];?>"><img src="<?php echo $nm['image'];?>" alt=""/></a>
							 <a target="_blank" href="<?php echo $nm['video_url'];?>" class="link" style="text-decoration:none; font-size:14px;"><?php echo $nm['movie_name'];?></a>
						</div>
						<?php
					}
					?>
					</div>
					
					
		</div>			
		<?php include('movie_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>

<?php include('searchbar.php');?>