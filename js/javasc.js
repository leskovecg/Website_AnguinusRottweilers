/*     navigacija                */
/*     navigacija                */
/*     navigacija                */
/*     navigacija                */
/*     navigacija                */
function myFunction() {
var x = document.getElementById("navigacijaa");
if (x.className === "navigacija") {
  x.className += " responsive";
} else {
  x.className = "navigacija";
}
}



/*      povecava slik     */
/*      povecava slik     */
/*      povecava slik     */
/*      povecava slik     */
/*      povecava slik     */
/*      povecava slik     */
function onClick(element) {
  document.getElementById("img").src = element.src;
  document.getElementById("modal").style.display = "block";
}



/*      tabs     */
/*      tabs     */
/*      tabs     */
/*      tabs     */
/*      tabs     */
/*      tabs     */
/*      tabs     */

/*tu sem si pomagal z w3schoolsom https://www.w3schools.com/howto/howto_js_tabs.asp*/
function openPage(evt, neki) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(neki).style.display = "block";
  evt.currentTarget.className += " active";
}

// dobi element z id="defaultOpen" in klikni nanj
document.getElementById("defaultOpen").click();




/*spremeni barvo div-a*/
/*spremeni barvo div-a*/
/*spremeni barvo div-a*/
/*spremeni barvo div-a*/
/*spremeni barvo div-a*/
/*spremeni barvo div-a*/
  function spremenibarvo1(){
    document.getElementById('anguinus2').style.backgroundColor="#ffc266";

  }

  function spremenibarvo2(){
    document.getElementById('anguinus3').style.backgroundColor="#ffc266";

  }

/*spremeni barvo ozadja po intervalih*/
/*spremeni barvo ozadja po intervalih*/
/*spremeni barvo ozadja po intervalih*/
/*spremeni barvo ozadja po intervalih*/
/*spremeni barvo ozadja po intervalih*/
function sprbarve(){
setInterval(
function () {
  var randomColor = Math.floor(Math.random()*16777215).toString(16);
  document.body.style.backgroundColor = "#"+randomColor;
},1000);
}
