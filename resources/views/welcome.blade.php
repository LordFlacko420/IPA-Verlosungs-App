@include('partials.head');
    <body>
        <header id="header" class="header-transparent">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div id="logo" class="pull-left">
                        <a href=""><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                              @if (Route::has('login'))
                         <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="pading-bottom: 20px;">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                 @endif
                            </div>
                        @endif
                        </ul>
                    </div>
                  </nav><!-- #nav-menu-container -->

            </div>
        
  </header><!-- End Header -->
            <section id="hero">
                <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                    <h1>Willkommen zum virtuellen Geschenksapèro 2020</h1>
                    <h2>Die Abteilung "Development & Operations" freut sich, den diesjährigen Geschenksapèro virtuell durchführen zu dürfen, um auch Ihnen, risikofrei, eine Freude zu bescheren.</h2>
                    <a href="{{ route('login') }}" class="btn-get-started">Zum Geschenkspiel</a>
                </div>
            </section><!-- End Hero Section -->
            
            
    </body>
</html>
