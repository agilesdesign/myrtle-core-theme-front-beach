@extends('layouts.app')

@section('page-title')
    Edit Certification Type
@endsection

@section('content')
    {!! Form::model($certificationFileType, ['route' => ['certificationfiletypes.update', $certificationFileType->id], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('score_sheet', 'Sheet Name') !!}
        {!! Form::text('score_sheet', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('score_column', 'Score Column') !!}
        {!! Form::text('score_column', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('score_row', 'Score Row') !!}
        {!! Form::text('score_row', null, ['class' => 'form-control']) !!}
    </div>

    <div class="btn-group pull-right">
        {!! Form::button('<i class="fa fa-fw fa-check"></i> Save', ['class' => 'btn btn-sm btn-success', 'type' => 'submit']) !!}
        <a class="btn btn-sm btn-danger" href="{{ route('certificationfiletypes.index') }}"><i class="fa fa-fw fa-times"></i> Cancel</a>
        {!! Form::close() !!}
    </div>
@endsection