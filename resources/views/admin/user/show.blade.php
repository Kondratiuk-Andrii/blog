@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $user->name }}</h1>
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
                    <div class="col-8 mt-4">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table-hover table text-nowrap text-center">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold">ID:</td>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold">Name:</td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold">Email:</td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold">Role:</td>
                                            <td>
                                                {{ $userRole }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-info btn-block" href="{{ route('admin.user.edit', $user) }}">
                            <i class="fa-solid fa-pencil mr-2"></i>
                            <span>Edit</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <form class="d-inline" action="{{ route('admin.user.delete', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-block" type="submit">
                                <i class="fa-solid fa-trash mr-2"></i>
                                <span>Remove</span>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
