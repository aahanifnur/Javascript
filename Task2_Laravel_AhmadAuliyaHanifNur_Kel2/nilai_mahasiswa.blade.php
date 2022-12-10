<h1 align="center" style="padding-top: 2rem;">Nilai Mahasiswa </h1>
<table border="1" cellspacing="0" align="center" cellpadding="10" style="width: 50%;">
<thead>
    <tr bgcolor="grey">
        <th>No</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Keterangan</th>
    </tr>
</thead>
<tbody>
    @php 
    $no = 1;
    @endphp
    @foreach ($siswa as $sd)
        @php
        $ket = $sd['nilai'] > 60 ? 'Lulus' :'Gagal';
        @endphp

    <tr>
        <td>{{$no ++}}</td>
        <td>{{$sd['nama']}}</td>
        <td>{{$sd['nilai']}}</td>
        <td>{{$ket}}</td>
    </tr>
    @endforeach
</tbody>
</table>