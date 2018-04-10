<h1>Daftar Seluruh Santri</h1>
<a href="{{ route('santri.create') }}">Create</a><br><br>
<table border="!">
   <thead>
      <tr>
         <th>No</th>
         <th>Nama</th>
         <th>Umur</th>
         <th>Alamat</th>
         <th>Jenis Kelamin</th>
      </tr>
   </thead>
   <tbody>
   @foreach($santris as $key => $santri)

      <tr>
         <td>{{ $key+1 }}</td>
         <td>{{ $santri->nama }}</td>
         <td>{{ $santri->umur }}</td>
         <td>{{ $santri->alamat }}</td>
         <td>{{ $santri->jenis_kelamin }}</td>
      </tr>

   @endforeach
   </tbody>
</table>

