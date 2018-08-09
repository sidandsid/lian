function initMap(){
    var center = {lat: 40.67327054, lng: -73.82531223};
    var map = new google.maps.Map(document.getElementById('js-contact-map'), {
        center: center,
        scrollwheel: false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        zoom: 15
    });

    var bounds = new google.maps.LatLngBounds();
    var mapOptions = { mapTypeId: 'roadmap' };

    //Content for info windows
    var infoWindowContent = '<p class="contact-map__iw-title">Mulitix Big Wordpress Theme</p>' +
        '<p class="contact-map__iw-text">110-00 Rockaway Blvd</p>' +
        '<p class="contact-map__iw-text">South Ozone Park, NY 11420</p>';

    var infoWindow = new google.maps.InfoWindow({
        content: infoWindowContent
    });

    infoWindow.setPosition({lat: 40.67133387, lng: -73.82529077});
    infoWindow.open(map);

    google.maps.event.addListener(infoWindow, 'domready', function(){
        //Reference to the div which receives the contents of the infowindow using jQuery
        var iwOuter = $('.gm-style-iw');
        var iwBackground = iwOuter.prev();
        var iwCloseBtn = iwOuter.next();

        //Removing the default background shadow
        iwBackground.children(':nth-child(2)').css({'display' : 'none'});

        //Removing the default white background
        iwBackground.children(':nth-child(4)').css({'display' : 'none'});

        //Changing box-shadow for the window tail
        iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': '0px 0px 0px 1px #e1e1e1', 'z-index' : '1'});

        //Changing close button position
        iwCloseBtn.css({right: '-15px', top: '25px'});
    });

    //Adding custom map style
    var styles = [
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e9e9e9"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        }
    ];

    map.setOptions({styles: styles});
}