@include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>JB CUP Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Data Futsal</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/admin/exportfutsal" class="btn btn-success my-3" target="_blank" style="position: absolute">EXPORT EXCEL</a>
                <table  data-toggle="table"
                data-pagination="true"
                data-search="true">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">Pendaftar</th>
                            <th scope="col" width="5%">Formulir</th>
                            <th scope="col" width="5%">Logo Tim/Sekolah</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ ($user->author) }}</th>
                                <td><a href="{{ Storage::url('public/form/'.$user->form) }}">{{ $user->form }}</a></td>
                                <td><a href="{{ Storage::url('public/logo/'.$user->logo) }}">Download File</a></td>
                                <td>{{ $user->sekolah }}</td>
                                <td>{{ $user->alamat }}</td>
                                <td>{{ $user->phone }}</td>
                                {{-- <td> --}}
                                    {{-- @if ($user->roles->first()->display_name == 'User')
                                        <span class="badge badge-primary">User</span>
                                    @else
                                        <span class="badge badge-dark">Admin</span>
                                    @endif --}}
                                {{-- </td>
                                <td> --}}
                                    {{-- <div class="d-flex">
                                        @if ($user->roles->first()->display_name == 'User')
                                            <button class="btn btn-sm btn-link" data-toggle="tooltip"
                                                data-placement="top" title="Promote to Admin"
                                                wire:click='promoteUser({{ $user->id }})'>
                                                <i class="fas fa-user-shield text-info"></i>
                                            </button>
                                        @else
                                            <button class="btn btn-sm btn-link" data-toggle="tooltip"
                                                data-placement="top" title="Demote to User"
                                                wire:click='demoteUser({{ $user->id }})'>
                                                <i class="fas fa-user text-info"></i>
                                            </button>
                                        @endif
                                        <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top"
                                            title="Delete" wire:click='deleteUser({{ $user->id }})'>
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </div>
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