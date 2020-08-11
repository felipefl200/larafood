@extends('adminlte::page')

@section('title', "Informações do  {$detail->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('details.plan.index', $plan->url)}}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{route('details.plan.edit', [$plan->url, $detail->id])}}" class="active">Atualizar</a></li>
    </ol>
    <h1>Informações do <b>{{$detail->name}}</b></h1>@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{$detail->name}}
                </li>
            </ul>
            @include('admin.pages.plans.details._partials.alerts')
            <form action="{{route('details.plan.destroy', [$plan->url, $detail->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Deletar o Plano <b>{{$detail->name}}</b> ?</button>
                <a href="{{route('details.plan.index', $plan->url)}}" class="btn btn-dark"><i class="fas fa-long-arrow-alt-left"></i> Voltar</a>
            </form>

        </div>
    </div>
@endsection
