@if(Session::has('success_message'))
  <div class="alert alert-success">
    {{Session::get('success_message')}}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    @foreach($errors->all() as $error)
      <ul>
        <li>
          <h4> {{ $error }}</h4>
        </li>
      </ul>
    @endforeach
  </div>
@endif
