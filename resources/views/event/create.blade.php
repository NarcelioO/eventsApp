@extends('layouts.main')
@section('title', 'Create Event')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3 px-2">
    <h1>Crie o seu evento</h1>
    <form action="/event" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" >
            <label for="image" class="form-label">Imagem do Evento</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Eventos">
        </div>
        
        <div class="mb-3">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Titulo">
        </div>
        <div class="mb-3">
            <label for="private" class="form-label">Privado</label>
            <select name="private" id="private" name="private" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>

        </div>
        <div class="mb-3" >
            <label for="description" class="form-label">Descrição</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição" ></textarea>
        </div>
        <div class="mb-3" >
            <label for="description" class="form-label">Infraestrutura</label>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Cadeiras" name="items[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Cadeiras
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Palco" name="items[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Palco
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Open food" name="items[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Open food
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Cerveja grátis" name="items[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Cerveja grátis
            </label>
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection