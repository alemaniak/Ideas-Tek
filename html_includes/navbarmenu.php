
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div  class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand page-scroll" href="index.php"><img id="nav-brand" src="img/logos/LogoHWb.png" class=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--
                    <li>
                        <a class="page-scroll" href="weare.php">Who We Are</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="wedo.php">What We Do</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Who We Serve</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="latest.php">Latest</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="contact.php">Contact Us</a>
                    </li>
                  -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <script>
    var whitelogo = 'img/logos/LogoHWb.png';
    var blacklogo = 'img/logo.png';
    var maxwidth = 720;

    window.onresize = function(event) {
    if(screen.width>maxwidth){
     document.getElementById('nav-brand').src=blacklogo;
    }
    else {
     document.getElementById('nav-brand').src=whitelogo;
    }
    };

    if(screen.width>maxwidth){
    document.addEventListener("scroll", function(event) {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop>100){
            document.getElementById('nav-brand').src=blacklogo;

            }
            else {
                document.getElementById('nav-brand').src=whitelogo;
            }
        });
    }
    else{document.getElementById('nav-brand').src=blacklogo;}
    </script>
