@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        @foreach($keys as $name => $key)
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                {{ $name }}
                            </h2>
                        </div>
                        <div class="body">
                            @foreach($key as $count => $child_key)
                                <form action="{{ route('admin_translations_update', [$file_name, $name]) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="language_id" value="{{ $child_key->language->id }}">
                                    <div class="row clearfix">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="language_name" value="{{ $child_key->language->name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea class="form-control" name="value" id="" cols="30" rows="1">{{ $child_key->value }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                                <hr>
                            <form action="{{ route('admin_translations_add', [$file_name, $name]) }}" method="post">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="language_id">
                                                    @foreach($languages as $language)
                                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="value" placeholder="Translation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="form-control btn btn-primary waves-effect">Translate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
