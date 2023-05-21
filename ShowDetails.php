<?php
include('template/check_login.php');
$p_id=$_GET['id'];
$p_type=$_GET['p-type'];
$u_id=$_GET['u_id'];
$sql;
if($p_type=="parking"){
    $sql="SELECT category,`Location`,post_date,rant,user_name,Email,contact_number
    FROM parking
    INNER JOIN users 
    ON users.user_id=parking.user_id
    where post_id='$p_id'";
    $sql_pic= "SELECT pictur_location FROM parking_picture WHERE post_id='$p_id'";
}
else{
    $sql="SELECT datiles,category,`Location`,post_date,rant,user_name,Email,contact_number
    FROM house
    INNER JOIN users 
    ON users.user_id=house.user_id
    where post_id='$p_id'";
    $sql_pic= "SELECT picture_location FROM house_pic WHERE post_id='$p_id'";
}
$details=mysqli_fetch_assoc(mysqli_query($con,$sql));

include('template/header.php');
?>
<div class="container">
    <div class="container border border-5">
		<table class=" table-borderless" style="margin-left:190px" >
			<tr>
				<td style="padding:0px 10px"><h2>Owner Name: </h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['user_name'] ?></h2></td>
			</tr>
            <tr>
				<td style="padding:0px 10px"><h2>Mobile number: </h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['contact_number'] ?></h2></td>
			</tr>
            <tr>
				<td style="padding:0px 10px"><h2>Email: </h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['Email'] ?></h2></td>
			</tr>
			<tr>
				<td style="padding:0px 10px"><h2>Rant:</h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['rant'] ?></h2></td>
			</tr>
            <tr>
				<td style="padding:0px 10px"><h2>Address:</h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['Location'] ?></h2></td>
			</tr>
            <tr>
				<td style="padding:0px 10px"><h2>Category:</h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['category'] ?></h2></td>
			</tr>
			<tr>
				<td style="padding:0px 10px"><h2>Post Date:</h2></td>
				<td style="padding:0px 10px"><h2><?php echo $details['post_date'] ?></h2></td>
			</tr>
            <?php if($p_type!="parking") { ?>
                <tr>
                    <td style="padding:0px 10px"><h2>Details</h2></td>
                    <td style="padding:0px 10px"><h2><?php echo $details['datiles'] ?></h2></td>
			    </tr>
            <?php } ?>
		</table>
		<?php  
			$picture_loc=mysqli_query($con,$sql_pic);
			while($pic=mysqli_fetch_assoc($picture_loc)){
				if($p_type=="house"){
		    ?>
                <img src="<?php echo $pic['picture_location']?>" alt=""  width="490" height="430" style="margin-left:30px;margin-top:10px">
				<?php }

				else {
				?>
				<img src="<?php echo $pic['pictur_location']?>" alt=""  width="490" height="430" style="margin-left:30px;margin-top:10px">
        <?php } } ?>
	</div>
</div>
<?php include('template/footer.php'); ?>