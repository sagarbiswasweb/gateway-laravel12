@extends('backend.master')

@section('title')
  Messages
@endsection

@section('content')

    <!-- Dashboard Content -->
    <div class="p-4">
        <h2>Messages({{count($messages)}})</h2>
        <table id="messages-table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr @if($message->is_read == 0) class="table-warning" @endif>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ Str::limit($message->message, 50, '...') }}</td>
                        <td>
                            <a href="{{ route('admin.view.messages', $message->id) }}" 
                            class="btn btn-sm btn-primary" 
                            data-bs-toggle="tooltip" 
                            data-bs-placement="top" 
                            title="View">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('admin.delete.message', ['id' => $message->id]) }}" 
                            class="btn btn-sm btn-danger" 
                            data-bs-toggle="tooltip" 
                            data-bs-placement="top" 
                            onclick="return confirm('Are you sure you want to delete this message?');"
                            title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
