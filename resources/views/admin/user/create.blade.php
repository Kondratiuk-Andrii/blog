@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Dashboard</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="ml-1">Name:</label>
                                @error('name')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input class="form-control" name="name" type="text" value="{{ old('name') }}"
                                    placeholder="Name of user">
                            </div>
                            <div class="form-group">
                                <label class="ml-1">Email:</label>
                                @error('email')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input class="form-control" name="email" type="text" value="{{ old('email') }}"
                                    placeholder="Email of user">
                            </div>
                            <div class="form-group">
                                <label class="ml-1">Password:</label>
                                @error('password')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input class="form-control" name="password" type="text" value="{{ old('password') }}"
                                    placeholder="Password of user">
                            </div>
                            <div class="form-group w-50">
                                <label>Role</label>
                                @error('role')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <select class="form-control" name="role">
                                    @foreach ($roles as $id => $role)
                                        <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-block btn-primary" type="submit" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
