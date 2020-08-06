@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}">Planos</a></li>
    </ol>
    <h1>Planos <a href="{{route('plans.create')}}" class="btn btn-dark">ADD <i class="fas fa-plus-circle"></i></a></h1>@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{route('plans.search')}}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{$filters['filter'] ?? ''}}">
                <button type="submit" class="btn btn-sm btn-dark">Pesquisar <i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Ações</td>
                </tr>
                </thead>
                <tbody>
                @foreach($plans as $plan)
                    <tr>
                        <td>{{$plan->name}}</td>
                        <td>R$ {{number_format($plan->price, 2, ',', '.')}}</td>
                        <td>
                            <a href="{{route('plans.edit', $plan->url)}}" class="btn btn-success"><i class="fas fa-edit"></i> Editar</a>
                            <a href="{{route('plans.show', $plan->url)}}" class="btn btn-warning"><i class="fas fa-eye"></i> Ver</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
              {!! $plans->appends($filters)->links() !!}
            @else
                {!!$plans->links()!!}
            @endif
        </div>
    </div>
@stop



