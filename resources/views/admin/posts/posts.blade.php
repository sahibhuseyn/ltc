@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            @foreach($posts as $count => $post)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                {{ $post->title }}
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <img src="{{ url('/uploads/' . $post->image) }}" class="img-responsive" alt="image">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <a href="{{ route('admin_posts_edit', $post->id) }}" class="form-control btn btn-warning waves-effect">Edit</a>
                                </div>
                                <form action="{{ route('admin_posts_delete', $post->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="col-sm-6">
                                        <input type="submit" class="form-control btn btn-danger waves-effect" name="submit" value="Delete">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add new Post
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_posts_add', $language_id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row clearfix">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="form-line">--}}
                                            {{--<select class="form-control" name="type">--}}
                                                {{--@foreach($types as $type)--}}
                                                    {{--<option value="{{ $type->id }}">{{ $type->name }}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="image" placeholder="Image" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea class="form-control" name="short_description" rows="3" placeholder="Short Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea class="form-control" name="description" rows="3" placeholder="Full Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="status" placeholder="Status">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
