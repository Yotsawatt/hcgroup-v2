<?php 

    require_once('connect.php');

    $insertmode = $_POST['insertmode'];
    $editmode = $_POST['editmode'];
    $delmode =$_GET['delmode'];

    // insert section 
    if($insertmode == 1){
        $page = $_POST["page"];
        $section = $_POST["section"];
        $text = $_POST["text"];
        $comment = $_POST["comment"];
        $form_page = $_POST["form_page"];

        $insert = "INSERT INTO paragraph (page_paragraph,section,text_paragraph,comment) 
        VALUES ('$page','$section','$text','$comment')";

        if($connect->query($insert) === TRUE){

            echo "New record create successfully";
            header("location: ../".$form_page);

        }
        else{
            echo "error".$insert."<br>".$connect->error;
        }

        $connect->close();
    }

    // edit section
    if($editmode == 1){
        $idedit = $_POST['idedit'];
        $page = $_POST["page"];
        $section = $_POST["section"];
        $text = $_POST["text"];
        $comment = $_POST["comment"];
        $form_page = $_POST["form_page"];

        $edit = "UPDATE paragraph SET page_paragraph='$page',section='$section',text_paragraph='$text',comment='$comment' WHERE id='$idedit' ";

        if($connect->query($edit) === TRUE){

            echo "New record create successfully";
            header("location: ../".$form_page);

        }
        else{
            echo "error".$edit."<br>".$connect->error;
        }

        $connect->close();
    }
    // delete section
    

    if($delmode == 1){  
        $iddel = $_GET['iddel'];

        $delete = "DELETE FROM paragraph WHERE id = '$iddel' ";
        if ($connect->query($delete) === TRUE){
            header("location: ../mainpage");
        }
        else{
            echo "error".$insert."<br>".$connect->error;
        }
    }

    
?>