@extends('layouts.app')

@section('content')
  <h1>Criar Contato</h1>

  {{-- incluindo POST pela URL --}}
{!! Form::open(['url' => 'contato/novo', 'class' => '']) !!}
{!! Form::label('nome', 'Nome:',['class'=>'']) !!}
{!! Form::text('nome', null, ['class'=>'','autofocus']) !!}
{!! Form::label('telefone', 'Nome:',['class'=>'']) !!}
{!! Form::text('telefone', null, ['class'=>'']) !!}
{!! Form::close() !!}
@endsection
