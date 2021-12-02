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
              <h1>{{$tokenNew->title}}</h1>
              <p>{{$tokenNew->description}}</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="">
        	<source src="/videoCust/{{$tokenNew->video}}" type="video/mp4" />
        </video>
    </div>


    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <!-- PIC 1 -->
            @foreach ($images as $image)
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="/imageCust/{{$image->image}}" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>{{$image->title}}</h1>
                                <p>{{$image->description}}</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="/imageCust/{{$image->image}}">
                        </div>
                    </div></a>
                </div>
            </div>
            @endforeach
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