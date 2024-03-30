var services = document.getElementById('services-modal');
var btn_more = document.getElementById('btn-more');
var action = document.getElementsByClassName("close-services")[0];

btn_more.onclick = function() {
  services.style.display = "block";
}

action.onclick = function() {
  services.style.display = "none";
}

services.onclick = function(event) {
  if (event.target == services) {
    services.style.display = "none";
  }
}