<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
    <title>Clik Bank</title>
     <link rel="icon" href="favicon.ico">
     <style>
        hr {
            height: 5px;
            border: 2px solid black;
            border-radius: 10px;
            background: linear-gradient(to left, blue, red);
        }
        .btn {
            background-color: dodgerblue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
        }
        .btn:hover {
            background-color: royal blue;
        }
    </style>
</head>
<body>
    
    <div class="top-nav-bar">
        <div class="search-box">
            <i class="fas fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fas fa-times"id="close-btn"onclick="closemenu()"></i>
            <img src="images/abc.png" class="logo">
            <input type="text" class="form-control">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <!--menu bar-->
        <div class="menu-bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>

  
    


    <!----feature products------>
    <section class="on-sale">
        <div class="container">
            <div class="title-box">
                <h1 style="text-align: center;"><i class="fa fa-university" aria-hidden="true" style="color: blue"></i>&nbsp;CONTACT US</h1>
            <hr>
           
            </div>
            <div>
                
                <h2><i class="fa fa-user" style="color: blue"></i>&nbsp;SRNoori</h2>
                <br>
                <h2><i class="fa fa-heart" style="color: blue"></i>&nbsp;Software Engineer</h2>
                <br>
                <h2><i class="fa fa-envelope" style="color: blue"></i>&nbsp;awebdevelopernoori@gmail.com</h2>
                <br>
                <h2><i class="fa fa-phone" style="color: blue"></i>&nbsp;+91 63695 76245</h2>
                <br>
                <hr>
            </div>
        </div>
    </section>


                
                       

   
   <!-- website feature section -->

   <section class="website-features">
    <div class="container">
        <div class="row">
            <div class="col-md-3 feature-box">
                <img src="images/feature-1.png">
                <div class="feature-text">
                    <p><b>100% Original items </b>are available at company</p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="images/feature-2.png">
                <div class="feature-text">
                    <p><b>Return within 30 days </b>of receiving your order.</p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="images/feature-3.png">
                <div class="feature-text">
                    <p><b>Get free delivery for every</b>order on more than price.</p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="images/feature-4.png">
                <div class="feature-text">
                    <p><b>Pay Online through multiple </b>options (card/Net banking)</p>
                </div>
            </div>
        </div>
    </div>
   </section>
    <!-- footer -->
    <section class="footer">
        <div class="container tex-center">
            <div class="row">
                <div class="col-md-3">
                    <h1>Useful Links</h1>
                    <p>Privacy Policy</p>
                    <p>Terms of Use</p>
                    <p>Return Policy</p>
                    <p>Discount Coupons</p>
                </div>
                <div class="col-md-3">
                    <h1>Company</h1>
                    <p>About Us</p>
                    <p>Contact Us</p>
                    <p>Career</p>
                    <p>Affiliate</p>
                </div>
                <div class="col-md-3">
                    <h1>Follow Us On</h1>
                    <p><i class="fab fa-facebook"></i> Facebook</p>
                    <p><i class="fab fa-youtube"></i> YouTube</p>
                    <p><i class="fab fa-linkedin"></i> Linkedin</p>
                    <p><i class="fab fa-twitter-square"></i> Twitter</p>
                </div>
                <div class="col-md-3 footer-image">
                    <h1>Download App</h1>
                    <img src="images/app-logo.png">
                </div>
            </div>
            <hr>
            <p style="text-align: center;">&copy; Copyright Developed by <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="https://www.facebook.com/shahid.reza.56232/">Shahid Reza</a></p>
                        <p style="text-align: center;">Terms and Conditions Apply</p>
                        <br>

        </div>
    </section>

   <script>
    function openmenu()
    {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display = "none";
        document.getElementById("close-btn").style.display = "block";
    }
     function closemenu() {
            document.getElementById("side-menu").style.display = "none";
            document.getElementById("menu-btn").style.display = "block";
            document.getElementById("close-btn").style.display = "none";
        }
    </script>

</body>
</html>