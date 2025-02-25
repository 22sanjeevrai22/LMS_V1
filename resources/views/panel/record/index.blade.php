@extends('panel.layouts.app')
@section('title', 'षडानन्द यातायात राजस्व विभाग')
@section('subtitle', 'Sadananda VDC tax toll.')
@section('content')


    <form action="{{ route('record.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-10">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Record</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputFirstName">First Name<span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('first_name') is-invalid @enderror" id="inputFirstName"
                                    name="first_name" type="text" placeholder="Enter your first name"
                                    value="{{ old('first_name') }}" required />
                                @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1" for="inputMiddleName">Middle Name (Nullable)</label>
                                <input
                                    class="form-control @error('middle_name') is-invalid
                                @enderror"
                                    name="middle_name" id="inputMiddleName" type="text"
                                    placeholder="Enter your middle name" value="{{ old('middle_name') }}" />
                                @error('middle_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1" for="inputLastName">Last Name<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('last_name') is-invalid
                                @enderror"
                                    name="last_name" id="inputLastName" type="text" placeholder="Enter your last name"
                                    value="{{ old('last_name') }}" required />
                                @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputAddress">Address<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('address') is-invalid
                                @enderror"
                                    id="inputAddress" type="text" name="address" placeholder="Enter your Address"
                                    value="{{ old('address') }}" required />
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputContact" required>Contact Number<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('contact_number') is-invalid
                                @enderror"
                                    name="contact_number" id="inputContact" type="text"
                                    placeholder="Enter your Contact Number" value="{{ old('contact_number') }}" required />
                                @error('contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputEmailAddress">Email address(Nullable)</label>
                                <input
                                    class="form-control @error('email') is-invalid
                                @enderror"
                                    name="email" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="{{ old('email') }}" />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputVehicleRegNo" required>Vehicle Registration Number<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('vehicle_reg_no') is-invalid
                                @enderror"
                                    name="vehicle_reg_no" id="inputVehicleRegNo" type="text"
                                    placeholder="Enter your vehicle no" value="{{ old('vehicle_reg_no') }}" required />
                                @error('vehicle_reg_no')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="vehicleType">Vehicle Type<span
                                        class="text-danger">*</span></label>
                                <select
                                    class="form-select @error('vehicle_type_id') is-invalid
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

                            <div class="col-md-4">
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
                        <hr>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-3">
                                <label class="small mb-1" for="good_name">Goods Name<span
                                        class="text-danger">*</span></label>
                                <select
                                    class="form-select @error('good_name') is-invalid
                                @enderror"
                                    name="good_name" id="good_name" aria-label="Default select example" required>
                                    <option value="" selected disabled>Select Goods Name</option>
                                    @foreach ($goods as $good)
                                        <option value="{{ $good->id }}">{{ $good->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('good_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="small mb-1" for="good_quantity">Quantity<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('good_quantity') is-invalid
                                @enderror"
                                    name="good_quantity" id="good_quantity" type="text"
                                    placeholder="Enter Goods Quantity" value="{{ old('good_quantity') }}" required />
                                @error('good_quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="small mb-1" for="unit">Unit<span class="text-danger">*</span></label>
                                <select
                                    class="form-select @error('unit') is-invalid
                                @enderror"
                                    name="unit" id="unit" aria-label="Default select example" required>
                                    <option value="" selected disabled>Select Unit</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('unit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="small mb-1" for="price">Price per Unit<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('price') is-invalid
                                @enderror"
                                    name="price" id="price" type="text" placeholder="Enter Goods Quantity"
                                    value="{{ old('price') }}" required />
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <button class="btn btn-primary" type="submit">Add Person</button>

    </form>
    <!-- Example DataTable for Dashboard Demo-->
    <div class="card mt-4">
        <div class="card-header">Personnel Management</div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>
                            <div class="badge bg-primary text-white rounded-pill">Full-time</div>
                        </td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i
                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                    class="fa-regular fa-trash-can"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
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
                } else if (type === 'deleted') {
                    toastHeader.classList.add('text-bg-danger');
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
            @if (session('deleted'))
                showToast('Deleted', '{{ session('deleted') }}', 'deleted');
            @endif
        });
    </script>
@endsection
