@extends('layouts.admin')

@section('content')
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col">Slug</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
              <tr>
                <td>{{$technology-> name}}</td>
                <td>{{$technology-> link}}</td>
                <td>{{$technology-> slug}}</td> 
                <td>
                  <a href="{{route('admin.technologies.show', $technology->id)}}" class="btn btn-primary">
                  <i class="fas fa-eye"></i>
                  </a>
                </td> 
                <td>
                  <a href="{{route('admin.technologies.edit', $technology->id)}}" class="btn btn-warning">
                  <i class="fas fa-edit"></i>
                  </a>
                </td>   
                <td>
                  <form class="techonology-delete-button d-inline-block mx-1" data-technology-title="{{ $technology->name }}" action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                </td>
              </tr>
        @endforeach 
      </tbody>
    </table>
    <a href="{{route('admin.technologies.create')}}" class="btn btn-sm btn-primary">Aggiungi un progetto</a>
          
  
@include('admin.partials.modal_delete')
@endsection