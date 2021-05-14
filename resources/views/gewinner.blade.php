@include('partials.head');
<body>
    @include('partials.nav');
        <section id="hero">
                <div class="container">
                    <section id="geschenkliste">
                        
                          <div class="geschenkliste-container" data-aos="zoom-in" data-aos-delay="100">
                              <div class="row">
                                
                                <div class="col-sm-12">
                                        <h1> Übersicht der gewonnenen Geschenke</h1>
                                        <h2>Hier können Sie nachschauen, was denn der Arbeitskollege oder die Arbeitskollegin gewonnen hat.</h2>
                                </div>
                                    
                                    <div class="col-sm-12">
                                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Suche nach Namen.." title="Type in a name">
                                    </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="wrap-table100">
                                              <div class="table100">
                                                <table id="myTable">
                                                  <thead>
                                                    <tr class="table100-head">
                                                      <th class="column1">Personen</th>
                                                        <th class="column2">Geschenke</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($users as $user)
                                                      <tr>
                                                          <td class="column1"><a style="color:black;" href="mailto:{{ $user->email}}">{{ $user->name }}</a></td>
                                                          <td class="column2">{{ $user->gift}}</td>
                                                      </tr>
                                                    @endforeach
                                                    </tbody>
                                                  </table>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                            </div>

                          
                </section><!-- End Hero Section -->
                    </div>
        </section>
    </body>
</html>