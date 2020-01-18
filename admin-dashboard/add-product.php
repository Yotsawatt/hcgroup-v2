<?php 
    $form_page = $_GET["form_page"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('layout/include.php'); ?>
</head>
<body>
    <div class="sidenav">
        <?php include('layout/sidenav.php'); ?>
    </div>
    <div class="main-content">
        <h1 class="main-header">add product</h1>

        <form action="controller/add-pic_con" method="post" enctype="multipart/form-data">
            <label for="">Category</label>
            <select name="category" id="" class="form-input">
                <option value="company">COMPANY</option>
                <option value="oem">OEM</option>
            </select>
            <label for="">Product name</label>
            <input type="text" name="product_name" class="form-input">
            <label for="">Product info</label>
            <textarea name="product_info" id="" cols="30" rows="10" class="form-input"></textarea>
            <label for="path">Path picture</label>
            <input type="file" name="path" id="path" class="form-input">
            <!-- hidden input -->
            <input type="hidden" name="insertmode" value="1">
            <input type="hidden" name="form_page" value="<?php echo $form_page; ?>">
            <!-- btn -->
            <input type="submit" class="btn-submit" value="Submit" >
            <a class="btn red" onclick="goBack()">Cancel</a>
        </form>
    </div>

</body>
</html>