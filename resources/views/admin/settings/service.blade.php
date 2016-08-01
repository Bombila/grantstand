@extends('admin.layout')

@section('head_scripts')

@stop

@section('breadcrumbs')
    <li><a href="/admin/service">Settings</a></li>
@stop

@section('title')
    Service settings
@stop

@section('content')

    <form action="" method="post" enctype="multipart/form-data">

        <button type="submit" class="btn btn-primary">Save</button>

        <h3>Representation</h3>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="representation">Text</label>
                    <textarea class="form-control" name="representation" id="representation">{{ $settings->representation }}</textarea>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="value_1">Column Name 1</label>
                        <textarea class="form-control" name="value_1" id="value_1">{{ $settings->value_1 }}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="column_1">Column Text 1</label>
                        <textarea class="form-control" name="column_1" id="column_1">{{ $settings->column_1 }}</textarea>
                    </div>
                </div>
            </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="value_2">Column Name 2</label>
                    <textarea class="form-control" name="value_2" id="value_2">{{ $settings->value_2 }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="column_2">Column Text 2</label>
                    <textarea class="form-control" name="column_2" id="column_2">{{ $settings->column_2 }}</textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="value_3">Column Name 3</label>
                    <textarea class="form-control" name="value_3" id="value_3">{{ $settings->value_3 }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="column_3">Column Text 3</label>
                    <textarea class="form-control" name="column_3" id="column_3">{{ $settings->column_3 }}</textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="value_4">Column Name 4</label>
                    <textarea class="form-control" name="value_4" id="value_4">{{ $settings->value_4 }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="column_4">Column Text 4</label>
                    <textarea class="form-control" name="column_4" id="column_4">{{ $settings->column_4 }}</textarea>
                </div>
            </div>
        </div>


        <h3>MARKETING & BRANDING</h3>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="marketing">Text</label>
                    <textarea class="form-control" name="marketing" id="marketing">{{ $settings->marketing }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="box_1">Box 1</label>
                    <input class="form-control" name="box_1" id="box_1" value="{{ $settings->box_1 }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="box_2">Box 2</label>
                    <input class="form-control" name="box_2" id="box_2" value="{{ $settings->box_2 }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="box_3">Box 3</label>
                    <input class="form-control" name="box_3" id="box_3" value="{{ $settings->box_3 }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="box_4">Box 4</label>
                    <input class="form-control" name="box_4" id="box_4" value="{{ $settings->box_4 }}">
                </div>
            </div>
        </div>


        <h3>BUSINESS & PROFESSIONAL SERVICES</h3>


        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label for="business">Text</label>
                    <textarea class="form-control" name="business" id="business">{{ $settings->business }}</textarea>
                </div>
            </div>
        </div>





        <button type="submit" class="btn btn-primary">Save</button>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


    </form>

@stop