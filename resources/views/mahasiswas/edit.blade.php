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
                    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->Nim) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" name="Nim" class="formcontrol" id="Nim" value="{{ $Mahasiswa->Nim }}"
                                   ariadescribedby="Nim">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="formcontrol" id="Nama" value="{{ $Mahasiswa->Nama }}"
                                   ariadescribedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <input type="Kelas" name="Kelas" class="formcontrol" id="Kelas"
                                   value="{{ $Mahasiswa->Kelas }}" ariadescribedby="Kelas">
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="Jurusan" name="Jurusan" class="formcontrol" id="Jurusan"
                                   value="{{ $Mahasiswa->Jurusan }}" ariadescribedby="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="No_Handphone">No_Handphone</label>

                            <input type="No_Handphone" name="No_Handphone" class="formcontrol" id="No_Handphone"
                                   value="{{ $Mahasiswa->No_Handphone }}" ariadescribedby="No_Handphone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
