@extends('master')
@section('title', 'Home')

@section('content')

    <div class="container" style="padding-top: 60px">
        <div class="page-header">
            <h1>Medical Personnel Register</h1>
        </div>
        <div>
            <form>
                <div class="form-group row">
                    <label for="medical_personnel_first_name" class="col-sm-2 form-control-label">First Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="medical_personnel_first_name" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="medical_personnel_last_name" class="col-sm-2 form-control-label">Last Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="medical_personnel_last_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="medical_personnel_contact_no" class="col-sm-2 form-control-label">Contact No: (+639)</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="medical_personnel_contact_no" placeholder="Contact No">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="medical_personnel_last_name" class="col-sm-2 form-control-label">Work Location (Drag the icon to set ur location)</label>
                    <div class="col-sm-6">
                      <!-- MAP HERE -->
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <script type="text/javascript">
                            var geocoder = new google.maps.Geocoder();

                            function geocodePosition(pos) {
                              geocoder.geocode({
                                latLng: pos
                              }, function(responses) {
                                if (responses && responses.length > 0) {
                                  updateMarkerAddress(responses[0].formatted_address);
                                } else {
                                  updateMarkerAddress('Cannot determine address at this location.');
                                }
                              });
                            }

                            function updateMarkerStatus(str) {
                              document.getElementById('markerStatus').innerHTML = str;
                            }

                            function updateMarkerPosition(latLng) {
                              document.getElementById('medical_personnel_latlng').value = [
                                latLng.lat(),
                                latLng.lng()
                              ].join(', ');
                            }

                            function updateMarkerAddress(str) {
                              document.getElementById('medical_personnel_work_address').value = str;
                            }

                            function initialize() {
                                
                            var latLng = new google.maps.LatLng(-34.397, 150.644);                          
                            
                              var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                                zoom: 8,
                                center: latLng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                              });
                              var marker = new google.maps.Marker({
                                position: latLng,
                                title: 'Point A',
                                map: map,
                                draggable: true
                              });

                              // Update current position info.
                              updateMarkerPosition(latLng);
                              geocodePosition(latLng);

                              // Add dragging event listeners.
                              google.maps.event.addListener(marker, 'dragstart', function() {
                                updateMarkerAddress('Dragging...');
                              });

                              google.maps.event.addListener(marker, 'drag', function() {
                                updateMarkerStatus('Dragging...');
                                updateMarkerPosition(marker.getPosition());
                              });

                              google.maps.event.addListener(marker, 'dragend', function() {
                                updateMarkerStatus('Drag ended');
                                geocodePosition(marker.getPosition());
                              });
                            }

                            // Onload handler to fire off the app.
                            google.maps.event.addDomListener(window, 'load', initialize);
                        </script>
                        
                        <style>
                          #mapCanvas {
                            width: 575px;
                            height: 400px;
                            float: left;
                          }
                          #infoPanel {
                            float: left;
                            margin-left: 10px;
                          }
                          #infoPanel div {
                            margin-bottom: 5px;
                          }
                          </style>
                        <div id="mapCanvas"></div>
                    </div>

                    <div class="col-sm-4">
                        <div id="infoPanel">
                            <fieldset class="form-group">
                                <label for="formGroupExampleInput">Marker Status:</label>
                                <div id="markerStatus"><i>Click and drag the marker.</i></div>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="medical_personnel_latlng">Current Position</label>
                                <input type="text" class="form-control col-sm-4" id="medical_personnel_latlng" >
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="medical_personnel_work_address">Closest Matching Address</label>
                                <input type="text" class="form-control col-sm-4" id="medical_personnel_work_address" >
                            </fieldset>
                          </div>
                    </div>
                </div>
                <!-- MAP HERE -->
                
                  <div class="form-group row">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
            </form>
        </div>

@endsection