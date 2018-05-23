@include('partials.core.head')
  <body>
    @include('partials.core.nav')
        @include('partials.elements.home-header')      
        <section class="intro mt35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Poplar - 2 Bedroom Single Unit</h2>
                        <p>The Poplar is a warm, welcoming and cosy 2 bedroom park home. Designed by comfort, the Poplar really does have all you need for comfortable living. With an open plan layout this home boasts integrated appliances, fitted wardrobes and a free standing roll top bath as standard.</p>
                        <p>Available in a choice of 2 layouts, this home comes in a variety of colours and finishes. The Poplar comes in a 40ft x 12ft option or a 40ft x 14ft option.</p>
                        <p>Other sizes are available, please enquire form more details.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#layoutone" role="tab" data-toggle="tab">Layout Option 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#layouttwo" role="tab" data-toggle="tab">Layout Option 2</a>
                            </li>                                
                        </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active " id="layoutone">
                            <div class="tab-content">
                                <img src="/images/poplar-drawing.png" width="100%" alt="">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="layouttwo">
                            <div class="tab-content">
                                <img src="/images/poplar-drawing.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>            
        </section>
        @include('partials.elements.standardtable')
        @include('partials.elements.plxcta')       
        @include('partials.core.footer')      
    @include('partials.core.scripts')
    @include('partials.elements.home-modal')
  </body>
</html>