var h = 0;
function startTime() {
var today = new Date();
h = today.getHours();
var m = today.getMinutes();
var s = today.getSeconds();
m = checkTime(m);
s = checkTime(s);
document.getElementById('txt').innerHTML =
h + ":" + m;
var t = setTimeout(startTime, 500);
}
function checkTime(i) {
if (i < 10) {i = "0" + i};
return i;
}
var imageloc = "images/";
var currenttime = 0;
var imageNumber = 0;
function imgAr(n){
this.length = n;
for (var i = 1; i<=n;i++){
this[i] = ' '
}
}
image = new imgAr(5)
image[0] = 'pic1.jpg'
image[1] = 'pic2.jpg'
image[2] = 'pic3.jpg'
image[3] = 'pic4.jpg'
image[4] = 'pic5.jpg'
// image[5] = 'pic6.jpg'
// image[6] = 'pic7.jpg'
// image[7] = 'pic8.jpg'
// image[8] = 'pic9.jpg'
// image[9] = 'pic10.jpg'
// image[10] = 'pic11.jpg'
// image[11] = 'pic12.jpg'
// image[12] = 'pic13.jpg'
// image[13] = 'pic14.jpg'
// image[14] = 'pic15.jpg'

quote = new imgAr(5)
quote[0] = "Have Patience, All things are different in their own way"
quote[1] = "You are just perfect as the way you are"
quote[2] = "Light is easy to love, Show me your darkness"
quote[3] = "You are the designer of your life"
quote[4] = "Better to be salpped with truth than to be kissed with a lie"

var ran = 60/image.length
function randomImage(){
currenttime = new Date()
imageNumber= currenttime.getMinutes();
imageNumber = Math.floor(imageNumber/ran)
return(image[imageNumber])
}

var random = 60/quote.length
function randomQ(){
currenttime = new Date()
imageNumber= currenttime.getMinutes();
imageNumber = Math.floor(imageNumber/random)
return(quote[imageNumber])
}
document.write("<img src='" + imageloc + randomImage()+ "'>");
var r = randomQ();
$("document").ready(function(){
  $("p#quote").append(r);
})
//localStorage.setItem("nameAvailability", null)
//var nameAvailability = localStorage.getItem("nameAvailability")
function search(){
//when name is entered
//var nam = $("input#nametext").val();
var nameAvailability = localStorage.getItem("nameAvailability")
if(event.keyCode == 13 && nameAvailability != "true") {
var nam = $("input#nametext").val();
localStorage.setItem("name", nam)
$("document").ready(function(){
$("div#replace").hide();
});

var storename=localStorage.getItem("name")
localStorage.setItem("nameAvailability",true)

}
if(event.keyCode == 13 || nameAvailability == "true" ){
$("div#replace").hide();
replace();
}
}
function replace(){
var storename=localStorage.getItem("name")
if(h>=4 && h<=12){
  $("div#name").append("Good Morning, " + storename)
}
else if(h>12 && h<=16){
  $("div#name").append("Good Afternoon, "+ storename)
}
else if(h>16 && h<=19){
  $("div#name").append("Good Evening, "+ storename)
}
else if(h>19 && h<=23){
    $("div#name").append("Good Night, "+ storename)
  }
  else{
    $("div#name").append("Good Night, "+ storename)
  }
    alert("should get the innerHTML or text value here");
    //  $("div#replace").fadeout();
  }
function weather() {

      var location = document.getElementById("location");
      var apiKey = 'f536d4c3330c0a1391370d1443cee848'; // PLEASE SIGN UP FOR YOUR OWN API KEY
      var url = 'https://api.forecast.io/forecast/';

      navigator.geolocation.getCurrentPosition(success, error);

      function success(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;

      //  location.innerHTML = 'Latitude is ' + latitude + '° <br> Longitude is ' + longitude + '°';

         $.getJSON(url + apiKey + "/" + latitude + "," + longitude + "?callback=?", function(data) {
           var cel = data.currently.temperature
            cel = parseInt((cel-32)/1.8)
            alert(cel)
          $("span#temp").html(cel + "° c");
          //$('#wind').html(data.minutely.summary);
          // $('#minutely').append(data.minutely.icon);
          // $('#minutely').append(data.hourly.summary);
          // $('#minutely').append(data.hourly.icon);
          // $('#minutely').append(data.daily.icon);
          // $('#minutely').append(data.daily.summary);
        //  checkIcon(data.minutely.icon)
        });
      }
      // function checkIcon(icons){
      //   $("img#cloud").hide();
      //   $("img#rain").show();
      //     //icons =  string(icons);
      //   if(icons == "clear-day"){
      //     alert(icons)
      //     $("img#cloud").hide();
      //     $("img#rain").show();
      //
      //     // var img = document.getElementById("image#sun").src;
      //     // document.getElementById("span#wind").innerHTML = '<img src="../Image/sun.svg"/>';
      //   }
      // }

      function error() {
        location.innerHTML = "Unable to retrieve your location";
      }
    }

    weather();
    $.ajax({
                url: "https://geoip-db.com/jsonp",
                jsonpCallback: "callback",
                dataType: "jsonp",
                success: function( location ) {
                    $("p#city").append(location.city);
                }
            });
            /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myToDo() {
    document.getElementById("myToDo").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
