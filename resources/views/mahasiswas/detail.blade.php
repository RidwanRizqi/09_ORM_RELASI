@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nim: </b>{{$Mahasiswa->nim}}</li>
                        <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas}}</li>
                        <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->jurusan}}</li>
                        <li class="list-groupitem"><b>No_Handphone: </b>{{$Mahasiswa->no_handphone}}</li>
                        <li class="list-groupitem"><b>Email: </b>{{$Mahasiswa->email}}</li>
                        <li class="list-groupitem"><b>Tanggal Lahir: </b>{{$Mahasiswa->tanggal_lahir}}</li>

                    </ul>
                </div>
                <a class="btn btn-success mt3" href="{{ route('mahasiswas.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
