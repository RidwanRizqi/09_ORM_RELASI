@extends('mahasiswas.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.update', ['mahasiswa' => $Mahasiswa->nim]) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="formcontrol" id="nim" value="{{ $Mahasiswa->nim }}"
                                   ariadescribedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $Mahasiswa->nama }}"
                                   ariadescribedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="formcontrol" id="email" value="{{ $Mahasiswa->email }}"
                                   ariadescribedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir" value="{{ $Mahasiswa->tanggal_lahir }}"
                                   ariadescribedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select class="form-control" id="kelas_id" name="kelas_id">
                                @foreach ($kelas as $kls)
                                    <option value="{{$kls->id}}"
                                            {{ $Mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{$kls->nama_kelas}}</option>
                                @endforeach
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="Jurusan" name="jurusan" class="formcontrol" id="jurusan"
                                   value="{{ $Mahasiswa->jurusan }}" ariadescribedby="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">No_Handphone</label>

                            <input type="No_Handphone" name="no_handphone" class="formcontrol" id="no_handphone"
                                   value="{{ $Mahasiswa->no_handphone }}" ariadescribedby="No_Handphone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
