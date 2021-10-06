
	<link rel="stylesheet" href="http://localhost/user/datepicker/themes/base/jquery.ui.allTTTTTTTTTTTTTTTTTTT.css">
	<link rel="stylesheet" href="http://localhost/user/datepicker/themes/base/jquery-ui.min.css">
	
	<script src="http://localhost/js/jquery-3.3.1.min.js"></script> 	
	<script src="http://localhost/user/datepicker/ui/jquery.ui.core.js"></script>
	<script src="http://localhost/user/datepicker/ui/jquery.ui.widget.js"></script>
	
	<script src="http://localhost/js/jquery-ui.min.js"></script> 
	<script src="http://localhost/user/datepicker/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="http://localhost/user/datepicker/demos/demosTTTTTTTTTTTTTTTTTTT.css">
	<script>
	$(function() {
	$.datepicker.setDefaults({dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,numberOfMonths: 1,constrainInput:true,});
		$( "#masurufu_ya_tarehe, .chagua_tarehe" ).datepicker({
			
		});
		
		$( "#tarehe_ya_kuondoka_1" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_1" ).datepicker( "option", "minDate", selectedDate );
				}
		});
		
		<!-- RUDIA 1-->
		
		$( "#tarehe_ya_kufika_1" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_1 = parseInt($("#gharama_nyingine_units_1").val());
 		 		var date1= $('#tarehe_ya_kufika_1').datepicker('getDate', '+siku_za_kulala_1d'); 
			    date1.setDate(date1.getDate()+siku_za_kulala_1); 
			    $('#tarehe_ya_kuondoka_2').datepicker('setDate', date1);
			    $( "#tarehe_ya_kuondoka_2" ).datepicker( "option", {minDate: date1} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_1", function() {
			var siku_za_kulala_1 = parseInt($("#gharama_nyingine_units_1").val());
			var date1 = $('#tarehe_ya_kufika_1').datepicker('getDate', '+siku_za_kulala_1d'); 
			date1.setDate(date1.getDate()+siku_za_kulala_1); 
			$('#tarehe_ya_kuondoka_2').datepicker('setDate', date1);
			$( "#tarehe_ya_kuondoka_2" ).datepicker( "option", {minDate: date1} );
		});
		$('.add_chini_1').click(function() {
			var siku_za_kulala_1 = parseInt($("#gharama_nyingine_units_1").val());
			var date1 = $('#tarehe_ya_kufika_1').datepicker('getDate', '+siku_za_kulala_1d'); 
			date1.setDate(date1.getDate()+siku_za_kulala_1); 
			$('#tarehe_ya_kuondoka_2').datepicker('setDate', date1);
			$( "#tarehe_ya_kuondoka_2" ).datepicker( "option", {minDate: date1} );
			$('#tarehe_ya_kufika_2').datepicker('setDate', date1);
			$( "#tarehe_ya_kufika_2" ).datepicker( "option", {minDate: date1} );
		});		
		$( "#tarehe_ya_kuondoka_2" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_2" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_2" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 2-->
		
		$( "#tarehe_ya_kufika_2" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_2 = parseInt($("#gharama_nyingine_units_2").val());
 		 		var date2= $('#tarehe_ya_kufika_2').datepicker('getDate', '+siku_za_kulala_2d'); 
			    date2.setDate(date2.getDate()+siku_za_kulala_2); 
			    $('#tarehe_ya_kuondoka_3').datepicker('setDate', date2);
			    $( "#tarehe_ya_kuondoka_3" ).datepicker( "option", {minDate: date2} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_2", function() {
			var siku_za_kulala_2 = parseInt($("#gharama_nyingine_units_2").val());
			var date2 = $('#tarehe_ya_kufika_2').datepicker('getDate', '+siku_za_kulala_2d'); 
			date2.setDate(date2.getDate()+siku_za_kulala_2); 
			$('#tarehe_ya_kuondoka_3').datepicker('setDate', date2);
			$( "#tarehe_ya_kuondoka_3" ).datepicker( "option", {minDate: date2} );
		});
		$('.add_chini_2').click(function() {
			var siku_za_kulala_2 = parseInt($("#gharama_nyingine_units_2").val());
			var date2 = $('#tarehe_ya_kufika_2').datepicker('getDate', '+siku_za_kulala_2d'); 
			date2.setDate(date2.getDate()+siku_za_kulala_2); 
			$('#tarehe_ya_kuondoka_3').datepicker('setDate', date2);
			$( "#tarehe_ya_kuondoka_3" ).datepicker( "option", {minDate: date2} );
			$('#tarehe_ya_kufika_3').datepicker('setDate', date2);
			$( "#tarehe_ya_kufika_3" ).datepicker( "option", {minDate: date2} );
		});		
		$( "#tarehe_ya_kuondoka_3" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_3" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_3" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 3-->
		
		$( "#tarehe_ya_kufika_3" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_3 = parseInt($("#gharama_nyingine_units_3").val());
 		 		var date3= $('#tarehe_ya_kufika_3').datepicker('getDate', '+siku_za_kulala_3d'); 
			    date3.setDate(date3.getDate()+siku_za_kulala_3); 
			    $('#tarehe_ya_kuondoka_4').datepicker('setDate', date3);
			    $( "#tarehe_ya_kuondoka_4" ).datepicker( "option", {minDate: date3} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_3", function() {
			var siku_za_kulala_3 = parseInt($("#gharama_nyingine_units_3").val());
			var date3 = $('#tarehe_ya_kufika_3').datepicker('getDate', '+siku_za_kulala_3d'); 
			date3.setDate(date3.getDate()+siku_za_kulala_3); 
			$('#tarehe_ya_kuondoka_4').datepicker('setDate', date3);
			$( "#tarehe_ya_kuondoka_4" ).datepicker( "option", {minDate: date3} );
		});
		$('.add_chini_3').click(function() {
			var siku_za_kulala_3 = parseInt($("#gharama_nyingine_units_3").val());
			var date3 = $('#tarehe_ya_kufika_3').datepicker('getDate', '+siku_za_kulala_3d'); 
			date3.setDate(date3.getDate()+siku_za_kulala_3); 
			$('#tarehe_ya_kuondoka_4').datepicker('setDate', date3);
			$( "#tarehe_ya_kuondoka_4" ).datepicker( "option", {minDate: date3} );
			$('#tarehe_ya_kufika_4').datepicker('setDate', date3);
			$( "#tarehe_ya_kufika_4" ).datepicker( "option", {minDate: date3} );
		});		
		$( "#tarehe_ya_kuondoka_4" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_4" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_4" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 4-->
		
		$( "#tarehe_ya_kufika_4" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_4 = parseInt($("#gharama_nyingine_units_4").val());
 		 		var date4= $('#tarehe_ya_kufika_4').datepicker('getDate', '+siku_za_kulala_4d'); 
			    date4.setDate(date4.getDate()+siku_za_kulala_4); 
			    $('#tarehe_ya_kuondoka_5').datepicker('setDate', date4);
			    $( "#tarehe_ya_kuondoka_5" ).datepicker( "option", {minDate: date4} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_4", function() {
			var siku_za_kulala_4 = parseInt($("#gharama_nyingine_units_4").val());
			var date4 = $('#tarehe_ya_kufika_4').datepicker('getDate', '+siku_za_kulala_4d'); 
			date4.setDate(date4.getDate()+siku_za_kulala_4); 
			$('#tarehe_ya_kuondoka_5').datepicker('setDate', date4);
			$( "#tarehe_ya_kuondoka_5" ).datepicker( "option", {minDate: date4} );
		});
		$('.add_chini_4').click(function() {
			var siku_za_kulala_4 = parseInt($("#gharama_nyingine_units_4").val());
			var date4 = $('#tarehe_ya_kufika_4').datepicker('getDate', '+siku_za_kulala_4d'); 
			date4.setDate(date4.getDate()+siku_za_kulala_4); 
			$('#tarehe_ya_kuondoka_5').datepicker('setDate', date4);
			$( "#tarehe_ya_kuondoka_5" ).datepicker( "option", {minDate: date4} );
			$('#tarehe_ya_kufika_5').datepicker('setDate', date4);
			$( "#tarehe_ya_kufika_5" ).datepicker( "option", {minDate: date4} );
		});		
		$( "#tarehe_ya_kuondoka_5" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_5" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_5" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 5-->
		
		$( "#tarehe_ya_kufika_5" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_5 = parseInt($("#gharama_nyingine_units_5").val());
 		 		var date5= $('#tarehe_ya_kufika_5').datepicker('getDate', '+siku_za_kulala_5d'); 
			    date5.setDate(date5.getDate()+siku_za_kulala_5); 
			    $('#tarehe_ya_kuondoka_6').datepicker('setDate', date5);
			    $( "#tarehe_ya_kuondoka_6" ).datepicker( "option", {minDate: date5} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_5", function() {
			var siku_za_kulala_5 = parseInt($("#gharama_nyingine_units_5").val());
			var date5 = $('#tarehe_ya_kufika_5').datepicker('getDate', '+siku_za_kulala_5d'); 
			date5.setDate(date5.getDate()+siku_za_kulala_5); 
			$('#tarehe_ya_kuondoka_6').datepicker('setDate', date5);
			$( "#tarehe_ya_kuondoka_6" ).datepicker( "option", {minDate: date5} );
		});
		$('.add_chini_5').click(function() {
			var siku_za_kulala_5 = parseInt($("#gharama_nyingine_units_5").val());
			var date5 = $('#tarehe_ya_kufika_5').datepicker('getDate', '+siku_za_kulala_5d'); 
			date5.setDate(date5.getDate()+siku_za_kulala_5); 
			$('#tarehe_ya_kuondoka_6').datepicker('setDate', date5);
			$( "#tarehe_ya_kuondoka_6" ).datepicker( "option", {minDate: date5} );
			$('#tarehe_ya_kufika_6').datepicker('setDate', date5);
			$( "#tarehe_ya_kufika_6" ).datepicker( "option", {minDate: date5} );
		});		
		$( "#tarehe_ya_kuondoka_6" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_6" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_6" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 6-->
		
		$( "#tarehe_ya_kufika_6" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_6 = parseInt($("#gharama_nyingine_units_6").val());
 		 		var date6= $('#tarehe_ya_kufika_6').datepicker('getDate', '+siku_za_kulala_6d'); 
			    date6.setDate(date6.getDate()+siku_za_kulala_6); 
			    $('#tarehe_ya_kuondoka_7').datepicker('setDate', date6);
			    $( "#tarehe_ya_kuondoka_7" ).datepicker( "option", {minDate: date6} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_6", function() {
			var siku_za_kulala_6 = parseInt($("#gharama_nyingine_units_6").val());
			var date6 = $('#tarehe_ya_kufika_6').datepicker('getDate', '+siku_za_kulala_6d'); 
			date6.setDate(date6.getDate()+siku_za_kulala_6); 
			$('#tarehe_ya_kuondoka_7').datepicker('setDate', date6);
			$( "#tarehe_ya_kuondoka_7" ).datepicker( "option", {minDate: date6} );
		});
		$('.add_chini_6').click(function() {
			var siku_za_kulala_6 = parseInt($("#gharama_nyingine_units_6").val());
			var date6 = $('#tarehe_ya_kufika_6').datepicker('getDate', '+siku_za_kulala_6d'); 
			date6.setDate(date6.getDate()+siku_za_kulala_6); 
			$('#tarehe_ya_kuondoka_7').datepicker('setDate', date6);
			$( "#tarehe_ya_kuondoka_7" ).datepicker( "option", {minDate: date6} );
			$('#tarehe_ya_kufika_7').datepicker('setDate', date6);
			$( "#tarehe_ya_kufika_7" ).datepicker( "option", {minDate: date6} );
		});		
		$( "#tarehe_ya_kuondoka_7" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_7" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_7" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 7-->
		
		$( "#tarehe_ya_kufika_7" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_7 = parseInt($("#gharama_nyingine_units_7").val());
 		 		var date7= $('#tarehe_ya_kufika_7').datepicker('getDate', '+siku_za_kulala_7d'); 
			    date7.setDate(date7.getDate()+siku_za_kulala_7); 
			    $('#tarehe_ya_kuondoka_8').datepicker('setDate', date7);
			    $( "#tarehe_ya_kuondoka_8" ).datepicker( "option", {minDate: date7} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_7", function() {
			var siku_za_kulala_7 = parseInt($("#gharama_nyingine_units_7").val());
			var date7 = $('#tarehe_ya_kufika_7').datepicker('getDate', '+siku_za_kulala_7d'); 
			date7.setDate(date7.getDate()+siku_za_kulala_7); 
			$('#tarehe_ya_kuondoka_8').datepicker('setDate', date7);
			$( "#tarehe_ya_kuondoka_8" ).datepicker( "option", {minDate: date7} );
		});
		$('.add_chini_7').click(function() {
			var siku_za_kulala_7 = parseInt($("#gharama_nyingine_units_7").val());
			var date7 = $('#tarehe_ya_kufika_7').datepicker('getDate', '+siku_za_kulala_7d'); 
			date7.setDate(date7.getDate()+siku_za_kulala_7); 
			$('#tarehe_ya_kuondoka_8').datepicker('setDate', date7);
			$( "#tarehe_ya_kuondoka_8" ).datepicker( "option", {minDate: date7} );
			$('#tarehe_ya_kufika_8').datepicker('setDate', date7);
			$( "#tarehe_ya_kufika_8" ).datepicker( "option", {minDate: date7} );
		});		
		$( "#tarehe_ya_kuondoka_8" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_8" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_8" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 8-->
		
		$( "#tarehe_ya_kufika_8" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_8 = parseInt($("#gharama_nyingine_units_8").val());
 		 		var date8= $('#tarehe_ya_kufika_8').datepicker('getDate', '+siku_za_kulala_8d'); 
			    date8.setDate(date8.getDate()+siku_za_kulala_8); 
			    $('#tarehe_ya_kuondoka_9').datepicker('setDate', date8);
			    $( "#tarehe_ya_kuondoka_9" ).datepicker( "option", {minDate: date8} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_8", function() {
			var siku_za_kulala_8 = parseInt($("#gharama_nyingine_units_8").val());
			var date8 = $('#tarehe_ya_kufika_8').datepicker('getDate', '+siku_za_kulala_8d'); 
			date8.setDate(date8.getDate()+siku_za_kulala_8); 
			$('#tarehe_ya_kuondoka_9').datepicker('setDate', date8);
			$( "#tarehe_ya_kuondoka_9" ).datepicker( "option", {minDate: date8} );
		});
		$('.add_chini_8').click(function() {
			var siku_za_kulala_8 = parseInt($("#gharama_nyingine_units_8").val());
			var date8 = $('#tarehe_ya_kufika_8').datepicker('getDate', '+siku_za_kulala_8d'); 
			date8.setDate(date8.getDate()+siku_za_kulala_8); 
			$('#tarehe_ya_kuondoka_9').datepicker('setDate', date8);
			$( "#tarehe_ya_kuondoka_9" ).datepicker( "option", {minDate: date8} );
			$('#tarehe_ya_kufika_9').datepicker('setDate', date8);
			$( "#tarehe_ya_kufika_9" ).datepicker( "option", {minDate: date8} );
		});		
		$( "#tarehe_ya_kuondoka_9" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_9" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_9" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		<!-- RUDIA 9-->
		
		$( "#tarehe_ya_kufika_9" ).datepicker({
		
				onClose: function(selectedDate) {
				var siku_za_kulala_9 = parseInt($("#gharama_nyingine_units_9").val());
 		 		var date9= $('#tarehe_ya_kufika_9').datepicker('getDate', '+siku_za_kulala_9d'); 
			    date9.setDate(date9.getDate()+siku_za_kulala_9); 
			    $('#tarehe_ya_kuondoka_10').datepicker('setDate', date9);
			    $( "#tarehe_ya_kuondoka_10" ).datepicker( "option", {minDate: date9} );
				}
		
		});
		$(document).on("keyup", "#gharama_nyingine_units_9", function() {
			var siku_za_kulala_9 = parseInt($("#gharama_nyingine_units_9").val());
			var date9 = $('#tarehe_ya_kufika_9').datepicker('getDate', '+siku_za_kulala_9d'); 
			date9.setDate(date9.getDate()+siku_za_kulala_9); 
			$('#tarehe_ya_kuondoka_10').datepicker('setDate', date9);
			$( "#tarehe_ya_kuondoka_10" ).datepicker( "option", {minDate: date9} );
		});
		$('.add_chini_9').click(function() {
			var siku_za_kulala_9 = parseInt($("#gharama_nyingine_units_9").val());
			var date9 = $('#tarehe_ya_kufika_9').datepicker('getDate', '+siku_za_kulala_9d'); 
			date9.setDate(date9.getDate()+siku_za_kulala_9); 
			$('#tarehe_ya_kuondoka_10').datepicker('setDate', date9);
			$( "#tarehe_ya_kuondoka_10" ).datepicker( "option", {minDate: date9} );
			$('#tarehe_ya_kufika_10').datepicker('setDate', date9);
			$( "#tarehe_ya_kufika_10" ).datepicker( "option", {minDate: date9} );
		});		
		$( "#tarehe_ya_kuondoka_10" ).datepicker({
				onClose: function( selectedDate ) {
				$( "#tarehe_ya_kufika_10" ).datepicker( "option", "minDate", selectedDate );
				}			
		});
		$( "#tarehe_ya_kufika_10" ).datepicker({							
		});
			
		<!-- END RUDIS -->
		
		
	});
	</script>
