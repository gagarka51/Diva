var modal = document.getElementById('modal-back');
var btn = document.getElementById('modal-button');
var button = document.getElementById('modal-btn');
var action = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

button.onclick = function() {
  modal.style.display = "block";
}

action.onclick = function() {
  modal.style.display = "none";
}

modal.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}