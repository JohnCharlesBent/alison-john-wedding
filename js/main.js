
function submitRSVP() {

  var elements = document.getElementsByClassName("formEl");
  var formData = new FormData();
  for (var i = 0; i < elements.length; i++)
  {
    formData.append(elements[i].name, elements[i].value);
  }
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.onreadystatechange = function()
  {
    if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
    {
      var form = document.getElementById("rsvp_form").style.display = "none";
      var response = JSON.parse(xmlHttp.responseText);
      //alert(response);
      var message = document.getElementById("form-success-message");
      var msgTxt = document.createTextNode(response);
      message.appendChild(msgTxt);
      message.classList.remove("hidden");
    }
  }
  xmlHttp.open("POST", "inc/submit-rsvp.php");
  xmlHttp.send(formData);

}

var rsvpBtn = document.getElementById("rsvp_submit");

rsvpBtn.addEventListener("click", function(e) {
  e.preventDefault();
  submitRSVP();
});

var otherGuest = document.getElementById("other_guests_select");

otherGuest.onchange = function() {
  var val = otherGuest.options[otherGuest.selectedIndex].value;

  if(val === 'yes') {
    var optional = document.getElementsByClassName("optional");
    console.log(optional);
    for(var i = 0; optional.length; i++) {
        optional[i].style.display = "block";
        return;
    }
  } else {
    return;
  }

}
