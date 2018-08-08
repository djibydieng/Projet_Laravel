@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-heading">{{ trans('etudiant.titremodification')}}</div>
            <div class="panel-body">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                @include('etudiant._form')
                 <a href="{{route('back') }}" class="btn btn-primary btn-sm previous"> {{trans('commun.retour')}}</a>
            </div>
        </div>
       
    </div>
     
</div>
@endsection    