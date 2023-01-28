@extends('backend.layouts.master')
@section('title', 'admin create new message')
@section('message', 'active open')
@section('messageindex', 'active')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div class=" d-flex">
                <div>
                    <h5 class="mb-0">Available All message </h5>
                </div>

                <div class=" ms-2 fa-shake shadow rounded-circle">
                    <span class="badge badge-center rounded-pill bg-label-info">{{ $message_count }}</span>
                </div>

            </div>


        </div>
        @if (session()->has('message'))
            <div class=" alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Si No</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Create Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($messages as $message)
                        <tr>
                            <td>{{ $messages->firstItem() + $loop->index }}</td>

                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ Str::limit($message->message, 20, '...') }}</td>
                            {{-- <td class="text">{{ Str::limit($message->descripiton, 20, '...') }}</td> --}}

                            <td>
                                @isset($message->created_at)
                                    <ul>
                                        <li>Day: {{ $message->created_at->format('d/M/Y') }}</li>
                                        <li>Time: {{ $message->created_at->format('h:i:s A') }}</li>
                                        <li>{{ $message->created_at->diffForHumans() }}</li>
                                    </ul>
                                @endisset
                            </td>



                            <td>
                                <div class=" d-flex">

                                    <div class="mx-1">
                                        <a class=" d-inline-block badge bg-label-info"
                                            href="{{ route('message.view', $message->id) }}"><i
                                                class='bx bx-low-vision'></i>
                                        </a>
                                    </div>


                                    <form action="{{ route('destroy.message', ['id' => $message->id]) }}" method="post">
                                        {{-- @method('DELETE') --}}
                                        @csrf
                                        <a href="{{ route('destroy.message', ['id' => $message->id]) }}"
                                            class="d-inline-block badge bg-label-danger show_confirm"><i
                                                class="bx bx-trash me-1"></i>
                                        </a>
                                    </form>



                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr class=" text-center text-danger">
                            <td colspan="7">no message found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            {{ $messages->links('pagination::bootstrap-5') }}
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
