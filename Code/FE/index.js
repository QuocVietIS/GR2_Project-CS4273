import { getAuth, onAuthStateChanged } from "firebase/auth";

const auth = getAuth();
onAuthStateChanged(auth, (user) => {
  if (user) {
    // User is signed in, see docs for a list of available properties
    // https://firebase.google.com/docs/reference/js/firebase.User
    const uid = user.uid;
    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none"
  } else {
    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block "
  }
});

function login(){
    var userEmail = document.getElementById(username).value;
    var userpass = document.getElementById(pass).value;

}