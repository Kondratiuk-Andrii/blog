@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-block btn-primary"
                           href="{{ route('admin.post.create') }}">Create</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mt-4">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>
                                                    <a href="{{ route('admin.post.show', $post) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="text-primary"
                                                       href="{{ route('admin.post.edit', $post) }}">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form class="d-inline"
                                                          action="{{ route('admin.post.delete', $post) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="border-0 bg-transparent"
                                                                type="submit">
                                                            <i class="fa-solid fa-trash text-danger"
                                                               role="button"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
