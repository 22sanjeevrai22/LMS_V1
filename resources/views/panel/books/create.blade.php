@extends('panel.layouts.app')
@section('title', 'BOOKS')
@section('subtitle', 'A reader lives a thousand lives before he dies. The man who never reads lives only one.')
@section('content')

    <!-- Main page content-->

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Create Book</div>

                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="title" required>Book Title<span
                                            class="text-danger">*</span></label>
                                    <input
                                        class="form-control @error('title') is-invalid
                                    @enderror"
                                        name="title" id="title" type="text"
                                        placeholder="Enter book title" value="{{ old('title') }}" required />
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="author_name">Author Name<span
                                            class="text-danger">*</span></label>
                                    <input
                                        class="form-control @error('author_name') is-invalid
                                    @enderror"
                                        name="author_name" id="author_name" type="text" placeholder="Enter author name"
                                        value="{{ old('author_name') }}" required />
                                    @error('author_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md">
                                <label class="small mb-1" for="category">Assign Category<span
                                        class="text-danger">*</span></label>
                                <select
                                    class="form-select @error('category') is-invalid
                                @enderror"
                                    name="category" id="category" aria-label="Default select example" required>
                                    <option value="" selected disabled>Select Category/Genre</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="price" required>Price<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('price') is-invalid
                                @enderror"
                                    name="price" id="price" type="text"
                                    placeholder="Enter book price" value="{{ old('price') }}" required />
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="quantity">Quantity<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('quantity') is-invalid
                                @enderror"
                                    name="quantity" id="quantity" type="text" placeholder="Enter book quantity"
                                    value="{{ old('quantity') }}" required />
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="description">Description</label>
                                <textarea
                                rows="4"
                                    class="form-control @error('description') is-invalid
                                @enderror"
                                    name="description" id="description" type="text"
                                    placeholder="Enter book description" required >{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>
                <button class="btn btn-primary text-center" type="submit">Add Book</button>
            </div>
        </div>
    </form>
    @include('panel.layouts.toast')

@endsection
@section('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // var person_image = document.getElementById('person_image');
            // person_image.addEventListener('change', function(e) {
            //     var reader = new FileReader();
            //     reader.onload = function(event) {
            //         document.getElementById('preview_image').src = event.target.result;
            //     }
            //     reader.readAsDataURL(e.target.files[0]);
            // });

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
