@extends('home')

@section('content')

    <body class="bg-gradient-primary">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4" style="font-weight: bolder">Tambah Toko</h1>
                                </div>
                                <form action="{{ route('toko.store') }}" class="user" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input required type="text" name="kode_toko_baru" class="form-control form-control-user"
                                            placeholder="Kode Toko Baru" value="{{ old('kode_toko_baru', '') }}">
                                    </div>
                                    <div class="form-group">
                                        <input required type="text" name="kode_toko_lama" class="form-control form-control-user" 
                                            placeholder="Kode Toko Lama" value="{{ old('kode_toko_lama', '') }}">
                                    </div>
                                    <hr>
                                        <button class="btn btn-primary btn-user btn-block">Tambah Toko</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
