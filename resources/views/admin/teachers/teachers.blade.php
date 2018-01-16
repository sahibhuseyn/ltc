@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            @foreach($teachers as $count => $teacher)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    {{ $teacher->name }}
                                    <form action="{{ route('admin_teachers_delete', $teacher->id) }}" method="post" class="pull-right">
                                        {{ csrf_field() }}

                                        <div class="col-sm-4">
                                            <input class="btn btn-danger" type="submit" value="Delete">
                                        </div>
                                    </form>
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <img src="{{ url('/uploads/' . $teacher->image) }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <hr>

                                <form action="{{ route('admin_teachers_update', $teacher->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="language_id" value="{{ $teacher->language->id }}">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" class="form-control" name="image" placeholder="Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="title" value="{{ $teacher->title }}" placeholder="Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name" value="{{ $teacher->name }}" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="short_description" class="form-control" rows="3" placeholder="Short Description">{{ $teacher->short_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add new Teacher
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_teachers_add', $language_id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="image" placeholder="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="short_description" class="form-control" rows="3" placeholder="Short Description"></textarea>
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
