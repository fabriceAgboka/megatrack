<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <title> {{env('APP_NAME')}} </title>

        <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .contact-us {
            position: relative;
            z-index: 2;
            margin-top: 65px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center; 
        }

        .contact-icon {
            position: absolute; 
        }
        .contact-icon i {
            font-size: 36px;
            top: -5px;
            position: relative;
            color: #007bff; 
        }

        .contact-info {
            margin-left: 75px;
            color: #fff; 
        }
          .contact-info h3 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 0; 
        }

        .copyright {
            padding: 28px 0;
            margin-top: 55px;
            background-color: #202020; 
        }
        .copyright span,
        .copyright a {
            color: #878787;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear; 
        }
        .copyright a:hover {
            color:#007bff; 
        }

        .copyright-menu ul {
            text-align: right;
            margin: 0; 
        }

        .copyright-menu li {
            display: inline-block;
            padding-left: 20px; 
        }

        .back-to-top {
            position: relative;
            z-index: 2; 
        }
        .back-to-top .btn-dark {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            padding: 0;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2e2e2e;
            border-color: #2e2e2e;
            display: none;
            z-index: 999;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear; 
        }
        .back-to-top .btn-dark:hover {
            cursor: pointer;
            background: #FA6742;
            border-color: #FA6742; 
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                </ul>    
                <span class="navbar-text">
                    <a class="nav-link" href="#">Nouveau</a>
                </span>
            </div>
        </nav>
        <br>

        <div class="container">
            @yield('contenu')
        </div>
        
        <br><br><br><br>
        <footer id="dk-footer" class="dk-footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span>{{env('APP_NAME')}} © 2020</span>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="copyright-menu">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>

            <div id="back-to-top" class="back-to-top">
                <button class="btn btn-dark" title="Back to Top" style="display: block;">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    </body>
</html>