<div class="form-group {{ $errors->has('NIS') ? 'has-error' : ''}}">
    <label for="NIS" class="control-label">{{ 'NIS' }}</label>
    <input class="form-control" name="NIS" type="number" id="NIS" value="{{ isset($siswa->NIS) ? $siswa->NIS : ''}}" required>
    {!! $errors->first('NIS', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($siswa->Nama) ? $siswa->Nama : ''}}" required>
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('JenisKelamin') ? 'has-error' : ''}}">
    <label for="JenisKelamin" class="control-label">{{ 'Jenis kelamin' }}</label>
    <select name="JenisKelamin" class="form-control" id="JenisKelamin" >
    @foreach (json_decode('{"l":"Laki-Laki","p":"Perempuan"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($siswa->JenisKelamin) && $siswa->JenisKelamin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('JenisKelamin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('TempatLahir') ? 'has-error' : ''}}">
    <label for="TempatLahir" class="control-label">{{ 'Tempat lahir' }}</label>
    <input class="form-control" name="TempatLahir" type="text" id="TempatLahir" value="{{ isset($siswa->TempatLahir) ? $siswa->TempatLahir : ''}}" required>
    {!! $errors->first('TempatLahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('TanggalLahir') ? 'has-error' : ''}}">
    <label for="TanggalLahir" class="control-label">{{ 'Tanggal lahir' }}</label>
    <input class="form-control" name="TanggalLahir" type="date" id="TanggalLahir" value="{{ isset($siswa->TanggalLahir) ? $siswa->TanggalLahir : ''}}" required>
    {!! $errors->first('TanggalLahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    <label for="Alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="Alamat" type="textarea" id="Alamat" required>{{ isset($siswa->Alamat) ? $siswa->Alamat : ''}}</textarea>
    {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NPSN') ? 'has-error' : ''}}">
    <label for="NPSN" class="control-label">{{ 'NPSN' }}</label>
    <input class="form-control" name="NPSN" type="number" id="NPSN" value="{{$NPSN}}" readonly >
    {!! $errors->first('NPSN', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
