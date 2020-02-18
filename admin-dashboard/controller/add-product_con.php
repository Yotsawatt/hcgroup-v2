<?php 

    require_once('connect.php');
    
    
    $insertmode = $_POST["insertmode"];
    $delmode = $_GET["delmode"];
    $editmode = $_POST["editmode"];
    $form_page = $_POST["form_page"];
    
    // insert section
    if($insertmode == 1){
        $category = $_POST["category"];
        $product_name = $_POST["product_name"];
        $product_info = $_POST["product_info"];
        $product_path = basename($_FILES["product_path"]["name"]);

        $insert = "INSERT INTO product (product_name,category,product_info,product_path) 
        VALUES ('$product_name','$category','$product_info','$product_path') ";

        if($connect->query($insert) === TRUE){
            // file uploads
            $target_dir = "../../products/";
            $target_file = $target_dir . basename($_FILES["product_path"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["product_path"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } 
                    else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
                else {
                    if(move_uploaded_file($_FILES["product_path"]["tmp_name"],$target_file)) {
                        echo "the file" . basename($_FILES["product_path"]["name"]). "has been uploaded";
                        header("location: ../".$form_page);
                    }
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }    

        }
    }
    // update section
    if($editmode == 2){
        $idedit = $_POST["idedit"];
        $category = $_POST["category"];
        $product_name = $_POST["product_name"];
        $product_info = $_POST["product_info"];
        $form_page = $_POST["form_page"];
        $update = "UPDATE product SET product_name='$product_name',category='$category',product_info='$product_info' WHERE id = '$idedit' ";
        if($connect->query($update) === TRUE){

            header("location: ../".$form_page);

        }

    }
    
    // delete section
    if($delmode == 3) {
        $iddel = $_GET["iddel"];
        $path_pic = $_GET["path_pic"];
        $form_pagedel = $_GET["form_page"];
        // echo $iddel;
        $delete = "DELETE FROM product WHERE id = '$iddel' ";
        if($connect->query($delete) === TRUE) {
            $deletepic = unlink("../../products/".$path_pic);
            if($deletepic){
                header("location: ../".$form_pagedel);
            }
        }
    }
?>