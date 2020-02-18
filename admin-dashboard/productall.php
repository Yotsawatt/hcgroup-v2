<?php 

    require_once('controller/connect.php');
    // hcgroup product section
    $showproduct = "SELECT * FROM product WHERE category='company' ";
    $queryproduct = $connect->query($showproduct);
    // oem product section
    $showproductoem = "SELECT * FROM product WHERE category='oem' ";
    $queryproductoem = $connect->query($showproductoem);
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

        <!-- HCGROUP product section -->
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
                        echo "<td><img src='../products/".$rowpic['product_path']."'></td>";
                        echo "<td>".$rowpic['product_info']."</td>";
                        echo "<td><a href='edit-product?id=".$rowpic['id']."&form_page=productall ' class='btn orange'>edit</a></td>";
                        echo "<td><a href='controller/add-product_con?iddel=".$rowpic['id']."&delmode=3&path_pic=".$rowpic['product_path']."&form_page=productall' class='btn red'>delete</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
        <!-- OEM product section -->
        <div class="paragraph-section">
            <div class="header-section">
                <h1>OEM product</h1>
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
                    while($rowpic2 = $queryproductoem->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$count++."</td>";
                        echo "<td>".$rowpic2['category']."</td>";
                        echo "<td>".$rowpic2['product_name']."</td>";
                        echo "<td><img src='../products/".$rowpic2['product_path']."'></td>";
                        echo "<td>".$rowpic2['product_info']."</td>";
                        echo "<td><a href='edit-product?id=".$rowpic2['id']."&form_page=productall ' class='btn orange'>edit</a></td>";
                        echo "<td><a href='controller/add-product_con?iddel=".$rowpic2['id']."&delmode=3&path_pic=".$rowpic2['product_path']."&form_page=productall' class='btn red'>delete</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>