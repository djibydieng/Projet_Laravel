@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="panel panel-info">
            <div class="panel-heading">{{trans('etudiant.infos')}}</div>
            <div class="panel-body">
            <table border="0" width="400">
                <div class="form-group">
                
                    <tr><td>{{ trans('etudiant.nom')}}</td><td><input type="text" value="{{$etudiant->nom}}" class="form-control" disabled /></td></tr>
                    </div>
                    <div class="form-group">
                    <tr><td>{{ trans('etudiant.prenom')}}</td><td><input type="text" value="{{$etudiant->prenom}}" class="form-control" disabled /></td></tr>
                    </div>
                </table>
                </div>
                
            </div>
             <a href="{{route('back') }}" class="btn btn-primary btn-sm"> {{trans('commun.retour')}}</a>
        </div>
    </div>
   
</div>

@endsection  