<?php
    // include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="img/Givenchypol.png" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/landingpage.css">
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="home.php" ><img src="img/Givenchypol.png" class="logo"></a>
            <ul>
                <!-- <li><a href="home.php">Home</a></li>
                <li><a href="produk.php">Product</a></li> -->
            </ul>
        </header>
        <div class="content">
            <div class="textbox">
                <h2>You're visit <span>Givenchy Website</span> now.<br><b>Reveal your beauty</b> with <span>Givenchy Beauty</span></h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Officiis quisquam quam molestias explicabo odio hic numquam! 
                    Doloribus consequatur dolorem, minima quae aliquam dignissimos dolor. 
                    Tenetur eius sapiente id. Quasi, inventore!</p>
                <a href="pelanggan/login.php">User Login</a>
                <a href="admin/login.php">Admin Login</a>
            </div>
            <div class="imgbox">
                <img src="img/lips.png" class="starbucks">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="img/lips.png" onclick="imgSlider('img/lips.png');changeCircleColor('#F675A8')"></li>
            <li><img src="img/blush.png" onclick="imgSlider('img/blush.png');changeCircleColor('#D2DAFF')"></li>
            <li><img src="img/prime.png" onclick="imgSlider('img/prime.png');changeCircleColor('#FEE0C0')"></li>
        </ul>
        <ul class="sci">
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        </ul>
    </section>
    <script type="text/javascript">
        function imgSlider (anything){
            document.querySelector('.starbucks'). src = anything;
        }
        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
</body>
</html>
<?php
    include "pelanggan/footer.php";
?>