@extends('partials.main')
@section('title', 'Edit Pegawai')
@section('peg-act', 'active')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Pegawai</div>
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $pegawai->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip"
                                    value="{{ $pegawai->nip }}" required>
                            </div>

                            <div class="form-group">
                                <label for="position">Posisi</label>
                                <input type="text" class="form-control" id="position" name="position"
                                    value="{{ $pegawai->position }}" required>
                            </div>

                            <div class="form-group">
                                <label for="departement">Departemen</label>
                                <input type="text" class="form-control" id="departement" name="departement"
                                    value="{{ $pegawai->departement }}" required>
                            </div>

                            <div class="form-group">
                                <label for="salary">Gaji</label>
                                <input type="text" class="form-control" id="salary" name="salary"
                                    value="{{ $pegawai->salary }}" required>
                            </div>

                            <div class="form-group">
                                <label for="join_date">Tanggal Bergabung</label>
                                <input type="date" class="form-control" id="join_date" name="join_date"
                                    value="{{ $pegawai->join_date }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
