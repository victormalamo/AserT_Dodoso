var subject_file=[
			  			 			 
			  "SFN/REGROW/1230|Jina_la_mradi_1|1001|nyingine_weka_hapa_1|",
			  "SFN/TAWA/1221|Jina_la_mradi_2|1008|nyingine_weka_hapa_2|",
			  "SFN/NGORONGORO/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_3|",
			  "SFN/CBGRAU/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_4|",
			  "SFN/SNRM/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_3|",
			  "SFN/EFNRBC/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_3|",
			  "SFN/CBFB/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_3|",
			  "SFN/NRM-LED/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_3|",
			  "SFN/FORVAC/9081|Jina_la_mradi_3|2001|nyingine_weka_hapa_3|",
			 ],

SmartSubjectFile=function(){var A,N,I,E;function R(){var A,N,I;if(A=$(this).data("type"),N=function(A){var N;switch(A){case"subject_file_number":N=0;break;case"jina_la_mradi":N=1;break;case"idara_taasisi_ulipo":N=2;break;case"nyingine_weka_hapa":N=3}return N}(A),I=$(this),void 0===N)return!1;$(this).autocomplete({source:function(A,I){var E=$.map(subject_file,function(A){var I=A.split("|");return{label:I[N],value:I[N],data:A}});A.term,I($.ui.autocomplete.filter(E,A.term))},autoFocus:!0,minLength:0,select:function(A,N){var E,R;R=S(I),E=N.item.data.split("|"),$("#subject_file_number").val(E[0]),$("#jina_la_mradi").val(E[1]),$("#idara_taasisi_ulipo").val(E[2]),$("#nyingine_weka_hapa").val(E[3])}})}
function S(A){var N;return(N=A.attr("id").split("_"))[N.length-1]}function L(){E.append((N+="",N+='',N+=""))}
return I=$("#addNew"),{init:function(){I.on("click",L),$(document).on("focus",".autocomplete_txt",R)}}}();

$(document).ready(function(){SmartSubjectFile.init()});