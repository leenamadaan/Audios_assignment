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
                <li><a href="product.php">Products</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div align="center"><strong>Feedback Form</strong></div>
        <table align="center" class="sec">
        
            <tr>

                <td>
                         
                         <form id="frm" action="feedback2.php" method="post">
                                    <table align="center" cellpadding="3" cellspacing="3">
                                                                             
                                        <tr>
                                            <td>Name:</td>
                                            <td><input type="text"  id="txt_name" name="txt_name" ></td>
                                        </tr>
                                       
                                      
                                        <tr>
                                            <td>Phone</td>
                                            <td><input type="text"  id="txt_phone" name="txt_phone" onkeyup="contact(this,value)" onblur="mob()"></td>
                                        </tr>
                                         <tr>
                                            <td>Email:</td>
                                            <td><input type="text"  id="txt_eml" name="txt_eml" onblur="valid()"></td>
                                        </tr>

                                        <tr>
                                            <td > Model Number:</td>
                                            <td ><input type="text"  id="txt_mod" name="txt_mod" ></td>
                                        </tr>
                                        <tr>
                                            <td >Rate the quality of Speaker</td>
                                            
                                            
                                            <td>

                                            <input type="radio" name="txt_qs" id="txt_qs" value="very poor"/>
                                            <label for="txt_qs">Very Poor</label><br/>

                                            <input type="radio" name="txt_qs" id="txt_qs" value="below average"/>
                                            <label for="txt_qs">Below Average</label><br/>

                                            <input type="radio" name="txt_qs" id="txt_qs" value="average"/>
                                            <label for="txt_qs">Average</label><br/>

                                            <input type="radio" name="txt_qs" id="txt_qs" value="above average"/>
                                            <label for="txt_qs">Above Average</label><br/>

                                            <input type="radio" name="txt_qs" id="txt_qs" value=""/>
                                            <label for="txt_qs">Excellent</label><br/>


                                            </td>                                           
                                          
                                        
                                        </tr> 

                                        <tr>
                                            <td class="text">Your Remarks:</td>
                                            <td class="text">
                                                 <textarea style="width:179px;height: 62px;" name="txtarearemarks" id="txtarearemarks">

</textarea>
                                        </tr>
                                      
                                        <tr>
                                            <td align="center" colspan="2">
                                                <input type="submit" class="button" value="Submit" >
                                                
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
                    <!-- </div>  </td> -->
                
                </td>

            </tr>
         
        </table>

        
        <footer>
            <div class="footer-container">
                <div class="container">
                    <a href="#">
                        <img src="images/logo.png" class="logo" alt="logo">
                        <p class="address">San Francisco, CA <br> USA</p> </p>
                        <ul class="footer-links">
                            <li><a href="#"> Terms of Services</a></li>
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

