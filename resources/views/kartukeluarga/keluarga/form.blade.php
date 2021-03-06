
<input class="hidden" hidden name="keluarga" value="{{ $keluarga->id }}"></input>

<div class="form-group">
    <label class="form-label" for="name">Nama</label>
    {{ Form::text('nama', NULL, ['class' => ["form-control", 'is-invalid'=>$errors]]) }}
    {{ $errors->first('nama', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="nik">NIK</label>
    {{ Form::text('nik', NULL, ['class' => ["form-control", 'is-invalid'=>$errors]]) }}
    {{ $errors->first('nik', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="jenis_kelamin">Jenis Kelamain:</label>
    {{ Form::select('jenis_kelamin', $genders, NULL, ['class' => 'form-control']) }}

    {{ $errors->first('jenis_kelamin', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
    {{ Form::text('tempat_lahir', NULL, ['class' => ["form-control", 'is-invalid'=>$errors]]) }}
    {{ $errors->first('tempat_lahir', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
    {{ Form::date('tanggal_lahir', NULL, ['class' => ["form-control", 'is-invalid'=>$errors]]) }}
    {{ $errors->first('tanggal_lahir', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="agama">Agama:</label>
    {{ Form::select('agama', $agama, NULL, ['class' => 'form-control', 'placeholder' => '--Pilih Agama--']) }}

    {{ $errors->first('agama', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="pendidikan">Pendidikan:</label>
    <select id="pendidikan" name='pendidikan' class="form-control @error('pendidikan') is-invalid @enderror">
        <option value="" selected disabled>--Pilih Pendidikan--</option>
        @foreach($pendidikans as $pendidikan)
            <option value="{{ $pendidikan->id }}">{{$pendidikan->nama}}</option>
        @endforeach
    </select>
    {{ $errors->first('pendidikan') }}
</div>

<div class="form-group">
    <label class="form-label" for="pekerjaan">Pekerjaan:</label>
    <select id="pekerjaan" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
        <option value="" disabled selected>--Pilih Pekerjaan--</option>
    @foreach($kerjas as $kerja)
            <option value="{{ $kerja->id }}">{{$kerja->nama}}</option>
    @endforeach
    </select>

    @error('pekerjaan')
    <div class="invalid-feedback">{{ $errors->first('pekerjaan') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="pekerjaan">Kewarganegaraan:</label>
    <select id="kewargaan" name="kewargaan" class="form-control @error('kewargaan') is-invalid @enderror">
        <option value="" selected disabled>--Pilih Kewrganegaraan--</option>
        @foreach($kewargaans as $kewargaan)
            <option value="{{ $kewargaan->id }}">{{$kewargaan->nama}}</option>
        @endforeach
    </select>

    @error('kwn')
    <div class="invalid-feedback">{{ $errors->first('kwn') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="status_pernikahan">Status Pernikahan</label>
    {{ Form::select('status_pernikahan', $status_pernikahan, NULL, ['class' => ['form-control', 'is-invalid'=>$errors], 'palceholder' => 'Pilih Status Pernikahan']) }}
    {{ $errors->first('status_pernikahan', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="status_pernikahan">Status Keluarga</label>
    {{ Form::select('status_keluarga', $status_keluarga, NULL, ['class' => ['form-control', 'is-invalid'=>$errors], 'palceholder' => 'Pilih Status Keluarga']) }}
    {{ $errors->first('status_keluarga', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="name">Nama Ayah</label>
    {{ Form::text('ayah', NULL, ['class' => ["form-control", 'is-invalid'=>$errors]]) }}
    {{ $errors->first('ayah', ':message') }}
</div>

<div class="form-group">
    <label class="form-label" for="name">ibu Ibu</label>
    {{ Form::text('ibu', NULL, ['class' => ["form-control", 'is-invalid'=>$errors]]) }}
    {{ $errors->first('ibu', ':message') }}
</div>