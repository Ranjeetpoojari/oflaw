
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        420:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$(document).ready(function() {
    $('#imageUpload').on('change', function(e) {
      var file = e.target.files[0];
      var reader = new FileReader();
  
      reader.onload = function(e) {
        var imageUrl = e.target.result;
        $('#imageContainer').html('<img src="' + imageUrl + '"id="preview" alt="Uploaded Image" />');
      };
  
      reader.readAsDataURL(file);
    });
  
    $('#imageContainer').on('click', 'img', function() {
      $('#imageUpload').click();
    });
  });
$(document).ready(function() {
    $('#imageUploads').on('change', function(e) {
      var file = e.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
        var imageUrl = e.target.result;
        $('#imageContainers').html('<img src="' + imageUrl + '"id="sign" alt="Uploaded Image" />');
      };
      reader.readAsDataURL(file);
    });
    $('#imageContainers').on('click', 'img', function() {
      $('#imageUploads').click();
    });
  });

$(document).ready(function() {
    $('#nextButton').click(function() {
        var surname = $('#surname').val();
        var firstname = $('#firstname').val();
        var mothername = $('#mothername').val();
        var fathername = $('#fathername').val();
        var photo = $('#imageUpload').val();
        var abc_id = $('#abc_id').val();
        var aadhar = $('#aadhar').val();
        var Ua_formno = $('#Ua_formno').val();
        var sign = $('#imageUploads').val();
        var Alphabets = /[a-zA-Z\s]+/;
        var num_pattern = /^\d{12}$/;
        var isValid = true;
        // Validate name field
        var Form_app_parttern = /^(?=.*[A-Z])(?=.*\d)[A-Z\d]{12}$/;

            if (surname.trim() === '') {
                $('#surnameError').text('Surname is required.');
                isValid = false;
            } else if(!Alphabets.test(surname)){
                $('#surnameError').text('numbers are not Allowed.');
                isValid = false;
            } 
            else {
                $('#surnameError').text('');
            }
            // Validate number field
            if (firstname.trim() === '') {
                $('#firstnameError').text('First name is required.');
                isValid = false;
            }
            else if(!Alphabets.test(firstname)){
                $('#firstnameError').text('numbers are not Allowed.');
                isValid = false;
            } 
            else {
                $('#firstnameError').text('');
            }
            // Validate email field
            if (mothername.trim() === '') {
                $('#motherError').text('Mother name is required.');
                isValid = false;
            }
            else if(!Alphabets.test(mothername)){
                $('#motherError').text('numbers are not Allowed.');
                isValid = false;
            } 
            else {
                $('#motherError').text('');
            }
            if (photo.trim() === '') {
                $('#photoError').text('Photo is required.');
                isValid = false;
            } else {
                $('#photorError').text('');
            }
            if (sign.trim() === '') {
                $('#signError').text('signature is required.');
                isValid = false;
            } else {
                $('#signError').text('');
            }
            if (fathername.trim() === '') {
                $('#fatherError').text('Father name is required.');
                isValid = false;
            } 
            else if(!Alphabets.test(fathername)){
                $('#fatherError').text('numbers are not Allowed.');
            } 
            else {
                $('#fatherError').text('');
            }
            if (photo.trim() === '') {
                $('#photoError').text(' Photo  is required.');
                isValid = false;
            } else {
                $('#photoError').text('');
            }
            if (sign.trim() === '') {
                $('#signError').text('signature is required.');
                isValid = false;
            } else {
                $('#signError').text('');


            }
            if (abc_id.trim() === '') {
                $('#abc_idError').text('Academic bank crdits is required.');
                isValid = false;
            }else if (!num_pattern.test(abc_id)){
                $('#abc_idError').text('Only numbers are allowed min maximum 12');
            } 
            else {$('#abc_idError').text('');
        }
            if (aadhar.trim() === '') {
                $('#aadharError').text('Adhar Card number is required.');
                isValid = false;
            }else if (!num_pattern.test(aadhar)){
                $('#aadharError').text('Only numbers are allowed min maximum 12');
            } 
            else {$('#abc_idError').text('');
        }
       
            if (Ua_formno.trim() === '') {
                $('#Ua_formnoError').text('Univecity Application form number is required.');
                isValid = false;
            }else if (!Form_app_parttern.test(Ua_formno)){
                $('#Ua_formnoError').text('Please fill this info currectly..');
            } 
            else {$('#Ua_formnoError').text('');
        }
    
        if(isValid){
            $('#nav-profile-tab').prop('disabled',false);
            $('#nav-profile-tab').addClass('show active');
            $('#nav-home-tab').removeClass('show active');
            // $("#nav-profile").find(".con_details").addClass("show active");
        
            $("#nav-tabContent").find(".con_details").addClass("show active");
            $("#nav-tabContent").find(".home_details").removeClass("show active");
            // $('#nav-home').hide(slow);
            // $("#nav-profile").show(slow);
        }
    });
});

