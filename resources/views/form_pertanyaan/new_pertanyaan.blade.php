@extends('adminlte.master')

@section('content')
<div class="ml-4 mr-4">
    <form role="form" action="/pertanyaan" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="font-size: 28px;">Buat Pertanyaan Baru</h3>
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
                  <input type="text" name="judul" value="{{ old('judul') }}" class="form-control" id="input_judul" placeholder="Maksimal 45 Karakter">
                  @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="input_isi">Isi</label>
                    <textarea class="form-control" value="{{ old('isi') }}" rows="3" id="input_isi" name="isi" placeholder="Maksimal 255 Karakter ..."></textarea>
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
