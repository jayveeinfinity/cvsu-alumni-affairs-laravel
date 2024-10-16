@extends('layouts.job')

@section('main-content')
<!-- breadcrumb area -->
<div class="rts__section breadcrumb__background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative d-flex justify-content-between align-items-center">
                <div class="breadcrumb__area max-content breadcrumb__padding">
                    <div class="rts__job__card__big bg-transparent p-0 position-relative z-1 flex-wrap justify-content-between d-flex gap-4 align-items-center">
                        <div class="d-flex gap-4 gap-md-5 align-items-center flex-md-row flex-column mx-auto mx-md-0">
                        <div class="author__icon rounded-2">
                                <img src="/storage/images/avatars/default.png" alt="">
                            </div>
                            <div class="job__meta w-100 d-flex text-center text-md-start flex-column gap-2">
                                <div>
                                    <h3 class="job__title h3 mb-0">{{ $user->profile->first_name }} {{ $user->profile->last_name }} </h3>
                                </div>
                                <div class="d-flex gap-3 justify-content-center justify-content-md-start flex-wrap mb-3 mt-2">
                                    <!-- <div class="d-flex gap-2 align-items-center">
                                        Software Engineer
                                    </div> -->
                                    @if($user->profile && $user->profile->adddress)
                                        <div class="d-flex gap-2 align-items-center">
                                            <i class="fas fa-map-marker-alt"></i> {{ $user->profile->adddress }}
                                        </div>
                                    @endif
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fas fa-envelope"></i> {{ $user->email }}
                                    </div>
                                    @if($user->profile && $user->profile->phone_number)
                                        <div class="d-flex gap-2 align-items-center">
                                            <i class="fas fa-phone"></i> {{ $user->profile->phone_number }}
                                        </div>
                                    @endif
                                    <!-- <div class="d-flex gap-2 align-items-center">
                                        <i class="fas fa-briefcase"></i> Full Time
                                    </div> -->
                                </div>
                                <div class="job__tags d-flex justify-content-center justify-content-md-start flex-wrap gap-3">
                                    <a href="#">React</a>
                                    <a href="#">Nest Js</a>
                                    <a href="#">C++</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb__apply d-flex gap-3 max-content">
                        <!-- <a href="#" class="rts__btn apply__btn no__fill__btn">Shortlist</a> -->
                        <!-- <a href="#" class="rts__btn be-1 apply__btn fill__btn">Cv Download</a> -->
                    </div>             
                </div>
                <div class="breadcrumb__area__shape d-flex gap-4 justify-content-end align-items-center">
                    <div class="shape__one common">
                    
                    </div>
                    <div class="shape__two common">
                        <img src="assets/img/breadcrumb/shape-2.svg" alt="">
                    </div>
                    <div class="shape__three common">
                        <img src="assets/img/breadcrumb/shape-3.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- job list one -->
