$(document).ready(function () {

 	var category = 'lga';
	//Detect changes in lgaID
	////////$(function() {
		///////$('body').on('change', 'input[name="lgaID"]', function() {
		////////alert("Hilooooo");
		///////});
		///////$('input[name="jina_la_halmashauri"]').on('change', function() {
		///////	$('input[name="lgaID"]').val($('#lgaID').val()).trigger('change');			
		//////});
	///////});
	///KAMA HALMASHAURI HAIPO KWENYE FROP DOWN INAMAANA the hidden lgaID, regID zitakuwa tupu zinapopitishwa kutoka kwenye lgas.js	
	$(function() {	
		var prevlga;
		//////////$('body').on('change', 'input[name="lgaID"]', function() {
		//////////alert("Huooooooooo");
		//////////});
		$('input[name="jina_la_halmashauri"]').focus(function() {
		prevlga = $('#lgaID').val(); //kabla ya kubadili
		}).on('change', function() {
			if(prevlga == $('#lgaID').val()){ //fananisha baada ya kubadili/ kama haijabadilika..eneo jipya!!!
			//////////$('input[name="lgaID"]').val($('#lgaID').val()).trigger('change');
			$('#selected_lgaID').val('');
			$('#header_eneoJipya').html($('#jina_la_halmashauri').val());
			$('#eneoJipya').modal('show');
			}			
		});
	}); 
	//End Detect changes in lgaID
	
	//$('#jina_la_halmashauri').change(function(){
	
	//if($('#lgaID').val().trim() === "") {
	//$('#header_eneoJipya').html($('#jina_la_halmashauri').val());
	//$('#eneoJipya').modal('show');
	//}		 	
	// });
	 
	 $('.eneo_jipya').click(function() {
		    if($('#jina_la_halmashauri').val().trim() === "") {
				alert('Tafadhali andika jina la halmashauri..');
				$('#jina_la_halmashauri').focus();
				return;
			}
	 	 	if($('#lgaID').val().trim() === "") {
            $('#header_eneoJipya').html($('#jina_la_halmashauri').val());
       		$('#eneoJipya').modal('show');
			//$('#jina_la_halmashauri').focus();
       		}
			//if($('#distance').val().trim() === "") {
            //$('#header_manual_umbaliMuda').html($('#jina_la_halmashauri').val());
       		//$('#manual_umbaliMuda').modal('show');
			//$('#jina_la_halmashauri').focus();
       		//}
     });
	 
	 
$('.hifadhi').click(function() {
        //if($('#jina_la_halmashauri').val().trim() === "") {
            //alert('Tafadhali andika jina la halmashauri..');
            //$('#jina_la_halmashauri').focus();
           // return;
       // }
       // openModal();
		if( !$('#selected_lgaID').val() ){
		$('#selected_lgaID').focus();
		return true;
		}
		$('#lgaID').val($('#selected_lgaID').val());
		$('#regID').val(''); //Futa regID iwapo mwanzoni ilikuwa imechaguliwa
		$('#catID').val(category);
		$('#eneoJipya').modal('hide');
		return false;
});	 

	 
});

//$(document).on('change', '#lgaID', function() {
//alert("lgaID imebadilika");
//});

//function savelgaID() {
	//if( !$('#selected_lgaID').val() ){
	//$('#selected_lgaID').focus();
	//return true;
	//}
    //$('#lgaID').val($('#selected_lgaID').val());
	//$('#catID').val(category);
	//$('#eneoJipya').modal('hide');
	//return false;
//}

function cancellgaID() {
	$('#lgaID').val('');
	$('#regID').val('');
	$('#catID').val('');
	$('#jina_la_halmashauri').val('');
	$('#kwenda_div').html($('#jina_la_halmashauri').val());
	//$('#jina_la_halmashauri').focus();
	//return;
}
