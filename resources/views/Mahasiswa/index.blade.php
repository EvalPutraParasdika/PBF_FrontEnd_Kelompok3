@extends('layout')

@section('title', 'Mahasiswa')

@section('judul', 'Mahasiswa')


@section('isi')


    <div class="card shadow mb-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert"
                style="background: rgba(40, 167, 69, 0.2); border: 1px solid rgba(40, 167, 69, 0.5); color: #155724;">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert"
                style="background: rgba(220, 53, 69, 0.2); border: 1px solid rgba(220, 53, 69, 0.5); color: #721c24;">
                {{ session('error') }}
            </div>
        @endif
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <!-- Tombol buka modal tambah -->
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                + Tambah Mahasiswa
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th>Nama Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                            <tr>
                                <!-- Modal Edit Mahasiswa -->
                                <div class="modal fade" id="modalEdit{{ $mhs['NIM'] }}" tabindex="-1"
                                    aria-labelledby="modalEditLabel{{ $mhs['NIM'] }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('mahasiswa.update', $mhs['NIM']) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalEditLabel{{ $mhs['NIM'] }}">Edit Mahasiswa
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>NIM</label>
                                                        <input type="text" name="NIM" class="form-control"
                                                            value="{{ $mhs['NIM'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" name="nama" class="form-control"
                                                            value="{{ $mhs['nama'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kelas</label>
                                                        <input type="kelas" name="kelas" class="form-control"
                                                            value="{{ $mhs['kelas'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Semester</label>
                                                        <input type="text" name="semester" class="form-control"
                                                            value="{{ $mhs['semester'] }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <input type="text" name="status" class="form-control"
                                                            value="{{ $mhs['status'] }}" required>
                                                    </div>
                                                    <select name="id_prodi" class="form-control" required>
                                                        @foreach ($prodi as $p)
                                                            <option value="{{ $p['id_prodi'] }}" {{ $mhs['id_prodi'] == $p['id_prodi'] ? 'selected' : '' }}>
                                                                {{ $p['nama'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <td>{{ $mhs['NIM'] }}</td>
                                <td>{{ $mhs['nama'] }}</td>
                                <td>{{ $mhs['kelas'] }}</td>
                                <td>{{ $mhs['semester'] }}</td>
                                <td>{{ $mhs['status'] }}</td>
                                <td>{{ $mhs['nama_prodi'] }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-sm btn-warning" data-toggle="modal"
                                        data-target="#modalEdit{{ $mhs['NIM'] }}">Edit</button>

                                    <form action="{{ route('mahasiswa.destroy', $mhs['NIM']) }}" method="POST"
                                        style="display:inline-block;"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Mahasiswa -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahLabel">Tambah Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="NIM" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="kelas" name="kelas" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="text" name="semester" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select name="id_prodi" class="form-control" required>
                                @foreach ($prodi as $p)
                                    <option value="{{ $p['id_prodi'] }}">{{ $p['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
<script>
    // Menghilangkan alert otomatis setelah 2 detik
    setTimeout(function () {
        let alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 500);
        });
    }, 2000);
</script>