<div class="rts__section section__padding">
    <div class="container">
        <div class="my__profile__tab p-0 pb-5 radius-16 bg-white">
            <h3 class="mb-3">Edit profile</h3>
            <nav>
                <div class="nav nav-tabs">
                    <a class="nav-link" href="#info" data-tab="info">Personal Details</a>
                    <a class="nav-link" href="#education" data-tab="education">Educational Background</a>     
                    <a class="nav-link active" href="#experience" data-tab="experience">Work Experience</a>                         
                </div>
            </nav>
            <div class="tab-content clearfix">
                <div class="my__details tab-pane" id="info">
                    <!-- <div class="info__top">
                        <div class="author__image">
                            <img class="p-4" src="assets/img/icon/google.svg" alt="">
                        </div>
                        <div class="select__image">
                            <label for="file" class="file-upload__label">Upload New Photo</label>
                            <input type="file" class="file-upload__input" id="file" required="">
                        </div>
                        <div class="delete__data">
                            <i class="fa-light fa-trash-can"></i>
                        </div>
                    </div> -->
                    <div class="info__field mt-5">
                        <div class="alert alert-danger pl-0 d-none" id="addAlumniAlert">
                            <ul class="mb-0" id="errorList"></ul>
                        </div>
                        <h6>Personal Details</h6>
                        <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Type first name..." value="{{ $user->profile->first_name }}" required>
                            </div>
                            <div class="rt-input-group">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Type last name..." value="{{ $user->profile->last_name }}" required>
                            </div>
                        </div>
                        <div class="row row-cols-1">
                            <div class="rt-input-group">
                                <label for="about">About</label>
                                <textarea name="about" id="about" placeholder="Tell us about yourself..." required>{{ $user->profile->about }}</textarea>
                            </div>
                        </div>
                        <h6>Contact Details</h6>
                        <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="phone_number">Phone</label>
                                <input type="tel" name="phone_number" id="phone_number" placeholder="Type phone number..." value="{{ $user->profile->phone_number }}" required>
                            </div>
                            <div class="rt-input-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Type email..." value="{{ $user->email }}" readonly disabled>
                            </div>
                        </div>
                        <div class="row row-cols-sm-2 row-cols-1 g-3 flex-row-reverse">
                            <button type="submit" class="rts__btn fill__btn mx-1" data-click="saveProfile">Save</button>
                        </div>

                        <!-- <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="ws">Working Schedule</label>
                                <select name="ws" id="ws" class="form-select">
                                    <option value="18">Day Shift</option>
                                    <option value="19">Night Shift</option>
                                </select>
                            </div>
                            <div class="rt-input-group">
                                <label for="wd">Working Day</label>
                                <select name="wd" id="wd" class="form-select">
                                    <option value="18">Sat - Thus</option>
                                    <option value="19">Mon - Fri</option>
                                    <option value="20">Mon - Sun</option>
                                </select>
                            </div>
                        </div>

                        <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="salary">Salary</label>
                                <select name="salary" id="salary" class="form-select">
                                <option value="1">Hourly</option>
                                <option value="1">Monthly</option>
                                <option value="1">Custom</option>
                                </select>
                            </div>
                            <div class="rt-input-group">
                                <label for="hp">How You Want To Pay?</label>
                                <select name="hp" id="hp" class="form-select">
                                    <option value="1">Monthly</option>
                                    <option value="2">Yearly</option>
                                </select>
                            </div>
                        </div>

                        <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="salarymin">Salary Min</label>
                                <select name="salary" id="salarymin" class="form-select">
                                <option value="1">1000 - 1500</option>
                                <option value="1">2000 - 2500</option>
                                <option value="1">3000 - 3500</option>
                                </select>
                            </div>
                            <div class="rt-input-group">
                                <label for="sm">Salary Max</label>
                                <select name="sm" id="sm" class="form-select">
                                    <option value="1">1000 - 1500</option>
                                    <option value="1">2000 - 2500</option>
                                    <option value="1">3000 - 3500</option>
                                </select>
                            </div>
                        </div>

                        <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="experience">Experience</label>
                            <input type="text" id="experience" placeholder="Enter Experience" required="">
                            </div>
                            <div class="rt-input-group">
                                <label for="qf">Qualification</label>
                                <input type="text" id="qf" placeholder="Enter Qualification" required="">
                            </div>
                        </div>

                        <div class="row row-cols-sm-2 row-cols-1 g-3">
                            <div class="rt-input-group">
                                <label for="ad">Application Deadline Date</label>
                            <input type="text" id="ad" placeholder="DD/MM/YY" required="">
                            </div>
                            <div class="rt-input-group">
                                <label for="vurl">Introduction Video URL</label>
                                <input type="text" id="vurl" placeholder="Link Here" required="">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="my__details tab-pane" id="education">
                    <div class="info__field mt-5">
                        <div class="alert alert-danger pl-0 d-none" id="addEducationalBackgroundAlert">
                            <ul class="mb-0" id="errorList"></ul>
                        </div>
                        <h6>Educational background <button class="btn btn-sm fill__btn border-6 font-xs" data-toggle="modal" data-target="#addEducationForm" data-backdrop="static" data-keyboard="false">Add</button></h6>
                        @if($user->profile->educations)
                            <p>No educational background yet. To add one, click add</p>
                        @endif
                    </div>
                </div>
                <div class="my__details tab-pane active" id="experience">
                    <div class="info__field mt-5">
                        <div class="alert alert-danger pl-0 d-none" id="addEducationalBackgroundAlert">
                                <ul class="mb-0" id="errorList"></ul>
                            </div>
                            <h6>Work Experience <button class="btn btn-sm fill__btn border-6 font-xs" data-toggle="modal" data-target="#addEducationForm" data-backdrop="static" data-keyboard="false">Add</button></h6>
                            @if($user->profile->educations)
                                <p>No educational background yet. To add one, click add</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addEducationForm" tabindex="-1" role="dialog" aria-labelledby="addEducationFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEducationFormTitle"><i class="fas fa-graduation-cap"></i> Add education form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger pl-0 d-none" id="addAlumniAlert">
                    <ul class="mb-0" id="errorList"></ul>
                </div>
                <div class="info__field">
                    <div class="row row-cols-1 g-3">
                        <div class="rt-input-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-select">
                                <option value="" selected disabled>Choose level...</option>
                                <option value="1">Primary</option>
                                <option value="2">Secondary</option>
                                <option value="3">Senior High</option>
                                <option value="4">College</option>
                                <option value="5">Graduate studies</option>
                            </select>
                        </div>
                        <div class="rt-input-group">
                            <label for="institution">Institution</label>
                            <input type="text" name="institution" id="institution" placeholder="Type institution..." required>
                        </div>
                        <div class="rt-input-group">
                            <label for="degree">Degree</label>
                            <input type="text" name="degree" id="degree" placeholder="Type degree..." required>
                        </div>
                        <div class="rt-input-group">
                            <label for="period_of_attendance_from">Period of Attendance (From):</label>
                            <input type="text" name="period_of_attendance_from" id="period_of_attendance_from" placeholder="Type year..." required>
                        </div>
                        <div class="rt-input-group">
                            <label for="period_of_attendance_to">Period of Attendance (To):</label>
                            <input type="text" name="period_of_attendance_to" id="period_of_attendance_to" placeholder="Type year..." required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-click="addAlumni">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
