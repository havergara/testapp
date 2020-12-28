const myList = document.querySelector('.errors');
let validForm = true;

frmRegister.addEventListener('submit', function (event) {
    event.preventDefault();

    validForm = true;
    myList.innerHTML = '';

    myForm.validateName(this.name);
    myForm.validateEmail(this.email);
    myForm.validatePassword(this.password);
    myForm.validateConfirmPassword(this.password_confirmation, this.password);

    if (validForm) {
        this.submit();
    }

});
