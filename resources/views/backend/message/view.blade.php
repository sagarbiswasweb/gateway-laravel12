@extends('backend.master')

@section('title')
  View Message
@endsection

@section('content')

    <!-- Dashboard Content -->
    <div class="p-4">
        <h2>Viewing message of {{ $message->name }}</h2>
        <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $message->name }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $message->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $message->email }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $message->message }}</td>
            </tr>
            <tr>
                <th>Received at</th>
                <td>{{ $message->created_at->setTimezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('admin.messages') }}" class="btn btn-secondary mt-3">
        Back to Messages
    </a>
    </div>
    
@endsection