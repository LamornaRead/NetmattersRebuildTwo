const cookieStyle = document.querySelector('.consent');
const selectBody = document.querySelector('.body');

function acceptButton() {
    const accept = document.querySelector('.accept-btn');
    accept.addEventListener("click", function()  {
        localStorage.setItem("cookieConsent", "true");
        cookieStyle.style.visibility = 'hidden';
        selectBody.classList.remove('covered');
    });
}

function manageConsentButton() {
    const manage = document.querySelector('.manage-btn');
    manage.addEventListener("click", function() {
        cookieStyle.style.visibility = 'visible';
        selectBody.classList.toggle('covered');
    });
}



document.addEventListener("DOMContentLoaded", function(){
    if(!localStorage.getItem('cookieConsent')){
      cookieStyle.style.visibility = "visible";
      selectBody.classList.toggle('covered');
    }
    acceptButton();
    manageConsentButton();
  });




// function setCookie(cName, cValue, expDays) {
//     let date = new Date();
//     date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000)); //sets date for when cookie deletes
//     const expires = "expires=" + date.toUTCString();// converts to string
//     document.cookie = cName + "=" + cValue + "; " + expires + "; path=/"; //creates cookie parameters as string
// }

// function getCookie (cName) {
//     const name = cName + "=";
//     const cDecoded = decodeURIComponent(document.cookie); //decodes cookie
//     const cArr = cDecoded.split("; "); //splits up cookie paramaters
//     cArr.forEach(val => { // gets cookie value
//         if(val.indexOf(name) === 0) value = val.substring(name.length);
//     })

//     return value;
// }

// document.querySelector(".accept-btn").addEventListener("click", function() {
//     cookieStyle.style.visibility = "hidden"
//     setCookie("cookie", true, 365);
// })

// function cookieMessage()  {
//     if(getCookie = ("")) {
//         cookieStyle.style.visibility = "visible";
//     }
// }

// window.addEventListener("load", cookieMessage());