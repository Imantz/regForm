

regForm = new Vue({
    el: '#form',
    data: {
        regForms: [

        ],

        name: null,
        email: null,
        lastName: null,
        phoneNumber: null,
        password: null,
        retypePassword: null,
        whyLearnCoding: null,
        date:null,
        radioBtn: null,
        firstQuestion: null,
        secondQuestion: null,
        notSubmit: true,

        nameError: false,
        lastNameError: false,
        emailError: false,
        passwordError: false,
        retypePasswordError: false,
        phoneNumberError: false,
        whyLearnCodingError: false,
        passwordMatchError: false,
        dateError: false,
        firstQuestionError: false,
        secondQuestionError: false,
        radioBtnError: false,


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
                this.dateError = this.date === null;
                this.firstQuestionError = this.firstQuestion === null;
                this.secondQuestionError = this.secondQuestion === null;
                this.radioBtnError = this.radioBtn === null;

                if (this.password !== this.retypePassword) {
                    this.passwordError = true;
                    this.retypePasswordError = true;
                }

            this.checkErrorCount();
        },
        checkErrorCount(){
            if(
                !this.nameError &&
                !this.lastNameError &&
                !this.emailError &&
                !this.passwordError &&
                !this.retypePasswordError &&
                !this.phoneNumberError &&
                !this.whyLearnCodingError &&
                !this.passwordMatchError &&
                !this.dateError &&
                !this.firstQuestionError &&
                !this.secondQuestionError  &&
                !this.radioBtnError
                ){
                this.submit();
            }
        },
        clearFields(){
            this.name = null;
            this.lastName = null;
            this.email = null;
            this.password = null;
            this.retypePassword = null;
            this.phoneNumber = null;
            this.whyLearnCoding = null;
            this.date = null;
            this.firstQuestion = null;
            this.secondQuestion = null;
            this.radioBtn = null;
        },
        submit(){
            this.notSubmit = false;
            setTimeout(() => {
                alert("Coffe time!...  application send ;D ");
                form = {
                    "name": this.name,
                    "lastName" : this.lastName,
                    "email" : this.email,
                    "password" : this.password,
                    "phoneNumber" : this.phoneNumber,
                    "date" : this.date,
                    "whyLearnCoding" : this.whyLearnCoding,
                    "firstQuestion" : this.firstQuestion,
                    "secondQuestion" : this.secondQuestion,
                    "radioBtnQuestion" : this.radioBtn
                };
                this.regForms.push(form);
                var jsonString = JSON.stringify(form);
                    <!-- clear  field after submit-->
                alert("THere Json: " + jsonString);
                this.clearFields();
                this.notSubmit = true;
            }, 1500)
        }
    }

});



