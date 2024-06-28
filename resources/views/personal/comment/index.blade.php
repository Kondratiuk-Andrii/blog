@extends('personal.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Commented Posts</h1>
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
                    <div class="col-8 mt-4">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table-hover table text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Comment</th>
                                            <th>Post</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td style="white-space: normal; word-wrap: break-word;">
                                                    {!! $comment->content !!}
                                                </td>
                                                <td>
                                                    {{ $comment->post->title }}
                                                </td>
                                                <td>
                                                    <a class="text-primary"
                                                        href="{{ route('personal.comment.edit', $comment) }}">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form class="d-inline"
                                                        action="{{ route('personal.comment.delete', $comment) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="border-0 bg-transparent" type="submit">
                                                            <i class="fa-solid fa-trash text-danger" role="button"></i>
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
