@include('partials.head');
<body>
    @include('partials.nav');
    <section id="hero">
        <div class="container">
        <div class="gift-container">
            
                        <section id="geschenkspiel">
                            <div class="row">
                                <div class="col-sm-12">
                                    @if ($users[0]->hat_gespielt)
                                    <script src="{{ asset('js/nav-active.js') }}" defer></script>
                                        <h1>Sie haben bereits gespielt!</h1>
                                    <h2>Ihr Gewinn ist: {{ $users[0]->gift }}</h2>
                                     @else
                                         <img class="pull-gift" src="img/pull_gift.PNG">
                                            <div class="wrap-present">
                                        <div class="present-box" id="present">
                                          <div class="present">
                                            <div class="img-wrap" id="present-image">
                                                <p class="info-text">
                                                    <form id="myForm" action = "/edit" method = "post">
                                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                                        <!--<input type = 'submit' value="Ihr Gewinn: {{ $users[0]->gift }}" />-->
                                                    </form>
                                                    {{ $users[0]->gift }}
                                                </p>
                                            </div>
                                          </div>
                                          <div class="side front"></div>
                                          <div class="side back"></div>
                                          <div class="side left"></div>
                                          <div class="side right"></div>
                                          <div class="side top">
                                            <span class="to">
                                              <span class="name" id="nametag">
                                              </span>
                                            </span>
                                          </div>
                                          <div class="side bottom"></div>
                                        </div>
                                    </div>
                                
                                    @endif
                                </div>
                            </div>
                    </section><!-- End About Section -->
                            
                            
                           
                </div>
        </div>


            
            </section>
</body>
</html>
    

