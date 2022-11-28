const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

function darkMode() {
    var element = document.body;
    var content = document.getElementById("DarkModetext");
    element.className = "dark-mode";
    content.innerText = "Dark Mode is ON";
  }
  function lightMode() {
    var element = document.body;
    var content = document.getElementById("DarkModetext");
    element.className = "light-mode";
    content.innerText = "Dark Mode is OFF";
  }

  // Get the modal
  function myFunction() {
    var modal = document.getElementById('id01');
}
function myFunction() {
    var modal = document.getElementById('id02');
}
function myFunction() {
    var modal = document.getElementById('id03');
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// aaa


let firstName = document.getElementById("fname").value;
let lastName = document.getElementById("lname").value;
let form = document.getElementById("contact-form");
let email = document.getElementById("email").value;
let address = document.getElementById("address").value;
let confirm = document.getElementById('confirmPassword').value;

let preference = 0;

form.addEventListener("register", (e) => {    // event listener on register

    e.preventDefault(); // don't refresh the pg

    let firstName = document.getElementById("fname").value;
    let lastName = document.getElementById("lname").value;
    let form = document.getElementById("contact-form");
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;
    let confirm = document.getElementById('confirmPassword').value;
   
    window.confirm("Success");
});
  


