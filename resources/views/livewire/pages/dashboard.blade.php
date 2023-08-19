<div>
    <x-slot name="header">
        <div class="section-header">
            <h1>Dashboard</h1>
            {{-- <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Layout</a></div>
                <div class="breadcrumb-item">Default Layout</div>
            </div> --}}
        </div>
    </x-slot>

    {{-- <h2 class="section-title">This is Example Page</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p> --}}
    <div class="card">
        <div class="card-body">
            <section class="text-center">
                <div class="container">
                    <div class="row" style="padding: 30px;">
                        <div class="col-lg-4 offset-lg-1"><img src="assets/img/testimonials-1.jpg" style="width: 420px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                        <div class="col-lg-4 offset-lg-2"><img src="assets/img/testimonials-2.jpg" style="width: 419px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                    </div>
                    <div class="row" style="padding: 30px;">
                        <div class="col-lg-4 offset-lg-1"><img src="assets/img/testimonials-3.jpg" width="420" height="315" style="width: 420px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                        <div class="col-lg-4 offset-lg-2"><img src="assets/img/bg-showcase-3.jpg" width="420" height="316" style="width: 420px;height: 315px;">
                            <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3"><button class="btn btn-primary" type="button">Button</button></div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- {{ auth()->user()->hasRole('admin') == true
                ? 'Admin'
                : 'User' }} --}}
        </div>
        <div class="card-footer">
            This is card footer
        </div>
    </div>
</div>
