

<div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-add">
                        <a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                            <a href="index.html"><h1 style="color:white"><i>The World News</i></h1></a>
                            </div>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="mailto:swetarajhans935@gmail.com">swetarajhans935@gmail.com</a></li>
                                <li><a href="tel:+4352782883884">7074213240</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Politics</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Election 2019</a></li>
                                <li><a href="#">World Politics</a></li>
                                <li><a href="#">Regional Politics</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Featured</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Golf</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Motorsport</a></li>
                                <li><a href="#">Horseracing</a></li>
                                <li><a href="#">Equestrian</a></li>
                                <li><a href="#">Sailing</a></li>
                                <li><a href="#">Skiing</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">FAQ</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Aviation</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Traveller</a></li>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Food/Drink</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">+More</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Sweta Rajhans
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    
    <script>
        ///////////////////API call for IP Location///////////////////////

        $(document).ready(function() {
        //console.log("fdxgfchvhjb")
        $.ajax({        
        url: "http://api.ipify.org?format=json" ,
        //data: "message="+commentdata,
        type: 'GET',
        //dataType:'json',
        success: function (result) {
            var ip=result.ip;
            console.log(result);

            ////////////////////////////////////location api//////////////
            $.ajax({        
        url: "http://www.geoplugin.net/json.gp?ip="+ip ,
        //data: "message="+commentdata,
        type: 'GET',
        //dataType:'json',
        success: function (response) {
            
            var location=JSON.parse(response).geoplugin_city;
            var state=JSON.parse(response).geoplugin_region;
            $("#location").text(location+"("+state+")");


            /////////////weather forcast api///////
            $.ajax({        
        url: "http://api.apixu.com/v1/current.json?key=39dfc1b638ac470abcb140213191504&q="+location ,
        //data: "message="+commentdata,
        type: 'GET',
        //dataType:'json',
        success: function (response) {
            
            var temperature=response.current.temp_c;
            var winds=response.current.wind_mph;
            $("#temperature").text(temperature);
            $("#wind_speed").text(winds);
        
           ///console.log(winds);
        },
        error: function(e){
            console.log('Error: '+e);
        }  
        });
        /////////////////closing weather forcast api///////////////


            
        },
        error: function(e){
            console.log('Error: '+e);
        }  
        });
        /////// closing location api /////
            
        },
        error: function(e){
            console.log('Error: '+e);
        }  
        });

        //////////////closing ip address api////////

});
    
    </script>
</body>

</html>