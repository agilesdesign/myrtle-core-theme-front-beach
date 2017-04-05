@extends('layouts.app')

@section('page-title')
    Certification Types
    <span class="pull-right">
        <a href="{{ url('/certificationfiletypes/create') }}" class="btn btn-success btn-sm"><i class="fa fa-fw fa-plus"></i> New</a>
    </span>
@endsection

@section('content')
    <ul class="list-group clearfix">
        @foreach($certificationFileTypes as $certificationFileType)
            <li class="certification-type list-group-item">
                <strong>{{ $certificationFileType->name }}</strong>

                <span class="pull-right">
                    <a href="{{ url('certificationfiletypes/' . $certificationFileType->id . '/edit') }}" class="edit hidden-sm-up">
                        <i class="fa fa-fw fa-pencil"></i>
                    </a>
                </span>
                <span class="pull-right">
                    {{ $certificationFileType->score_sheet . ':' . $certificationFileType->score_column . $certificationFileType->score_row }}
                </span>
            </li>
        @endforeach
    </ul>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('.certification-type').hover(
                    function(){
                        $(this).find('.edit').toggleClass('hidden-sm-up');
                    },
                    function(){
                        $(this).find('.edit').toggleClass('hidden-sm-up');
                    }
            );
        });
    </script>
@endsection