<table>
    <thead>
    <tr>
        <th>Nama</th>
        <th>No Pendaftaran</th>
        <th>NISN</th>
        <th>Kewarganegaraan</th>
        <th>NIK</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Anak Ke</th>
        <th>Jumlah Saudara</th>
        <th>Agama</th>
        <th>Cita Cita</th>
        <th>No Handphone</th>
        <th>Hobi</th>
        <th>Status Tempat Tinggal</th>
        <th>Provinsi</th>
        <th>Kabupaten Kota</th>
        <th>Kecamatan</th>
        <th>Kelurahan Desa</th>
        <th>Nama Jalan</th>
        <th>Kode Pos</th>
        <th>Transport Ke Sekolah</th>
        <th>Jarak Tempuh</th>
        <th>Waktu Tempuh</th>
        <th>Membiayai Sekolah</th>
        <th>Pra Sekolah</th>
        <th>Imunisasi</th>
        <th>NO KIP</th>
        <th>NO KK</th>
        <th>Nama Kepala Keluarga</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data_siswa as $user)
        <tr>
            <td width="auto">{{ $user->nama_lengkap }}</td>
            <td width="auto">{{ $user->no_pendaftaran }}</td>
            <td width="auto">{{ $user->nisn }}</td>
            <td width="auto">{{ $user->kewarganegaraan }}</td>
            <td width="auto">{{ $user->nik }}</td>
            <td width="auto">{{ $user->tempat_lahir }}</td>
            <td width="auto">{{ $user->tanggal_lahir }}</td>
            <td width="auto">{{ $user->jenis_kelamin }}</td>
            <td width="auto">{{ $user->anak_ke }}</td>
            <td width="auto">{{ $user->jumlah_saudara }}</td>
            <td width="auto">{{ $user->agama }}</td>
            <td width="auto">{{ $user->cita_cita }}</td>
            <td width="auto">{{ $user->no_handphone }}</td>
            <td width="auto">{{ $user->hobi }}</td>
            <td width="auto">{{ $user->status_tempat_tinggal }}</td>
            <td width="auto">{{ $user->provinsi }}</td>
            <td width="auto">{{ $user->kabupaten_kota }}</td>
            <td width="auto">{{ $user->kecamatan }}</td>
            <td width="auto">{{ $user->kelurahan_desa }}</td>
            <td width="auto">{{ $user->nama_jalan }}</td>
            <td width="auto">{{ $user->kode_pos }}</td>
            <td width="auto">{{ $user->transport_ke_sekolah }}</td>
            <td width="auto">{{ $user->jarak_tempuh }}</td>
            <td width="auto">{{ $user->waktu_tempuh }}</td>
            <td width="auto">{{ $user->membiayai_sekolah }}</td>
            <td width="auto">{{ $user->pra_sekolah }}</td>
            <td width="auto">{{ $user->imunisasi }}</td>
            <td width="auto">{{ $user->no_kip }}</td>
            <td width="auto">{{ $user->no_kk }}</td>
            <td width="auto">{{ $user->nama_kepala_keluarga }}</td>

        </tr>
    @endforeach
    </tbody>
</table>