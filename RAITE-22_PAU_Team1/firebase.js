  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
  import { getAuth,
          signInWithEmailAndPassword, 
          createUserWithEmailAndPassword,
          onAuthStateChanged,
          signOut,
          GoogleAuthProvider,
          signInWithRedirect,
          getRedirectResult,
          signInWithPopup,
          linkWithPopup,
          updatePassword
} from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyD9ykByluRqooEUvGuvtT9apUibE2kWROw",
    authDomain: "raite-22.firebaseapp.com",
    projectId: "raite-22",
    storageBucket: "raite-22.appspot.com",
    messagingSenderId: "140402031602",
    appId: "1:140402031602:web:e364e6595bcf50b304c96b",
    measurementId: "G-KQCQV193Q8"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const auth = getAuth(app);
  const provider = new GoogleAuthProvider();

  var googleBTN = document.getElementById("google");

  linkWithPopup(provider).then((result) => {
  // Accounts successfully linked.
  var credential = result.credential;
  var user = result.user;
  // ...
}).catch((error) => {
  // Handle Errors here.
  // ...
});


  googleBTN.addEventListener('click',(e)=>{
     signInWithPopup(auth, provider)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access the Google API.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;
    // The signed-in user info.
    const user = result.user;
    console.log(user);
    // ...
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.customData.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...
  });
  
  });
  email = document.getElementById("registerEmail");
  pass = document.getElementById("registerPassword");
  confirmPass = document.getElementById("resRepeatPassword")
  alertTXT = document.getElementById("alert");

//create User Access 
  const createUser = async() =>{
  const Email = email.value;
  const Pass = pass.value;
  const conPass = confirmPass.value;

  if (pass == conPass) {
    const userCredential = await createUserWithEmailAndPassword(auth, Email, Pass);
      //user Created 
      console.log(userCredential);
      window.location.href ="dashboard.php";
  }else{
      alertTXT.innerHTML = ("Password Doesn't Match");
      alertTXT.
  }
}
  

//login function
const loginUser = async() => {
const loginEmail = email.value;
const loginpass = pass.value;
signInWithEmailAndPassword(auth,loginEmail, loginpass).then(()=>{
    window.location.href ="front.html"; 
}).catch((error)=>{
    alert("Wrong Password");
  })
}

//forgot Password
forgot = document.getElementById("forgotInputEmail");
const forgotPassword = async =>{
  const forgotPasswordEmail = forgot.value;
  sendPasswordResetEmail(auth, forgotPasswordEmail)
  .then(() => {
    // Password reset email sent!
    // ..
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    // ..
  });
}


//logout User
const logout = async() =>{
  await signOut(auth);
  window.location.href = "index.html";
}


const resetPass = document.getElementById("resetPasswordBTN");
const register = document.getElementById("signUp");
const login = document.getElementById("loginBTN");
const logoutUser = document.getElementById("logoutBTN");

if(resetPass != null){
  resetPass.addEventListener("click", forgotPassword);  
}
if(register != null){
  register.addEventListener("click", createUser);
}
if (login != null){
  login.addEventListener("click", loginUser);

  }
if(logoutUser != null){
  logoutUser.addEventListener("click", logout);
}

