var bitbtn = document.getElementById("bitbtn");
var bitcon = document.getElementById("bitcon");


var ethbn = document.getElementById("ethbtn");
var ethcon = document.getElementById("ethcon");



bitbtn.addEventListener("click", function pop(){
    bitcon.style.display="flex";
    ethcon.style.display="none";
});

ethbn.addEventListener("click", function pop(){
    bitcon.style.display="none";
    ethcon.style.display="flex";
});





function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copied: " + copyText.value;
  }
  
  function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copy to clipboard";
  }




  function myFunction2() {
    var copyText = document.getElementById("myinput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    
    var tooltip = document.getElementById("mytooltip");
    tooltip.innerHTML = "Copied: " + copyText.value;
  }
  
  function outFunc2() {
    var tooltip = document.getElementById("mytooltip");
    tooltip.innerHTML = "Copy to clipboard";
  }