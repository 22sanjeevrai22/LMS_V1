@extends('panel.layouts.app')
@section('title', 'यातायात सूची')
@section('subtitle', 'यातायात साधन सूची')
@section('content')

    <!-- Main page content-->

    <form action="{{ route('vehicles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Create Vehicle</div>
                    
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md">
                                <label class="small mb-1" for="vehicleType">Vehicle Type<span
                                        class="text-danger">*</span></label>
                                <select
                                    class="form-select @error('owner_name') is-invalid
                                @enderror"
                                    name="vehicle_type_id" id="vehicleType" aria-label="Default select example" required>
                                    <option value="" selected disabled>Select Vehicle Type</option>
                                    @foreach ($vehicleTypes as $vehicleType)
                                        <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('vehicle_type_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputVehicleRegNumber" required>Vehicle Registration Number<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('vehicle_reg_number') is-invalid
                                @enderror"
                                    name="vehicle_reg_number" id="inputVehicleRegNumber" type="text"
                                    placeholder="Enter your vehicle Number" value="{{ old('vehicle_reg_number') }}" required />
                                @error('vehicle_reg_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOwnerName">Owner Name<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('owner_name') is-invalid
                                @enderror"
                                    name="owner_name" id="inputOwnerName" type="text" placeholder="Enter Owner Name"
                                    value="{{ old('owner_name') }}" required />
                                @error('owner_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary text-center" type="submit">Add Vehicle</button>
            </div>
        </div>
    </form>
    @include('panel.layouts.toast')

@endsection
@section('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var person_image = document.getElementById('person_image');
            person_image.addEventListener('change', function(e) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('preview_image').src = event.target.result;
                }
                reader.readAsDataURL(e.target.files[0]);
            });

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
                    toastHeader.classList.add('text-bg-success');
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
