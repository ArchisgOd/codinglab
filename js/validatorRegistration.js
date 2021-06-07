function CustomValidation() {
    this.invalidities = [];
}

CustomValidation.prototype = {
    addInvalidity: function () {
        this.invalidities.push(message);
    },
    getInvalidities: function () {
        return this.invalidities.join('. \n');
    },
    checkValidity: function (input) {
        if (input.value.length < 3 || input.value.length > 32) {
            this.addInvalidity('This input needs to be at least 3 characters long');

            let element = document.querySelector('label[for="username"] li:nth-child(1)');
            element.classList.add('invalid');
            element.classList.remove('valid');
        } else {
            let element = document.querySelector('label[for="username"] li:nth-child(1)');
            element.classList.add('valid');
            element.classList.remove('invalid');
        }

        if(input.value.match(/[^a-zA-Z0-9]/g) ) {
            this.addInvalidity('Must contain only letters and numbers');
            let element = document.querySelector('label[for="username"] li:nth-child(2)');
            element.classList.add('invalid');
            element.classList.remove('valid');
        } else {
            let element = document.querySelector('label[for="username"] li:nth-child(2)');
            element.classList.add('valid');
            element.classList.remove('invalid');
        }
    }
}

let usernameInput = document.getElementById('login');
usernameInput.CustomValidation = new CustomValidation();

usernameInput.addEventListener('keyup', function () {
    usernameInput.CustomValidation.checkValidity(this);
})