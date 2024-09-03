@extends('layouts.admin')

@section('title')
    Alumni Directory &sdot;
@endsection

@section('main-content-header')
<div class="content-header" style="background-image: url('/images/landing/library.jpg'); background-size: cover; background-position: 100% 70%; background-repeat: no-repeat;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a class="badge badge-primary float-sm-left mb-3" href="{{ route('admin.dashboard') }}"><i class="fas fa-arrow-alt-circle-left"></i> Back to admin dashboard</a>
                <br><br><br><br>
                <h1 class="m-0 text-white" style="text-shadow: 4px 4px 6px #838383;"><i class="fas fa-users"></i> Alumni Directory</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb px-3 elevation-1 bg-white float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Alumni Directory</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-row justify-content-between align-items-center">
                        <h3 class="card-title">Alumni Directory</h3>
                    </div>
                    <div class="card-body">
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <!-- <div class="row px-2 pt-0 pb-3">
                                <div class="btn-group mr-3" role="group" aria-label="Basic example">
                                    <a type="button" class="{{ $date_type == 'All' ? 'btn btn-primary' : 'btn btn-outlined btn-default' }}" href="{{ route('admin.alumni-directory', ['date_type' => 'All']) }}">All</a>
                                    <a type="button" class="{{ $date_type == 'Today' ? 'btn btn-primary' : 'btn btn-outlined btn-default' }}" href="{{ route('admin.alumni-directory', ['date_type' => 'Today']) }}">Today</a>
                                    <a type="button" class="{{ $date_type == 'Recent' ? 'btn btn-primary' : 'btn btn-outlined btn-default' }}" href="{{ route('admin.alumni-directory', ['date_type' => 'Recent']) }}">Recent</a>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-12" style="position: relative;">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Email</th>
                                                <th>Student Number</th>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Year Graduated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($userRequests as $userRequest)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $userRequest->email }}</td>
                                                    <td>{{ $userRequest->student_number }}</th>
                                                    <td>{{ $userRequest->name }}</td>
                                                    <td>{{ $userRequest->course }}</td>
                                                    <td>{{ $userRequest->year_graduated }}</th>
                                                    <td>
                                                        <button class="btn btn-sm btn-success">
                                                            Approved
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <p>No records yet.</p>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info">Showing 1 to 1 of {{ 1 }} {{ Str::plural('entry', 1) }}</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_numbers">
                                        <ul class="pagination"></ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let id = null;

    document.addEventListener("click", (e) => {
        e = e || window.event;
        var target = e.target || e.srcElement;
        switch(target.dataset.submit) {
            case "approveReservation":
                var formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                $.ajax({
                    type: "POST",
                    url: "reservations/" + target.dataset.id + "/approve",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                    Swal.fire({
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500,
                        willClose: () => {
                        $(document).ready(function() {
                            $('#reservationModal').modal('hide');
                            window.location = "{{ route('admin.alumni-directory') }}";
                        });
                        }
                    });
                    }
                });
                break;
            case "rejectReservation":
                $(document).ready(function() {
                    $('#reservationModal').modal('show');
                });
                id = target.dataset.id;
                break;
            case "confirmRejectReservation":
                var formData = new FormData();
                formData.append('reason', reasonTextArea.value);
                formData.append('_token', "{{ csrf_token() }}");
                $.ajax({
                    type: "POST",
                    url: "reservations/" + id + "/reject",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                    Swal.fire({
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500,
                        willClose: () => {
                        $(document).ready(function() {
                            $('#reservationModal').modal('hide');
                            window.location = "{{ route('admin.alumni-directory', ['date_type' => 'All']) }}";
                        });
                        }
                    });
                    }
                });
                break;
        }
    });

    const rejectionForm = document.querySelector('[data-form="rejectionForm"]');
    const rejectButton = document.querySelector('[data-submit="confirmRejectReservation"]');
    const reasonTextArea = document.querySelector('[data-textarea="reason"]');

    rejectionForm.addEventListener('input', function () {
        rejectButton.disabled = !reasonTextArea.value;
    });
</script>
@endsection 