<?php 
    $form_page = $_GET["form_page"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('layout/include.php') ?>
</head>
<body>
    <div class="sidenav">
        <?php include('layout/sidenav.php') ?>
    </div>
    <div class="main-content">
        <h1 class="main-header">add paragraph</h1>
        
        <form action="controller/add-paragraph_con" class="form-control" method="post">
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
            <label for="">Paragraph</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-input"></textarea>
            <label for="">Comment</label>
            <input type="text" name="comment" class="form-input" >
            <input type="submit" class="btn-submit" value="Submit">
            <!-- hidden input -->
            <input type="hidden" name="insertmode" value="1">
            <input type="hidden" name="form_page" value="<?php echo $form_page; ?>">
            <a class="btn red" onclick="goBack()">Cancel</a>
        </form>
    </div>
</body>
</html>