<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Presensi - ETS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('presensi.index') }}">Sistem Presensi ETS</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="mb-0">Edit Data Kehadiran</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('presensi.update', $presensi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>NPM</label>
                        <input type="text" name="npm" class="form-control" value="{{ $presensi->npm }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ $presensi->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Program Studi</label>
                        <input type="text" name="program_studi" class="form-control" value="{{ $presensi->program_studi }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Kelas</label>
                        <input type="text" name="kelas" class="form-control" value="{{ $presensi->kelas }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Mata Kuliah</label>
                        <input type="text" name="mata_kuliah" class="form-control" value="{{ $presensi->mata_kuliah }}" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="{{ $presensi->tanggal }}" required>
                        </div>
                        <div class="col-md-6">
                            <label>Waktu Hadir</label>
                            <input type="time" name="waktu_hadir" class="form-control" value="{{ $presensi->waktu_hadir }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select" required>
                            <option value="Hadir" {{ $presensi->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                            <option value="Izin" {{ $presensi->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                            <option value="Sakit" {{ $presensi->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                            <option value="Alpa" {{ $presensi->status == 'Alpa' ? 'selected' : '' }}>Alpa</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="3">{{ $presensi->keterangan }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    <a href="{{ route('presensi.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>