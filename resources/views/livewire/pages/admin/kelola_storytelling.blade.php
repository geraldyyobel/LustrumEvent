
@include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>JB CUP Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Data Storry Telling</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/admin/exportstorytelling" class="btn btn-success my-3" target="_blank" style="position: absolute">EXPORT EXCEL</a>
                <table  data-toggle="table"
                data-pagination="true"
                data-search="true">
                    <thead>
                        <tr>
                            <th>Pendaftar</th>
                            <th>Nama</th>
                            <th>Asal sekolah</th>
                            <th>Alamat Sekolah</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Judul Cerita</th>
                            <th>Kartu Pelajar</th>
                            <th>Naskah Asli</th>
                            <th>Naskah Peserta</th>
                            <th>Logo Tim/Sekolah</th>
                            <th>Pendamping</th>
                            <th>Telepon Pendamping</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $a)
                            <tr>
                                <td>{{$a->author}}</td>
                                <td>{{$a->pemain}}</td>
                                <td>{{$a->sekolah}}</td>
                                <td>{{$a->alamat}}</td>
                                <td>{{$a->jk}}</td>
                                <td>{{$a->kelas}}</td>
                                <td>{{$a->judul}}</td>
                                <td><a href="{{ Storage::url('public/idcard_storytelling/'.$a->id_card) }}">{{ $a->id_card }}</a></td>
                                <td><a href="{{ Storage::url('public/storytelling/'.$a->naskah_asli) }}">{{ $a->naskah_asli }}</a></td>
                                <td><a href="{{ Storage::url('public/naskah_storytelling/'.$a->naskah) }}">{{ $a->naskah }}</a></td>
                                <td><a href="{{ Storage::url('public/logo/'.$a->logo) }}">Download File</a></td>
                                <td>{{$a->pendamping}}</td>
                                <td>{{$a->phone}}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    $().tooltip();
</script>