$(document).ready(function () {
	 
	$('.hifadhi_manual_umbaliMuda').click(function() {
			//if($('#jina_la_halmashauri').val().trim() === "") {
				//alert('Tafadhali andika jina la halmashauri..');
				//$('#jina_la_halmashauri').focus();
			   // return;
		   // }
		   // openModal();
			if($('#manual_umbali').val() === ""){
			$('#manual_umbali').focus();
			return true;
			}
			if($('#manual_muda').val() === ""){
			$('#manual_muda').focus();
			return true;
			}
			$('#distance').val($('#manual_umbali').val());
    		$('#duration').val($('#manual_muda').val());
			$('#kwenda_div').html('(Km&nbsp;'+$('#distance').val()+',&nbsp;Masaa&nbsp;'+$('#duration').val()+')'); // Ongeza
			$('#manual_umbaliMuda').modal('hide');
			return false;
	});	 
	 
	 
});

function cancel_manual_umbaliMuda() {
	$('#manual_umbali').val('');
	$('#manual_muda').val('');
	$('#distance').val('');
    $('#duration').val('');
	//$('#jina_la_halmashauri').val('');
	$('#kwenda_div').html(''); // Ongeza
	//$('#jina_la_halmashauri').focus();
	//return;
}
