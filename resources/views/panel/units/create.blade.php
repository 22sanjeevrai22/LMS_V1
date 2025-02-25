@extends('panel.layouts.app')
@section('title', 'एकाइ सूची')
@section('subtitle', 'एकाइ सूची')
@section('content')

    <!-- Main page content-->

    <form action="{{ route('units.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Create Unit</div>

                    <div class="card-body">

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="unitType">Type<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('unit_type') is-invalid
                                @enderror"
                                    name="unit_type" id="unitType" type="text" placeholder="Enter Owner Name"
                                    value="{{ old('unit_type') }}" required />
                                @error('unit_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary text-center" type="submit">Add Unit</button>
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
