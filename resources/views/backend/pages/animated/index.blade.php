@extends('backend.layouts.master')
@section('title', 'admin create new animatedheadline')
@section('animatedheadline', 'active open')
@section('animatedheadlineindex', 'active')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Available All animatedheadline</h5>

            <small class="text-muted float-end"><a href="{{ route('animatedheadline.create') }}"
                    class=" btn btn-info btn-sm rounded-0">Create New
                    animatedheadline</a></small>
        </div>
        @if (session()->has('message'))
            <div class=" alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Si No</th>
                        <th>animatedheadline Name</th>
                        <th>Create Time</th>
                        <th>Update Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($animatedheadlines as $animatedheadline)
                        <tr>
                            <td>{{ $animatedheadlines->firstItem() + $loop->index }}</td>

                            <td>{{ $animatedheadline->title }}</td>

                            <td>
                                @isset($animatedheadline->created_at)
                                    <ul>
                                        <li>Day: {{ $animatedheadline->created_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $animatedheadline->created_at->format('h:i:s A') }}</li>
                                        <li>{{ $animatedheadline->created_at->diffForHumans() }}</li>
                                    </ul>
                                @endisset
                            </td>

                            <td>
                                @isset($animatedheadline->updated_at)
                                    <ul>
                                        <li>Day: {{ $animatedheadline->updated_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $animatedheadline->updated_at->format('h:i:s A') }}</li>
                                        <li>{{ $animatedheadline->updated_at->diffForHumans() }}</li>
                                    </ul>
                                @endisset
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item"
                                            href="{{ route('animatedheadline.edit', ['animatedheadline' => $animatedheadline->id]) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <form
                                            action="{{ route('animatedheadline.destroy', ['animatedheadline' => $animatedheadline->id]) }}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="dropdown-item show_confirm"><i class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </form>


                                    </div>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <p>no data found</p>
                    @endforelse

                </tbody>
            </table>
            {{ $animatedheadlines->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection

@push('deleteart')
    <script>
        $(".show_confirm").click(function(event) {
            let form = $(this).closest('form');
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
