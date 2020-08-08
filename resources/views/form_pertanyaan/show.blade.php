@extends("adminlte.master")

@section('content')
<div class="ml-3">
    <h3>{{ $post->judul }}</h3>
    <p>{{ $post->isi }}</p>
</div>

@endsection
