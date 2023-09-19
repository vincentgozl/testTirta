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
                                    <h1 class="h4 text-gray-900 mb-4" style="font-weight: bolder">Tambah Transaksi</h1>
                                </div>
                                <form action="{{ route('transaksi.store') }}" class="user" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input required type="text" name="kode_toko" class="form-control form-control-user"
                                            placeholder="Kode Toko" value="{{ old('kode_toko', '') }}">
                                    </div>
                                    <div class="form-group">
                                        <input required type="text" name="nominal_transaksi" class="form-control form-control-user" 
                                            placeholder="Nominal Transaksi" value="{{ old('nominal_transaksi', '') }}">
                                    </div>
                                    <hr>
                                        <button class="btn btn-primary btn-user btn-block">Tambah Transaksi</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
