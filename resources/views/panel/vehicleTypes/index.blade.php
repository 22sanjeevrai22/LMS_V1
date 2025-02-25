@extends('panel.layouts.app')
@section('title', 'Vehicle Type List')
@section('subtitle', 'List of Vehicle Types')
@section('content')

    <!-- Main page content-->

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Vehicle Types Details</span><a href="{{ route('vehicle-types.create') }}"><button
                            class="btn btn-success">Create</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price/Vehicle</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicleTypes as $vehicleType)
                                <tr>
                                    <th scope="row">{{ $vehicleType->id }}</th>
                                    <td>{{ $vehicleType->name }}</td>
                                    <td>{{ $vehicleType->description }}</td>
                                    <td>{{ $vehicleType->price_per_vehicle }}</td>
                                    <td><a href="{{ route('vehicle-types.edit', $vehicleType->id) }}"><button type="button"
                                                class="btn btn-primary">Edit</button></a>
                                        <form action="{{ route('vehicle-types.destroy', $vehicleType->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this vehicleType?');">
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
