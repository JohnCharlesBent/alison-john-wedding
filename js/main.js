
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
    var optional = document.querySelectorAll(".optional");
    console.log(optional);
    optional.forEach(function(element) {
      element.style.display = "block";
    });
  } else {
    return;
  }

}

window.smoothScroll = function(target) {
  var scrollContainer = target;
  do {
    scrollContainer = scrollContainer.parentNode;
    if(!scrollContainer) return;
    scrollContainer.scrollTop += 1;
  } while (scrollContainer.scrollTop == 0);

  var targetY = 0;
  do {
    if (target == scrollContainer) break;
    targetY +=  target.offsetTop;
  } while (target = target.offsetParent);

  scroll = function(c, a, b, i) {
    i++; if(i > 30) return;
    c.scrollTop = a + (b - a) / 30 * i;
    setTimeout(function() { scroll(c, a, b, i); }, 10);
  }

  scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

var detailsBtn = document.getElementById("detailScroll");
detailsBtn.onclick = function() {
  smoothScroll(document.getElementById("details"));
}
