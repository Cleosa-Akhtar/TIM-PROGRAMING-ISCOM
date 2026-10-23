<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi ETS - Fakultas Ilmu Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{ route('presensi.index') }}">Presensi Selama 2 Minggu Pekan ETS</a>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Kehadiran Mahasiswa</h5>
                <a href="{{ route('presensi.create') }}" class="btn btn-primary btn-sm">Tambah Presensi</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center">NPM</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Program Studi</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Mata Kuliah</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Waktu</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($presensis as $p)
                        <tr>
                            <td>{{ $p->npm }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->program_studi }}</td>
                            <td>{{ $p->kelas }}</td>
                            <td>{{ $p->mata_kuliah }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td>{{ $p->waktu_hadir }}</td>
                            <td>{{ $p->status }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>
                                <a href="{{ route('presensi.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('presensi.destroy', $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>