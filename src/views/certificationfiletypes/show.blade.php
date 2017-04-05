@extends('layouts.app')

@section('page-title')
    {{$certificationType->name}}
    <small class="pull-right">
        <a href="{{ route('certificationtypes.edit', $certificationType->id) }}">
            <i class="fa fa-fw fa-pencil"></i>
        </a>
    </small>
@endsection

@section('content')
    @foreach($certificationType->fields as $field)
        {{ $field->name }}
    @endforeach
@endsection

@section('scripts')
    <script>
        $(function() {
            $('.certification-type-field').hover(
                    function(){
                        $(this).find('.actions').toggleClass('hidden-sm-up');
                        console.log($(this));
                    },
                    function(){
                        $(this).find('.actions').toggleClass('hidden-sm-up');
                    }
            );
        });
    </script>

@endsection