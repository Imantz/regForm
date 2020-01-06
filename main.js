

new Vue({
    el: '#form',
    data: {
        regForms: [

        ],

        name: null,
        email: null,
        lastName: null,
        phoneNumber: null,
        firstQuestion: null,
        secondQuestion: null,
        password: null,
        retypePassword: null,
        whyLearnCoding: null,

        nameError: false,
        lastNameError: false,
        emailError: false,
        passwordError: false,
        retypePasswordError: false,
        phoneNumberError: false,
        whyLearnCodingError: false,
        passwordMatchError: false,
        sub: false,

    },
    methods: {
        validate() {
                this.nameError = this.name === null;
                this.lastNameError = this.lastName === null;
                this.emailError = this.email === null;
                this.whyLearnCodingError = this.whyLearnCoding === null;
                this.passwordError = this.password === null;
                this.retypePasswordError = this.retypePassword === null;
                this.phoneNumberError = this.phoneNumber === null;

                if (this.password !== this.retypePassword) {
                    this.passwordError = true;
                    this.retypePasswordError = true;
                }

            this.checkErrorCount();
        },
        checkErrorCount(){
            if(
                this.nameError === false &&
                this.lastNameError === false &&
                this.emailError === false &&
                this.passwordError === false &&
                this.retypePasswordError === false &&
                this.phoneNumberError === false &&
                this.whyLearnCodingError === false &&
                this.passwordMatchError === false
                ){
                this.submit();
            }else{
                this.sub = false;
            }
        },
        submit(){
            setTimeout(() => {
                alert("Coffe time!...  application send ;D ");
                form = {
                    "name": this.name,
                    "lastName" : this.lastName,
                    "email" : this.email,
                    "password" : this.password,
                    "phoneNumber" : this.phoneNumber,
                    "why Learn Coding" : this.whyLearnCoding,
                };
                var jsonString = JSON.stringify(form);

                alert("THere Json: " + jsonString);

            }, 1500)
        }
    }

});

