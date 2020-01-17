<?php 

    require_once('controller/connect.php');
    // paragraph section
    $showparagraph = "SELECT * FROM paragraph WHERE page_paragraph='contact_us' ";
    $queryparagraph = $connect->query($showparagraph);
    // picture section
    $showpic = "SELECT * FROM picture WHERE page_pic='contact_us' ";
    $querypic = $connect->query($showpic);

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
        <h1 class="main-header">contact us</h1>
        <!-- paragraph section -->
        <div class="paragraph-section">
            <div class="header-section">
                <h1>paragraph section</h1>
                <a href="add-paragraph?form_page=contactus" class="btn green">Add paragraph</a>
            </div>
            <table class="table">
                <tr>
                    <th width="5%">#</th>
                    <th>section</th>
                    <th>paragraph</th>
                    <th>comment</th>
                    <th width="5%">edit</th>
                    <th width="5%">delete</th>
                </tr>
                <?php 
                    $count = 1;
                    while($row = $queryparagraph->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$count++."</td>";
                        echo "<td>".$row['section']."</td>";
                        echo "<td>".$row['text_paragraph']."</td>";
                        echo "<td>".$row['comment']."</td>";
                        echo "<td><a href='edit-paragraph?id=".$row['id']."&form_page=contactus ' class='btn orange'>edit</a></td>";
                        echo "<td><a href='controller/add-paragraph_con?iddel=".$row['id']."&delmode=1' class='btn red'>delete</a></td>";
                        echo "</tr>";
                    }
                
                ?>
            </table>
        </div>
        <!-- picture section -->
        <div class="picture-section">
            <div class="header-section">
                <h1>picture section</h1>
                <a href="add-pic?form_page=contactus" class="btn green">Add picture</a>
            </div>
            <table class="table">
                <tr>
                    <th width="5%">#</th>
                    <th>section</th>
                    <th width="30%">picture</th>
                    <th>detail / comment</th>
                    <th>category</th>
                    <th width="5%">edit</th>
                    <th width="5%">delete</th>
                </tr>
                <?php 
                    $count = 1;
                    while($rowpic = $querypic->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$count++."</td>";
                        echo "<td>".$rowpic['section']."</td>";
                        echo "<td><img src='../images/".$rowpic['path_pic']."'></td>";
                        echo "<td>".$rowpic['comment']."</td>";
                        echo "<td>".$rowpic['category']."</td>";
                        echo "<td><a href='edit-pic?id=".$rowpic['id']."&form_page=contactus ' class='btn orange'>edit</a></td>";
                        echo "<td><a href='controller/add-pic_con?iddel=".$rowpic['id']."&delmode=1&path_pic=".$rowpic['path_pic']."&form_page=contactus ' class='btn red'>delete</a></td>";
                        echo "</tr>";
                    }
                
                ?>
            </table>
        </div>
    </div>
</body>
</html>