







	$('#shipping').change(function(){
		 if(this.checked){
			document.getElementById("adres").style.display='block';
		}else{
		   document.getElementById("adres").style.display='none';
		}
	});
	
	
	


$('.bt').bind('click', function(){
  
  
  var ms=document.getElementById("count_meet_st").innerHTML;
  var ms_name="Chir-Chir с мясом обычный ";
  
  var md=document.getElementById("count_meet_double").innerHTML;
  var md_name="Chir-Chir с мясом двойной ";
  
  var cs=document.getElementById("count_chees_st").innerHTML;
  var cs_name="Chir-Chir с сыром обычный ";
  
  var cd=document.getElementById("count_chees_double").innerHTML;
  var cd_name="Chir-Chir с сыром двойной ";
  
  var mcs=document.getElementById("count_mc_st").innerHTML;
  var mcs_name="Chir-Chir с мясом и сыром обычный ";
  
  var mcd=document.getElementById("count_mc_double").innerHTML;
  var mcd_name="Chir-Chir с мясом и сыром двойной ";
  
  var res="";
  var count_rows=0;
  
 var res1=`${ms_name} ${ms} шт `;
 if (ms>0) {res+=res1+'\n'; count_rows++;}
 
 var res2=`${md_name} ${md} шт `;
 if (md>0) {res+=res2+'\n'; count_rows++;}
 
 var res3=`${cs_name} ${cs} шт `;
 if (cs>0){ res+=res3+'\n'; count_rows++;}
 
 var res4=`${cd_name} ${cd} шт `;
 if (cd>0) {res+=res4+'\n'; count_rows++;}
 
 var res5=`${mcs_name} ${mcs} шт `;
 if (mcs>0) {res+=res5+'\n'; count_rows++;}
 
 var res6=`${mcd_name} ${mcd} шт `;
 if (mcd>0) {res+=res6+'\n'; count_rows++;}

  document.getElementById("cart").rows=count_rows+2;
 document.getElementById("cart").value=res;
  
  
  
  
});
