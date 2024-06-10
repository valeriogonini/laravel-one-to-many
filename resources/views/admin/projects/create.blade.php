@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div>
      <h1>Inserisci nuovo progetto</h1>
      <div class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
      </div>
  </div class="p-3">
  <form action="{{route('admin.projects.store')}}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="nome_progetto" class="form-label">Nome Progetto</label>
          <input type="text" name="nome_progetto" class="form-control" id="nome_progetto" placeholder="Inserisci nome progetto">
        </div>
        <div class="mb-3">
            <label for="descrizione_progetto" class="form-label">Descrizione Progetto</label>
            <textarea class="form-control" name="descrizione_progetto" id="descrizione_progetto" rows="3"></textarea>
          </div>
        <div class="mb-3">
          <label for="link_github_progetto" class="form-label">Inserisci link GitHub</label>
          <input type="text" class="link_github_progetto" name="link_github_progetto" id="link_github_progetto" placeholder="http://..">
        </div>
        
        <button class="btn btn-primary">Inserisci Progetto</button>
  
  </form>
  </div>
</div>


@endsection