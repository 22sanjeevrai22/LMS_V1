@extends('panel.layouts.app')
@section('title', 'एकाइ सूची')
@section('subtitle', 'एकाइ सूची')
@section('content')

    <!-- Main page content-->
    <div class="row">
        <div class="row col-md-6">
            <form action="{{ route('units.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Create Unit</div>
                    <div class="card-body">
                        <div class="row gx-3 mb-2">

                            <div class="col">
                                <label class="small mb-1" for="unitType">Type<span class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('unit_type') is-invalid
                                @enderror"
                                    name="unit_type" id="unitType" type="text" placeholder="Enter Unit Type"
                                    value="{{ old('unit_type') }}" required />
                                @error('unit_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary text-center" type="submit">Add Unit</button>
            </form>
        </div>

        <div class="row col-md-6">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $index => $unit)
                                <tr>
                                    <th scope="row">{{ $index+1}}</th>
                                    <td>{{ $unit->type }}</td>
                                    <td><a href="{{ route('units.edit', $unit->id) }}"><button type="button"
                                                class="btn btn-primary">Edit</button></a>
                                        <form action="{{ route('units.destroy', $unit->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this unit Type?');">
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
