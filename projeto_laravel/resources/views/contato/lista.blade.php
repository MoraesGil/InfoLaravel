@extends('layouts.app')

@section('content')
  <div class="container">
    {{-- botao de chamar pagina novo --}}
    <a class="btn btn-default" href="{{url('/contato/novo')}}">Novo</a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Telefone</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contatos as  $contato)
          <tr>
            <td>{{$contato->id}}</td>
            <td>{{$contato->nome}}</td>

            <td>{{$contato->telefone }}</td>

            <td style="text-align:center">
              <a href="{{url('contato/'.$contato->id.'/editar')}}" class="btn btn-default btn-xs"> <i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="top" title="Alterar"></i></a>
              <a  href="{{url('contato/'.$contato->id.'/excluir')}}" class="btn btn-default btn-xs" data-toggle="confirmation" data-placement="bottom" data-original-title="" title="">
                <i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="Excluir"></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <span class="pull-right"> {{ $contatos->links() }} </span>
  </div>
</div>
@endsection
