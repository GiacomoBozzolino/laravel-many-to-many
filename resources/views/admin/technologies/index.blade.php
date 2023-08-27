@extends('layouts.admin')

@section('content')
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Strumenti</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
              <tr>
                <td>{{$technology-> name}}</td>
                <td>{{$technology-> slug}}</td> 
                <td class="d-flex">
                  <div>
                    <a href="{{route('admin.technologies.show', $technology->id)}}" class="btn btn-primary mx-1">
                    <i class="fas fa-eye"></i>
                    </a>
                  </div>
                 
                  <div>
                    <a href="{{route('admin.technologies.edit', $technology->id)}}" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                    </a>
                  </div>
                   
                  <div>
                    <form class="project-delete-button d-inline-block mx-1" data-project-title="{{ $technology->name }}" action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
        @endforeach 
      </tbody>
    </table>
    <a href="{{route('admin.technologies.create')}}" class="btn btn-sm btn-primary">Crea un nuovo tag</a>
          
  
@include('admin.partials.modal_delete')
@endsection