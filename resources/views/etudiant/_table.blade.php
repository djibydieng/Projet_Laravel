<table class="table table-striped border border-primary">
    <tr >
        <th scope="col">
            {{trans('etudiant.nom')}}
        </th>
        <th scope="col">
            {{trans('etudiant.prenom')}}
        </th>
        <th scope="col">Action</th>
    </tr>
    @foreach ($etudiants as $etudiant)
    <tr>
        <th>
            {{$etudiant->nom}}
        </th>
        <th>
            {{$etudiant->prenom}}
        </th>
        <th>
            <a href="{{route('showEtudiant',$etudiant->id) }}" class="btn btn-info btn-xs btn-block"> {{trans('commun.details')}}</a>
        </th>
        <th>
            <a href="{{route('editEtudiant',$etudiant->id) }}" class="btn btn-warning  btn-xs btn-block"> {{trans('commun.modifier')}}</a>
        </th>
        <th>
             <a href="{{route('deleteEtudiant',$etudiant->id) }}" class="btn btn-danger  btn-xs btn-block"><span class="fa fa-remove"></span> {{trans('commun.supprimer')}}</a>
        </th>
    </tr>
    @endforeach
</table>

