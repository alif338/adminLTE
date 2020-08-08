@extends('adminlte.master')

@section('content')
<div class="ml-4 mr-4">
    <form role="form" action="/pertanyaan/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="font-size: 28px;">Edit Pertanyaan {{ $post->id }}</h3>
              <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <button type="submit" class="btn btn-block btn-primary btn-lg" >Submit</button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <label for="input_judul">Judul</label>
                  <input type="text" name="judul" value="{{ old('judul',$post->judul) }}" class="form-control" id="input_judul" placeholder="Maksimal 45 Karakter">
                  @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="input_isi">Isi</label>
                    <input type="text" class="form-control" value="{{ old('isi', $post->isi) }}" rows="3" id="input_isi" name="isi" placeholder="Maksimal 255 Karakter ...">
                    @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

              </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->

    </form>

</div>



@endsection

@push('style')
<link rel="stylesheet" href="{{ asset('/admin_Lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin_Lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
