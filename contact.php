<?php include 'mail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="home.php"> <i class="fas fa-home"></i> <span>home</span> </a>
    <a href="about.php"> <i class="fas fa-user"></i> <span>about</span> </a>
    <a href="portfolio.php"> <i class="fas fa-briefcase"></i> <span>portfolio</span> </a>
    <a href="contact.php"> <i class="fas fa-address-book"></i> <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- contact section starts  -->

<section class="contact">

<!--alert messages start-->
<?php echo $alert; ?>
<!--alert messages end-->

<?php echo $alert; ?>

<h1 class="heading"> contactez <span>moi</span> </h1>

<div class="row">

    <div class="info-container">

        <h1>à savoir</h1>

        <p>
            Je suis très actif sur mes réseaux que vous pouvez retrouver sur ce site.
            Voili voilou
        </p>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <div class="info">
                    <h3>adresse :</h3>
                    <p>Nouméa, Nouvelle-Calédonie 98800</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <h3>email :</h3>
                    <p>mathieudinhnc@gmail.com</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <div class="info">
                    <h3>téléphone :</h3>
                    <p>+687 828337</p>
                </div>
            </div>

        </div>

        <div class="share">
            <a href="https://www.facebook.com/mathieu.dinh/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/notdish_" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/kobaladish/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/mathieu-dinh-a0954a1a5/" class="fab fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCtqMM_pUcgnnHTNfKPD2Fow" class="fab fa-youtube"></a>
        </div>

    </div>

    

    <form action="mail.php" method="POST">

        <div class="inputBox">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
        </div>

        <textarea name="message" placeholder="Votre message" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

</div>

</section>

<script type="text/javascript">
if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}
</script>

<!-- contact section ends -->

</body>
</html>