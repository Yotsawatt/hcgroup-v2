<?php 
    session_start();
    require_once("controller/mainpage_con.php");
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
        <h1 class="main-header">home</h1>
        <!-- paragraph section -->
        <div class="paragraph-section">
            <div class="header-section">
                <h1>paragraph section</h1>
                <a href="add-paragraph" class="btn green">Add paragraph</a>
            </div>
            <table class="table">
                <tr>
                    <th width="5%">#</th>
                    <th>section</th>
                    <th>paragraph</th>
                    <th width="5%">edit</th>
                    <th width="5%">delete</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus corrupti magnam in atque distinctio culpa commodi porro numquam labore dolores rem veniam, velit explicabo doloribus magni reiciendis repudiandae exercitationem nobis.</td>
                    <td><a href="" class="btn orange">edit</a></td>
                    <td><a href="" class="btn red">delete</a></td>
                </tr>
            </table>
        </div>
        <!-- picture section -->
        <div class="picture-section">
            <div class="header-section">
                <h1>picture section</h1>
                <a href="add-pic" class="btn green">Add picture</a>
            </div>
            <table class="table">
                <tr>
                    <th width="5%">#</th>
                    <th>section</th>
                    <th width="30%">picture</th>
                    <th>detail / comment</th>
                    <th width="5%">edit</th>
                    <th width="5%">delete</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><img src="https://images.unsplash.com/photo-1578509725196-53444c549731?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1055&q=80" alt=""></td>
                    <td>picture section 1</td>
                    <td><a href="" class="btn orange">edit</a></td>
                    <td><a href="" class="btn red">delete</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><img src="https://images.unsplash.com/photo-1578509725196-53444c549731?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1055&q=80" alt=""></td>
                    <td>picture section 1</td>
                    <td><a href="" class="btn orange">edit</a></td>
                    <td><a href="" class="btn red">delete</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>