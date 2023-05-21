<?php
include('template/check_login.php');
$p_id=$_GET['id'];
$p_type=$_GET['post-type'];
$sql;
if($p_type=="parking"){
    $sql="SELECT * FROM parking where post_id='$p_id'";
}
else{
    $sql="SELECT * FROM house where post_id='$p_id'";
}
$post_data=mysqli_fetch_assoc(mysqli_query($con,$sql));
$opt1=$post_data['category'];
$opt2;
$opt3;
if($p_type=="parking"){
	if($opt1=='Bike')$opt2="Car";
	else $opt2="Bike";
}
else{
	if($opt1=="Bachelor"){
		$opt2="Sublet";
		$opt3="Family";
	}
	else if($opt1=="Sublet"){
		$opt2="Family";
		$opt3="Bachelor";
	}
	else{
		$opt2="Sublet";
		$opt3="Bachelor";
	}
}
include('template/header.php');
//container
?>
<div class="container">
<h1 style="text-align:center; width:100%">Update your post</h1>
    <form action="UpdateDelete/updatepost.php" method="POST">
	<input type="hidden" name="post_type" value="<?php echo $p_type ?>">
	<input type="hidden" name="post_id"  value="<?php echo $p_id ?>">
        <div class="form-outline mb-4">
		<label class="form-label" for="form2Example1" style="color: red;"><h3>Category</h3></label>
			<select name="category" id="inputState" class="form-control" required>
                <option value="<?php echo $opt1 ?>"><?php echo $opt1 ?></option>
			<?php if($p_type=="parking"){ ?>
                <option value="<?php echo $opt2 ?>"><?php echo $opt2 ?></option>
			<?php } 
				else{
			?>
                <option value="<?php echo $opt2 ?>"><?php echo $opt2 ?></option>
				<option value="<?php echo $opt3 ?>"><?php echo $opt3 ?></option>
			<?php } ?>
            </select>
		</div>
        <div class="form-outline mb-4">
			<label class="form-label" for="form2Example1" style="color: red;"><h3>Location</h3></label>
			<input required value="<?php echo $post_data['Location'] ?>"style="width:10ppx" type="text" id="form2Example1" class="form-control" name="Location" />
		</div>
        <div class="form-outline mb-4">
			<label class="form-label" for="form2Example1" style="color: red;"><h3>Rant</h3></label>
			<input required value="<?php echo $post_data['rant'] ?>"style="width:10ppx" type="text" id="form2Example1" class="form-control" name="rant" />
		</div>
        <?php if($p_type=="house"){?>
        <div class="form-outline mb-4">
			<label class="form-label" for="form2Example1" style="color: red;"><h3>Datiles</h3></label>
			<input required value="<?php echo $post_data['datiles'] ?>" style="width:10ppx" type="text" id="form2Example1" class="form-control" name="datiles" />
		</div>
        <?php }?>
        <div class="form-outline mb-4">
			<label class="form-label" for="form2Example1" style="color: red;"><h3>Post Date</h3></label>
			<input value="<?php echo $post_data['post_date'] ?>" style="width:10ppx" type="text" id="form2Example1" class="form-control" name="date" disabled/>
		</div>
		<button style="width: 200px"type="submit" class="btn btn-primary btn-block mb-4">Confirm</button>
    </form>
</div>
<?php include('template/footer.php'); ?>