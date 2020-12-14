@extends('staff.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Halaman Utama</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Mata Kuliah</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.department.index') }}">List Mata Kuliah</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('staff.department.create') }}">Buat Baru MataKuliah</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Mahasiswa</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.student.index') }}">List Mahasiswa</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('staff.student.create') }}">Tambah Mahasiswa</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Absensi</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('staff.attendance.create') }}">Update Absensi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
