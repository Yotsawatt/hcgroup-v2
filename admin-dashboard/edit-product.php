<?php 
    $form_page = $_GET["form_page"];
    $id = $_GET["id"];
    require_once('controller/connect.php');
    $showdata = "SELECT * FROM product WHERE id = $id  ";
    $query = $connect->query($showdata);
    $row = $query->fetch_assoc();
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

        <form action="controller/add-product_con" method="post" enctype="multipart/form-data">
            <label for="">Category</label>
            <select name="category" id="" class="form-input">
                <option value="<?php echo $row["category"]; ?>"><?php echo $row["category"]; ?></option>
                <option value="company">COMPANY</option>
                <option value="oem">OEM</option>
            </select>
            <label for="">Product name</label>
            <input type="text" name="product_name" class="form-input" value="<?php echo $row["product_name"]; ?>" >
            <label for="">Product info</label>
            <textarea name="product_info" id="" cols="30" rows="10" class="form-input"><?php echo $row["product_info"]; ?></textarea>
            <label for="path">Path picture</label>
            <input type="file" name="product_path" id="path" class="form-input">
            <!-- hidden input -->
            <input type="hidden" name="idedit" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="editmode" value="2">
            <input type="hidden" name="form_page" value="<?php echo $form_page; ?>">
            <!-- btn -->
            <input type="submit" class="btn-submit" value="Submit" >
            <a class="btn red" onclick="goBack()">Cancel</a>
        </form>
    </div>

</body>
</html>