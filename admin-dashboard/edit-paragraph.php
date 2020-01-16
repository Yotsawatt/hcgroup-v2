<?php 

    require_once('controller/connect.php');
    $id = $_GET['id'];
    $form_page = $_GET['form_page'];

    $showparagraph = "SELECT * FROM paragraph WHERE id = '$id' ";
    $queryparagraph = $connect->query($showparagraph);
    $row = $queryparagraph->fetch_assoc();

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
        <h1 class="main-header">edit paragraph</h1>
        <label for="">Page</label>
        <form action="controller/add-paragraph_con" class="form-control" method="post">
            <select name="page" id="" class="form-input">
                <option value="<?php echo $row['page_paragraph'] ?>"><?php echo $row['page_paragraph'] ?></option>
                <option value="home">Home</option>
                <option value="product">Product</option>
                <option value="about_us">About us</option>
                <option value="find_a_store">Find a store</option>
                <option value="contact_us">contact us</option>
            </select>
            <label for="">Section</label>
            <select name="section" id="" class="form-input">
                <option value="<?php echo $row['section'] ?>"><?php echo $row['section'] ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
            <label for="">Paragraph</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-input"><?php echo $row['text_paragraph']?></textarea>
            <label for="">Comment</label>
            <input type="text" name="comment" class="form-input" value="<?php echo $row['comment']?>">
            <input type="submit" class="btn-submit" value="Submit">
            <!-- hidden input -->
            <input type="hidden" name="idedit" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="editmode" value="1">
            <input type="hidden" name="form_page" value="<?php echo $form_page; ?>">
            <a class="btn red" onclick="goBack()">Cancel</a>
        </form>
    </div>
</body>
</html>