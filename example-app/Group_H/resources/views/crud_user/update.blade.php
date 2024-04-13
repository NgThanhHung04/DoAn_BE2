@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center" style="background-color: #f44336; color: white;">Update User</h3>
                    <div class="card-body">
                        <form action="{{ route('user.PostUpdatetUser') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="id" type="hidden" value="{{$user->id}}">
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    value="{{ $user->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="email_address">Email</label>
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" value="{{ $user->email }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="number" placeholder="Phone" id="phone" class="form-control"
                                    name="phone" value="{{ $user->phone }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="fileToUpload">Image</label>
                                <input type="file" id="fileToUpload" class="form-control"
                                    name="image">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block" style="background-color: #4CAF50;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection