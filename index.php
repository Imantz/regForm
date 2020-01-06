<?php include "header.php";
?>
<body class="bg-gray-100">
<div class="container-fluid bg-green-300 py-3 col-md-6 rounded">




    <form id="form"  action="index.php" @submit.prevent="validate" method="post" novalidate>

        <div class="form-row">

            <div class="form-group col-sm-6">
                <input v-model="name" type="text" class="form-control"
                       v-bind:class="[nameError ? 'bg-warning' : '']" placeholder="Name">
                <div class="text-xs text-red-500" v-if="nameError">Name is required</div>
            </div>

            <div class="form-group col-sm-6">
                <input v-model="lastName" type="text" class="form-control"
                       v-bind:class="[lastNameError ? 'bg-warning' : '']" placeholder="Last name">
                        <div class="text-xs text-red-500" v-if="lastNameError">lastname is required</div>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-sm-12">
                <input v-model="email" type="email" class="form-control "
                       v-bind:class="[emailError ? 'bg-warning' : '']" id="email" placeholder="email">
                        <div class="text-xs text-red-500" v-if="emailError">email is required</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <input v-model="password" type="password" class="form-control"
                       v-bind:class="[passwordError ? 'bg-warning' : '']" id="password" placeholder="password">
                        <div class="text-xs text-red-500" v-if="passwordError">password is required</div>
            </div>
            <div class="form-group col-sm-6">
                <input v-model="retypePassword"  type="password" type="text" class="form-control"
                       v-bind:class="[retypePasswordError ? 'bg-warning' : '']" placeholder="enter password again">
                    <div class="text-xs text-red-500" v-if="passwordMatchError">password not match!</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <input v-model="phoneNumber" type="text" class="form-control"
                       v-bind:class="[phoneNumberError ? 'bg-warning' : '']" id="phone_number" placeholder="phone number">
                        <div class="text-xs text-red-500" v-if="phoneNumberError">number is required</div>
            </div>
            <div class="form-group col-sm-6">
                <input v-model="date" type="date" class="form-control"
                       v-bind:class="[dateError ? 'bg-warning' : '']" id="date">
                <div class="text-xs text-red-500" v-if="dateError">Where is date?!</div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12">
                <textarea v-model="whyLearnCoding" type="text" class="form-control"
                          v-bind:class="[whyLearnCodingError ? 'bg-warning' : '']" cols="10" rows="3"
                          placeholder="why you want to learn coding?"></textarea>
                <div class="text-xs text-red-500" v-if="whyLearnCodingError">Missing something!</div>
            </div>
        </div>

        <div class="form-row bg-green-100 rounded mx-1" v-if="notSubmit">

            <div class="p-1">
                <div class="form-group col-sm-12">
                    <h6>"When is a door not a door?</h6>
                    <textarea v-model="firstQuestion" name="firstQuestion" type="text" class="form-control"
                              v-bind:class="[firstQuestionError ? 'bg-warning' : 'bg-transparent']" cols="100" rows="1"></textarea>
                            <div class="text-xs text-red-500" v-if="firstQuestionError">Where is answer?</div>
                </div>
            </div>

            <div class="p-1">
                <div class="form-group col-sm-12">
                    <h6>A cowboy rides into town on Friday. He stays three days, then rides out of town on Friday. How?</h6>
                    <textarea v-model="secondQuestion" name="secondQuestion" type="text" class="form-control"
                              v-bind:class="[secondQuestionError ? 'bg-warning' : 'bg-transparent' ]" cols="100" rows="1"></textarea>
                            <div class="text-xs text-red-500" v-if="secondQuestionError">Answer is required</div>
                </div>
            </div>

            <div class="col-sm-6 ">
                <h6 class="p-1">console.log(false === '0'); console.log(false == '0');</h6>
                <div class="text-xs text-red-500" v-if="radioBtnError">CHOOSE SOMETHING!</div>
            </div>

            <div class="form-group col-sm-12 justify-content-center">
                <div class="custom-control custom-radio">
                    <input v-model="radioBtn" value="false true" type="radio" id="first_question_first" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="first_question_first">false true</label>
                </div>
            </div>
            <div class="form-group col-sm-12 ">
                <div class="custom-control custom-radio">
                    <input v-model="radioBtn" value="true false" type="radio" id="first_question_second" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="first_question_second">true false</label>
                </div>
            </div>
        </div>

        <div class="form-row bg-green-100 rounded mx-1" v-if="!notSubmit">
            <div class="col-8">
                <h3>Sending.....</h3>
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="form-group col-sm-12">
                 <button id="submit" type="submit" class="btn btn-secondary">Register</button>
            </div>
        </div>
    </form>
</div>




<?php include "footer.php" ?>;







