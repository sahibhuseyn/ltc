@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LANGUAGES
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_languages_add') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="code" placeholder="Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="status" placeholder="Status">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="position" placeholder="Position">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="photo" placeholder="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                        <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>CODE</th>
                                    <th>STATUS</th>
                                    <th>POSITION</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($languages as $key => $language)
                                    <tr data-ttlanguageid={{ $language->id }}>
                                        <td data-tttype="id">{{ $language->id }}</td>
                                        <td data-tttype="name">{{ $language->name }}</td>
                                        <td data-tttype="code">{{ $language->code }}</td>
                                        <td data-tttype="status">{{ $language->status }}</td>
                                        <td data-tttype="position">{{ $language->position }}</td>
                                        <td><a href="{{ route('admin_languages_delete', $language->id) }}" class="btn btn-danger waves-effect">DELETE</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('/admin/plugins/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ url('/admin/js/pages/tables/editable-table.js') }}"></script>
    @include('admin.languages.languages_ajax')
@endsection
