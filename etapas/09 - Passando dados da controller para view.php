App\Http\Controllers\ContatoController
vamos usar a nossa Model Contato

use App\Contato;

===========================================================================
e vamos escrever no metodo index

$contatos = Contato::orderBy('nome')->paginate(10);

agora passamos esses dados para nossa view.
return view ('contato.lista',['contatos'=>$contatos]);

===========================================================================

agora que ja temos os dados vamos deixar nossa view dinamica

Fontes/tablePagination.blade.php
