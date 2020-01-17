<?php 

    require_once('connect.php');

    $insertmode = $_POST['insertmode'];
    $delmode = $_GET["delmode"];
    $editmode = $_POST["editmode"];
    $path = basename($_FILES["path"]["name"]);
    

    // insert section
    if($insertmode == 1){
        $page = $_POST["page"];
        $section = $_POST["section"];
        $path = basename($_FILES["path"]["name"]);
        $category = $_POST["category"];
        $comment = $_POST["comment"];
        $form_page = $_POST["form_page"];

        $insert = "INSERT INTO picture (page_pic,section,path_pic,category,comment)
        VALUES ('$page','$section','$path','$category','$comment') ";

        if($connect->query($insert) === TRUE){

            // file uploads
            $target_dir = "../../images/";
            $target_file = $target_dir . basename($_FILES["path"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["path"]["tmp_name"]);
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
                    if(move_uploaded_file($_FILES["path"]["tmp_name"],$target_file)) {
                        echo "the file" . basename($_FILES["path"]["name"]). "has been uploaded";
                        header("location: ../".$form_page);
                    }
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }    
        }

        
    }
    // update file picture
    if($editmode == 1){
        $page = $_POST["page"];
        $section = $_POST["section"];
        $category = $_POST["category"];
        $comment = $_POST["comment"];
        $idedit = $_POST["idedit"];
        $form_page = $_POST["form_page"];
        $update = "UPDATE picture SET page_pic='$page',section='$section',category='$category',comment='$comment' WHERE id = '$idedit' ";
        if($connect->query($update) === TRUE){

            header("location: ../".$form_page);

        }
    }
    // delete file picture
    if($delmode == 1) {
        $iddel = $_GET["iddel"];
        $path_pic = $_GET["path_pic"];
        $form_page = $_GET["form_page"];
        // echo $iddel;
        $delete = "DELETE FROM picture WHERE id = '$iddel' ";
        if($connect->query($delete) === TRUE) {
            $deletepic = unlink("../../images/".$path_pic);
            if($deletepic){
                header("location: ../".$form_page);
            }
        }
    }
    

?>