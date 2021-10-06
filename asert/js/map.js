var map;
var zoom = 8;
var center = {lat: -6.17221, lng: 35.73947 };
var destinationAddress = "";
var directionsDisplayed = false;
var directionsService = null;
var directionsDisplay = null;
var distanceInKM = 0;
var durationInHours = 0;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: zoom
    });
}

$(document).ready(function () {
    distanceInKM = $('#distance').val();
    durationInHours = $('#duration').val();
    destinationAddress = $('#jina_la_halmashauri').val();
    $('#travelMode').val(selectedMode);

    $('#enterDistance').click(function() {
        if($('#jina_la_halmashauri').val().trim() === "") {
            alert('Tafadhali andika jina la halmashauri..');
            $('#jina_la_halmashauri').focus();
            return;
        }

        openModal();
    });

    $('#travelMode').change(function() {
        displayDirections();
    });
});

function openModal() {
    // Show the popup window
    $('#mapModal').modal('show');
    google.maps.event.trigger(map, "resize");

    // If destination address has not been changed and direction has already been displayed
    // then don't send the directions request again.
    if($('#jina_la_halmashauri').val() === destinationAddress && directionsDisplayed === true) {
        return;
    }

    displayDirections();
}

function displayDirections() {
    $('#status').text("Tafadhali subiri...");
    destinationAddress = $('#jina_la_halmashauri').val();

    if(!directionsService) {
        directionsService = new google.maps.DirectionsService();
    }

    // Remove previous directions from map
    if(directionsDisplay) {
        directionsDisplay.setMap(null);
    }

    directionsDisplay = new google.maps.DirectionsRenderer({
        draggable: true,
        markerOptions: { draggable: false }
    });
    
    directionsDisplay.setMap(map);

    directionsDisplay.addListener('directions_changed', function() {
        getDistanceAndTime(directionsDisplay.getDirections());
    });

    directionsService.route({
        origin: startAddress,
        destination: destinationAddress,
        travelMode: $('#travelMode').val(),
        provideRouteAlternatives: false		
    }, function (response, status) {
        $('#status').text("");

        if (status === 'OK') {
            directionsDisplay.setDirections(response);
            setTimeout(function() { map.fitBounds(response.routes[0].bounds); }, 500);
            directionsDisplayed = true;
            getDistanceAndTime(response);
        } else {
		
		//Hapa ruhusu mtumiaji aingize umbali na muda		
            directionsDisplayed = false;
            //distanceInKM = 0;
            //durationInHours = 0;
			//$('#mapModal').modal('hide');
            //alert('Imeshindikana kuonesha uelekeo: ' + status);
			alert('Imeshindikana kutafuta umbali na muda!');
			$('#mapModal').modal('hide');
			$('#header_manual_umbaliMuda').html($('#jina_la_halmashauri').val());
			$('#manual_umbaliMuda').modal('show');
		//end kuingiza umbali na muda
        }
    });
}

function getDistanceAndTime(response) {
    var route = response.routes[0].legs[0];
    var distanceInMeters = route.distance.value;
    var timeInSeconds = route.duration.value;
    distanceInKM = distanceInMeters / 1000;
    durationInHours = timeInSeconds / 60 / 60;
	
	//RELEASE 2
	$('#popupDistance').text("Km " + distanceInKM.toFixed(2));
    $('#popupDuration').text("Masaa " + durationInHours.toFixed(2));
}

function saveInFormFields() {
    $('#distance').val(distanceInKM.toFixed(2));
    $('#duration').val(durationInHours.toFixed(2));
	selectedMode = $('#travelMode').val();
	/*destinationAddress = $('#jina_la_halmashauri').val(); //ongeza
	$('#dest_add').val(destinationAddress); // Ongeza*/
	/*$('#kwenda_div').html($('#jina_la_halmashauri').val(), $('#distance').val(distanceInKM.toFixed(2))); // Ongeza*/
	/*$('#kwenda_div').append($('#jina_la_halmashauri').val()).append('&nbsp;(Km&nbsp;').append($('#distance').val()).append(',&nbsp;Masaa&nbsp;').append($('#duration').val()).append(')'); // Ongeza*/
	$('#kwenda_div').html('(Km&nbsp;'+$('#distance').val()+',&nbsp;Masaa&nbsp;'+$('#duration').val()+')'); // Ongeza
}

function cancel() {
    $('#travelMode').val(selectedMode);
	$('#distance').val('');
    $('#duration').val('');
	$('#kwenda_div').html(''); // Ongeza
}

function validate() { //Pending kwa muda
    if(destinationAddress === "") {
        alert('Tafadhali andika jina la halmashauri..');
        $('#jina_la_halmashauri').focus();
        return false;
    }

    return true;
}