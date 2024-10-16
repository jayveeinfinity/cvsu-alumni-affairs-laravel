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
                                        @if($user->profile && $user->profile->phone_number)
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fas fa-phone"></i> {{ $user->profile->phone_number }}
                                            </div>
                                        @endif
                                        <div class="d-flex gap-2 align-items-center">
                                            <i class="fas fa-envelope"></i> {{ $user->email }}
                                        </div>
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
                        <a class="nav-link active" href="#info">Personal Details</a>
                        <a class="nav-link" href="#education">Educational Background</a>     
                        <a class="nav-link" href="#experience">Work Experience</a>                         
                    </div>
                </nav>
                <div class="my__details" id="info">
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
            </div>
        </div>
    </div>
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
</script>
@endsection