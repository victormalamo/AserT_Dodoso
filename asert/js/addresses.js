var multiple=[
			  "Mwanza City Council, Mwanza |lga|83|3025|",
			  "Moshi Urban |lga|75|2009|",
			  "Mbeya Town Council City Hall, Mbeya |lga|61|3026|",
			  "Dodoma City Council, Dodoma |lga|72|2003|",
			  "Tanga City Hall, Independence Avenue, Tanga |lga|75|3097|",
			  "Mtwara Region |lga|95|3028|",
			  "Kigoma Ujiji Municipal Council, Kigoma |lga|75|5024|",
			  "Bukoba Urban |lga|52|3103|",			  
			  "Ruvuma Regional office, A19, Songea |lga|67|273|",
			  "Tarime District |lga|72|2043|",
			  "Arusha City Centre, Arusha |lga|78|000|",
			  "Mpwapwa District |lga|72|220|",
			  "Dar es Salaam City Council, 1, Morogoro Rd, Dar es Salaam |lga|23|3033|",
			 ],

SmartMultiFiled=function(){var A,N,I,E;function R(){var A,N,I;if(A=$(this).data("type"),N=function(A){var N;switch(A){case"jina_la_halmashauri":N=0;break;case"catID":N=1;break;case"regID":N=2;break;case"lgaID":N=3}return N}(A),I=$(this),void 0===N)return!1;$(this).autocomplete({source:function(A,I){var E=$.map(multiple,function(A){var I=A.split("|");return{label:I[N],value:I[N],data:A}});A.term,I($.ui.autocomplete.filter(E,A.term))},autoFocus:!0,minLength:0,select:function(A,N){var E,R;R=S(I),E=N.item.data.split("|"),$("#jina_la_halmashauri").val(E[0]),$("#catID").val(E[1]),$("#regID").val(E[2]),$("#lgaID").val(E[3])}})}
function S(A){var N;return(N=A.attr("id").split("_"))[N.length-1]}function L(){E.append((N+="",N+='',N+=""))}
return I=$("#addNew"),{init:function(){I.on("click",L),$(document).on("focus",".autocomplete_txt",R)}}}();

$(document).ready(function(){SmartMultiFiled.init()});