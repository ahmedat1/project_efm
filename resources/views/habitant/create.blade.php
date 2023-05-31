@extends('habitant.layout')
@section('content')

<div class="card">
    <div class="card-header">Habitant Page</div>
    <div class="card-body">
        <form action="{{ url('habitant') }}" method="post">
            {!! csrf_field() !!}
            <label>Nom</label></br>
            <input type="text" name="nom" id="title" class="form-control col-6"></br>
            <label>Prenom</label></br>
            <input type="text" name="prenom" id="content" class="form-control"></br>
            <label>Cin</label></br>
            <input type="text" name="cin" id="content" class="form-control"></br>
            <select name="ville_id">
                <option value="" selected disabled>Séléctionner une ville</option>
                @foreach($villes as $ville)
                    <option value="{{$ville->id}}">{{$ville->ville}} ({{$ville->nombre_habitant}})</option>
                @endforeach
            </select>
            <input type="file" name="photo">
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop