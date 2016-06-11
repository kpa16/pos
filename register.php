<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Turbos POS Registration</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="ionic-v2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/cust.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <!--
            <div class="register-logo">
                <div class="row">
                    <a href="#"><b>POS</b><i> Point Of Sales</i></a>
                </div>
            </div>
            -->
            <div class="register-box-body">
                <div class="row headline-img" >
                    <img class="img-responsive" src="dist/img/turbosPOS.jpg"/>
                </div>
                <p class="login-box-msg">Register a new membership</p>
                <form action="#" method="post">
                    <div class="form-group has-feedback">
                        <div class="reg-image">
                            <img src="dist/img/adam.jpg" alt="User Image" id="upImg">
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 col-xs-offset-1">
                                <input  type='file' class="img-file-input" name="postImg" accept="image/jpeg, image/png"/>
                            </div>
                        </div>
                        <div class="text-center"><small>The best result use same width and height</small></div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Full name" name="postFullName">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="postEmail">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Your Shop Name" name="postShop">
                        <span class="fa fa-building form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback" style="height: 200px;" id="map"></div>
                    <div class="form-group has-feedback">
                        <div id="lookUpInfo" class="text-center" style="color:red;"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Your Location" name="postLocation" id="location"/>
                        <input type="hidden" class="form-control" name="postLatLng" id="latLng" />
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="postPassword">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Retype password" name="postRetypePassword">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-center">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
                </div>

                <a href="login.html" class="text-center">I already have a membership</a>
            </div><!-- /.form-box -->

            <div class="login-footer text-center">
                Copyright &copy; 2016 <b><a href="#" class="text-black">Turbos </a><small>Team Dev's</small></b><br> 
                All rights reserved
            </div>
        </div><!-- /.register-box -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaLbcKL-Bx5R39OWnPFdp_w-O5djZhzBI&libraries=places&callback=initMap" async defer></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
                $(":file").change(function () {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                        console.log(this.files[0]);
                    }
                });
            });

            function imageIsLoaded(e) {
                $('#upImg').attr('src', e.target.result);
            }
            var marker = undefined, map, infoMarker;
            function initMap() {
                var mapDiv = document.getElementById('map');
                infoMarker = new google.maps.InfoWindow({
                    content: 'Your Shop'
                });
                map = new google.maps.Map(mapDiv, {
                    center: {lat: -6.2293867, lng: 106.6894293},
                    zoom: 8
                });
                var geocoder = new google.maps.Geocoder;
                google.maps.event.addListener(map, 'click', function (event) {
                    if (marker === undefined) {
                        marker = new google.maps.Marker({position: event.latLng, map: map, title: 'Your Shop'});
                    } else {
                        marker.setPosition(event.latLng);
                    }
                    infoMarker.open(map, marker);
                    console.log(event.latLng);
                    geocoder.geocode({'location': {lat: event.latLng.lat(), lng: event.latLng.lng()}}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[1]) {
                                //.map.setZoom(11);
                                /*
                                 var marker = new google.maps.Marker({
                                 position: latlng,
                                 map: map
                                 });*/
                                marker.setPosition(event.latLng);
                                //infowindow.open(map, marker);
                                $('#location').val(results[0].formatted_address);
                                $('#latLng').val(event.latLng.lat() + ' ' + event.latLng.lng());
                                $('#lookUpInfo').text('');
                                //$('#location').val(event.latLng.lat() + "," + event.latLng.lng());
                            } else {
                                $('#lookUpInfo').text('Address lookup not found, Generating longitude and latitude ');
                                $('#location').val(event.latLng.lat() + ' ' + event.latLng.lng());
                                $('#latLng').val(event.latLng.lat() + ' ' + event.latLng.lng());
                            }
                        } else {
                            window.alert('Geocoder failed due to: ' + status);
                        }
                    });
                });
                google.maps.event.addDomListener(window, 'load', initialize());

            }

            function initialize() {
                var input = document.getElementById('location');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    var place = autocomplete.getPlace();
                    var longlat = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
                    var markerBounds = new google.maps.LatLngBounds();
                    //var longlat = {lat: place.geometry.location.lat(), lng: place.geometry.location.lng()};
                    if (marker === undefined) {
                        marker = new google.maps.Marker({
                            position: longlat,
                            map: map,
                            title: 'Your Shop'});
                    } else {
                        marker.setPosition(longlat);
                    }
                    $('#latLng').val(place.geometry.location.lat() + ' ' + place.geometry.location.lng());
                    infoMarker.open(map, marker);
                    markerBounds.extend(longlat);
                    map.fitBounds(markerBounds);
                });
            }



        </script>
    </body>
</html>
