<div class="form-group {{ $errors->has('NIS') ? 'has-error' : ''}}">
    <label for="NIS" class="control-label">{{ 'Nis' }}</label>
    <input class="form-control" name="NIS" type="number" id="NIS" value="{{ isset($siswa->NIS) ? $siswa->NIS : ''}}" >
    {!! $errors->first('NIS', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <textarea class="form-control" rows="5" name="nama" type="textarea" id="nama" >{{ isset($siswa->nama) ? $siswa->nama : ''}}</textarea>
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : ''}}">
    <label for="tempat_lahir" class="control-label">{{ 'Tempat Lahir' }}</label>
    <textarea class="form-control" rows="5" name="tempat_lahir" type="textarea" id="tempat_lahir" >{{ isset($siswa->tempat_lahir) ? $siswa->tempat_lahir : ''}}</textarea>
    {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : ''}}">
    <label for="tanggal_lahir" class="control-label">{{ 'Tanggal Lahir' }}</label>
    <input class="form-control" name="tanggal_lahir" type="date" id="tanggal_lahir" value="{{ isset($siswa->tanggal_lahir) ? $siswa->tanggal_lahir : ''}}" >
    {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
    <label for="jenis_kelamin" class="control-label">{{ 'Jenis Kelamin' }}</label>
    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" >
    @foreach (json_decode('{"l": "Laki-Laki", "p": "Perempuan"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($siswa->jenis_kelamin) && $siswa->jenis_kelamin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('agama') ? 'has-error' : ''}}">
    <label for="agama" class="control-label">{{ 'Agama' }}</label>
    <textarea class="form-control" rows="5" name="agama" type="textarea" id="agama" >{{ isset($siswa->agama) ? $siswa->agama : ''}}</textarea>
    {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="alamat" type="textarea" id="alamat" >{{ isset($siswa->alamat) ? $siswa->alamat : ''}}</textarea>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
