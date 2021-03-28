<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav {
            height: 70px;
            background: -webkit-linear-gradient(to right, #f857a6, #ff5858);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #f857a6, #ff5858);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-family: 'Sacramento', cursive;
            font-size: 25px;
        }

        a {
            text-decoration-line: none;
            color: black;
            transition: 1s;
            height: 30px;
        }

        a:hover {
            height: 30px;
            color: rgb(83, 73, 226);
            border-bottom: 2px solid white;
            transition: 1s;
        }

        .fas fa-search {
            height: 20px;
        }

        .phone-email {
            display: flex;
            justify-content: space-between;
        }

        .phone-email>* {
            width: 48%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        #contact button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./packet/sweetalert2.css">
</head>

<body>
    <div class="nav">
        <img src="Logo.png" alt="" style="border-radius: 999px;width: 60px;height: auto;" class="logo">
        <div class="search">
            <input type="text">
            <a href=""><i class="fas fa-search"></i></a>
        </div>
        <a href="">
            <p>Home</p>
        </a>
        <a href="">
            <p>Products</p>
        </a>
        <a href="">
            <p>Contact</p>
        </a>
        <a href="">
            <p>Login <i class="fal fa-user"></i></p>
        </a>
    </div>
    <div class="banner">
        <br><br><br><Br><Br>
        <h1 class="glow">Banana</h1>
    </div>
    <div class="container">
        <br>
        <h2 style="text-align: center;">Cac San Pham HOT</h2>
        <br>
        <div class="divcontainer">
            <div data-aos="fade-down" class="item1">
                <img src="" alt="">
                <h3>Banana</h3>
                <p>Tellus at urna condimentum<br> mattis pellentesque id nibh tortor id.<br> Euismod in pellentesque
                    massa placerat duis ultricies<Br> lacus sed turpis. Amet nisl purus in<br> mollis nunc sed. Suscipit
                    tellus mauris a <br>diam maecenas. Eget nullam non<Br> nisi est sit amet.</p>
                <br><br><br>
                <div class="containerforprice">
                    <h4>$0.50 Per Banana</h4>
                    <button onclick="myfunction()" class="buynow3">Buy Now!</button>
                </div>
                <br><br><br>
            </div>
            <br>
            <div data-aos="fade-down" class="item2">
                <img src="" alt="">
                <h3>Banana</h3>
                <p>Tellus at urna condimentum<br> mattis pellentesque id nibh tortor id.<br> Euismod in pellentesque
                    massa placerat duis ultricies<Br> lacus sed turpis. Amet nisl purus in<br> mollis nunc sed. Suscipit
                    tellus mauris a <br>diam maecenas. Eget nullam non<Br> nisi est sit amet.</p>
                <br><br><br>
                <div class="containerforprice">
                    <h4>$0.50 Per Banana</h4>
                    <button onclick="myfunction()" class="buynow3">Buy Now!</button>
                </div>
                <br><br><br>
            </div>
            <br>
            <div data-aos="fade-down" class="item3">
                <img src="" alt="">
                <h3>Banana</h3>
                <p>Tellus at urna condimentum<br> mattis pellentesque id nibh tortor id.<br> Euismod in pellentesque
                    massa placerat duis ultricies<Br> lacus sed turpis. Amet nisl purus in<br> mollis nunc sed. Suscipit
                    tellus mauris a <br>diam maecenas. Eget nullam non<Br> nisi est sit amet.</p>
                <br><br><br>
                <div class="containerforprice">
                    <h4>$0.50 Per Banana</h4>
                    <button onclick="myfunction()" class="buynow3">Buy Now!</button>
                </div>
                <br><br><br>
            </div>

        </div>
    </div>

    <!-- footer -->
    <div id="ft" class="footer">
        <div class="footer-top">
            <div class="left">
                <h1>Contact</h1>
                <p>Nguyễn Văn Cường</p>
                <p>Ha Noi, Viet Nam</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/nguyencuong21520/"><img src="./img/icons8-facebook-64.png"
                            alt=""></a>
                    <a href="https://github.com/nguyencuong21520"><img src="./img/icons8-github-64.png" alt=""></a>
                    <a href=""><img src="./img/icons8-discord-64.png" alt=""></a>
                </div>
            </div>
            <div class="mid">
                <form id="contact" action="">
                    <input id="name" type="text" placeholder="Your Name" required>
                    <input id="message" type="text" placeholder="Message" required>
                    <div class="phone-email">
                        <input id="phone" type="phone" placeholder="Your Phone Number">
                        <input id="email" type="email" placeholder="Your Email">
                    </div>
                    <button type="submit">Submit</button>


                </form>
            </div>
            <div class="right">
                <p><i class="fal fa-envelope-open-text"></i> Nguyencuong21520@gmail.com</p>
                <p><i class="far fa-phone-volume"></i> 0988886666</p>
            </div>
        </div>
        <div class="footer-bot">
            @Web bán oto 2021
        </div>
    </div>


    <div class="sm">
        <a href=""><img src="discordlogo.png" alt=""></a>
        <a href="https://facebook.com/bigchungusnbn/"><img src="facebooklogo.png" alt=""></a>
        <a href="https://nguyenductuan.itch.io/"><img src="itchiologo.png" alt=""></a>
        <a href=""><img src="twitterlogo.png" alt=""></a>
        <a href="https://pixilart.com/hiholollipopyo/"><img src="pixilartlogo.png" alt=""></a>
        <a href="https://scratch.mit.edu/users/scratcher12345678919/"><img src="scratchlogo.png" alt=""></a>
        <a href="https://m.me/bigchungusbn/" target="_blank"><img
                src="https://www.iconpacks.net/icons/2/free-facebook-messenger-icon-2880-thumb.png" alt=""></a>
    </div>




    <script src="./packet/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./packet/confetti.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        function myfunction() {
            Swal.fire('Thank You! Your package will be delivered in 2 days. Please pay or you will not get the order.')
            confetti.start()
            setTimeout(function () {
                confetti.stop();
            }, 3000);
        }

        function sweetAlert(icon, content) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: icon,
                title: content
            })
        }
        $('#contact').on('submit', function (e) {
               e.preventDefault()
   
               var name = $("#name");
               var email = $("#email");
               var phone = $("#phone");
               var message = $("#message");
               $.ajax({
                   url: './sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       message: message.val(),
                       phone: phone.val(),
                   },
                   success: function (data) {
                       sweetAlert(data.status,data.response);
                   }
               });
               return false;
   
           })
    </script>
</body>

</html>