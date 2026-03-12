let fileBoxCounter = 0; // Initialize a counter outside the function

function addFileBox() {
    const container = document.getElementById('fileBoxContainer');
    const fileInputDiv = document.createElement('div');

    // Increment the counter to ensure a unique identifier for each
    fileBoxCounter++;

    fileInputDiv.setAttribute('id', `fileInputDiv${fileBoxCounter}`);
    fileInputDiv.setAttribute('class', `fileInputDivElement`);
    fileInputDiv.innerHTML = `
        <div style="display:flex;align-items:center;width:100%">
            <label for="fileInput${fileBoxCounter}" class="custom-file-upload">
                Choisir un fichier
            </label>
            <input style="display:none;" class="input-file" type="file" id="fileInput${fileBoxCounter}" name="images[]" placeholder="" >
            <span id="selectedFileName${fileBoxCounter}" class="contact-file-name" style=" margin-left: 10px; margin-right: 10px; ">Aucun fichier choisi</span>
            <button type="button" onclick="deleteFileBox(${fileBoxCounter})" class="trashbg">
                <i class="fa fa-trash mr-0" style="color:red;"></i>
            </button>
        </div>
    `;
    container.insertBefore(fileInputDiv, container.lastElementChild);

    document.getElementById('fileInputDiv' + fileBoxCounter).style = "width:100%;";

    // Add event listener to update file name display
    const fileInput = document.getElementById(`fileInput${fileBoxCounter}`);
    const selectedFileName = document.getElementById(`selectedFileName${fileBoxCounter}`);
    fileInput.addEventListener('change', function(event) {
        const fileList = event.target.files;
        if (fileList.length > 0) {
            selectedFileName.textContent = fileList[0].name;
        } else {
            selectedFileName.textContent = '';
        }
    });
}

function deleteFileBox(uniqueId) {
    const fileInputDiv = document.getElementById(`fileInputDiv${uniqueId}`);
    if (fileInputDiv) {
        fileInputDiv.remove();
    }
}
$(document).on("click","#fileInput",function(){
    // Assuming you want to display the file name somewhere
    var fileNameDisplay = document.getElementById('fileNameDisplay');
    if(this.files.length > 0) {
        fileNameDisplay.textContent = this.files[0].name;
    } else {
        fileNameDisplay.textContent = 'Aucun fichier choisi';
    }
});

