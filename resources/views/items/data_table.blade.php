@extends('adminlte.master')

@section('content') 
       @include('items.tables')
@endsection

@push('scripts')
<script src="{{ asset('/admin_Lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/admin_Lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });

  console.log(DataTable);
</script>
@endpush