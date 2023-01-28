@extends('backend.layouts.master')
@section('title', 'admin create new logo')
@section('logo', 'active open')
@section('logoindex', 'active')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Available All Logo</h5>

            <small class="text-muted float-end"><a href="{{ route('logo.create') }}"
                    class=" btn btn-info btn-sm rounded-0">Create New
                    Logo</a></small>
        </div>
        @if (session()->has('message'))
            <div class=" alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Si No</th>
                        <th>Logo Name</th>
                        <th>Create Time</th>
                        <th>Update Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($logos as $logo)
                        <tr>
                            <td>{{ $logos->firstItem() + $loop->index }}</td>

                            <td>{{ $logo->logo_name }}</td>

                            <td>
                                @isset($logo->created_at)
                                    <ul>
                                        <li>Day: {{ $logo->created_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $logo->created_at->format('h:i:s A') }}</li>
                                        <li>{{ $logo->created_at->diffForHumans() }}</li>
                                    </ul>
                                @endisset
                            </td>

                            <td>
                                @isset($logo->updated_at)
                                    <ul>
                                        <li>Day: {{ $logo->updated_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $logo->updated_at->format('h:i:s A') }}</li>
                                        <li>{{ $logo->updated_at->diffForHumans() }}</li>
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
                                        <a class="dropdown-item" href="{{ route('logo.edit',['logo'=>$logo->id]) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <form action="{{ route('logo.destroy', ['logo' => $logo->id]) }}" method="post">
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
            {{ $logos->links('pagination::bootstrap-5') }}
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
