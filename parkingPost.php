<?php
include('template/check_login.php');

include('template/header.php');
?>
<div class="row pback" style="padding:20px">
    
    <div class="col-5 row justify-content-center align-items-center" style="color: red;">
        <h1><img src="images/bashalagbe1.png" alt=""></h1>
        <!-- <h1 style="text-align: center">rental and parking <br> management system</h1> -->
    </div>

    <div class="col-7 container" style=": 50px;height: 500px; color:white; " >

        <form action="post.php" method="POST" enctype="multipart/form-data">

            <div class="form-group col-md-4" style="margin-left:200px">
                <label for="inputState">Category</label>

                <select name="category" id="inputState" class="form-control" required>
                    <option value="">choose</option>
                    <option value="Bike">Bike</option>
                    <option value="Car">Car</option>
                </select>

            </div>

            <div class="form-group col-md-4" style="margin-left:200px">
                <label for="inputCity">Location</label>
                <input required type="text" name="Location" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-4" style="margin-left:200px">
                <label for="inputCity">Rant</label>
                <input required type="number" name="rant" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-4" style="margin-left:200px">
                <label for="exampleFormControlFile1">Pictures</label>
                <input type="file" class="form-control-file" name="image[]" multiple required>
            </div>

            <div class="form-group col-md-2" style="margin-left:200px">
                <button type="submit" class=" btn btn-primary btn-block mb-4">Post</button>
            </div>
        </form>
    </div>
</div>
<?php include('template/footer.php'); ?>