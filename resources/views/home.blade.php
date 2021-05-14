@include('partials.head');
<body>
    @include('partials.nav');
    <section id="hero">
        <div class="home-container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="home-banner" src="img/home-banner.PNG">
                </div>
                <div class="col-sm-6">
                    <a class="img-sack" href="{{ url('/gift') }}"><img src="img/link_sack.PNG" alt=""></a>
                </div>
                <div class="col-sm-6">
                    <a class="img-list" href="{{ url('/gewinner') }}"><img src="img/tausch_link.PNG" alt=""></a>
                </div>
            </div>
        </div>
        
  

    </section>
</body>
</html>