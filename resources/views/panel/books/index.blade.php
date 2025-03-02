@extends('panel.layouts.app')
@section('title', 'Books')
@section('subtitle', 'List of books')
@section('content')

    <!-- Main page content-->

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Book Details</span><a href="{{ route('books.create') }}"><button
                            class="btn btn-success">Create</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Author Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $index=>$book)
                                <tr>
                                    <th scope="row">{{ $books->firstItem() + $index  }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td>
                                        @if($book->getFirstMedia('cover'))
                                        <img src="{{ $book->getFirstMedia('cover')->getUrl('preview') }}" alt="cover">
                                        @else
                                        No Image Found
                                        @endif
                                    </td>
                                    <td>{{ $book->author_name }}</td>
                                    <td>{{ $book->price }}</td>
                                    <td>{{ $book->category->category }}</td>
                                    <td>{{ $book->quantity }}</td>
                                    <td><a href="{{ route('books.edit', $book->id) }}"><button type="button"
                                                class="btn btn-primary">Edit</button></a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                            class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger delete-btn">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $books->links() }}
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
