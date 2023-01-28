@extends('backend.layouts.master')
@section('title', 'admin create new service')
@section('service', 'active open')
@section('serviceindex', 'active')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Available All service</h5>

            <small class="text-muted float-end"><a href="{{ route('service.create') }}"
                    class=" btn btn-info btn-sm rounded-0">Create New
                    service</a></small>
        </div>
        @if (session()->has('message'))
            <div class=" alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Si No</th>
                        <th>Icon</th>
                        <th>Tile</th>
                        <th>Descriptions</th>
                        <th>Create Time</th>
                        <th>Update Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($services as $service)
                        <tr>
                            <td>{{ $services->firstItem() + $loop->index }}</td>

                            <td><i class="{{ $service->icon }}"></i></td>
                            <td>{{ $service->title }}</td>
                            <td class="text">{{ Str::limit($service->descripiton, 20, '...') }}</td>

                            <td>
                                @isset($service->created_at)
                                    <ul>
                                        <li>Day: {{ $service->created_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $service->created_at->format('h:i:s A') }}</li>
                                        <li>{{ $service->created_at->diffForHumans() }}</li>
                                    </ul>
                                @endisset
                            </td>

                            <td>
                                @isset($service->updated_at)
                                    <ul>
                                        <li>Day: {{ $service->updated_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $service->updated_at->format('h:i:s A') }}</li>
                                        <li>{{ $service->updated_at->diffForHumans() }}</li>
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
                                            href="{{ route('service.edit', ['service' => $service->id]) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <form action="{{ route('service.destroy', ['service' => $service->id]) }}"
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
            {{ $services->links('pagination::bootstrap-5') }}
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
