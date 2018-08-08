@if(isset($etudiant))
{!! Form::model($etudiant, ['route' => ['updateEtudiant', $etudiant->id], 'method' => 'put']) !!}
@else
{!! Form::open(['route' =>'addEtudiant']) !!}
@endif
<div class="">
        <div class="panel panel-info">
            <div class="panel-heading">{{trans('commun.ajout')}}</div>
            <div class="panel-body">
                <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                {!! Form::label("{{ trans('etudiant.nom')}}",'Nom : ') !!}
                {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                {!! Form::label("{{ trans('etudiant.nom')}}", 'Prenom : ') !!}
                {!! Form::text('prenom',null, ['class' => 'form-control']) !!}
                {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-t-n-xs">{{trans('commun.enregistrer')}}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>