@if(Request::is('*/editar'))
  {{-- editando pela url --}}
  {{-- {!! Form::model($contato, ['url' => 'contato/'.$contato->id.'/editar','class' => '', 'method' => 'PUT']) !!} --}}
  {{-- editando pela routeName --}}
  {!! Form::model($contato, ['route' => ['contato.update', $contato->id],'class' => '', 'method' => 'PUT']) !!}
@else
  {{-- incluindo POST pela URL --}}
  {{-- {!! Form::open(['url' => 'contato/novo', 'class' => '']) !!} --}}
  {{-- incluindo POST pela routeName --}}
  {!! Form::open(['route' => 'contato.store', 'class' => '']) !!}
@endif
{!! Form::label('nome', 'Nome:',['class'=>'']) !!}
{!! Form::text('nome', null, ['class'=>'','autofocus']) !!}
{!! Form::label('telefone', 'Nome:',['class'=>'']) !!}
{!! Form::text('telefone', null, ['class'=>'']) !!}
{!! Form::close() !!}
