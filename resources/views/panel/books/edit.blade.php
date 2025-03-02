@extends('panel.layouts.app')
@section('title', 'BOOKS')
@section('subtitle', 'A reader lives a thousand lives before he dies. The man who never reads lives only one.')
@section('content')

    <!-- Main page content-->

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="text-center">
            <div class="row d-flex justify-content-center">
                <!-- Account details card-->
                <div class="card col-xl-6 mx-4">
                    <div class="card-header">Edit Book</div>

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
                                        placeholder="Enter book title" value="{{ old('title', $book->title) }}" required />
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
                                        value="{{ old('author_name', $book->author_name) }}" required />
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
                                    <option value="{{ $category->id }}"
                                        {{ old('category', $book->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->category }}
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
                                    placeholder="Enter book price" value="{{ old('price', $book->price) }}" required />
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
                                    value="{{ old('quantity', $book->quantity) }}" required />
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
                                    placeholder="Enter book description" required >{{ old('description', $book->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card col-xl-4 mx-4">
                    <div class="card-header">Book Image</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ asset('panel/assets/img/demo/user-placeholder.svg') }}" id="preview_image"
                            alt="Profile Picture" />
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                        <input type="file" name="book_cover" id="book_cover" accept=".jpg, .jpeg, .png"
                            class="d-none @error('book_cover') is-invalid @enderror">
                        @error('book_cover')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <button class="btn btn-info" type="button"
                            onclick="document.getElementById('book_cover').click();">Upload Image</button>
                    </div>
                </div>

            </div>
            <button class="btn btn-primary mt-5" type="submit">Update Book</button>
        </div>
    </form>
    @include('panel.layouts.toast')

@endsection
@section('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var book_cover = document.getElementById('book_cover');
            book_cover.addEventListener('change', function(e) {
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
