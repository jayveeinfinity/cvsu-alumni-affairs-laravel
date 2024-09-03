@extends('layouts.app')

@section('title')
    Sign up
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="container">
            <div class="card mt-3">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('userquest.store') }}" method="POST">
                        @csrf
                        <h4>Personal Information</h4>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email..." value="{{ old('email') }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Student Number</label>
                            <input class="form-control" type="text" id="student_number" name="student_number" placeholder="Student Number..." value="{{ old('student_number') }}" maxlength="9" required>
                            @error('student_number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name..." value="{{ old('name') }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Course</label>
                                    <input class="form-control" type="text" id="course" name="course" placeholder="Course..." value="{{ old('course') }}" required>
                                    @error('course')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Year graduated</label>
                                    <select class="form-control" name="year_graduated" required>
                                        <option value="" selected disabled>Choose year...</option>
                                        @php
                                            for($i = date('Y'); $i >= 1906; $i--) {
                                                echo '<option value="' . $i . '" ' . (old('year_graduated') == $i ? "selected" : "") . '>' . $i . '</option>';
                                            }
                                        @endphp
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 text-right">
                            <button class="btn btn-primary">Create an account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection