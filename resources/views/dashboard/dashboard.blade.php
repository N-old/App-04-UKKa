@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">Disini tampilan dashboard untuk Admin</p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2'>
                                    <h3 class='card-title'>Data Buku</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>$50 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2'>
                                    <h3 class='card-title'>Data User</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>$50 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2'>
                                    <h3 class='card-title'>Data Peminjaman</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>$50 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Buku</h4>
                            <div class="d-flex ">
                                <i data-feather="download"></i>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Buku</th>
                                            <th>Penulis</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jendela Terbang</td>
                                            <td>Ridwan</td>
                                            <td>10</td>
                                            <td class="d-flex">
                                                <a href="#" class="btn btn-primary btn-sm"></i></a>a
                                                <a href="#" class="btn btn-warning btn-sm"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data User</h4>
                            <div class="d-flex ">
                                <i data-feather="download"></i>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Peminjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ridwan</td>
                                            <td>Jendela Terbang</td>
                                            <td class="flex">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ridwan</td>
                                            <td>Jendela Terbang</td>
                                            <td class="flex">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ridwan</td>
                                            <td>Jendela Terbang</td>
                                            <td class="flex">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ridwan</td>
                                            <td>Jendela Terbang</td>
                                            <td class="flex">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ridwan</td>
                                            <td>Jendela Terbang</td>
                                            <td class="flex">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
