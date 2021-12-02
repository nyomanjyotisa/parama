<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>Parama</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/light-box.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }} ">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }} "></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a>Parama</a>
        </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>Our Gallery</em></h1>
              <p>A place for us to look back</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="{{ asset('video/zoom.mp4') }} " type="video/mp4" />
        </video>
    </div>


    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <!-- PIC 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ asset('img/frontpage/1-april12.jpg') }} " data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>12 April <em>2020</em></h1>
                                <p>One of the first few pics you sent me!</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/frontpage/small/1-april12.jpg') }} ">
                        </div>
                    </div></a>
                </div>
            </div>

            <!-- PIC 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="/img/frontpage/2-may9.jpeg" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>9 May <em>2020</em></h1>
                                <p>I think twas our second time vidcalling? You were cute. I printed this pic hehe :3</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="/img/frontpage/small/2-may9.jpeg">
                        </div>
                    </div></a>
                </div>
            </div>

            <!-- PIC 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="/img/frontpage/3-june1.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>1 June <em>2020</em></h1>
                                <p>We stayed up "studying" for UAS (dasar nakal)</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="/img/frontpage/small/3-june1.jpg">
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2021 Parama</p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{ asset('js/vendor/bootstrap.min.js') }} "></script>
    
    <script src="{{ asset('js/plugins.js') }} "></script>
    <script src="{{ asset('js/main.js') }} "></script>

    
</body>
</html>