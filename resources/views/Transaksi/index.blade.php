@extends('home')

@section('content')

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kode Toko</th>
                                                <th>Nominal Transaksi</th>
                                                <th>Option</th>
                                                {{-- <th>Download</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $dataTransaksi)
                                                <tr>
                                                    <th scope="row">{{ $dataTransaksi->kode_toko }}</th>
                                                    <td>{{ $dataTransaksi->nominal_transaksi }}</td>
                                                    <td>
                                                        <form
                                                            action="{{ route('transaksi.destroy', [$dataTransaksi->kode_toko]) }}"
                                                            method="POST" class="btn">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                action="{{ route('transaksi.destroy', [$dataTransaksi->kode_toko]) }}"
                                                                method="POST" class="btn btn-primary btn-responsive">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                    {{-- <td>
                                                        <a href="{{ url('exp-transaksi') }}">Excel</a>
                                                        <a href="{{ route('generate-pdf') }}">PDF</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
    </body>
@endsection
