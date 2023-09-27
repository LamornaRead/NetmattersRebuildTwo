//pop out vars

const supportButton = document.querySelector('.out-of-hours');
const supportInfo = document.querySelector('.critical-support');

//form vars

const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

//pop out function

supportButton.addEventListener("click", showSupport);

function showSupport(event) {
    event.preventDefault();
    this.classList.toggle('active');
    supportInfo.classList.toggle('active');
}

//form function

// form function 

function validateForm() {
    var fields = new Array();
    var fields = [document.getElementById('contact-name'),
                    document.getElementById('contact-email'),
                    document.getElementById('contact-number'),
                    document.getElementById('contact-message')
                ];
    var errMessage = [document.getElementById('name-error'),
                document.getElementById('email-error'), 
                document.getElementById('number-error'), 
                document.getElementById('contact-error')
            ];
    var err = 0;
    var success = document.getElementById('success');

    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            errMessage[i].style.color = 'red';
            errMessage[i].innerHTML = `Please fill in ${fields[i].name}`;
        } else {
            fields[i].style.border = '';
            errMessage[i].innerHTML = '';
        }
    }
    if (err === 0) {
        success.innerHTML = 'Submit Successful';
        success.style.color = '#24d36e';
        console.log('form success');
    } else {
        success.innerHTML = 'Fill Out Form Correctly';
        success.style.color = 'red';
        console.log('form failed');
        console.log(fields);
        return false;
    }
    return true;
}
