<table>
    <thead>
    <tr>
        <th>Nama</th>
        <th>Nama Siswa</th>
        <th>Kewarganegaraan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Pendidikan Terakhir</th>
        <th>Pekerjaan</th>
        <th>Penghasilan</th>
        <th>No Handphone</th>
        <th>Status Tempat Tinggal</th>
        <th>Alamat</th>
        <th>Provinsi</th>
        <th>Kabupaten Kota</th>
        <th>Kecamatan</th>
        <th>Kelurahan Desa</th>
        <th>Nama Jalan</th>
        <th>Kode Pos</th>
        <th>Nomor KK</th>

    </tr>
    </thead>
    <tbody>
    @foreach($data_wali as $user)
        <tr>
            <td width="auto">{{ $user->nama_lengkap }}</td>
            <td width="auto">{{ $user->nama_siswa }}</td>
            <td width="auto">{{ $user->kewarganegaraan }}</td>
            <td width="auto">{{ $user->tempat_lahir }}</td>
            <td width="auto">{{ $user->tanggal_lahir }}</td>
            <td width="auto">{{ $user->pendidikan_terakhir }}</td>
            <td width="auto">{{ $user->pekerjaan }}</td>
            <td width="auto">{{ $user->penghasilan }}</td>
            <td width="auto">{{ $user->no_handphone_aktif }}</td>
            <td width="auto">{{ $user->status_tempat_tinggal }}</td>
            <td width="auto">{{ $user->alamat }}</td>
            <td width="auto">{{ $user->provinsi }}</td>
            <td width="auto">{{ $user->kabupaten_kota }}</td>
            <td width="auto">{{ $user->kecamatan }}</td>
            <td width="auto">{{ $user->kelurahan_desa }}</td>
            <td width="auto">{{ $user->nama_jalan }}</td>
            <td width="auto">{{ $user->kode_pos }}</td>
            <td width="auto">{{ $user->no_kk }}</td>
        </tr>
    @endforeach
    </tbody>
</table>