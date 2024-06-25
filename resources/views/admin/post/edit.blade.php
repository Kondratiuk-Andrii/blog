@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Post #{{ $post->id }}</h1>
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
                        <form class="d-flex flex-column"
                              action="{{ route('admin.post.update', $post) }}"
                              method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                @error('title')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input class="form-control"
                                       name="title"
                                       type="text"
                                       value="{{ old('title') ?? $post->title }}"
                                       placeholder="Name of Post">
                            </div>
                            <div class="form-group">
                                @error('content')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <textarea id="summernote"
                                          name="content">
                                    {{ old('content') ?? $post->content }}
                                </textarea>
                            </div>
                            <div class="form-group w-25">
                                <input class="btn btn-block btn-success"
                                       type="submit"
                                       value="Save">
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
