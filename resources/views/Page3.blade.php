@extends ('layout/main')

@section ('title','Loop')
@section ('container')
@for ($i = 0; $i < 20; $i++)
    Nilai = {{ $i }}<br>
@endfor
@endsection

        
    