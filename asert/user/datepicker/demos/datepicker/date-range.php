
	<link rel="stylesheet" href="http://localhost/user/datepicker/themes/base/jquery.ui.allTTTTTTTTTTTTTTTTTTT.css">
	<link rel="stylesheet" href="http://localhost/user/datepicker/themes/base/jquery-ui.min.css">
	
	<script src="http://localhost/js/jquery-3.3.1.min.js"></script> 	
	<script src="http://localhost/user/datepicker/ui/jquery.ui.core.js"></script>
	<script src="http://localhost/user/datepicker/ui/jquery.ui.widget.js"></script>
	
	<script src="http://localhost/js/jquery-ui.min.js"></script> 
	<script src="http://localhost/user/datepicker/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="http://localhost/user/datepicker/demos/demosTTTTTTTTTTTTTTTTTTT.css">
	

<script>

function days() {
            var a = $("#sDate").datepicker('getDate').getTime(),
                b = $("#eDate").datepicker('getDate').getTime(),
                c = 24*60*60*1000,
                diffDays = Math.round(Math.abs((a - b)/(c)));
            $("#duration_safarini").val(diffDays)
}




$(document).ready(function () {
$.datepicker.setDefaults({dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,numberOfMonths: 1,constrainInput:true,});
        var selector = function (dateStr) {
            var d1 = $('#sDate').datepicker('getDate');
            var d2 = $('#eDate').datepicker('getDate');
            var diff = 1;
            if (d1 && d2) {
                diff = (Math.floor((d2.getTime() - d1.getTime()) / 86400000));// +1 ); // ms per day jumlisha na siku yenyewe
            }
            $('#duration_safarini').val(diff);
        }
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////$(function() {

		$( "#sDate" ).datepicker({
			altField: "#sDate",
			altFormat: "dd-mm-yy",
			defaultDate: "",
			changeMonth: true,
			numberOfMonths: 1,
			//maxDate:'+1m +10d',
            minDate: 0,
			onClose: function( selectedDate ) {
				$( "#eDate" ).datepicker( "option", "minDate", selectedDate );
			}
		});
	
		$( "#eDate" ).datepicker({
			altField: "#eDate",
			altFormat: "dd-mm-yy",
			defaultDate: "",
			changeMonth: true,
			numberOfMonths: 1,
			minDate: 0,
			//maxDate:'+1m +10d',
			//maxDate:'28d',
			onClose: function( selectedDate ) {
				$( "#sDate" ).datepicker( "option", "minDate", "maxDate", selectedDate );
			}
		});
		
		
	//////////////////////////////////////////////////////////////////////////////////////////////////////////});
	    $('#sDate,#eDate').change(selector)
        });
	</script>
