//pop out vars

const supportButton = document.querySelector('.out-of-hours');
const supportInfo = document.querySelector('.critical-support');

//form vars

const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const email = document.getElementById('contact-email');

//pop out function

supportButton.addEventListener("click", showSupport);

function showSupport(event) {
    event.preventDefault();
    this.classList.toggle('active');
    supportInfo.classList.toggle('active');
}



// form function 

function validateForm() {
    let fields = [document.getElementById('contact-name'),
                    document.getElementById('contact-email'),
                    document.getElementById('contact-number'),
                    document.getElementById('contact-message')
                ];
    let err = 0;
    let success = document.getElementById('success');



    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
        } else {
            fields[i].style.border = '';
        }
    }

    if(!emailFormat.test(email.value)) {
        err + 1;
        fields[1].style.border = '1px solid red';
        return false;
    } else {
        fields[1].style.border = '';
    }
    


    if (err === 0) {
        // success.innerHTML = 'Submit Successful';
        // success.style.color = '#24d36e';
        console.log('form success');
    } else {
        success.innerHTML = 'Fill Out Form Correctly';
        success.style.color = 'red';
        console.log('form failed');
        // console.log(fields.value);
        return false;
    }
    return true;
}


document.addEventListener('DOMContentLoaded', function() {
    FastClick.attach(document.body);
  }, false);