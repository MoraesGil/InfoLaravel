O Laravel com uso de webservices removeu o helper de formularios da instalação padrão
o mesmo pode ser instalado a parte, vamos usa-lô para nosso projeto
as instruções de instalação fica em
https://laravelcollective.com/docs/5.3/html

lá tem todos os exemplos, no caso vou deixar o nosso codigo aqui


{{-- incluindo POST pela URL --}}
{!! Form::open(['url' => 'contato/novo', 'class' => '']) !!}
{!! Form::label('nome', 'Nome:',['class'=>'']) !!}
{!! Form::text('nome', null, ['class'=>'','autofocus']) !!}
{!! Form::label('telefone', 'Nome:',['class'=>'']) !!}
{!! Form::text('telefone', null, ['class'=>'']) !!}
{!! Form::close() !!}