$(document).on('submit', "form#custom_contact_form", function (event) {
    event.preventDefault(); // Prevent default form submission

    $("#main_loader_icon").show();
    var thisForm = $(this); // Store the form reference

    getClientBasicGeoInfo(function (clientInfo) {
        let formData = new FormData(thisForm[0]); // Fix: Convert jQuery object to native form element
        
        // Append client geo info as JSON
        formData.append("client_informations", JSON.stringify(clientInfo));

        console.log(formData);

        $.ajax({
            url: thisForm.attr('action'), // Fix: Correct form action URL
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    $(".contact__section__3").html(response.main_view);

                    $(".contact__section__1").hide();
                    $(".contact__section__2").hide();
                    $(".contact__section__3").show();

                    $(".contact-steps").removeClass('active');
                    $(".contact-step-3").addClass('active');
                }
                $("#main_loader_icon").hide();
            },
            error: function (xhr, status, error) {
                if (xhr.status === 422) {
                    var response = xhr.responseJSON;
                    console.error("Validation errors:", response);
                } else {
                    console.error(error);
                }
                $("#main_loader_icon").hide();
            }
        });
    });
});



   function contactPageLoading(){
    const parent = $("#custom_contact_form");
    onChangeUserType(parent.find('[name="user_type"]'));
   }
   function firstStepContactForm(){
    const parent = $("#custom_contact_form");
      var isValid = contactValidateForm1();
      if(isValid){
        $("#main_loader_icon").show();
        onChangeUserType(parent.find('[name="user_type"]'), function(isPageLoaded) {
            if (isPageLoaded) {
                $(".contact__section__1").hide();
                $(".contact__section__2").show();
                $(".contact__section__3").hide();
    
                $(".contact-steps").removeClass('active');
                $(".contact-step-2").addClass('active');  
            }
            $("#main_loader_icon").hide();
        });
      }
   }
   function secondStepContactForm(){
    var isValid = contactValidateForm2();
    if(isValid){
       $("#custom_contact_form").submit();
    }
   }
   function prevfirstStepContactForm(){
    $(".contact__section__1").show();
    $(".contact__section__2").hide();
    $(".contact__section__3").hide();

    $(".contact-steps").removeClass('active');
    $(".contact-step-1").addClass('active');
   }
   function contactValidateForm2() {

       const form = document.querySelector('#custom_contact_form');
       const container = $('#custom_contact_form');
       const client_first_name = form.querySelector('[name="client_first_name"]').value.trim();
       const client_last_name = form.querySelector('[name="client_last_name"]').value.trim();
       const client_phone = form.querySelector('[name="client_phone"]').value.trim();
       const client_fax = form.querySelector('[name="client_fax"]').value.trim();
       const client_email = form.querySelector('[name="client_email"]').value.trim();
       const client_address = form.querySelector('[name="client_address"]').value.trim();
       const client_zipcode = form.querySelector('[name="client_zipcode"]').value.trim();
       const client_city = form.querySelector('[name="client_city"]').value.trim();
       var termsChecked = container.find('[name="terms"]').prop("checked");
       var privacyChecked = container.find('[name="privacy"]').prop("checked");
 
       let errors = [];

       // Validation rules
       if (!client_first_name) {
           errors.push({ name: 'client_first_name', error_message: "Le Prénom est requis." });
       }
       if (!client_last_name) {
           errors.push({ name: 'client_last_name', error_message: "Le Nom est requis." });
       }
       const phoneDigitCount = client_phone.replace(/\s+/g, '').length; 
       if (!client_phone) {
           errors.push({ name: 'client_phone', error_message: "Le Numéro de Téléphone est requis." });
       } else if (phoneDigitCount !== 10) {
           errors.push({ name: 'client_phone', error_message: "Format du numéro invalide." });
       } else if (!client_phone.startsWith("0")) {
           errors.push({ name: 'client_phone', error_message: "Format du numéro invalide." });
       }
       
       
        if (client_fax) {
            const faxDigitCount = client_fax.replace(/\s+/g, '').length; 
            if (faxDigitCount !== 10) {
                errors.push({ name: 'client_fax', error_message: "Format du numéro de fax invalide." });
            } else if (!client_fax.startsWith("0")) {
                errors.push({ name: 'client_fax', error_message: "Format du numéro de fax invalide." });
            }
        } 

       var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
       if (!client_email) {
           errors.push({ name: 'client_email', error_message: "L'Email est requis." });
       } else if (!emailPattern.test(client_email)) {
           errors.push({ name: 'client_email', error_message: "Format d'email invalide." });
       }

       if (!client_address) {
           errors.push({ name: 'client_address', error_message: "L'Adresse est requise." });
       }
       if (!client_zipcode) {
           errors.push({ name: 'client_zipcode', error_message: "Le code postal est requis." });
       }
       if (!client_city) {
           errors.push({ name: 'client_city', error_message: "La ville est requise." });
       }
        if (!termsChecked) {
                errors.push({ name: 'terms', error_message: "Vous devez accepter les Conditions de Service." });
        }
        if (!privacyChecked) {
                errors.push({ name: 'privacy', error_message: "Vous devez accepter la Politique de Confidentialité." });
        }
       // Remove previous error messages
       $("#custom_contact_form .form-group").find('.validation__error__b').remove();
       $("#custom_contact_form .validation_error_b2").hide();

       // Show errors if any
       if (errors.length > 0) {
           errors.forEach(function(error) {
               var html = `
               <div class="validation__error__b">
                   <p><i class="fa fa-times-circle" aria-hidden="true"></i>
                       ${error.error_message}
                   </p>
               </div>`;

               // Append error message inside closest .form-group
               var $element = $('#custom_contact_form [name="' + error.name + '"]').closest('.form-group');
               if ($element.length) {
                   $element.append(html);
               } else {
                   console.error("Element with name '" + error.name + "' not found.");
               }
           });
           displayContactErrorMessageBox2("Merci de bien remplir toutes les informations requises");
           return false;
       }

       return true;
   }


   function contactValidateForm1() {
    // Select the container div
    const container = document.querySelector('#custom_contact_form');

    // Get input values using name attributes inside the container
    const message = container.querySelector('[name="message"]').value.trim();
    const isCapchaAllow = container.querySelector('[name="is_capcha_allow"]').value;
    const purposeId = container.querySelector('[name="purpose_id"]').value;
    const departmentId = container.querySelector('[name="department_id"]').value;
    const priorityId = container.querySelector('[name="priority_id"]').value;
    const surveyAnswerId = container.querySelector('[name="survey_answer_id"]').value;

    // Validation messages array
    let errors = [];

    // Validation rules
    if (!message) {
        errors.push({ name: 'message', error_message: "Le message est requis." });
    }
    if (!priorityId) {
        errors.push({ name: 'priority_id', error_message: "Le priorité est requis." });
    }
    if (!purposeId) {
        errors.push({ name: 'purpose_id', error_message: "La purpose est requise." });
    }
    if (!departmentId) {
        errors.push({ name: 'department_id', error_message: "La département est requise." });
    }
    if (!surveyAnswerId) {
        errors.push({ name: 'survey_answer_id', error_message: "La question de l'enquête est requise." });
    }

    // If CAPTCHA is enabled, validate CAPTCHA
    if (isCapchaAllow == 1) {
        const custom_capcha_answer = container.querySelector('[name="custom_capcha_answer"]').value;
        const actual_capcha_answer = container.querySelector('[name="actual_capcha_answer"]').value;

        if (!custom_capcha_answer) {
            errors.push({ name: 'custom_capcha_answer', error_message: "Le Capcha est requis." });
        } else {
            if (custom_capcha_answer != actual_capcha_answer) {
                errors.push({ name: 'custom_capcha_answer', error_message: "Le Capcha n'a pas raison." });
            }
        }
    }

    // Remove previous error messages inside the container
    $("#custom_contact_form .form-group").find('.validation__error__b').remove();
    $("#contact_validation_error_b1").hide();

    // Show errors if any
    if (errors.length > 0) {
        errors.forEach(function(error) {
            var html = `
            <div class="validation__error__b">
                <p><i class="fa fa-times-circle" aria-hidden="true"></i>
                    ${error.error_message}
                </p>
            </div>`;


            var $element = $('#custom_contact_form').find('[name="' + error.name + '"]').closest('.form-group');
            if ($element.length) {
                $element.append(html);
            } else {
                console.error("Element with name '" + error.name + "' not found.");
            }
        });

        $("#contact_validation_error_b1").show();
        return false;
    }

    // If no errors, form is valid
    return true;
}










