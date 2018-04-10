<h1>Input Data Santri</h1>
<a href="{{ route('santri.index') }}">Cancel</a><br><br>

<form action="{{ route('santri.store') }}" method="post">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

    {{-- {{ csrf_field() }} --}}

    @csrf


    <input type="text" name="nama" placeholder="Masukkan namamu bro!"><br>
      @if($errors->has('nama'))
         <strong>{{ $errors->first('nama') }}</strong><br>
      @endif
    <input type="text" name="umur" placeholder="Masukkan umurmu bro!"><br>
       @if($errors->has('umur'))
       <strong>{{ $errors->first('umur') }}</strong><br>
       @endif
    <textarea name="alamat" placeholder="Masukkan alamatmu bro!"></textarea><br>
       @if($errors->has('alamat'))
       <strong>{{ $errors->first('alamat') }}</strong><br>
       @endif
    <input type="text" name="jenis_kelamin" placeholder="Masukkan jenis kelaminmu bro!"><br>
       @if($errors->has('jenis_kelamin'))
       <strong>{{ $errors->first('jenis_kelamin') }}</strong><br>
       @endif
    <button type="submit" name="button">Simpan</button>
</form>
