const myList = document.querySelector('.errors');
let validForm = true;

frmSignIn.addEventListener('submit', function (event) {
    event.preventDefault();

    validForm = true;
    myList.innerHTML = '';

    myForm.validateEmail(this.email);
    myForm.validateLoginPassword(this.password);

    if (validForm) {
        this.submit();
    }

});
