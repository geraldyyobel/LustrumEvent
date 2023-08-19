@include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>Status Pembayaran</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Status Pembayaran</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @php
                function rupiah($angka){
                    $nilai = number_format($angka,2,',','.');
                    return $nilai;
                }
                $harga = 200000;
                $hesport = 50000;
                $hband = 100000;
                $hfutsal = 250000;
                $hbasket = 250000;
                $holimpiade = 100000;
                $ste = 75000;
                $ko = auth()->user()->id;
                $total = 0;
                @endphp
                <table class="table css-serial">
                    @csrf 
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col">Nama Lomba</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ((array)$proposal as $user)
                        {{-- @csrf  --}}
                            <tr>
                                {{-- <td>{{ ($user->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $user->lomba}}</td> --}}
                                {{-- <td>1</td>  --}}
                                {{-- <td>Band</td>  --}}
                                {{-- <td>{{ $user->harga}}</td> --}}
                                <td></td>
                                <td>{{ $user->lomba}}</td>
                                <td>@php
                                    echo rupiah($hband);
                                    @endphp</td>
                                @php
                                $total= $total + $hband; 
                                @endphp    
                            </tr>
                            @endforeach
                            @foreach((array)$basket as $usear)
                            <tr>
                                <td></td>
                                <td>{{ $usear->lomba}}</td>
                                <td>@php
                                    echo rupiah($hbasket);
                                    @endphp </td>
                                @php
                                $total= $total + $hbasket; 
                                @endphp  
                            </tr>
                        @endforeach
                            @foreach((array)$futsal as $u)
                            <tr>
                                <td></td>
                                <td>{{ $u->lomba}}</td>
                                <td>@php
                                    echo rupiah($hfutsal);
                                    @endphp</td>
                                @php
                                $total= $total + $hfutsal; 
                                @endphp  
                            </tr>
                        @endforeach
                            @foreach((array)$olimpiade as $a)
                            <tr>
                                <td></td>
                                <td>{{ $a->lomba}}</td>
                                <td>@php
                                    echo rupiah($holimpiade);
                                    @endphp</td>
                                @php
                                $total= $total + $holimpiade; 
                                @endphp
                            </tr>
                        @endforeach
                            @foreach((array)$esport as $e)
                            <tr>
                                <td></td>
                                <td>{{ $e->lomba}}</td>
                                <td>@php
                                    echo rupiah($hesport);
                                    @endphp</td>
                                @php
                                $total=$total +$hesport; 
                                @endphp  
                            </tr>
                        @endforeach
                            @foreach((array)$st as $s)
                            <tr>
                                <td></td>
                                <td>{{ $s->lomba}}</td>
                                <td>@php
                                    echo rupiah($ste);
                                    @endphp</td>
                                @php
                                $total=$total +$ste; 
                                @endphp  
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- STATUS BAYAR --}}
                </table>

                
                
                    <tbody>
                        <h5>Kode Unik : {{ $ko }}</h5>
                            @php
                            $total= $total+$ko 
                            @endphp
                        @foreach ($bukti as $r)
                            @if ($r->status == 1)
                            <h4>Total Harga :
                                @php
                                echo rupiah($total);
                                @endphp
                                </h4>
                        <td>Status Pembayaran Kak {{ auth()->user()->name ?? 'User' }} Saat Ini :
                            
                                <span class="badge badge-success">APPROVE</span>
                            @elseif($r->status == 2)
                            <h4>Total Harga : 
                                @php
                                echo rupiah($total);
                                @endphp    
                            </h4> 
                        <td>Status Pembayaran Kak {{ auth()->user()->name ?? 'User' }} Saat Ini :
                            
                                <span class="badge badge-primary">PENDING</span>
                                <p>
                                  <p> Silahkan Tunggu hingga panitia memverifikasi pembayaran anda</p>
                                  @endif
                                  @endforeach
                            @if(auth()->user()->upload=='0')
                            <h4>Total Harga : Rp 
                                @php
                                echo rupiah($total);
                                @endphp    
                            </h4> 
                        <td>Status Pembayaran Kak {{ auth()->user()->name ?? 'User' }} Saat Ini :
                            
                                <span class="badge badge-danger">BELUM DI VERIFIKASI</span>
                                <p>
                                    1. Silahkan Lakukan Pembayaran </p>
                                   <p> 2. Upload Bukti Pembayaran melalui tombol    <a href="/buktipembayaran" class="btn btn-primary">UPLOAD</a></p>
                                    <p>3. Apabila Sudah Mengupload, Silahkan Tunggu hingga panitia memverifikasi pembayaran</p>
                             
                             @endif
                            
                        </td>
                        {{-- @endforeach --}}
                    </tbody>
            
                {{-- {{ $proposal->links() }}  --}}

                <table class="table table-hover">
                    
                    <tbody>
                        @foreach ((array)$bukti as $u)
                        {{-- @csrf  --}}
                            <tr>
                                <td>Lihat Bukti Bayar Terkirim :</td>
                                <td> <img src="{{ Storage::url('public/bukti/' .$u->bukti) }}" class="img-fluid img-thumbnail" width="150"/></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                            </tr>
                        @endforeach
                          
                    </tbody>
                    {{-- STATUS BAYAR --}}
                </table>

                <h1>Cara Lakukan Pembayaran</h1>
                <a>Silahkan Lakukan Pembayaran Melalui</a>
                <a>BCA : 037-3427222</a>
                <a>A/n Yayasan De Britto</a><p></p>
                <span class="badge badge-danger">HATI HATI PENIPUAN</span>

            </div>
        </div>
    </div>
</div>

<script>
    $().tooltip();
</script> 
