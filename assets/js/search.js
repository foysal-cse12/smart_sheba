/*function check(str) {
  //alert('it works');
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  if (str.length == 0) { 
    document.getElementById("search").innerHTML = "";
    return;
  }


  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      
      document.getElementById("search").innerHTML = xhttp.responseText;

    }
  };

  xhttp.open("GET","http://localhost/smart_sheba/home/search/"+str, true);
  xhttp.send(); 
}*/