// contact validation
$(document).ready(function() {
    $('#changeButton').click(function() {
        var number = $('#number').val();
        var Whatapp = $('#Whatapp').val();
        var email = $('#email').val();
        var emailpattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var num_pattern = /^\d{10}$/;
        var ownaddress = $('#ownaddress').val();
        // var telno = $('#telno').val();
        // var parentno = $('#parentno').val();
        // Validate name 
        if(number.trim() === ''){
            $('#numberError').text('Mobile number is required.');
            isValid = false;
        }
       else if (!num_pattern.test(number)) {
            $('#numberError').text('Mobile number must have 10 digits.');
            isValid = false;
        } else {
           console.log('valid');
           $('#numberError').hide();
           isValid = true;
        }
        if(Whatapp.trim() === ''){
            $('#WhatappError').text('Mobile number is required.');
            isValid = false;
        }
       else if (!num_pattern.test(Whatapp)) {
            $('#WhatappError').text('Mobile number must have 10 digits.');
            isValid = false;
        } else {
           console.log('valid');
           $('#WhatappError').hide();
           isValid = true;
        }
        if (ownaddress.trim() === '') {
            $('#ownaddressError').text('Your Address is required.');
            isValid = false;
        } else {
            $('#ownaddressError').text('');
        }
        if(email.trim() === ''){
            $('#emailError').text('Email id is required.');
            isValid = false;

        }
       else if (!emailpattern.test(email)) {
            $('#emailError').text('Email is incorrrect !');
            isValid = false;
        } else {
                console.log('done');
        }
        if(isValid){
            $('#nav-contact-tab').prop('disabled',false);
            $('#nav-contact-tab').addClass('show active');
            $('#nav-profile-tab').removeClass('show active');
        
            $("#nav-tabContent").find(".other_details").addClass("show active");
            $("#nav-tabContent").find(".con_details").removeClass("show active");
        }
    });
});
$(document).ready(function() {
    $('#pra_no').keyup(function() {
        var pra_no = $('#pra_no').val();
        if(pra_no.length < 16 || pra_no.length > 16){
            $('#parError').text('The PRA number should contain digit and maximum 16');
            isValid = false;
        }
        else{
            $('#parError').text('');
        }

    });
});
$(document).ready(function() {
    $('#parent_num').keyup(function() {
        var parent_num = $('#parent_num').val();
        if(parent_num.length < 10 || parent_num.length > 10){
            // console.log('done');
            $('#parent_numError').text('The PRA number should contain digit and maximum 10');
            isValid = false;
        }
        else{
            $('#parent_numError').text('');
        }

    });
});
$(document).ready(function() {
    $('#parent_num').keyup(function() {
        var parent_num = $('#parent_num').val();
        if(parent_num.length < 10 || parent_num.length > 10){
            // console.log('done');
            $('#parent_numError').text('number must be maximum 10 digit');
            isValid = false;
        }
        else{
            $('#parent_numError').text('');
        }

    });
});
$(document).ready(function() {
    $('#tel').keyup(function() {
        var parent_num = $('#tel').val();
        if(parent_num.length < 10 || parent_num.length > 10){
            // console.log('done');
            $('#telError').text('Number must be maximum 10 digit');
            isValid = false;
        }
        else{
            $('#telError').text('');
        }
    });
});
$(document).ready(function() {
    $('#officetel').keyup(function() {
        var parent_num = $('#officetel').val();
        if(parent_num.length < 10 || parent_num.length > 10){
            // console.log('done');
            $('#officeError').text('Number must be maximum 10 digit');
            isValid = false;
        }
        else{
            $('#officeError').text('');
        }
    });
});
$(document).ready(function() {
    $('#state').keyup(function() {
        var state = $('#state').val();
        var regEx = /^[A-Za-z]+$/;
       if(!regEx.test(state)){
            $('#stateError').text('Only Alphabets are allowed');
        }
        else{
            $('#stateError').text('');
        }
    });
});
$(document).ready(function() {
    $('#district').keyup(function() {
        var state = $('#district').val();
        var regEx = /^[A-Za-z]+$/;
       if(!regEx.test(state)){
            $('#districtError').text('Only Alphabets are allowed');
        }
        else{
            $('#districtError').text('');
        }
    });
});
$(document).ready(function() {
    $('#Caste').keyup(function() {
        var state = $('#Caste').val();
        var regEx = /^[A-Za-z]+$/;
       if(!regEx.test(state)){
            $('#CasteError').text('Only Alphabets are allowed');
        }
        else{
            $('#CasteError').text('');
        }
    });
});
$(document).ready(function() {
    $('#religion').keyup(function() {
        var state = $('#religion').val();
        var regEx = /^[A-Za-z]+$/;
       if(!regEx.test(state)){
            $('#religionError').text('Only Alphabets are allowed');
        }
        else{
            $('religionError').text('');
        }
    });
});
$(document).ready(function() {
    $('#pob').keyup(function() {
        var state = $('#pob').val();
        var regEx = /^[A-Za-z]+$/;
       if(!regEx.test(state)){
            $('#pobError').text('Only Alphabets are allowed');
        }
        else{
            $('#pobError').text('');
        }
    });
});
$(document).ready(function() {
    $('#Occupation').keyup(function() {
        var state = $('#Occupation').val();
        var regEx = /^[A-Za-z]+$/;
       if(!regEx.test(state)){
            $('#OccupationError').text('Only Alphabets are allowed');
        }
        else{
            $('#OccupationError').text('');
        }
    });
});
$(document).ready(function() {
    $('#gaurdian').keyup(function() {
        var state = $('#gaurdian').val();
        var regEx = /^[A-Za-z\s]+$/;
       if(!regEx.test(state)){
        console.log('done');
            $('#gaurdianError').text('Only Alphabets are allowed');
        }
        else{
            console.log('sum');
            $('#gaurdianError').text('');
        }
    });
});
$(document).ready(function() {
    $('#relation').keyup(function() {
        var relation = $('#relation').val();
       if(!/^[A-Za-z\s]+$/.test(relation)){
            $('#relationError').text('Only Alphabets are allowed');
        }
        else{
            $('relationError').text('');
        }
    });
});
$(document).ready(function() {
    $('#income').keyup(function() {
        var income = $('#income').val();
        if(income.length < 4 ){
            // console.log('done');
            $('#incomeError').text('income must be maximum 4 digit');
            isValid = false;
        }
        else{
            $('#incomeError').text('');
        }
    });
});
$(document).ready(function() {
    $("#changesButton").click(function(event) {
      event.preventDefault(); // Prevent default button behavior
    
      var selectedGender = $("input[name='gender']:checked").val();
      var Physically_challenged = $("input[name='Physically_challenged']:checked").val();
      var marrage = $("input[name='marital_status']:checked").val();
      var selectedGender = $("input[name='gender']:checked").val();
      var caste = $("input[name='caste']:checked").val();
      var dob = $("#dob").val();
      if (selectedGender === undefined) {
        $("#Gennerror").text("Please select a gender");
      }
      
      else {
        // Gender selected, perform further actions
        $("#Generror").text(""); // Clear any previous error messages
        // ... Your code here
      }
      if (caste === undefined) {
        $("#casteError").text("Please select a Caste");
      } 
      else {
        $("#casteError").text(""); // Clear any previous error messages
      }
      if (Physically_challenged === undefined) {
        $("#Physically_challengedError").text("Please select a Caste");
      } 
      else {
        $("#Physically_challengedError").text(""); // Clear any previous error messages
      }
      if (caste === undefined) {
        $("#marrageError").text("Please select a Caste");
      } 
      else {
        $("#marrageError").text(""); // Clear any previous error messages
      }
      if(dob === ''){
         $("#dobError").text("Please select a Date of Birth");
      }
      else{
          $('#nav-Qulification-tab').prop('disabled',false);
          $('#nav-Qulification-tab').addClass('show active');
          $('#nav-contact-tab').removeClass('show active');
      
          $("#nav-tabContent").find(".other_details").removeClass("show active");
          $("#nav-tabContent").find(".education").addClass("show active");
       
      }
    

      
    });
  });

  $(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault()
        var Alphabets = /[a-zA-Z\s]+/;
        var ssc_place = $('#ssc_place').val();
        var ssc_borad = $('#ssc_borad').val();
        var ssc_dor = $('#ssc_dor').val();
        var ssc_esn = $('#ssc_esn').val();
        var ssc_tm = $('#ssc_tm').val();
        var hsc_place = $('#ssc_place').val();
        var hsc_borad = $('#hsc_borad').val();
        var hsc_dor = $('#hsc_dor').val();
        var hsc_esn = $('#hsc_esn').val();
        var hsc_tm = $('#hsc_tm').val();
        var hsc_markobtn = $('#hsc_markobtn').val();
        var hsc_markno = $('#hsc_marksno').val();
        var University = $('#University').val();
        var last_year = $('#last_year').val();
      
        // var year_parttner =/[0-9]{4}/;
        var seatno = /[0-9]9/;
        // var marksno = /^[a-zA-Z0-9\s]+$/;
        
        let isValid = true

        // Validate name field
        if (ssc_place.trim() === '') {
            $('#ssc_placeError').text('This field is requierd .');
            isValid = false;
        }
        else if(!Alphabets.test(ssc_place)){
            $('#ssc_placeError').text('numbers are not Allowed.');
            isValid = false;
        } 
        else {
            $('#ssc_placeError').text('');
          console.log('done2');
        
        }
        if (ssc_borad.trim() === '') {
            $('#ssc_boradError').text('This field is requierd .');
            isValid = false;
        } 
        else if(!Alphabets.test(ssc_borad)){
            $('#ssc_boradError').text('numbers are not Allowed.');
            isValid = false;
        } 
        else {
            $('#ssc_boradError').text('');
            console.log('done3');
        }
        if (ssc_dor.trim() === '') {
            $('#ssc_dorError').text('This field is requierd .');
            isValid = false;
        } else {
            $('#ssc_dorError').text('');
            console.log('done4');
        }
        if (ssc_esn.trim() === '') {
            $('#ssc_esnError').text('This field is requierd .');
            isValid = false;
        
        }
         else {
            $('#ssc_esnError').text('');
            console.log('done5');
        }
        if (ssc_tm.trim() === '') {
            $('#ssc_tmError').text('This field is requierd .');
            isValid = false;
        }
         else {
            $('#ssc_tmError').text('');
            console.log('done6');
        }
        if (hsc_place.trim() === '') {
            $('#hsc_placeError').text('This field is requierd .');
            isValid = false;
        } 
        else if(!Alphabets.test(hsc_place)){
            $('#hsc_placeError').text('numbers are not Allowed.');
            isValid = false;
        } 
        else {
            $('#hsc_placeError').text('');
            console.log('done7');
        }
        if (hsc_borad.trim() === '') {
            $('#hsc_boradError').text('This field is requierd .');
            isValid = false;
        } 
        else if(!Alphabets.test(hsc_borad)){
            $('#hsc_boardError').text('numbers are not Allowed.');
            isValid = false;
        } 
        else {
            $('#hsc_boradError').text('');
            console.log('indian');
        }
        if (hsc_dor.trim() === '') {
            $('#hsc_dorError').text('This field is requierd .');
            isValid = false;
        } else {
            $('#hsc_dorError').text('');
            console.log('done8');
        }
        if (hsc_esn.trim() === '') {
            $('#hsc_esnError').text('This field is requierd .');
            isValid = false;
        } else {
            $('#hsc_esnError').text('');
            console.log('done9');
        }
        if (hsc_tm.trim() === '') {
            $('#hsc_tmError').text('This field is requierd .');
            isValid = false;
        } else {
            $('#hsc_tmError').text('');
            console.log('done10');
        }
        if (hsc_markobtn.trim() === '') {
            $('#hsc_markobtnError').text('This field is requierd .');
            isValid = false;
        } else {
            $('#hsc_markobtnError').text('');
            console.log('done11');
        }
        if (hsc_markno.trim() === '') {
            $('#hsc_marknoError').text('This field is requierd .');
            isValid = false;
        }
       
         else {
            $('#hsc_marknoError').text('');
            console.log('');
        }   

        if (University.trim() === '') {
            $('#UniversityError').text('This field is requierd .');
            isValid = false;
        } else {
            $('#UniversityError').text('');
            console.log('done13');
        }   
        if (last_year.trim() === '') {
            $('#last_yearError').text('This field is requierd .');
            isValid = false;
        // } else if(!year_parttner.test('last_year')){
        //     $('#last_yearError').text('year contain 4 number.');
        //     isValid = false;
        }
        else {
            $('#last_yearError').text('');
            console.log('done14');
        } 
        if (University.trim() === '') {
            $('#UniversityError').text('This field is requierd .');
            isValid = false;
        }
        else if(!Alphabets.test(University)){
            $('#UniversityError').text('numbers are not Allowed.');
            isValid = false;
        } 
        else {
            $('#UniversityError').text('');
            console.log('done15');
        }
       
        if ($("#agree").is(":checked")) {
            $('#selectagreeError').text("Thank you for agreeing to the terms and conditions!");
          } else {
            $('#selectagreeError').text("Please agree to the terms and conditions.");
          }
        if (isValid){
           
            var formData = $(this).serializeArray();
            var data = {};
            $.each(formData, function(_, field) {
                data[field.name] = field.value;
              });
              console.log(JSON.stringify(data));
            //   $.ajax({
            //     url: "https://example.com/api/insert",
            //     type: "POST",
            //     data: JSON.stringify(data),
            //     contentType: "application/json",
            //     success: function(response) {
            //       console.log("Data saved successfully!");
            //       // Perform any additional actions if needed
            //     },
            //     error: function(xhr, status, error) {
            //       console.log("An error occurred:", error);
            //     }
            //   });
              console.log('The form is submited');
            //   this.reset();
            //   location.reload();
        }
       
});
  });

  $(document).ready(function() {
    $('#ssc_tm').on('input', function() {
      var marks = parseFloat($('#ssc_markobtn').val());
      var totalMarks = parseFloat($('#ssc_tm').val());
      
      if (!isNaN(marks)) {
        var percentage = (marks / totalMarks) * 100;
        $('#ssc_per').val(percentage.toFixed(2) + '%');
      } else {
        $('#ssc_per').val('');
      }
    });
  });
  $(document).ready(function() {
    $('#hsc_tm').on('input', function() {
      var hsc_marks  = parseFloat($('#hsc_markobtn').val());
      var  totalMarks = parseFloat($('#hsc_tm').val());
      
      if (!isNaN(hsc_marks)) {
        var percentage = (hsc_marks / totalMarks) * 100;
        $('#hsc_per').val(percentage.toFixed(2) + '%');
      } else {
        $('#hsc_per').val('');
      }
    });
  });
  $(document).ready(function() {
    $('#imageUpload').on('change', function() {
      var file = this.files[0];
      
      if (file.size > 500 * 1024) { // Convert 500KB to bytes
        $("#photoError").text("The photo is more then 500kb");
        $(this).val(''); // Clear the file input value
      }
    });
  });
  $(document).ready(function() {
    $('#imageUploads').on('change', function() {
      var file = this.files[0];
      
      if (file.size > 50 * 1024) { // Convert 500KB to bytes
        $("#signError").text("The photo is more then 200kb");
        $(this).val(''); // Clear the file input value
      }
    });
  });
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("hideMenu").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("hideMenu").style.display = "none";
}
$(document).ready(function() {
    $('#admissionModal').click()
  });
  


 function changeSttream(id){
    $.get("https://mh.printallresults.com/api/v1/class/bystreamid/"+id, function(result){
          if(result.status=="true"){
            $("#class_detail").append('<option value="" selected></option>');
            for (let i = 0; i < result.data.length; i++) {
                $("#class_detail").append('<option value="'+result.data[i].id+'">'+result.data[i].class_name+'</option>');
            }
          }
        });
 }