@extends('personal.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Liked Posts</h1>
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
                                            <th>Liked Post</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($likedPosts as $likedPost)
                                            <tr>
                                                <td>
                                                    {{ $likedPost->title }}
                                                </td>
                                                <td>
                                                    <form class="d-inline"
                                                        action="{{ route('personal.liked.delete', $likedPost) }}"
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
