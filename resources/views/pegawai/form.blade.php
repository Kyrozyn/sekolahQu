<div class="form-group {{ $errors->has('NIP') ? 'has-error' : ''}}">
    <label for="NIP" class="control-label">{{ 'Nip' }}</label>
    <input class="form-control" name="NIP" type="number" id="NIP" value="{{ isset($pegawai->NIP) ? $pegawai->NIP : ''}}" required>
    {!! $errors->first('NIP', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($pegawai->Nama) ? $pegawai->Nama : ''}}" required>
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('JenisKelamin') ? 'has-error' : ''}}">
    <label for="JenisKelamin" class="control-label">{{ 'Jeniskelamin' }}</label>
    <select name="JenisKelamin" class="form-control" id="JenisKelamin" >
    @foreach (json_decode('{"l":"Laki-Laki","p":"Perempuan"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($pegawai->JenisKelamin) && $pegawai->JenisKelamin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('JenisKelamin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('TempatLahir') ? 'has-error' : ''}}">
    <label for="TempatLahir" class="control-label">{{ 'Tempatlahir' }}</label>
    <input class="form-control" name="TempatLahir" type="text" id="TempatLahir" value="{{ isset($pegawai->TempatLahir) ? $pegawai->TempatLahir : ''}}" required>
    {!! $errors->first('TempatLahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('TanggalLahir') ? 'has-error' : ''}}">
    <label for="TanggalLahir" class="control-label">{{ 'Tanggallahir' }}</label>
    <input class="form-control" name="TanggalLahir" type="date" id="TanggalLahir" value="{{ isset($pegawai->TanggalLahir) ? $pegawai->TanggalLahir : ''}}" required>
    {!! $errors->first('TanggalLahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    <label for="Alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="Alamat" type="textarea" id="Alamat" required>{{ isset($pegawai->Alamat) ? $pegawai->Alamat : ''}}</textarea>
    {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('JenisPegawai') ? 'has-error' : ''}}">
    <label for="JenisPegawai" class="control-label">{{ 'Jenispegawai' }}</label>
    <select name="JenisPegawai" class="form-control" id="JenisPegawai" >
    @foreach (json_decode('{"guru":"Guru","fungsional":"Fungsional"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($pegawai->JenisPegawai) && $pegawai->JenisPegawai == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('JenisPegawai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NPSN') ? 'has-error' : ''}}">
    <label for="NPSN" class="control-label">{{ 'Npsn' }}</label>
    <input class="form-control" name="NPSN" type="number" id="NPSN" value="{{$NPSN}}" readonly >
    {!! $errors->first('NPSN', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
