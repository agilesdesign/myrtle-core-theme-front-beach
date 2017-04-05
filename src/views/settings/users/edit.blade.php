@extends('layouts.frontend')

@section('page-title')
    Edit Users Settings
@endsection

@section('content')
    {{ Form::model($settings, ['route' => ['settings.' . 'users' . '.update', $settings->id], 'method' => 'patch']) }}

    <div class="form-group">
        {!! Form::label('registration', 'Registration') !!}
        {!! Form::select('registration', [0 => 'Off', 1 => 'On' ], $settings->options['registration'], ['class' => 'form-control select2']) !!}
    </div>

    <div class="btn-group pull-right">
        {{ Form::button('<i class="fa fa-fw fa-check"></i> Save', ['class' => 'btn btn-sm btn-success', 'type' => 'submit'] ) }}
        <a class="btn btn-sm btn-danger" href="{{ route('settings.' . 'users' . '.edit') }}"><i class="fa fa-fw fa-times"></i> Cancel</a>
    </div>

    {{ Form::close() }}
@endsection