const myList = document.querySelector('.errors');
let validForm = true;

frmProject.addEventListener('submit', function (event) {
    event.preventDefault();

    validForm = true;
    myList.innerHTML = '';

    let links = document.querySelectorAll('.links');

    myForm.validateName(this.project_name);
    myForm.validateLinks(links);

    if (validForm) {
        this.submit();
    }

});
