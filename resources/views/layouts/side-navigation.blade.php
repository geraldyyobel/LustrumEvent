@php

$links = [
    [
        'href' => 'dashboard',
        'text' => 'Dashboard',
        'is_multi' => false,
        'roles' => 'all',
    ],
    [
        'href' => [
            [
                'section_text' => 'JB CUP Panel',
                'section_list' => [['href' => 'kelola_basket', 'text' => 'Data Basket'], ['href' => 'kelola_sepak-bola', 'text' => 'Data Sepak Bola'],['href' => 'kelola_band', 'text' => 'Data Band'],['href' => 'kelola_esport', 'text' => 'Data E-Sport'],['href' => 'kelola_olimpiade', 'text' => 'Data Olimpiade'],['href' => 'kelola_storytelling', 'text' => 'Data Story Telling']],
            ],
            [
                'section_text' => 'Admin Panel',
                'section_list' => [['href' => 'View_Bukti', 'text' => 'Data Bukti Pembayaran'],['href' => 'view-user', 'text' => 'Data User'], ['href' => 'add-user', 'text' => 'Buat User']],
            ],
        ],
        'text' => 'User',
        'is_multi' => true,
        'roles' => 'admin',
    ],

    [
        'href' => [
            [
                'section_text' => 'Pendaftaran Lomba',
                'section_list' => [['href' => 'basket', 'text' => 'Registrasi Basket'], ['href' => 'futsal', 'text' => 'Registrasi Futsal'],['href' => 'band', 'text' => 'Registrasi Band'],['href' => 'esport', 'text' => 'Registrasi E-Sport'],['href' => 'olimpiade', 'text' => 'Registrasi Olimpiade'],['href' => 'storytelling', 'text' => 'registrasi Story Telling']],
            ],
            
        ],
        'text' => 'User',
        'is_multi' => true,
        'roles' => 'user',
    ],[
        'href' => 'pembayaran',
        'text' => 'Status Pembayaran',
        'is_multi' => false,
        'roles' => 'user',
    ],
];

$navigation_links = json_decode(json_encode($links), false);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Lustrum</a>
        </div>
        @foreach ($navigation_links as $link)
            @if ($link->roles == 'admin' &&
    auth()->user()->hasRole('admin'))
                <ul class="sidebar-menu">
                    @if (!$link->is_multi)
                        <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route($link->href) }}"><i
                                    class="fas fa-fire"></i><span>{{ $link->text }}</span></a>
                        </li>
                    @else
                        <li class="menu-header">{{ $link->text }}</li>
                        @foreach ($link->href as $section)
                            @php
                                $routes = collect($section->section_list)
                                    ->map(function ($child) {
                                        return Request::routeIs($child->href);
                                    })
                                    ->toArray();
                                $is_active = in_array(true, $routes);
                            @endphp

                            <li class="dropdown {{ $is_active ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                        class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($section->section_list as $child)
                                        <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a
                                                class="nav-link"
                                                href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    @endif
                </ul>

                        
            @elseif ($link->roles == 'all' || $link->roles == 'user')
                <ul class="sidebar-menu">
                    @if (!$link->is_multi)
                    @if(auth()->user()->hasRole('admin'))
                    @else
                        <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route($link->href) }}"><i
                                    class="fas fa-fire"></i><span>{{ $link->text }}</span></a>
                        </li>
                        @endif
                    @else
                        @foreach ($link->href as $section)
                            @php
                                $routes = collect($section->section_list)
                                    ->map(function ($child) {
                                        return Request::routeIs($child->href);
                                    })
                                    ->toArray();
                                $is_active = in_array(true, $routes);
                            @endphp
                            {{-- USER --}}
                            @if ($link->roles == 'user' &&
                            auth()->user()->hasRole('user'))
                            <li class="dropdown {{ $is_active ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                        class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                                <ul class="dropdown-menu">
                                    @if(auth()->user()->upload=='1'||auth()->user()->hasRole('admin'))
                                    @else
                                    @foreach ($section->section_list as $child)
                                        <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a
                                                class="nav-link"
                                                href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>

                            {{-- ENDIF USER
                                
                                ADMIN--}}
                            @else
                            
                            @endif
                            {{-- END IF ADMIN --}}

                        @endforeach
                    @endif
                </ul>
            @endif
        @endforeach
    </aside>
</div>
