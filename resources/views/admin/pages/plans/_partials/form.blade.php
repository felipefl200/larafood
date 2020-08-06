@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
<div class="form-group">
    <label for="nome">Nome:</label>
    <input id="nome" name="name" type="text" class="form-control" value="{{$plan->name ?? old('name')}}">
</div>
<div class="form-group">
    <label for="preco">Preço:</label>
    <input id="preco" name="price" type="text" class="form-control" value="{{$plan->price ?? old('price')}}">
</div>
<div class="form-group">
    <label for="descricao">Descrição:</label>
    <input id="descricao" name="description" type="text" class="form-control" value="{{$plan->description ?? old('description')}}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
