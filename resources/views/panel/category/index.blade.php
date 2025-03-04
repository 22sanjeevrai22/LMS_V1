@extends('panel.layouts.app')
@section('title', 'Category')
@section('subtitle', 'This is a list of category');
@section('content')

    <!-- Main page content-->
    <div class="row">
        <div class="row col-md-6">
            <form action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if ($category)
                    @method('PUT')
                @endif
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">{{ $category ? 'Edit Category' : 'Create Category' }}</div>
                    <div class="card-body">
                        <div class="row gx-3 mb-2">

                            <div class="col">
                                <label class="small mb-1" for="category">Type<span class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('category') is-invalid
                                @enderror"
                                    name="category" id="category" type="text" placeholder="Enter Category"
                                    value="{{ old('category', $category->category ?? '') }}" required />
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary text-center"
                    type="submit">{{ $category ? 'Update Category' : 'Add Category' }}</button>
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
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $index => $category)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $category->category }}</td>
                                    <td><a href="{{ route('category', $category->id) }}"><button type="button"
                                                class="btn btn-primary btn-sm">Edit</button></a>

                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                            class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm delete-btn">Delete</button>
                                        </form>


                                    </td>
                                </tr>
                            @endforeach
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>

    @endsection
    @section('page-scripts')

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                document.querySelectorAll('.delete-btn').forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();
                        var form = this.closest('form');

                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit(); // Submitting the form
                            }
                        });
                    });
                });


            });
        </script>

    @endsection
