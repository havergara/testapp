const myList = document.querySelector('.errors');
let validForm = true;

frmEmployee.addEventListener('submit', function (event) {
    event.preventDefault();

    validForm = true;
    myList.innerHTML = '';

    myForm.validateName(this.name);

    if (validForm) {
        this.submit();
    }

});
