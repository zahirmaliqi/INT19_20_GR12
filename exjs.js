function myFunction() {
  var str = document.getElementById("replace").innerHTML; 
  var res = str.replace(" United Kingdom", "Birmingham");
  document.getElementById("replace").innerHTML = res;
}