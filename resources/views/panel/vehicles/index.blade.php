@extends('panel.layouts.app')
@section('title', 'यातायात सूची')
@section('subtitle', 'यातायात साधन सूची')
@section('content')

    <!-- Main page content-->

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Vehicle Details</span><a href="{{ route('vehicles.create') }}"><button
                            class="btn btn-success">Create</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Type Name</th>
                                <th scope="col">Vehicle Regd. No</th>
                                <th scope="col">Owner Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <th scope="row">{{ $vehicle->id }}</th>
                                    <td>{{ $vehicle->vehicleType->name }}</td>
                                    <td>{{ $vehicle->vehicle_regd_no }}</td>
                                    <td>{{ $vehicle-> }}</td>
                                    <td><a href="{{ route('vehicles.edit', $vehicle->id) }}"><button type="button"
                                                class="btn btn-primary">Edit</button></a>
                                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this Vehicle Type?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@include('panel.layouts.toast')


@endsection
@section('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function showToast(title, message, type) {
                var toast = document.getElementById('liveToast');
                var toastBody = toast.querySelector('.toast-body');
                var toastHeader = toast.querySelector('.toast-header');
                var toastHeaderStrong = toastHeader.querySelector('strong');

                toastBody.textContent = message;
                toastHeaderStrong.textContent = title;

                // Reset the toast header class
                toastHeader.className = 'toast-header';

                if (type === 'success') {
                    toastHeader.classList.add('text-bg-danger');
                } else if (type === 'error') {
                    toastHeader.classList.add('text-bg-warning');
                }

                var toastElement = new bootstrap.Toast(toast);
                toastElement.show();
            }

            @if (session('success'))
                showToast('Success', '{{ session('success') }}', 'success');
            @endif
            @if (session('error'))
                showToast('Error', '{{ session('error') }}', 'error');
            @endif
        });
    </script>

@endsection
