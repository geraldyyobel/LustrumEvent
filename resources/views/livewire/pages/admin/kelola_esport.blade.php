@include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>JB CUP Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Data E-Sport</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/admin/exportesport" class="btn btn-success my-3" target="_blank" style="position: absolute">EXPORT EXCEL</a>
                <table  data-toggle="table"
                data-pagination="true"
                data-search="true">
                    <thead>
                        <tr>
                            <th>Nama Tim</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Pendamping</th>
                            <th>WA Pendamping</th>
                            <th>Kartu Pelajar</th>
                            <th>Foto Tim</th>
                            <th>Logo</th>
                            <th>Nama Pemain 1</th>
                            <th>Nama Pemain 2</th>
                            <th>Nama Pemain 3</th>
                            <th>Nama Pemain 4</th>
                            <th>Nama Pemain 5</th>
                            <th>Cadangan</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $a)
                            <tr>
                                <td>{{$a->club}}</td>
                                <td>{{$a->sekolah}}</td>
                                <td>{{$a->nama_pj}}</td>
                                <td>{{$a->phone}}</td>
                                <td><a href="{{ Storage::url('public/esport/'.$a->id_card) }}">{{ $a->id_card }}</a></td>
                                <td><a href="{{ Storage::url('public/esport/'.$a->foto_tim) }}">{{ $a->foto_tim }}</a></td>
                                <td><a href="{{ Storage::url('public/esport/'.$a->logo) }}">{{ $a->logo }}</a></td>
                                <td>{{$a->pemain1}}</td>
                                <td>{{$a->pemain2}}</td>
                                <td>{{$a->pemain3}}</td>
                                <td>{{$a->pemain4}}</td>
                                <td>{{$a->pemain5}}</td>
                                <td>{{$a->cadangan}}</td>
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