function onChangeUserType(thisF, callback) {
    let userType = $(thisF).val();
    if (userType === "other") {
        getContactViewByUserType(callback);
    } else {
        getRegisterViewByUserType(userType, callback);
    }
}



function getRegisterViewByUserType(userType,callback) {
    const parent = $("#custom_contact_form");
    let url = parent.find(".get__register__view__route").val();
   
    $.ajax({
        url: url,
        method: 'GET',
        data: { 'user_type': userType },
        success: function(response) {
            parent.find(".contact__user__section").html(response.register_view);
            if($(".auto__place__container").length != 0){
                initAutocomplete();
            }
           
            callback(true);
        },
        error: function(xhr, status, error) {
            console.error("Register View Error:", error);
            callback(false);
        }
    });
}

function getLoginViewByUserType(userType) {
    const parent = $("#custom_contact_form");
    let url = parent.find(".get__login__view__route").val();
    $("#main_loader_icon").show();
    $.ajax({
        url: url,
        method: 'GET',
        data: { 'user_type': userType },
        success: function(response) {
            // Assuming the backend returns "login_view" for login-related content
            parent.find(".contact__user__section").html(response.login_view);
            $("#main_loader_icon").hide();
        },
        error: function(xhr, status, error) {
            console.error("Login View Error:", error);
            $("#main_loader_icon").hide();
        }
    });
}
function getContactViewByUserType(callback) {
    const parent = $("#custom_contact_form");
    let url = parent.find(".get__user__contact__view__route").val();


    $.ajax({
        url: url,
        method: 'GET',
        success: function(response) {
            parent.find(".contact__user__section").html(response.user_contact_view);
            if ($(".auto__place__container").length !== 0) {
                initAutocomplete();
            }
            callback(true); // Call the callback with true
        },
        error: function(xhr, status, error) {
            console.error("Login View Error:", error);
            callback(false); // Call the callback with false
        }
    });
}








function displayContactErrorMessageBox2(message){
    if($("#custom_contact_form .validation_success_b2").length != 0){
        $("#custom_contact_form .validation_success_b2").hide();
    }
    $("#custom_contact_form .validation_error_b2").find(".validation__error__msg__txt").html(message);
    $("#custom_contact_form .validation_error_b2").show();
}
function displayContactSuccessMessageBox2(message){
    if($("#custom_contact_form .validation_error_b2").length != 0){
        $("#custom_contact_form .validation_error_b2").hide();
    }
    $("#custom_contact_form .validation_success_b2").find(".validation__success__msg__txt").html(message);
    $("#custom_contact_form .validation_success_b2").show();
}

$(document).on("keyup", "#custom_contact_form [name='custom_capcha_answer']", function () {
    if (isNaN($(this).val())) {
        $(this).val($(this).val().replace(/\D/g, "")); // Remove non-numeric characters
    }
});
