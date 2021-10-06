$(document).ready(function() {
        BindControls();
    });

    function BindControls() {
        var  vipimo = ['Jumla', 
            'Watu', 
            'Siku', 
            'Lita', 
            'Idadi',
            'Chupa'];
		var  vipimo_2 = [
			'Siku', 
            'Lita'
			];

        $('.kipimo').autocomplete({
            source: vipimo,
            minLength: 0,
            scroll: true
        }).focus(function() {
            $(this).autocomplete("search", "");
        });
		
		$('.second_kipimo').autocomplete({
            source: vipimo_2,
            minLength: 0,
            scroll: true
        }).focus(function() {
            $(this).autocomplete("search", "");
        });
    }
