@extends('layouts.frontend')

@section('page-title')
    Edit Application Settings
@endsection

@section('content')
    {{ Form::model($settings, ['route' => ['settings.jenzabar.update', $settings->id], 'method' => 'patch']) }}

    <div class="form-group">
        {!! Form::label('connection_id', 'Connection') !!}
        {!! Form::select('connection_id', $databaseconnections, $settings->options['connection_id'], ['class' => 'form-control select2', 'placeholder' => 'Select database connection..']) !!}
    </div>

    <div class="btn-group pull-right">
        {{ Form::button('<i class="fa fa-fw fa-check"></i> Save', ['class' => 'btn btn-sm btn-success', 'type' => 'submit'] ) }}
        <a class="btn btn-sm btn-danger" href="{{ route('settings.app.edit') }}"><i class="fa fa-fw fa-times"></i> Cancel</a>
    </div>

    {{ Form::close() }}
@endsection