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
      console.log(xmlHttp.responseText);
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
