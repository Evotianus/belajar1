@extends('template.template')

@section('title', 'Data Siswa')

@section('body-container')
    <h1>Data Siswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Absen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data_siswa)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data_siswa->nama }}</td>
                    <td>{{ $data_siswa->kelas }}</td>
                    <td>{{ $data_siswa->absen }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
