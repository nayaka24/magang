@extends('layout.main');

@section('title','Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
            @method('patch')
            @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value =" {{ $student->nama}}">
                    @error('nama')
                         <div class="valid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIM</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukkan NIM" name="nip" value =" {{ $student->nip}}">
                    @error('nip')
                         <div class="valid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" value =" {{ $student->email }}">
                    
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control " id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value =" {{ $student->jurusan}}">
                    
  
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>
            
        </div>
    </div>
</div>
@endsection