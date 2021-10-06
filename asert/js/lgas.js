var multiple=[
			  
			 //PREPARE THIS FOR GOOGLE MAP
			 
			  "Arusha City Centre, Arusha |lga|70|2001|",
			  "Ngorongoro Conservation Area |lga|70|3007|",
			  "Mwanza City Council |lga|81|2012|",
			  "Moshi Urban |lga|75|2009|",
			  "Mbeya Town Council City Hall, Mbeya |lga|78|2007|",
			  "Dodoma City Council, Dodoma |lga|72|2003|",
			  "Tanga City Hall, Independence Avenue, Tanga |lga|86|2018|",
			  "Mtwara Region |lga|80|2010|",
			  "Kigoma Ujiji Municipal Council, Kigoma |lga|74|2005|",
			  "Bukoba Urban |lga|87|2002|",			  
			  "Ruvuma Regional office, A19, Songea |lga|82|2015|",
			  "Tarime District |lga|77|3036|",
			  "Dar es Salaam City Council, 1, Morogoro Rd, Dar es Salaam |lga|88|2020|",
			  /* 
			  //KILIMANJARO			  
			  "Moshi MC, Kilimanjaro |lga|75|2009|",			  
			  "Moshi DC, Kilimanjaro |lga|75|3025|",
			  "Rombo DC, Kilimanjaro |lga|75|2043|",
			  "Hai DC, Kilimanjaro |lga|75|3024|",
			  "Same  DC, Kilimanjaro |lga|75|3027|",
			  "Mwanga DC, Kilimanjaro |lga|75|3028|",
			  "Siha DC, Kilimanjaro |lga|75|3103|",
			  
			  //MWANZA			  
			  "Mwanza CC, Mwanza |lga|81|2012|",			  
			  "Ilemela MC, Mwanza |lga|81|2032|",
			  "Ukerewe DC, Mwanza |lga|81|3050|",
			  "Sengerema DC, Mwanza |lga|81|3051|",
			  "Kwimba DC, Mwanza |lga|81|3053|",
			  "Magu DC, Mwanza |lga|81|3054|",
			  "Misungwi DC, Mwanza|lga|81|3089|",
			  "Buchosa DC, Mwanza |lga|81|3151|",
			 
			  //DODOMA		  
			  "Dodoma CC, Dodoma |lga|72|2003|",			  
			  "Kondoa TC, Dodoma |lga|72|2043|",
			  "Kondoa DC, Dodoma |lga|72|3014|",
			  "Mpwapwa DC, Dodoma |lga|72|3015|",
			  "Kongwa DC, Dodoma |lga|72|3086|",
			  "Bahi DC, Dodoma |lga|72|3101|",
			  "Chamwino DC, Dodoma |lga|72|3102|",
			  "Chemba DC, Dodoma |lga|72|3109|",
			  */
			 ],

SmartMultiFiled=function(){var A,N,I,E;function R(){var A,N,I;if(A=$(this).data("type"),N=function(A){var N;switch(A){case"jina_la_halmashauri":N=0;break;case"catID":N=1;break;case"regID":N=2;break;case"lgaID":N=3}return N}(A),I=$(this),void 0===N)return!1;$(this).autocomplete({source:function(A,I){var E=$.map(multiple,function(A){var I=A.split("|");return{label:I[N],value:I[N],data:A}});A.term,I($.ui.autocomplete.filter(E,A.term))},autoFocus:!0,minLength:0,select:function(A,N){var E,R;R=S(I),E=N.item.data.split("|"),$("#jina_la_halmashauri").val(E[0]),$("#catID").val(E[1]),$("#regID").val(E[2]),$("#lgaID").val(E[3])}})}
function S(A){var N;return(N=A.attr("id").split("_"))[N.length-1]}function L(){E.append((N+="",N+='',N+=""))}
return I=$("#addNew"),{init:function(){I.on("click",L),$(document).on("focus",".autocomplete_txt",R)}}}();

$(document).ready(function(){SmartMultiFiled.init()});