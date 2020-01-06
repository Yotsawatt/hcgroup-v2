<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('layout/include.php') ?>
    <link rel="stylesheet" href="css/contactus.css">
</head>
<body>
    <?php include('layout/navbar.php') ?>
    <div class="container">
        <div class="header-text">
            <p>Contact us</p>
            <h1><span class="text-color">Follow</span> Map to find us</h1>
        </div>
        <!-- Google map API -->
        <div class="map-container">
            <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3766.793105897788!2d99.5207968592379!3d19.24784656277216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65fd691bbca5e4c2!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4iuC4p-C4teC5iCDguYDguInguKfguLXguKLguJkg4Lif4Li54LiU4Liq4LmMIOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1578282629453!5m2!1sth!2sth" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- from to send message to us -->
    <div class="contact-form">
        <div class="container">
            <form class="form-control" action="" method="post">
                <input type="text" placeholder="Name" class="input-form">
                <input type="text" placeholder="Email" class="input-form">
                <input type="text" placeholder="Subject" class="input-form">
                <textarea name="" cols="30" rows="5" class="input-form" placeholder="Message.."></textarea>
                <input type="button" value="Submit" class="btn">
            </form>
        </div>
    </div>
    <!-- footer section -->
    <?php include('layout/footer.php') ?>
</body>
</html>