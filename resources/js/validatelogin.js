// function validateLogin(){
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;

// if(username == "" || password == ""){
//   if (username == "" && password == ""){
//     var popupMessageBody = "ইউজার নেম এবং পাসওয়ার্ড দিন";
//   } else {
//     if(username == ""){
//     var popupMessageBody = "ইউজার নেম দিন";
//     }
//     if(password == ""){
//     var popupMessageBody = "পাসওয়ার্ড দিন";
//     }
//   }

//   var popupMessageElement = document.getElementById("popupMessage");
//     popupMessageElement.innerHTML = popupMessageBody;
//     var popupModal = new bootstrap.Modal(document.getElementById("popupModal"));
//     popupModal.show();
//     return false;
//   }
//   return true;
// }