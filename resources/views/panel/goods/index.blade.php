@extends('panel.layouts.app')
@section('title', 'सामान सूची')
@section('subtitle', 'सामान सूची')
@section('content')

    <!-- Main page content-->

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Good Details</span><a href="{{ route('goods.create') }}"><button
                            class="btn btn-success">Create</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price Per Unit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($goods as $good)
                                <tr>
                                    <th scope="row">{{ $good->id }}</th>
                                    <td>{{ $good->name }}</td>
                                    <td width="45%">{{ $good->description }}</td>
                                    <td>{{ $good->price_per_unit }}</td>
                                    <td><a href="{{ route('goods.edit', $good->id) }}"><button type="button"
                                                class="btn btn-primary">Edit</button></a>
                                        <form action="{{ route('goods.destroy', $good->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this good Type?');">
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
                    toastHeader.classList.add('text-bg-success');
                } else if (type === 'error') {
                    toastHeader.classList.add('text-bg-warning');
                } else if (type === 'deleteSuccess') {
                    toastHeader.classList.add('text-bg-danger');

                var toastElement = new bootstrap.Toast(toast);
                toastElement.show();
            }

            @if (session('success'))
                showToast('Success', '{{ session('success') }}', 'success');
            @endif
            @if (session('error'))
                showToast('Error', '{{ session('error') }}', 'error');
            @endif
            @if (session('deleteSuccess'))
                showToast('Delete', '{{ session('deleteSuccess') }}', 'deleteSuccess');
            @endif
        });
    </script>

@endsection
