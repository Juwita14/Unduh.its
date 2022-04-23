<a href="/admin/createRingkasan">add new</a>
<table border="1">
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Pendiri</th>
        <th>Ringkasan</th>
    </tr>
    @foreach($software as $s)
        <tr>
            <td>{{$s->id_software}}</td>
            <td>{{$s->nama_software}}</td>
            <td>{{$s->nama_perusahaan}}</td>
            <td>{{$s->ringkasan}}</td>
        </tr>
    @endforeach
</table>
