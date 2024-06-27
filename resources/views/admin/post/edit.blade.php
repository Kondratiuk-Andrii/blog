@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Post #{{ $post->id }}</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form
                            class="d-flex flex-column"
                            action="{{ route('admin.post.update', $post->id) }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-75">
                                <label class="ml-1">Title</label>
                                @error('title')
                                    <div class="text-danger text-bold mb-1 ml-1">{{ $message }}</div>
                                @enderror
                                <input
                                    class="form-control"
                                    name="title"
                                    type="text"
                                    value="{{ old('title') ?? $post->title }}"
                                    placeholder="Name of Post"
                                >
                            </div>
                            <div class="form-group">
                                <label class="ml-1">Content</label>
                                @error('content')
                                    <div class="text-danger text-bold mb-1 ml-1">{{ $message }}</div>
                                @enderror
                                <textarea
                                    id="summernote"
                                    name="content"
                                >{{ old('content') ?? $post->content }}</textarea>
                            </div>
                            <div class="form-group d-flex">
                                <div class="w-50">
                                    <img
                                        class="w-50"
                                        src="{{ asset('storage/' . $post->preview_image) }}"
                                        alt="preview_image"
                                    >
                                </div>
                                <div>
                                    <label class="ml-1">Add Preview image</label>
                                    @error('preview_image')
                                        <div class="text-danger text-bold mb-1 ml-1">{{ $message }}</div>
                                    @enderror
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input
                                                class="custom-file-input"
                                                name="preview_image"
                                                type="file"
                                            >
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <div class="w-50">
                                    <img
                                        class="w-50"
                                        src="{{ asset('storage/' . $post->main_image) }}"
                                        alt="main_image"
                                    >
                                </div>
                                <div>
                                    <label class="ml-1">Add Main image</label>
                                    @error('main_image')
                                        <div class="text-danger text-bold mb-1 ml-1">{{ $message }}</div>
                                    @enderror
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input
                                                class="custom-file-input"
                                                name="main_image"
                                                type="file"
                                            >
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-50">
                                <label>Category</label>
                                @error('category_id')
                                    <div class="text-danger text-bold mb-1 ml-1">{{ $message }}</div>
                                @enderror
                                <select
                                    class="form-control"
                                    name="category_id"
                                >
                                    @foreach ($categories as $category)
                                        <option
                                            value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : '' }}
                                        >
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select
                                    class="select2"
                                    name="tagIds[]"
                                    data-placeholder="Select Tags"
                                    style="width: 100%;"
                                    multiple="multiple"
                                >
                                    @foreach ($tags as $tag)
                                        <option
                                            value="{{ $tag->id }}"
                                            {{ $post->tags->pluck('id') && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                        >
                                            {{ $tag->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group w-25">
                                <input
                                    class="btn btn-block btn-primary"
                                    type="submit"
                                    value="Save"
                                >
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
