@extends('habitant.layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card p-4">
                    <div class="card-header">
                        <h2>Habitant</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/habitant/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                            <div class="row ">  
                            @foreach($habitant as $item)
                                <div class="col-md-4  ">
                                    <div class="card  cart2 d-flex position-relative w-100"  >
                                        <div class="card-body">
                                            <h3>{{$item->nom}}</h3>
                                            <h3>{{$item->prenom}}</h3>
                                            <p><strong>{{$item->cin}}</strong> </p>
                                            <img src="{{ asset('public/images/'.$item->photo) }}" alt="" width="100px" height="100px">
                                            <br>
                                            <div class="group-btn">
                                                <a href="{{ url('/habitant/' . $item->id . '/edit') }}" title="Edit article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <form method="POST" action="{{ url('/habitant' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}  
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"  >Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection