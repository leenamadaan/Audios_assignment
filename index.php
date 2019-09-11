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
                <li id="exit" class="exit-btn hide-desktop"><img src="images/exit.png" alt="exit menu"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <img src="images/128598557.png"  alt="server graphic" class="server">
        <h1>Speaker's for the modern era</h1>
        <p class="subhead">Go wireless and pay online for what you use</p>
        <img src="images/scroll.gif" alt="scroll down" class="scroll hide-mobile show-desktop">
    </section>
    </div>

    <div class="blue-container">
        <div class="container">
            <ul>
                <li>
                    <img src="images/amazon_echo_vs_apple_homepod_vs_google_home.jpg" alt="speaker icon">
                        <p>Apple HomePod vs Google Home vs Amazon Echo: Which One Is Best?
                            It's the ultimate showdown: Amazon Echo vs Apple HomePod vs Google Home.
                        </p>
                </li>
                <li>
                    <img src="images/ima.jpg" alt="speaker icon">
                        <p>Ekotek Ekoplay Max Review - Budget Big Bass Speakers
                        </p>
                </li>
                <li>
                    <img src="images/images.jpg" alt="speaker icon">
                        <p> Active smart speakers estimated to hit over 200 million this year, HomePod reach could be a factor - 9to5Mac
                                The global installed base of smart speakers is expected to break 200 million by the end of this year, says analytics firm Canalys. China and East Asia are expected to produce the most growth....
                        </p>
                </li>
            </ul>
        </div>     
    </div>
    <div class="grey-container">
        <div class="container">
            <ul>
                <li>
                    <figure>
                            <img src="images/erik.jpg" alt="erik picture">
                            <figcaption>~Erik Young</figcaption>
                            <blockquote>
                            Founder & CEO<br><br>
                            </blockquote>
                            
                    </figure>
                </li>
                <li>
                        <figure>
                                <img src="images/stedmon.jpg" alt="user picture">
                                <figcaption>
                                    ~Stedmon Bates
                                </figcaption>
                                <blockquote>
                                        Recruitment Lead              
                                </blockquote>
                        </figure>
                    </li>
                
            </ul>
        </div>
        <div class="container">
            <h2>Get exclusive news and updates</h2>
            <p>
            </p>
            <form id="frm" action="index2.php" method="post">
            <input type="email" class="email" id="txt_eml" name="txt_eml" placeholder="Enter Email Address">
            <input type="submit" class="cta" value="Click me for notifications" onclick="return validate();">

            </form>           
            <!-- <a href="#" class="cta">Go</a> -->
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