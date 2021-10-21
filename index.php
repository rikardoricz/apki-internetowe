<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Notebook</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="icon" href="favicon.png">
    </head>
        
    <body>
        <header>
            <div class="wrapper">
                <div class="header-wrapper">
                    <a href="index.php" class="header-logo">
                        <h1>Digital Notebook</h1>
                    </a>
                    <!-- <a href="index.php" class="header-logo"><img class="header-logo" src="/images/logo-banner.png" alt="logo"></a> -->
                    <nav>
                        <a class="burger-nav"></a>
                        <ul class="nav-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="https://kamakaczmarek.net" target="_blank" >Teacher's website</a></li>
                            <!-- <li><a href="">Portfolio</a></li> -->
                            <!-- <li><a href="">Usługi</a></li> -->
                            <!-- <li><a href="">Kontakt</a></li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div id="main-banner">
            <img src="/images/works-bg.jpeg" alt="Portfolio baner">
            <div class="wrapper">
                <h1 class="text-img">Portfolio</h1>
            </div>
        </div>

        <div class="wrapper-top">
            <ul class="buttons">
                <li class="btn"><a class="btn-a active first-btn" data-category-type="all">ALL</a></li>
                <li class="btn"><a class="btn-a" data-category-type="php">PHP</a></li>
                <li class="btn"><a class="btn-a" data-category-type="py">Python</a></li>
                <li class="btn"><a class="btn-a" data-category-type="js">JS</a></li>
                <!-- <li class="btn"><a class="btn-a" data-category-type="animation">Animacje</a></li> -->
                <!-- <li class="btn"><a class="btn-a" data-category-type="music-vid">Teledyski</a></li> -->
                <!-- <li class="btn"><a class="btn-a" data-category-type="ad">Reklamy</a></li> -->
            </ul>
            <div id="works">
                <div class="work" data-category-type="php">
                    <a href="/phpNotes/lekcja1.php" target="_blank">
                        <img class="works-gif static" src="/gifs/img-php.png" alt="gif-static">
                        <img class="works-gif animated" src="/gifs/img-php.png" alt="gif-1">
                        <h3 class="animated-text">PHP 1</h3>
                    </a>
                </div>
                <div class="work" data-category-type="php">
                    <a href="/phpNotes/lekcja2.php" target="_blank">
                        <img class="works-gif static" src="/gifs/img-php.png" alt="gif-static">
                        <img class="works-gif animated" src="/gifs/img-php.png" alt="gif-1">
                        <h3 class="animated-text">PHP 2</h3>
                    </a>
                </div>
                <div class="work" data-category-type="py">
                    <img class="works-gif static" src="/gifs/img-flask.png" alt="gif-static">
                    <img class="works-gif animated" src="/gifs/img-flask.png" alt="gif-1">
                    <h3 class="animated-text">Flask project</h3>
                </div>
                <div class="work" data-category-type="js">
                    <img class="works-gif static" src="/gifs/img-reactjs.jpg" alt="gif-static">
                    <img class="works-gif animated" src="/gifs/img-reactjs.jpg" alt="gif-1">
                    <h3 class="animated-text">React project</h3>
                </div>
                <div class="work" data-category-type="php">
                    <a href="/phpNotes/lekcja3.php" target="_blank">
                        <img class="works-gif static" src="/gifs/img-php.png" alt="gif-static">
                        <img class="works-gif animated" src="/gifs/img-php.png" alt="gif-1">
                        <h3 class="animated-text">PHP 3</h3>
                    </a>
                </div>
                <div class="work" data-category-type="php">
                    <a href="/phpNotes/lekcja4.php" target="_blank">
                        <img class="works-gif static" src="/gifs/img-php.png" alt="gif-static">
                        <img class="works-gif animated" src="/gifs/img-php.png" alt="gif-1">
                        <h3 class="animated-text">PHP 4</h3>
                    </a>
                </div>
                <div class="work" data-category-type="php">
                    <a href="/phpNotes/lekcja5.php" target="_blank">
                        <img class="works-gif static" src="/gifs/img-php.png" alt="gif-static">
                        <img class="works-gif animated" src="/gifs/img-php.png" alt="gif-1">
                        <h3 class="animated-text">PHP 5</h3>
                    </a>
                </div>
                
            </div>
        </div>
        
       
        <footer>
            <div class="wrapper">
                <div class="footer-layout">
                    <div class="footer-part">
                        <div class="footer-block">
                            <div class="footer-block-left">
                                <h3>Tomasz Świątek</h3>
                                <p>4bTI</p>
                                <p>Zeszyt apki internetowe</p>
                                <p>PHP i nie tylko</p>
                                <p>klo</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-part">
                        <div class="footer-block">
                            <div class="footer-block-center">
                                <div class="footer-logo">
                                    <a href="index.php">
                                        <img src="/images/logo_cream-small.png" alt="Footer Logo">
                                    </a>
                                </div>
                                <p>Tomasz Świątek © 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-part">
                        <div class="footer-block">
                            <div class="footer-block-right">
                                <h3>Social media</h3>
                                <a href="https://www.facebook.com/profile.php?id=100005991242452">
                                    <img src="/images/icon-fb.png" alt="Facebook">
                                </a>
                                <a href="https://www.youtube.com/watch?v=3SgGT580LZ8">
                                    <img src="/images/icon-twitter.png" alt="Twitter">
                                </a>
                                <a href="https://www.instagram.com/tomek_swiatek/">
                                    <img src="/images/icon-insta.png" alt="Instagram">
                                </a>
                                <a href="https://www.linkedin.com/in/tomasz-świątek-7627a01a9/">
                                    <img src="/images/icon-linkedin.png" alt="LinkedIn">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/menu.js"></script>
        <script src="/js/scroll-menu.js"></script>
        <script src="/js/validate-form.js"></script>
        <script src="/js/works-filter.js"></script>
    </body>
</html>