@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td><img style="width: 80px; height: 80px" src="{{ asset('uploads/image/' . $user->image) }}" alt="Image"></td>
                            <td>
                                <a href="{{ route('users.detail', ['id' => $user->id]) }}" class="btn btn-info">View</a>
                                <a href="{{ route('user.UpdatetUser', ['id' => $user->id]) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('user.deleteUser',['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</main>
@endsection
