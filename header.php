<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://i.redd.it/cprxj04o0sn21.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | BookingHeHe</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<script>
    $(document).ready(function() {


        $(window).scroll(function() {
            if ($(this).scrollTop()) {
               
                $('#menu-top').addClass('abc');
                $('.text-menu').addClass('abb');
               
            } else {
                $('#menu-top').removeClass('abc');
                $('.text-menu').removeClass('abb');
                
            }
        });

    })
</script>
<header>
    <div id="menu-top">
        <nav>
            <a id="logo" href="">
                <img src="img/logo.png" alt="">
            </a>
            <ul id="main-menu">
                <li><a class="text-menu" href=""><i class="fa-solid fa-house"></i> Home </a></li>
                <li><a class="text-menu" href=""><i class="fa-solid fa-receipt"></i> Booking</a></li>
                <li><a class="text-menu" href=""><i class="fa-solid fa-comments"></i> Feedback</a></li>
                <li><a class="text-menu" href=""><i class="fa-solid fa-map"></i> Map</a></li>
                <li><a class="text-menu" href=""><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
                <li><a class="text-menu" href=""><i class="fa-solid fa-user"></i> Register</a></li>
            </ul>

        </nav>
    </div>

</header>

</html>