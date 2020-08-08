@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <a href="/pertanyaan/create" class="btn btn-info mb-2">Create New Pertanyaan</a>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($judul as $x => $y)
                      <tr>
                          <td>{{ $x + 1 }}</td>
                          <td>{{ $y->judul }}</td>
                          <td>{{ $y->isi }}</td>
                          <td style="display: inline-flex;">
                            <a href="/pertanyaan/{{ $y->id }}" class="btn btn-info btn-sm">Details</a>
                            <a href="/pertanyaan/{{ $y->id }}/edit" class="btn btn-default btn-sm">Edit</a>
                            <form action="/pertanyaan/{{ $y->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                          </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="4" align="center">Null Posts</td>
                      </tr>

                  @endforelse

                </tbody>
              </table>
            </div>
            <!-- /.card-body
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div> -->

    </div>
@endsection
