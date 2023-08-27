@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="p-2 text-end">
                <a href="{{route('admin.technologies.index' )}}" class="btn btn-primary"> Tutti i tag</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                  
                  
                    <th scope="col">Elenco progetti</th>
                   
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$technology->name}}</td>
                        <td>
                            @if($technology->projects)
                                @foreach ($technology->projects as $project)
                                    <a href="{{route('admin.projects.show', $project->id)}} " >{{$project->name}}</a>  
                                @endforeach 
                            @else
                            Non sono presenti progetti associati a questo tag
                            @endif       
                        </td>
                         
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection