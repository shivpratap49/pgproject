
document.getElementById("specificSizeSelectn").addEventListener("change", populate);
var s1=document.getElementById("specificSizeSelectn");
  var s2=document.getElementById("specificSizeSelecta");
function populate(){
  
  
  s2.innerHTML="";
  
  if(s1.value=="driver")
  {
    var optionArray=['Head Driver|Head Driver','Senior Driver|Senior Driver','Junior Driver|Junior Driver','all|All'];
  }
 else if(s1.value=="revenue")
 {
    var optionArray=['Revenue Inspector|REVENUE INSPECTOR','Revenue Supervisor|REVENUE SUPERVISOR','AMIN|AMIN','Assistant Revenue Inspector|ASSISTANT REVENUE INSPECTOR','all|All'];
  }
  else if(s1.value=="ministry")
  {
    var optionArray=['Section Officer|SECTION OFFICERS ','Senior Revenue Assistant|SENIOR REVENUE ASSISTANTS ','Junior Revenue Assistant|JUNIOR REVENUE ASSISTANTS','all|All'];
  }
  for(var option in optionArray)
{
var pair=optionArray[option].split("|");
var newoption=document.createElement("option");
newoption.value=pair[0];
newoption.innerHTML=pair[1];
s2.options.add(newoption);
}
}

