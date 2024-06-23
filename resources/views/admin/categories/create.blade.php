@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
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
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Name of category"
                                value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger text-bold mt-1 ml-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-block btn-primary" value="Create">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
