<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Audios</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body background="images/white.jpg">
    <div class="container">
    <header>
        <img src="images/logo.png" alt="audios logo" class="logo">
        <nav>
            <a href="#" class="hide-desktop">
                <img src="images/Hamburger_icon.svg.png" alt="toggle menu" class="menu" id="menu">
            </a>
            <ul class="show-desktop hide-mobile" id="nav">
                <li id="exit" class="exit-btn hide-desktop">
                    <img src="images/exit.png" alt="exit menu">
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

     <section class="sec"> 
         
        <h1>Login</h1>
        <p>
        <!-- <p class="subhead"> -->
            <form id="frm" action="login1.php" method="post">
                <fieldset class="fset">
                    
                    <table cellpadding="5" cellspacing="5">
                        <tr>
                                                      
                        </tr>
                        <tr>
                            <td class="text">Email Id:</td>
                            <td class="text"><input type="email" id="txtemailid" name="txtemailid" style="font-size: 15px; width: 180px; height: 30px;"></td>
                        </tr>
                        <tr>
                            <td class="text">Password:</td>
                            <td class="text"><input type="password" id="txtpass" name="txtpass" style="font-size: 15px; font-weight: bold; height: 30px; width: 180px;"></td>
                        </tr>
                        <tr>
                            <td> 
                                <a href="Registration.php">Sign Up</a>
                            </td>
                            <td colspan="2">
                                <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
                            </td>
                        </tr>
                    </table>

                </fieldset>
            </form>
        
            
    </section>
    </div>

    
  
        <div class="container">
           
        </div>

        <footer>
            <div class="footer-container">
                <div class="container">
                    <a href="#">
                        <img src="images/logo.png" class="logo" alt="logo">
                        <p class="address">San Francisco, CA <br> USA</p> </p>
                        <ul class="footer-links">
                            <li><a href="privacypolicy.html"> Privacy Policy</a></li>
                        </ul>
                    </a>
                </div>
            </div>
        </footer>

<script>
    var menu = document.getElementById('menu');
    var nav = document.getElementById('nav');
    var exit = document.getElementById('exit');

    menu.addEventListener('click', function(e)
    {
        nav.classList.toggle('hide-mobile');
        e.preventDefault();
    });

    exit.addEventListener('click', function(e)
    {
        nav.classList.add('hide-mobile');
        e.preventDefault();
    });

</script>

</body>
</html>