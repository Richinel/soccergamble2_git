<html> 
<body> 
<script type="text/javascript"> 
<!-- Javascript functie !--> 
function ZoekFunctie(str) 
{ 
var httpxml; 
try 
  { 
  // Firefox, Opera 8.0+, Safari 
  httpxml=new XMLHttpRequest(); 
  } 
catch (e) 
  { 
  // Internet Explorer 
  try 
    { 
    httpxml=new ActiveXObject("Msxml2.XMLHTTP"); 
    } 
  catch (e) 
    { 
    try 
      { 
      httpxml=new ActiveXObject("Microsoft.XMLHTTP"); 
      } 
    catch (e) 
      { 
      alert("Your browser does not support AJAX!"); 
      return false; 
      } 
    } 
  } 
function stateChanged()  
    { 
    if(httpxml.readyState==4) 
      { 
document.getElementById("DataDiv").innerHTML=httpxml.responseText; 
document.getElementById("msg").style.display='none'; 

      } 
    } 
    /* php bestand importeren*/ 
    var url="livesearch.php"; 
url=url+"?txt="+str; 
url=url+"&sid="+Math.random(); 
httpxml.onreadystatechange=stateChanged; 
httpxml.open("GET",url,true); 
httpxml.send(null); 
document.getElementById("msg").innerHTML="Please Wait ..."; 
document.getElementById("msg").style.display='inline'; 

  } 
</script> 
</head> 
<body> 

<form name="form"> 
<input type="text" onkeyup="ZoekFunctie(this.value);" name="naam" /> 
Typ een letter om de records in de database te lezen. 
<div id="DataDiv"></div> 
</form> 

</body> 
</html> 