@include('livewire.utilities.alerts')

    <x-slot name="header">
        <div class="section-header">
            <h1>JB CUP Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Data Band</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/admin/exportband" class="btn btn-success my-3" target="_blank" style="position: absolute">EXPORT EXCEL</a>
                <table  data-toggle="table"
                data-pagination="true"
                data-search="true">
                    <thead>
                        <tr>
                            <th>Nama Band</th>
                            <th>Pendaftar</th>
                            {{-- <th>Formulir</th> --}}
                            <th>Penanggung Jawab</th>
                            <th>nomor telepon</th>
                            <th>Lagu Wajib</th>
                            <th>Lagu Pilihan</th>
                            <th>Kartu Pelajar</th>                            
                            <th>FOTO Bersama</th>                            
                            <th>Logo Tim/Sekolah</th>                            
                            <th>Peserta 1</th>                            
                            <th>Peserta 2</th>                            
                            <th>Peserta 3</th>                            
                            <th>Peserta 4</th>                           
                            <th>Peserta 5</th>                           
                            <th>Peserta 6</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $a)
                            <tr>
                                <td>{{$a->band}}</td>
                                <td>{{$a->author}}</td>
                                {{-- <td><a href="{{ url('storage/app/public/band'.$a->form) }}">Download File</a></td> --}}
                                <td>{{$a->nama_pj}}</td>
                                <td>{{$a->phone}}</td>
                                <td>{{$a->lagu_wajib}}</td>
                                <td>{{$a->lagu_pilihan}}</td>
                                <td><a href="{{ Storage::url('public/band/'.$a->id_card) }}">Download File</a></td>
                                <td><a href="{{ Storage::url('public/band/'.$a->foto_band) }}">Download File</a></td>
                                <td><a href="{{ Storage::url('public/logo/'.$a->logo) }}">Download File</a></td>
                                <td>{{$a->nama1}}</td>
                                <td>{{$a->nama2}}</td>
                                <td>{{$a->nama3}}</td>
                                <td>{{$a->nama4}}</td>
                                <td>{{$a->nama5}}</td>
                                <td>{{$a->nama6}}</td>
                                
                                {{-- <td>
                                    @if ($a->status_bayar == 1)
                                        <span class="badge badge-primary">Approved</span>
                                    @else
                                        <span class="badge badge-dark">Rejected</span>
                                    @endif
                                </td> --}}
                                {{-- <td> --}}
                                    {{-- <select >
                                        <option value="1">Approve</option>
                                        <option value="2">Reject</option>
                                    </select> --}}
                                    {{-- <div class="d-flex">
                                        @if ($a->status_bayar=="1" )
                                            <button class="btn btn-danger" data-toggle="tooltip"
                                                data-placement="top" title="ubah menjadi belum bayar"
                                                wire:click='promoteUser({{ $a->id }})'>
                                                <i class="fas fa-user-shield text-info"></i>
                                            </button>
                                        @else
                                            <button class="btn btn-lg btn-success" data-toggle="tooltip"
                                                data-placement="top" title="ubah menjadi sudah bayar"
                                                wire:click='demoteUser({{ $a->id }}) ' >
                                                <i class="fas fa-user text-info"></i>
                                            </button>
                                        @endif --}}
                                       
                                    {{-- </div>
                                </td> --}}
                                {{-- <td>
                                    <a href="{{ url('kelola_band/approved/'.$a->id) }}">
                                    approved
                                    </a>
                                </td> --}}
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
