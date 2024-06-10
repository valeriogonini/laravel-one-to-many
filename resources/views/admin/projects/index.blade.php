@extends('layouts.app')
@section('content')
<div>
    <h1>Progetti</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome Progetto</th>
        <th scope="col">Descrizione Progetto</th>
        <th scope="col">Link GitHub</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$project -> id}}</th>
            <td>{{$project -> nome_progetto}}</td>
            <td>{{$project -> descrizione_progetto}}</td>
            <td><a href="{{$project -> link_github_progetto}}" target="_blank">Link</a></td>
            <td><a href="{{route('admin.projects.edit',$project)}}">Modifica</a></td>
            <td> <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
              @method('DELETE')
              @csrf
              <button><i class="fa-solid fa-trash-can"></i></button>
            </form></td>
          </tr>
        @endforeach
      
      
    </tbody>
  </table>

@endsection