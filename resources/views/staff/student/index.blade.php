@extends('staff.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mahasiswa</div>

                <div class="panel-body">
                    <a class="btn btn-primary pull-right" href="{{ route('staff.student.create') }}">Tambah Mahasiswa</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama Depan</th>
                                <th>Nama Terakhir</th>
                                <th>Tanggal Lahir</th>
                                <th>Mata Kuliah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Users as $Index => $User)
                            <tr>
                                <td>{{ $Index + 1 }}</td>
                                <td>{{ $User->email }}</td>
                                <td>{{ $User->first_name }}</td>
                                <td>{{ $User->last_name }}</td>
                                <td>{{ Carbon\Carbon::parse($User->dob)->format('d-m-Y') }}</td>
                                <td>{{ $User->department->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