@endsection
@section('script')
<script>
    document.addEventListener("click", (e) => {
        e = e || window.event;
        var target = e.target || e.srcElement;
        switch(target.dataset.click) {
            case "saveProfile":
                var formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('first_name', $('#first_name').val());
                formData.append('last_name', $('#last_name').val());
                formData.append('about', $('#about').val());
                formData.append('phone_number', $('#phone_number').val());
                $.ajax({
                    method: "POST",
                    url: "{{ route('user.profile.update', ['user_id' => auth()->user()->id ]) }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) =>  {
                        toastr.success('Successfully added to alumni profiles!', 'Alumni added');
                        $('#addAlumniForm').modal('hide');
                    },
                    error: (response) => {
                        $('#errorList').empty();

                        if (response.responseJSON) {
                            const errors = response.responseJSON.errors;
                            for (const field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    const errorMessages = errors[field];
                                    errorMessages.forEach(function(message) {
                                        const listItem = $('<li></li>').text(`${message}`);
                                        $('#errorList').append(listItem);
                                    });
                                }
                            }

                            if ($('#addAlumniAlert').hasClass("d-none")) {
                                $('#addAlumniAlert').removeClass("d-none");
                            }
                        } else {
                            toastr.error('An unexpected error occurred.', 'Something went wrong...');
                        }
                    }
                });
                break;
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav-link');
        const tabPanes = document.querySelectorAll('.tab-pane');

        navLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // Remove 'active' class from all tabs
                navLinks.forEach(function (item) {
                    item.classList.remove('active');
                });

                // Add 'active' class to the clicked tab
                this.classList.add('active');

                // Hide all tab panes
                tabPanes.forEach(function (pane) {
                    pane.classList.remove('active');
                });

                // Show the associated tab pane
                const tabId = this.getAttribute('data-tab');
                const activePane = document.getElementById(tabId);
                activePane.classList.add('active');
            });
        });
    });
</script>
@endsection