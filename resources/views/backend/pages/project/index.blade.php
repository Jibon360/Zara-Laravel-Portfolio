@extends('backend.layouts.master')
@section('title', 'admin create new projectinofo')
@section('projectinofo', 'active open')
@section('projectinofoindex', 'active')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Available All projectinofo</h5>

            <small class="text-muted float-end"><a href="{{ route('projectinofo.create') }}"
                    class=" btn btn-info btn-sm rounded-0">Create New
                    projectinofo</a></small>
        </div>
        @if (session()->has('message'))
            <div class=" alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Si No</th>
                        <th>Tile</th>
                        <th>Number</th>
                        <th>Create Time</th>
                        <th>Update Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($projectinofos as $projectinofo)
                        <tr>
                            <td>{{ $projectinofos->firstItem() + $loop->index }}</td>

                            <td>{{ $projectinofo->title }}</td>
                            <td class="text">{{ $projectinofo->number }}</td>

                            <td>
                                @isset($projectinofo->created_at)
                                    <ul>
                                        <li>Day: {{ $projectinofo->created_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $projectinofo->created_at->format('h:i:s A') }}</li>
                                        <li>{{ $projectinofo->created_at->diffForHumans() }}</li>
                                    </ul>
                                @endisset
                            </td>

                            <td>
                                @isset($projectinofo->updated_at)
                                    <ul>
                                        <li>Day: {{ $projectinofo->updated_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $projectinofo->updated_at->format('h:i:s A') }}</li>
                                        <li>{{ $projectinofo->updated_at->diffForHumans() }}</li>
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
                                            href="{{ route('projectinofo.edit', ['projectinofo' => $projectinofo->id]) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <form action="{{ route('projectinofo.destroy', ['projectinofo' => $projectinofo->id]) }}"
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
            {{ $projectinofos->links('pagination::bootstrap-5') }}
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
