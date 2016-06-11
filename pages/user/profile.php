
<div id="content-information">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title"><b>Your Profile Account</b></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-horizontal">
                            <div class="reg-image">
                                <img src="dist/img/adam.jpg" alt="User Image" id="upImg"/>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 col-xs-offset-1">
                                    <input  type='file' class="img-file-input" name="postImg" accept="image/jpeg, image/png" />
                                </div>
                            </div>
                            <div class="text-center"><small>The best result use same width and height</small></div>

                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="putFullName" placeholder="Full Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="putEmail" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Gmaps</label>
                                <div class="col-sm-10" >
                                    <div style="height: 200px;" id="map"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputShop" class="col-sm-2 control-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Your Location" name="putLocation" id="location"/>
                                    <input type="hidden" class="form-control" name="putLatLng" id="latLng" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputShop" class="col-sm-2 control-label">Shop</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="putShop" placeholder="Your Shop Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="putPassword" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Retype Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="putRetypePassword" placeholder="Retype Password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    'use strict';
    $(document).ready(function () {
        $(":file").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
        initMap();
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
        console.log('a');
        var input = document.getElementById('location');
        console.log(input);
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