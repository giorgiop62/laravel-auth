@section('title')
    Admin
@endsection


@section('content')
<div class="container">
    <h1 class="my-5">Elenco di post</h1>

    <table class="table">
        <thead>
          <tr>

            <th scope="col">Title</th>
            <th scope="col">Data</th>
            <th scope="col">Paragrafo</th>
            <th scope="col">Azioni</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->data}}</td>
                    <td>{{$post->text}}</td>
                    <td>xxx</td>
                </tr>

            @endforeach

      </table>


</div>
