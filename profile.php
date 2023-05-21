<?php 
include('template/check_login.php');

$id=$_SESSION['UserId'];
$sql= "SELECT * FROM house WHERE user_id='$id' AND active_status=true ORDER BY post_id";
$sql2= "SELECT * FROM parking WHERE user_id='$id' AND active_status=true ORDER BY post_id";
$sql3="SELECT user_name,user_NID,Email,contact_number,number_of_post FROM users WHERE user_id='$id' ";
$house_post=mysqli_query($con,$sql);
$parking_post=mysqli_query($con,$sql2);
$user=mysqli_fetch_assoc(mysqli_query($con,$sql3));
include('template/header.php');
 ?>
<div class="container-flud">
	<div><h1 style="wedth:100%; background: skyblue;text-align:center;color:white;padding:10px"><?php echo $user['user_name']?></h1></div>
	<div class="row">
		<div class="col-3 "style="padding-left:30px;background: white">
			<p><i class="fa fa-envelope mr-1"></i> mail: <?php echo $user['Email']?></p>
			<p><i class="fa fa-phone mr-1"></i>phone: <?php echo $user['contact_number']?></p>
			<p><i class="fa fa-id-card mr-1"></i>NID: <?php echo $user['user_NID']?></p>
			<p><i class="bi bi-card-list mr-1"></i>Number of post: <?php echo $user['number_of_post']?></p>
		</div>
		
		<div class="col-5 border border-5 border-top-0 border-bottom-0"style="background: white">
			<h1 style="text-align:center; width:100%">HOUSE</h1>
			<?php
				while($post=mysqli_fetch_assoc($house_post)){
			?>
			<div class="border border-5">
				<table class="table table-borderless">
					<tr>
						<td>Category:</td>
						<td><?php echo $post['category'] ?></td>
					</tr>
					<tr>
						<td>Location:</td>
						<td><?php echo $post['Location'] ?></td>
					</tr>
					<tr>
						<td>Rant:</td>
						<td><?php echo $post['rant'] ?></td>
					</tr>
					<tr>
						<td>Datiles:</td>
						<td><?php echo $post['datiles'] ?></td>
					</tr>
					<tr>
						<td>Post Date:</td>
						<td><?php echo $post['post_date'] ?></td>
					</tr>
				</table>
				<?php  
					$p_id=$post['post_id'];
					$sql_pic= "SELECT picture_location FROM house_pic WHERE post_id='$p_id'";
					$picture_loc=mysqli_query($con,$sql_pic);
					while($pic=mysqli_fetch_assoc($picture_loc)){
				?>
			<img src="<?php echo $pic['picture_location']?>" alt=""  width="175" height="150">
			<?php }?>
			<br >
			<a href="UpdateDelete/deletePost.php?id=<?php echo $post['post_id']?>&post-type=house"class="btn btn-danger" style="margin-top:5px"><i class="bi bi-trash mr-1"></i> Delete</a>
			<a href="updateform.php?id=<?php echo $post['post_id']?>&post-type=house"class="btn btn-info" style="margin-top:5px">Update</a>
			</div>
			<?php } ?>
			
		</div>
		
		<div class="col-4 ">
			<h1 style="text-align:center; width:100%">Parking</h1>
			<?php
				while($post_park=mysqli_fetch_assoc($parking_post)){
			?>
			<div class="border border-5" style="margin-bottom: 5px;">
				<table class="table table-borderless">
					<tr>
						<td>Category:</td>
						<td><?php echo $post_park['category'] ?></td>
					</tr>
					<tr>
						<td>Location:</td>
						<td><?php echo $post_park['Location'] ?></td>
					</tr>
					<tr>
						<td>Rant:</td>
						<td><?php echo $post_park['rant'] ?></td>
					</tr>
					<tr>
						<td>Post Date:</td>
						<td><?php echo $post_park['post_date'] ?></td>
					</tr>
				</table>
				<?php  
					$pp_id=$post_park['post_id'];
					$sql_ppic= "SELECT pictur_location FROM parking_picture WHERE post_id='$pp_id'";
					$ppic_loc=mysqli_query($con,$sql_ppic);
					while($ppic=mysqli_fetch_assoc($ppic_loc)){
				?>
			<img src="<?php echo $ppic['pictur_location']?>" alt=""  width="175" height="150">
			<?php }?>
			<br >
			<a href="UpdateDelete/deletePost.php?id=<?php echo $post_park['post_id']?>&post-type=parking"class="btn btn-danger" style="margin-top:5px"><i class="bi bi-trash mr-1"></i> Delete</a>
			<a href="updateform.php?id=<?php echo $post_park['post_id']?>&post-type=parking"class="btn btn-info" style="margin-top:5px">Update</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php include('template/footer.php'); ?>