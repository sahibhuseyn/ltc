@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Study Abroad Categories
                        </h2>
                    </div>
                    <div class="body">
                        @if($types->isEmpty())
                            <div class="alert bg-orange alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                No Categories :(
                            </div>
                        @endif
                        @foreach($types as $count => $type)
                            <div class="row clearfix">
                                <form action="{{ route('admin_types_update', $type->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <h5>ID: {{ $type->id }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <h5>Parent ID:</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-line">
                                                    <input type="text" name="parent_id" class="form-control" value="{{ $type->parent_id }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input class="form-control" type="text" name="name" value="{{ $type->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                    </div>
                                </form>
                                <form action="{{ route('admin_types_delete', $type->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="col-sm-2">
                                        <button type="submit" class="form-control btn btn-danger waves-effect">Delete</button>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                            <hr>
                        <form action="{{ route('admin_types_add', $language_id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Category name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-primary waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
