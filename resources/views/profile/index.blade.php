@extends('layouts.app')

@section('title')
    Profile &sdot; 
@endsection

@section('main-content') 
<div class="container-fluid ils-gradient-warning-alt p-0 m-0" style="height: 300px;">
    <div style="height: 300px; background-image: url({{ asset('/images/landing/bahay-alumni.jpg') }}) ; background-size: cover; background-position: 100% 67%;"></div>
</div>
<div class="container-fluid">
    <div class="container p-3" style="margin-top: -300px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="text-white font-weight-bold">Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="bg-white px-3 py-0 breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ $googleUserInfo->picture }}" alt="User profile picture" style="border: 3px solid #408c40 !important;">
                                </div>
                                <h3 class="profile-username text-center mb-0">{{ auth()->user()->name }}</h3>
                                <p class="text-muted text-center"><span class="badge badge-pill badge-success"><i class="fas fa-check-circle"></i> Account Validated</span></p>
                                @if(!is_string($patronData) && $patronData['sex'])
                                    <hr>
                                    <strong class="text-success"><i class="fas fa-venus-mars mr-1" aria-hidden="true"></i> Sex</strong>
                                    @php
                                        switch($patronData['sex']) {
                                            case "M":
                                                $sex = 'Male';
                                                break;
                                            case "F":
                                                $sex = 'Female';
                                                break;
                                            default:
                                            case "O":
                                                $sex = 'Others';
                                                break;
                                        }
                                    @endphp
                                    <p class="text-muted">{{ $sex }}</p>
                                @endif
                                @if(!is_string($patronData) && $patronData['address'])
                                <hr>
                                <strong class="text-success"><i class="fas fa-map-marker-alt mr-1" aria-hidden="true"></i> Address</strong>
                                <p class="text-muted">{{ $patronData['address'] }}</p>
                                @endif
                                @if(!is_string($patronData) && $patronData['phone'])
                                <hr>
                                <strong class="text-success"><i class="fas fa-mobile-alt mr-1" aria-hidden="true"></i> Contact Number</strong>
                                <p class="text-muted">{{ $patronData['phone'] }}</p>
                                @endif
                                <hr>
                                <strong class="text-success"><i class="fas fa-at mr-1" aria-hidden="true"></i> Email</strong>
                                <p class="text-muted">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        @if(!is_string($patronData))
                        <div class="card">
                            <div class="card-header bg-gradient-success">
                                <h3 class="card-title text-white">Alumni Information</h3>
                            </div>
                            <div class="card-body">
                                <strong class="text-success"><i class="fas fa-id-card mr-1" aria-hidden="true"></i> Student Number</strong>
                                <p class="text-muted">{{ $patronData['cardnumber'] }}</p>
                                @if($patronData['sort2'])
                                <hr>
                                <strong class="text-success"><i class="fas fa-university mr-1" aria-hidden="true"></i> College & Course</strong>
                                <p class="text-muted"><b>{{ $patronData['sort2'] }}</b> ({{ $patronData['sort1'] }})</p>
                                @endif
                                @if($patronData['sort2'])
                                <hr>
                                <strong class="text-success"><i class="fas fa-glasses mr-1" aria-hidden="true"></i> Major / Specialization </strong>
                                <p class="text-muted"><b>{{ $patronData['sort2'] }}</b> ({{ $patronData['sort1'] }})</p>
                                @endif
                                @if($patronData['dateexpiry'])
                                <hr>
                                <strong class="text-success"><i class="fas fa-graduation-cap mr-1" aria-hidden="true"></i> Year Graduated</strong>
                                <p class="text-muted">{{ Carbon\Carbon::parse($patronData['dateexpiry'])->format('Y') }}</p>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <!-- <li class="nav-item"><a class="nav-link active" href="#overview" data-toggle="tab">Overview</a></li> -->
                                    <li class="nav-item"><a class="nav-link active" href="#educational" data-toggle="tab">Educational Background</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work Experience</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#certification" data-toggle="tab">Certification & Awards</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="educational">
                                        <p class="font-weight-bold mb-0">Bachelor of Science in Information Technology</p>
                                        <p class="text-muted mb-0">Cavite State Univeristy Main Campus</p>
                                        <p class="font-weight-bold"><em>2014 - 2020</em></p>
                                        <hr>
                                        <p class="font-weight-bold mb-0">Tanza National Trade School</p>
                                        <p class="text-muted mb-0">Computer Hardware Servicing</p>
                                        <p class="font-weight-bold"><em>2010 - 2014</em></p>
                                    </div>
                                    <div class="tab-pane" id="work">
                                        <p class="font-weight-bold mb-0">Computer Programmer I</p>
                                        <p class="text-muted mb-0">Cavite State Univeristy Main Campus Library</p>
                                        <p class="font-weight-bold"><em>June 2021 - Present</em></p>
                                        <hr>
                                        <p class="font-weight-bold mb-0">Junior Programmer</p>
                                        <p class="text-muted mb-0">Novelis IT Solutions (Generika Drugstore)</p>
                                        <p class="font-weight-bold"><em>September 2019 - June 2021</em></p>
                                    </div>
                                    <div class="tab-pane" id="certification">
                                        <h5>Certifications and Awards</h5>
                                        <p class="text-muted">No certifications and awards yet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection