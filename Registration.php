
<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd"> -->
<?php
error_reporting(0);
ob_start();
session_start();
   //Connection */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Audios</title>
         <!-- <script type="text/JavaScript" src="js/scw.js"></script> -->
        <link href="css/main.css" rel="stylesheet" type="text/css">
   <script type="text/javascript">
            function contact(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');

                }
            }
                function mob()
            {
                var rl=document.getElementById("txt_phone").value;
                if(rl.toString().length<10)
                {
                    alert("Contact No. should be of ten digits");
                    return false;
                }

            }
               function valid() {
                //alert('calling');
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                // var address = document.forms[form_id].elements[txtemail_id].value;
                var address = document.getElementById('txt_eml').value;
                if(reg.test(address) == false) {
                    alert('Invalid Email Address');
                    return false;
                }
            }

        </script>
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
        <table  cellspacing="0" cellpadding="0" align="center" border="0">
            <tr>
                <td colspan="3"  height="2" align="center">
                     
                </td>
            </tr>
            <tr>

                         <form id="frm" action="Registration2.php" method="post" class=sec>
                                    <table align="center" cellpadding="5" cellspacing="5">
                                        <tr> <strong>Registration Form</strong>
                                        </tr>
                                     
                                        <tr>
                                            <td>Name:</td>
                                            <td><input type="text"  id="txt_name" name="txt_name" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                                                          
                                        <tr>
                                            <td>Phone</td>
                                            <td><input type="text"  id="txt_phone" name="txt_phone" style="width: 250px; height: 25px;" onkeyup="contact(this,value)" onblur="mob()"></td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td><input type="text"  id="txt_adrs" name="txt_adrs" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="email"  id="txt_eml" name="txt_eml" style="width: 250px; height: 25px;" onblur="valid()"></td>
                                        </tr>
                                        <tr>
                                            <td>Password:</td>
                                            <td><input type="password"  id="txt_pass" name="txt_pass" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                                <input type="submit" class="button" value="Submit" onclick="return validate();">
                                                <input type="reset" class="button" value="Reset">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" valign="middle" align="center">
                                                <?php
                                                if ($_SESSION['MSG'] != '') {
                                                    echo '<div class="msgbox">' . $_SESSION['MSG'] . '</div>';
                                                    $_SESSION['MSG'] = "";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                    </div>  </td>
        
                </td>

            </tr>
         
        </table>

        
        <footer>
            <div class="footer-container">
                <div class="container">
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
    </body>
</html>

