@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do plano <b>{{$plan->name}}</b></h1>@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{$plan->name}}
                </li>
                <li>
                    <strong>URL:</strong> {{$plan->url}}
                </li>
                <li>
                    <strong>Preço:</strong> R${{number_format($plan->price, 2, ',', '.')}}
                </li>
                <li>
                    <strong>Descrição:</strong> {{$plan->description}}
                </li>
            </ul>
            <form action="{{route('plans.destroy', $plan->url)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Deletar o Plano <b>{{$plan->name}}</b> ?</button>
                <a href="{{route('plans.index')}}" class="btn btn-dark"><i class="fas fa-long-arrow-alt-left"></i> Voltar</a>
            </form>

        </div>
    </div>
@endsection
