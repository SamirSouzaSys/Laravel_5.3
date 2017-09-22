@extends('painel.templates.template')

@section('content')
    <h1 class="title-pg">
{{--        @if( isset($product) )
            Gestão Produto - edição

        @else
            Gestão Produto - Inclusão

        @endif--}}
        <a href="{{ route('produtos.index') }}"><span class="glyphicon glyphicon-fast-backward"></span></a>
        <b>Gestão Produto:</b>
         {{$product->name or 'Novo'}}

    </h1>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    {{--<form class="form" method="post" action="/painel/produtos/store">--}}
{{--    <form class="form" method="post" action="{{url('/painel/produtos')}}">--}}
    {{--<form class="form" method="post" action="{{route('produtos.store')}}">--}}
    @if( isset($product) )
        {{--<form class="form" method="post" action="{{route('produtos.update', $product->id)}}">--}}
            {{--{!! method_field('PUT') !!}--}}
            {!! Form::model($product, ['route' => ['produtos.update',$product->id], 'class' => 'form','method'=>'put'
            ]) !!}
    @else
        {{--<form class="form" method="post" action="{{route('produtos.store')}}">--}}
            {!! Form::open(['route' => 'produtos.store', 'class' => 'form']) !!}
    @endif


        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

        {{--
        Retirado devido ao uso do Pacote Collective Form
        {!! csrf_field() !!}--}}
        <div class="form-group">
            {{--<input type="text" name="name" placeholder="Nome: "
                   class="form-control" value="{{$product->name or old('name')}}">--}}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome:']) !!}
        </div>
        <div class="form-group">
            <label>
                {{--<input type="checkbox" name="active" value="1"
                @if( isset($product) && $product->active == '1') checked @endif>--}}
                {!! Form::checkbox('active') !!}
                Ativo?
            </label>
        </div>
        <div class="form-group">
            {{--<input type="text" name="number" placeholder="Number: "
                   class="form-control" value="{{$product->number or old('number')}}">--}}
            {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Número:']) !!}
        </div>
        <div class="form-group">
            {{--<select name="category" class="form-control">
                <option value="">Escolha a Categoria</option>
                @foreach($categorys as $category)
                    <option value="{{$category}}"
                    @if( isset($product) && $product->category == $category ) selected @endif
                    >{{$category}}</option>
                @endforeach
            </select>--}}
            {!! Form::select('category', $categorys, null, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {{--<textarea name="description" placeholder="Descrição"
                      class="form-control">{{$product->description or old('description')}}</textarea>--}}
            {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder' => 'Descrição: ']) !!}
        </div>
        <div class="form-group">
            {{--<button class="btn btn-primary">Enviar</button>--}}
            {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
        </div>
    {{-- </form> --}}
    {!! Form::close() !!}
@endsection