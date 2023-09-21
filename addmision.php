<?php include 'component/header.php' ?>
<div class="container ">
  <div class="row mt-3">
    <div class="logo d-flex justify-content-center">
      <img src="assets\colege_logo.png" class="" alt="">
    </div>
    <div class="college-info">
      <p class="text-uppercase text-center fw-bold">SEVA FOUNDATION’S</p>
      <h2 class="text-uppercase text-center fw-bold">Hitkarni College of law, Mumbai </h2>
      <p class="text-capitalize text-center fw-bold">(Affiliated to University of Mumbai)</p>
      <address class="text-capitalize text-center fw-bold">Lallu Bhai Compound, Mankhurd- 400 043</address>
    </div>
    <form action="#" class="college_form" id="collegeRegistration">
      <input type="hidden" name="client_id" id="client_id" value="2">
      <h1 class="text-center">Registration</h1>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
          role="tab" aria-controls="nav-home" aria-selected="true">Personal info</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
          id="nextButton">Contact info</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
          role="tab" aria-controls="nav-contact" aria-selected="false">Other Info</button>
        <button class="nav-link" id="nav-Qulification-tab" data-bs-toggle="tab" data-bs-target="#nav-Qulification"
          type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Qulification</button>
      </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active my-5 home_details" id="nav-home" role="tabpanel"
          aria-labelledby="nav-home-tab">
          <p class="mt-4"> </p>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="mb-5 form-groups">
                <div class="form-group-img">
                  <div for="photo" class="photo-label">
                    <img src="assets\img\image-gallery.png" alt="" class="photo_icon" srcset="">
                    <p class="text-center"> Affix I Card Size Photograph maximum 500kb</p>
                    <input type="file" class="form-control" placeholder="ENTER YOUR SURNAME HERE .. " id="imageUpload">
                    <span id="photoError" style="color:red;" class="error"></span>
                  </div>
                  <span id="imageContainer" class="d-inline-block"></span>

                  <div class="sign-label text-center">
                    <input type="file" class="form-control" id="imageUploads" placeholder="ENTER YOUR SURNAME HERE .. ">
                    <img src="assets\img\image-gallery.png" alt="" srcset="" class="sign_icon"> <label
                      for="imageUploads">&nbsp; Sign max:50kb</label>
                    <span id="signError" class="error"></span>
                  </div>
                  <span id="imageContainers" class="d-inline-block"></span>
                </div>
              </div>
            </div>
            <div class="col-12 mt-3 col-md-6">
              <div class="mb-3 form-groups">
                <label for="Surname" class="form-label">Surname</label>
                <input type="text" class="form-control" name="student_lname" id="surname"
                  placeholder="ENTER YOUR SURNAME HERE .. ">
                <span id="surnameError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="firstname" class="form-label required">First Name</label>
                <input type="text" class="form-control" name="student_fname" id="firstname"
                  placeholder="ENtTER YOUR FIRST NAME HERE .. ">
                <span id="firstnameError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="mother" class="form-label required">Mother's Name</label>
                <input type="text" class="form-control" name="mother_fname" id="mothername"
                  placeholder="ENtTER YOUR MOTHER'S NAME HERE .. ">
                <span id="motherError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="fathername" class="form-label required">Father's Name</label>
                <input type="text" class="form-control" name="father_fname" id="fathername"
                  placeholder="ENtTER YOUR FATHER AME HERE .. ">
                <span id="fatherError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="pra_no" class="form-label"> PNR no:- <span>( Not for first year students)</span></label>
                <input type="text" class="form-control" id="pra_no" name="pra_no" placeholder="Type">
                <span id="parError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="Ua_formno" class="form-label required">Univercity Application Form no</label>
                <input type="text" class="form-control" id="Ua_formno" name="Ua_formno"
                  placeholder="Univercity Application Form no..">
                <span id="Ua_formnoError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="abc_id" class="form-label required">ABC ID</label>
                <input type="text" class="form-control" id="abc_id" name="abc_id"
                  placeholder="Academic Bank odf Creadit..">
                <span id="abc_idError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="aadhar" class="form-label required">Aadhar Card </label>
                <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="AAdhar Card">
                <span id="aadharError" class="error"></span>
              </div>

              <div class="mb-3 form-groups">
                <label for="Program" class="mb-2">Programess Offered</label>
                <select class="form-select" id="Program" name="Program" onChange="changeSttream(this.value)"
                  aria-label="Default select example">

                </select>
                <span id="ProgramError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="class_detail" class="mb-2">Year</label>
                <select class="form-select" id="class_detail" name="class_detail" aria-label="Default select example">

                </select>
                <span id="w_yearError" class="error"></span>
              </div>
            </div>
            <button id="nextButton" value="next" class="nextButton">Next</button>
          </div>
        </div>

        <div class="tab-pane fade con_details" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="row pb-3">

            <div class="col-12 col-md-6 mt-3">
              <h5 class="text-center fw-bold">Your Contact Details</h5>
              <div class="mb-3 form-groups">
                <label for="ownaddress" class="form-label">Address</label>
                <textarea class="form-control" placeholder="Type here.." id="ownaddress" name="ownaddres"
                  row="3"></textarea>
                <span id="ownaddressError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="mobile" class="form-label required">Mobile number</label>
                <input type="text" class="form-control" id="number" name="Phonenumber"
                  placeholder="Enter your phone number">
              </div>
              <span id="numberError" class="error"></span>
              <div class="mb-3 form-groups">
                <label for="Whatapp" class="form-label required">Whatapp number</label>
                <input type="text" class="form-control" id="Whatapp" name="Whatapp"
                  placeholder="Enter your phone number">
              </div>
              <span id="WhatappError" class="error"></span>

              <div class="mb-3 form-groups">
                <label for="tel" class="form-label"> Tel no :-</label>
                <input type="text" class="form-control" id="tel" name="telno" placeholder="Enter your Telphone number">
                <span id="telError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="tel" class="form-label required"> Email id</label>
                <input type="email" class="form-control" id="email" name="email_id" placeholder="Enter your email">
                <span id="emailError" class="error"></span>

              </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <h5 class="text-center fw-bold">Your Parent's Details</h5>
              <div class="mb-3 form-groups">
                <label for="native_place" class="form-label">Native Place</label>
                <textarea class="form-control" name="Native_Place" placeholder="Type here.." id="floatingTextarea"
                  id="native_place" row="3"></textarea>
              </div>
              <div class="mb-3 form-groups">
                <label for="parent_num" class="form-label">Parent's number</label>
                <input type="text" class="form-control" id="parent_num" name="Parent's_number"
                  placeholder="Enter your parents number...">
              </div>
              <span id="parent_numError" class="error"></span>
            </div>
            <button id="changeButton" class="nextButton">Next </button>
          </div>
        </div>

        <div class="tab-pane fade other_details" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="row pb-3">
            <div class="col-12 col-md-6 mt-3">
              <div class="mb-3">
                <label for="" class="form-label required">Caste</label><br>
                <span id="casteData"></span>

                <br>
                <span id="casteError" class="error"></span>
              </div>
              <div class="mb-3">
                <label for="" class="form-label required">Physically challenged students</label><br>
                <input type="radio" name="Physically_challenged" id="yes">
                <label for="yess" class="form-label">Yes</label> &nbsp;&nbsp;
                <input type="radio" id="no" name="Physically_challenged">
                <label for="no" class="form-label">No</label> &nbsp;&nbsp;

                <br>
                <span id="Physically_challengedError" class="error"></span>
              </div>
              <div class="mb-3">
                <label for="" class="form-label required">Gender</label><br>
                <input type="radio" name="gender" id="Male">
                <label for="Male" class="form-label">Male</label> &nbsp;&nbsp;
                <input type="radio" id="Female" name="gender">
                <label for="Female" class="form-label">Female</label> &nbsp;&nbsp;
                <input type="radio" id="trans" name="gender">
                <label for="trans" class="form-label">Transgender</label> &nbsp;&nbsp;
                <br>
                <span id="Gennerror" class="error"></span>

              </div>
              <div class="mb-3">
                <label for="" class="form-label required"> Marital Status:</label><br>
                <input type="radio" name="marital_status" id="married">
                <label for="married" class="form-label">Married</label> &nbsp;&nbsp;
                <input type="radio" id="unmarried" name="marital_status">
                <label for="unmarried" class="form-label">Unmarried</label> &nbsp;&nbsp;<br>
                <span id="marrageError" class="error"></span>
                <div class="mb-3 form-groups">
                  <label for="dob" class="form-label required">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob">
                  <span id="dobError" class="error"></span>
                </div>
                <div class="mb-3 form-groups">
                  <label for="pob" class="form-label required">Place of Birth</label>
                  <input type="text" class="form-control" placeholder="Place of Birth..." id="pob" name="pob">
                  <span id="pobError" class="error"></span>
                </div>
                <div class="mb-3 form-groups">
                  <label for="District" class="form-label">District:-</label>
                  <input type="text" class="form-control" name="District" placeholder="District" id="district">
                  <span id="districtError" class="error"></span>
                </div>
                <div class="mb-3 form-groups">
                  <label for="state" class="form-label">State:-</label>
                  <input type="text" class="form-control" placeholder="State" name="state" id="state">
                  <span id="stateError" class="error"></span>

                </div>
                <div class="mb-3 form-groups">
                  <label for="Sub_Caste" class="form-label">Sub Caste:-</label>
                  <input type="text" class="form-control" placeholder="Caste" id="Sub_Caste" name="Sub_Caste">
                  <span id="CasteError" class="error"></span>
                  <p class="text-dark fw-bold mb-2">Whether belongs to Scheduled Caste/Scheduled Tribe/ Nomadic Tribes/
                    Other Backward Classes.
                    If so mention the cast and sub caste. (attach copy of certificate)</p>
                </div>
                <div class="mb-3 form-groups">
                  <label for="Religion" class="form-label">Religion:</label>
                  <input type="text" class="form-control" placeholder="Religion" name="Religion" id="religion">
                  <span id="religionError" class="error"></span>
                </div>
              </div>

            </div>
            <div class="col-12 col-md-6 mt-3">
              <div class="mb-3 form-groups">
                <label for="gaurdian" class="form-label">Full Name of Father/Mother/Gaurdian</label>
                <input type="text" class="form-control" placeholder="Full name of Gaurdian ..." name="gaurdian"
                  id="gaurdian">
                <span id="gaurdianError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="Occupation" class="form-label">Guardian’s Occupation: </label>
                <input type="text" class="form-control" placeholder="Guardian’s Occupation ... " name="Occupation"
                  id="Occupation">
                <span id="OccupationError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="relation" class="form-label">Relation:</label>
                <input type="text" class="form-control" placeholder="Relation.... " id="relation" name="Relation">
                <span id="relationError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="telphone_gard" class="form-label">Tel: no </label>
                <input type="text" class="form-control" id="officetel" name="officetel" placeholder="Telphone number..."
                  id="telphone_gard">
                <span id="officeError" class="error"></span>
              </div>
              <div class="mb-3 form-groups">
                <label for="add_of_place_work" class="form-label">Working place address:- </label>
                <textarea class="form-control" placeholder="Type here.." id="add_of_place_work" row="3"
                  name="add_of_place_work"></textarea>
              </div>
              <div class="mb-3 form-groups">
                <label for="income" class="form-label">Family Income per year (from all sources) Rs. :</label>
                <input class="form-control" placeholder="Type here.." id="income" name="incone">
                <span id="incomeError" class="error"></span>
              </div>
            </div>
            <input type="button" value="Next" id="changesButton" class="nextButton">
          </div>
        </div>
        <div class="tab-pane fade education" id="nav-Qulification" role="tabpanel"
          aria-labelledby="nav-Qulification-tab">
          <div class="row">
            <div class="col-12 mt-3">
              <h5 class="text-center fw-bold required">Academic Record:</h5>


            </div>
            <!-- <div class="row"> -->
            <div class="row m-auto">
              <h5 class="text-start fw-bold my-5 required">SSC Record:</h5>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_place" class="form-label required">Name and Place of Institute: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="ssc_place"
                    id="ssc_place">
                  <span id="ssc_placeError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_borad" class="form-label required"> Board: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="ssc_borad"
                    id="ssc_borad">
                  <span id="ssc_boradError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_dor" class="form-label required"> Date of Result:- </label>
                  <input type="date" class="form-control" placeholder="Board...." name="ssc_dor" id="ssc_dor">
                  <span id="ssc_dorError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_esn" class="form-label required">Exam Seat No. </label>
                  <input type="text" class="form-control" placeholder="Exam Seat No....." name="ssc_esn" id="ssc_esn">
                  <span id="ssc_esnError" class="error"></span>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_obtain" class="mb-2">Class Obtain</label>
                  <select class="form-select" id="ssc_obtain" name="ssc_obtain" aria-label="Default select example">
                    <option selected value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_markobtn" class="required form-label"> Marks Obtain: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="ssc_markobtn"
                    id="ssc_markobtn">
                  <span id="ssc_markobtnError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_tm" class="form-label required"> Total Marks : </label>
                  <input type="text" class="form-control" placeholder="Class Obtained.." name="ssc_tm" id="ssc_tm">
                  <span id="ssc_tmError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="ssc_per" class="form-label required"> Percentage: </label>
                  <input type="text" class="form-control" placeholder="Class Obtained.." name="ssc_per" id="ssc_per">
                  <span id="ssc_perError" class="error"></span>
                </div>
              </div>
            </div>
            <div class="row m-auto">
              <h5 class="text-start fw-bold my-5 required">HSC Record:</h5>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_place" class="form-label required"> Name and Place of Institute: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="hsc_place"
                    id="hsc_place">
                  <span id="hsc_placeError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_borad" class="form-label required"> Board: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="hsc_borad"
                    id="hsc_borad">
                  <span id="#hsc_boradError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_dor" class="form-label required">Date of Result:- </label>
                  <input type="date" class="form-control" placeholder="Please Enter Here .." name="hsc_dor"
                    id="hsc_dor">
                  <span id="hsc_dorError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_esn" class="form-label required">Exam Seat No. </label>
                  <input type="text" class="form-control" placeholder="Exam Seat No....." name="hsc_esn" id="hsc_esn">
                  <span id="hsc_esnError" class="error"></span>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_obtain" class="mb-2">Class Obtain</label>
                  <select class="form-select" id="hsc_obtain" name="hsc_obtain" aria-label="Default select example">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_markobtn" class="form-label required"> Marks Obtain: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="hsc_markobtn"
                    id="hsc_markobtn">
                  <span id="hsc_markobtnError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_tm" class="form-label required"> Total Marks : </label>
                  <input type="text" class="form-control" placeholder="Class Obtained.." name="hsc_tm" id="hsc_tm">
                  <span id="hsc_tmError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 form-groups">
                  <label for="hsc_per" class="form-label required"> Percentage: </label>
                  <input type="text" class="form-control" placeholder="Class Obtained.." name="hsc_per" id="hsc_per">
                  <span id="hsc_perError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="mb-3 form-groups">
                  <label for="hsc_marksno" class="form-label required">H.S.C Mark Sheet no: </label>
                  <input type="text" class="form-control" placeholder="Please Enter Here .." name="hsc_marksno"
                    id="hsc_marksno">
                  <span id="hsc_marknoError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="mb-3 form-groups">
                  <label for="address_last_attended" class="form-label required">School/College last attended</label>
                  <textarea class="form-control" placeholder="Type here.." id="address_last_attended"
                    name="address_last_attended" row="3"></textarea>
                  <span></span>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="mb-3 form-groups">
                  <label for="University" class="form-label required">University/Board</label>
                  <input type="text" class="form-control" placeholder="Type here.." id="University"
                    name="University/Board">
                  <span id="UniversityError" class="error"></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="mb-3 form-groups">
                  <label for="last_year" class="form-label required">Year:</label>
                  <input type="text" class="form-control" placeholder="Type here.." id="last_year"
                    name="University/Board">
                  <span id="last_yearError" class="error"></span>
                </div>
              </div>
            </div>

            <p>I desire to offer the following Subjects : (Indicate by *Mark)</p>
            <p class="fw-bold text-space text-center text-sm-start">The information furnished in this form is true to
              be best of my knowledge, and I am aware that my admission will stand cancelled if any of the information
              is found to be incorrect.</p>
            <p class="text-end mb-5">Yours Obediently,</p>

            <!-- </div> -->
            <hr>
            <h5 class="text-center fw-bold my-4 text-uppcase">FOR THE GUARDIAN</h5>
            <p class="fw-bold text-space text-center text-sm-start">I have permitted my ward to join your College and
              shall see that he/ she observe the rules of the College. In particular I shall be vigilant to ensure that
              he/ she attends the minimum of 75% lectures and practical. I also state that the detail of the information
              supplied by him/her in this application is correct</p>
            <h5 class="text-center fw-bold my-4 text-uppcase">Declaration by Student</h5>
            <p class="fw-bold text-space text-center text-sm-start">I hereby declare that I have read all the rules and
              regulations framed by the college authorities as given in the college prospectus, which are presntly in
              force</p>
            <p class="fw-bold text-space text-center text-sm-start">I may not be granted terms or allowed to appear for
              the College/ University Examination if my lectures and tutorials falls short of 75%</p>
            <p class="fw-bold text-space text-center text-sm-start">I hereby declare that I have not registerd my name
              at any other institution for any full time course. </p>
            <p class="fw-bold text-space text-center text-sm-start">I hereby declare that the informaton filled in by me
              in this form is accurate and true to the best of my knowledge I will be responsible for any discrepancy
              out of the form signed by me and I undertake that, in absence of any document the final admission will not
              be granted and/ or admission will stand cancaled </p>
            <p class="fw-bold text-space text-center text-sm-start">I hereby give my consent for use of my contact
              details for educational </p>
            <p class="fw-bold text-space text-center text-sm-start">I am aware that as per University Circular No. SW/42
              of 2015 did.29th Oct 2015, I am compulsonly required to give an undertaking on <a
                href="https://www.antiragging.in">https://www.antiragging.in</a> & <a
                href="https://www.amanmovement.org">https://www.amanmovement.org.</a> </p>
            <p class="fw-bold text-space text-center text-sm-start">If I will unable to fill up online fee up online fee
              concession form (i.e SCHOLARSHIP/FREESHIP form govt of India) with the prescrible given time limit. I will
              not get refund and I will not held responsible to institute</p>
            <p class="fw-bold text-space text-center text-sm-start">If student have ATKT in FY in SY , then this
              students not eligible for TY. In case this circumstances students get admission then this student
              admission cancel by college & and student responsible for that.</p>

            <div class="mb-3 form-groups">
              <input type="checkbox" name="agree" id="agree">
              <label for="agree" name="agree">I Agree all the guidlines</label>
              <span id="selectagreeError" class="error"></span>
            </div>
            <div class="mb-3 form-groups">
              <input type="submit" class="form-control" id="submit" placeholder="Please Enter Here ..">
            </div>
          </div>
        </div>
      </div>

  </div>

  </form>

</div>
<?php include 'component/footer.php' ?>
<script>
  $(document).ready(function () {
    $.get("https://mh.printallresults.com/api/v1/student/category/2", function (result) {
      for (let i = 0; i < result.length; i++) {
        $("#casteData").append('<input type="radio" value="' + result[i].std_category + '" name="std_category_id" id="' + result[i].id + '"><label for="' + result[i].id + '" class="form-label" >' + result[i].std_category + '</label> &nbsp;&nbsp;');
      }
    });

    $.get("https://mh.printallresults.com/api/v1/stream/byid/2", function (result) {
      if (result.status == "true") {
        $("#Program").append('<option value="" selected></option>');
        for (let i = 0; i < result.data.length; i++) {
          $("#Program").append('<option value="' + result.data[i].id + '">' + result.data[i].stream_name + '</option>');
        }
      }
    });
  });
</script>