@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-2 mt-2 text-end">
                    <a href="{{route('admin.technologies.index' )}}" class="btn btn-primary"> Tutti i tag</a>
                </div>
            </div>
            <div class="col-12">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('admin.technologies.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label class="control-label" >Title</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{old('name') ?? $technology->name}}">
                    </div>
                    
                    <div class=" form-group mt-3 mt-2">
                        <button type="submit" class="btn btn-success"> Salva</button>
                    </div>
                </form>

            </div>
              

        </div>
    </div>

@endsection


















