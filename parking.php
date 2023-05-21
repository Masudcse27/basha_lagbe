<?php 
include('template/check_login.php');
$loc="";
$cat1;
$cat2;
$cat3;
$flag=false;
if(isset($_POST['Location'])){
    $flag=true;
    $loc= $_POST['Location'];
    $cat1=$_POST['category'];
    if($cat1=="Bike"){
		$cat2="Car";
	}
	else{
		$cat2="Car";
	}
}
$sql;
if($flag){
    $sql="SELECT post_date,rant,post_id,parking.user_id AS u_id,user_name 
    FROM parking 
    INNER JOIN users 
    ON users.user_id=parking.user_id
    WHERE Location LIKE '%$loc%' AND category='$cat1' AND active_status=true";
}
else{
    $sql="SELECT post_date,rant,post_id,parking.user_id AS u_id,user_name 
    FROM parking 
    INNER JOIN users 
    ON users.user_id=parking.user_id
    WHERE active_status=true
    ORDER BY post_id DESC";
}
$house_post=mysqli_query($con,$sql);
include('template/header.php');
?>
<div style="background-color:#b5b0b0;padding:20px">
 <div class="container" >
    <div class="container"style="position: fixed;">
    <form action="parking.php" method="POST" >
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Location</label>
            <input required value="<?php echo $loc?>"name="Location" type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">Category</label>
                <select name="category" id="inputState" class="form-control" required>
                    <?php if($flag) { ?>
                        <option value="<?php echo $cat1 ?>"><?php echo $cat1 ?></option>
                        <option value="<?php echo $cat2 ?>"><?php echo $cat2 ?></option>
                    <?php }  else { ?>
                    <option value="">choose</option>
                    <option value="Bike">Bike</option>
                    <option value="Car">Car</option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputState" style="color:#b5b0b0">c</label>
                <button type="submit" class=" btn btn-primary btn-block mb-4"><i class="bi bi-search"></i> Search</button>
            </div>
        </div>
    </form>
    </div>
</div>
<p style="color: #b5b0b0;margin-bottom: 60px">s</p>
<div class="container">
<?php
				while($post=mysqli_fetch_assoc($house_post)){
			?>
			<div class="border border-5">
				<table class=" table-borderless" style="margin-left:190px" >
					<tr>
						<td style="padding:0px 10px"><h2>Owner Name: </h2></td>
						<td style="padding:0px 10px"><h2><?php echo $post['user_name'] ?></h2></td>
					</tr>
					<tr>
						<td style="padding:0px 10px"><h2>Rant:</h2></td>
						<td style="padding:0px 10px"><h2><?php echo $post['rant'] ?></h2></td>
					</tr>
					<tr>
						<td style="padding:0px 10px"><h2>Post Date:</h2></td>
						<td style="padding:0px 10px"><h2><?php echo $post['post_date'] ?></h2></td>
					</tr>
				</table>
                <span style="margin-left:150px;color:#b5b0b0">s</span>
				<?php  
					$p_id=$post['post_id'];
					$sql_pic= "SELECT pictur_location FROM parking_picture WHERE post_id='$p_id'";
					$picture_loc=mysqli_query($con,$sql_pic);
                    $I=0;
					while($pic=mysqli_fetch_assoc($picture_loc)){
				?>
                    <img src="<?php echo $pic['pictur_location']?>" alt=""  width="200" height="180" style="margin-left:30px">
                <?php $I+=1; if($I==3)break; }?>
			<br>
			<a href="ShowDetails.php?id=<?php echo $post['post_id']?>&p-type=parking&u_id=<?php echo $post['u_id']?>"class="btn btn-info" style="margin-left:450px;margin-top:5px">View more details</a>
			</div>
			<?php } ?>
</div>
</div>
<?php include('template/footer.php'); ?>