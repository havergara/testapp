const emailRegX = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const urlRegX = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;
var myForm = (function (){

    function generateAlertMsg (msg) {
        let lastItem = document.createElement('li');
        lastItem.textContent = msg;
        myList.appendChild(lastItem);
        document.querySelector('.errorContainer').style.display = 'block';
    }

    return {
        validateName: function (el){
            if (el.value.length === 0){
                generateAlertMsg('Name is required!');
                validForm = false;
            }
        },
        validateEmail: function (el) {
            if (!emailRegX.test(el.value) || el.value === '') {
                generateAlertMsg('Email is required and must be a valid email!');
                validForm = false;
            }
        },
        validatePassword: function (el){
            if (el.value.length === 0 || el.value.length < 6){
                generateAlertMsg('Password is required and should be at least 6 characters!');
                validForm = false;
            }
        },
        validateConfirmPassword: function (el, pw){
            if (pw.value.length >= 6){
                if (el.value.length === 0){
                    generateAlertMsg('Please confirm password!');
                    validForm = false;
                } else if (el.value !== pw.value) {
                    generateAlertMsg('Password and password confirmation should be the same!');
                    validForm = false;
                }
            }
        },
        validateLoginPassword: function (el){
            if (el.value.length === 0){
                generateAlertMsg('Password is required!');
                validForm = false;
            }
        },
        validateLinks: function (el){
            let atLeastOneLink = false;
            let validUrl = false;
            for (let i = 0; i < el.length; i++){
                if (el[i].value.length > 0) {
                    atLeastOneLink = true;
                    if (urlRegX.test(el[i].value)){
                        validUrl = true
                    }
                }
            }

            if (atLeastOneLink && !validUrl){
                generateAlertMsg('Link must be a valid URL!');
                validForm = false;
            }
        }
    };
}());
