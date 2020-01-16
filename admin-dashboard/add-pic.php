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
        <h1 class="main-header">add picture</h1>

        <form action="controller/add-pic_con" method="post" enctype="multipart/form-data">
            <label for="">Page</label>
            <select name="page" id="" class="form-input">
                <option value="home">Home</option>
                <option value="product">Product</option>
                <option value="about_us">About us</option>
                <option value="find_a_store">Find a store</option>
                <option value="contact_us">contact us</option>
            </select>
            <label for="">Section</label>
            <select name="section" id="" class="form-input">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
            <label for="path">Path</label>
            <input type="file" name="path" id="path" class="form-input">
            <label for="catagory">Catagory</label>
            <select name="category" id="category" class="form-input">
                <option value=""></option>
                <option value="home">Home</option>
                <option value="fureiko_bg">Fureiko BG</option>
                <option value="nanoxan_bg">Nanoxan BG</option>
                <option value="key_quality">Key Quality</option>
                <option value="key_safety">Key Safety</option>
                <option value="key_specialized">Key Specialized</option>
                <option value="cer_haccp">Cer Home</option>
                <option value="cer_iso9001">Cer ISO9001</option>
                <option value="cer_brc">Cer BRC</option>
                <option value="cer_halal">Cer HALAL</option>
            </select>
            <label for="">Comment</label>
            <input type="text" name="comment" class="form-input">
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