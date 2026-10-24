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
                <form action="{{ route('presensi.update', $presensi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label>NPM</label>
                        <!-- Menggabungkan old() dengan data asli dari database -->
                        <input type="text" name="npm" class="form-control @error('npm') is-invalid @enderror" value="{{ old('npm', $presensi->npm) }}" required>
                        @error('npm')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $presensi->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label>Program Studi</label>
                        <input type="text" name="program_studi" class="form-control @error('program_studi') is-invalid @enderror" value="{{ old('program_studi', $presensi->program_studi) }}" required>
                        @error('program_studi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label>Kelas</label>
                        <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas', $presensi->kelas) }}" required>
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label>Mata Kuliah</label>
                        <input type="text" name="mata_kuliah" class="form-control @error('mata_kuliah') is-invalid @enderror" value="{{ old('mata_kuliah', $presensi->mata_kuliah) }}" required>
                        @error('mata_kuliah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $presensi->tanggal) }}" required>
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Waktu Hadir</label>
                            <input type="time" name="waktu_hadir" class="form-control @error('waktu_hadir') is-invalid @enderror" value="{{ old('waktu_hadir', $presensi->waktu_hadir) }}" required>
                            @error('waktu_hadir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select @error('status') is-invalid @enderror" required>
                            <option value="hadir" {{ old('status', $presensi->status) == 'hadir' ? 'selected' : '' }}>Hadir</option>
                            <option value="izin" {{ old('status', $presensi->status) == 'izin' ? 'selected' : '' }}>Izin</option>
                            <option value="sakit" {{ old('status', $presensi->status) == 'sakit' ? 'selected' : '' }}>Sakit</option>
                            <option value="alpa" {{ old('status', $presensi->status) == 'alpa' ? 'selected' : '' }}>Alpa</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="3">{{ old('keterangan', $presensi->keterangan) }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    <a href="{{ route('presensi.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>