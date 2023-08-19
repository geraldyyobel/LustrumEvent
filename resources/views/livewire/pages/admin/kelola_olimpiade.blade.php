@include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>JB CUP Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Data Olimpiade</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/admin/exportolimpiade" class="btn btn-success my-3" target="_blank" style="position: absolute">EXPORT EXCEL</a>
                <table  data-toggle="table"
                data-pagination="true"
                data-search="true"
                style="text-align: center">
                <thead>
                    <tr>
                        <th rowspan="2">Asal Sekolah</th>
                        <th rowspan="2">Alamat</th>
                        <th rowspan="2">Nama Pendamping</th>
                        <th rowspan="2">WA Pendamping</th>
                        <th colspan="12">TIM 1</th>
                        <th colspan="12">TIM 2</th>
                        <th rowspan="2">Logo TIM/Sekolah</th>
                    </tr>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Kelas</th>

                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($users as $a)
                    <tr>
                        <td rowspan="2">{{ $a->sekolah }}</td>
                        <td rowspan="2">{{ $a->alamat }}</td>
                        <td rowspan="2">{{ $a->nama_pj }}</td>
                        <td rowspan="2">{{ $a->phone }}</td>
                        <td colspan="12"><a href="{{ Storage::url('public/olimpiade/'.$a->id_card1) }}">Kartu Pelajar TIM 1</a></td>
                        <td colspan="12"><a href="{{ Storage::url('public/olimpiade/'.$a->id_card2) }}">Kartu Pelajar TIM 2</a></td>
                        <td rowspan="2"><a href="{{ Storage::url('public/logo/'.$a->logo) }}">Download File</a></td>
                    </tr>
                    <tr>
                        <td>{{ $a->nisn1 }}</td>
                        <td>{{ $a->nama1 }}</td>
                        <td>{{ $a->ttl1 }}</td>
                        <td>{{ $a->kelas1 }}</td>
                        <td>{{ $a->nisn2 }}</td>
                        <td>{{ $a->nama2 }}</td>
                        <td>{{ $a->ttl2 }}</td>
                        <td>{{ $a->kelas2 }}</td>
                        <td>{{ $a->nisn3 }}</td>
                        <td>{{ $a->nama3 }}</td>
                        <td>{{ $a->ttl3 }}</td>
                        <td>{{ $a->kelas3 }}</td>
                        <td>{{ $a->nisn4 }}</td>
                        <td>{{ $a->nama4 }}</td>
                        <td>{{ $a->ttl4}}</td>
                        <td>{{ $a->kelas4 }}</td>
                        <td>{{ $a->nisn5 }}</td>
                        <td>{{ $a->nama5 }}</td>
                        <td>{{ $a->ttl5 }}</td>
                        <td>{{ $a->kelas5 }}</td>
                        <td>{{ $a->nisn6 }}</td>
                        <td>{{ $a->nama6 }}</td>
                        <td>{{ $a->ttl6 }}</td>
                        <td>{{ $a->kelas6 }}</td>
                       
                        
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