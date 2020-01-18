<?php 

    require_once('controller/connect.php');
    // paragraph section
    $showproduct = "SELECT * FROM product ";
    $queryproduct = $connect->query($showproduct);
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
        <h1 class="main-header">product</h1>

        <!-- paragraph section -->
        <div class="paragraph-section">
            <div class="header-section">
                <h1>hcgroup product</h1>
                <a href="add-product?form_page=productall" class="btn green">Add product</a>
            </div>
            <table class="table">
                <tr>
                    <th width="5%">#</th>
                    <th>category</th>
                    <th>name</th>
                    <th width="30%">picture</th>
                    <th>product info</th>
                    <th width="5%">edit</th>
                    <th width="5%">delete</th>
                </tr>
                <?php 
                    $count = 1;
                    while($rowpic = $queryproduct->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$count++."</td>";
                        echo "<td>".$rowpic['category']."</td>";
                        echo "<td>".$rowpic['product_name']."</td>";
                        echo "<td><img src='../images/".$rowpic['product_path']."'></td>";
                        echo "<td>".$rowpic['product_info']."</td>";
                        echo "<td><a href='' class='btn orange'>edit</a></td>";
                        echo "<td><a href='' class='btn red'>delete</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>