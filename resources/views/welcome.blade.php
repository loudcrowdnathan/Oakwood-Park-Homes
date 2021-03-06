@include('partials.core.head')
  <body>
    @include('partials.core.nav')
        @include('partials.elements.slider')
        <section class="homes mt35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="intro">Welcome to Oakwood Park Homes <br>
                        <span class="subtitle">The best park homes for you &amp; your family!</span></h2>
                    </div>        
                </div>
                <div class="row mt35">
                    <div class="col-lg-4">
                        <div class="infocards" id="oak" style="background-image:url('/images/oak.jpg')">
                            <div class="card-bottom">
                                <h3>OAK  <i class="far fa-plus-square cardarrow"></i></h3>                                
                                <p><span class="feature">2 or 3 Bedrooms</span> <span class="feature">Open Plan</span> <span class="feature">2 Layout Options</span> <br><span class="feature">Colours &amp; Finishes</span></p>
                                <h5>Brief Description</h5>
                                <p>The Oak is a popular choice for twin park homes.</p>
                                <p>Find Out More <i class="fas fa-arrow-circle-right"></i></p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="infocards" id="poplar" style="background-image:url('/images/poplar.jpg')">
                            <div class="card-bottom">
                                <h3>POPLAR  <i class="far fa-plus-square cardarrow"></i></h3>                                
                                <p><span class="feature">2 Bedrooms</span> <span class="feature">Open Plan</span> <span class="feature">2 Layout Options</span></p>
                                <h5>Brief Description</h5>
                                <p>The Poplar is a warm, welcoming and cosy 2 bedroom park home.</p>
                                <p>Find Out More <i class="fas fa-arrow-circle-right"></i></p>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-4">
                        <div class="infocards" id="willow" style="background-image:url('/images/willow.jpg')">
                            <div class="card-bottom">
                                <h3>WILLOW  <i class="far fa-plus-square cardarrow"></i></h3>                                
                                <p><span class="feature">2 or 3 Bedrooms</span> <span class="feature">Open Plan</span> <span class="feature">Colours &amp; Finishes</span></p>
                                <h5>Brief Description</h5>
                                <p>The Willow is a family based beautifully spacious home.</p>
                                <p>Find Out More <i class="fas fa-arrow-circle-right"></i></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <section class="intro mt35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Located in the former mining town of Doncaster, South Yorkshire, we are a small and friendly family run business, who pride ourselves in manufacturing high quality bespoke residential park homes, which are built to BS3632:2015. We are an NCC member, which gives you peace of mind that your homes complies to current building regulations. We provide an individual service to each of our customers, to enable us to meet your individual needs and requirements.</p>
                        <p>With over 15 years experience in building park homes, we have a wealth of knowledge to help you along the way to your dream home. Your journey begins here!</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="/images/home-feature.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>            
        </section>
        <section class="parallax mt35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="parallax-text">
                            <h3>Build your bespoke park home</h3>
                            <p>With over <b>15 years</b> experience in building park homes,<br> we have a wealth of knowledge to help you along the way to your dream home.</p>  
                            <button type="button" class="trans">Your journey begins here</button>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="information">
            <div class="container">
                <div class="row mt35 mb35">
                    <div class="col-lg-9">
                        <h2>Section Heading</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam laudantium suscipit, sint autem culpa nobis commodi est doloremque illum enim ipsum voluptatum fugit laborum blanditiis repellat nemo ad ipsa possimus!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione recusandae repellat illo autem nemo iusto quisquam maxime eum, eos ipsa ad aliquid culpa placeat commodi molestias labore ipsam. Ipsam, enim.</p>
                        <div class="accred">
                            <img src="/images/mib.png" width="200px" alt="">
                        </div>
                        <div class="accred">
                            <img src="/images/ncc.jpg" width="100px" alt="">
                        </div>  
                        <div class="accred">
                            <img src="/images/bsi.jpg" width="100px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="https://picsum.photos/600"  class="rounded-circle feature" alt="">
                    </div>
                </div>
                
            </div>
        </section>
        <section class="stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="statcard">
                            <i class="far fa-question-circle"></i>
                            <h2 class="stat">90</h2>
                            <h5 class="statname">Stat Name</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="statcard">
                            <i class="far fa-question-circle"></i>
                            <h2 class="stat">90</h2>
                            <h5 class="statname">Stat Name</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="statcard">
                            <i class="far fa-question-circle"></i>
                            <h2 class="stat">90</h2>
                            <h5 class="statname">Stat Name</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.core.footer')      
    @include('partials.core.scripts')
    @include('partials.elements.home-modal')
  </body>
</html>