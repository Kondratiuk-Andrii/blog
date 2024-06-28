@extends('personal.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Comment #{{ $comment->id }}</h1>
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
                        <form action="{{ route('personal.comment.update', $comment) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                @error('content')
                                    <div class="text-danger text-bold mb-1 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <textarea class="form-control" name="content" cols="30" rows="3" placeholder="Content of comment">{{ $comment->content }}</textarea>
                            </div>
                            <input class="btn btn-block btn-success" type="submit" value="Save">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
