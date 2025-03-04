@extends('panel.layouts.app')
@section('title', 'Borrow')
@section('subtitle', 'List of borrow request')
@section('content')

    <!-- Main page content-->

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Borrow Request</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Borrower Name</th>
                                <th scope="col">Borrower Email</th>
                                <th scope="col">Book Title</th>
                                <th scope="col">Book Available</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrowList as $index => $borrow)
                                <tr>
                                    <th scope="row">{{ $borrowList->firstItem() + $index }}</th>
                                    <td>{{ $borrow->user->name }}</td>
                                    <td>{{ $borrow->user->email }}</td>
                                    <td>{{ $borrow->book->title }}</td>
                                    <td>{{ $borrow->book->quantity }}</td>
                                    <td><span
                                            class="badge rounded-pill  @if ($borrow->status == 'pending') bg-warning
                                    @elseif ($borrow->status == 'approved')
                                        bg-success
                                    @elseif ($borrow->status == 'rejected')
                                        bg-danger
                                    @elseif ($borrow->status == 'returned')
                                        bg-secondary @endif
                                    ">{{ $borrow->status }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('borrow.approve', $borrow->id) }}"><button type="button"
                                                class="btn btn-success btn-sm m-1">Approve</button></a>
                                        <a href="{{ route('borrow.return', $borrow->id) }}"><button type="button"
                                                class="btn btn-secondary btn-sm m-1">Return</button></a>

                                        <a href="{{ route('borrow.reject', $borrow->id) }}"><button type="button"
                                                class="btn btn-danger btn-sm m-1">Reject</button></a>
                                        {{-- <form action="{{ route('borrow.destroy', $borrow->id) }}" method="POST"
                                            class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger delete-btn btn-sm">Delete</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                    {{ $borrowList->links() }}
                </div>
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
