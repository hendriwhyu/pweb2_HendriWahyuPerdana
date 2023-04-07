@extends('layout.main-layout')
@section('breadcrumb', Auth::user()->role->role)
@section('title', 'Dashboard')

@section('content')
    @if (Auth::user()->id_role == '1')
        <div class="row">
            <div class="col-lg-3">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Proyek</h5>
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="col-10">
                                    <div class="dataTable-info">Showing {{ count($dataProyek) ?? null }} of 5 data</div>

                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <a href="/kelolaproyek"
                                        class="btn btn-primary d-flex justify-content-end gap-2 align-items-center "
                                        style="width: 120px"><i class='bx bx-layer'></i> Overview</a>
                                </div>
                            </div>
                            <div class="dataTable-container">
                                <table class="table datatable dataTable-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-sortable="" style="width: 5%;"><a href="#"
                                                    class="dataTable-sorter">No</a></th>
                                            <th scope="col" data-sortable="" style="width: 95%;"><a href="#"
                                                    class="dataTable-sorter">Name Proyek</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($dataProyek as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->nama_proyek }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <th scope="row"></th>
                                                <td></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    @elseif(Auth::user()->id_role == '2')
        <div class="row">
            <div class="col-lg-8">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Selamat Datang, {{ Auth::user()->nama_pengguna }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nobis laborum
                            necessitatibus laudantium voluptates molestias? Quae beatae sequi dignissimos similique?</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>
                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Proyek</h5>
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="row">
                                <div class="col-10">
                                    <div class="dataTable-info">Showing {{ count($dataProyek) ?? null }} of 5 data</div>

                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <a href="#"
                                        class="btn btn-primary d-flex justify-content-end gap-2 align-items-center "
                                        style="width: 120px"><i class='bx bx-layer'></i> Overview</a>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="dataTable-container">
                            <table class="table datatable dataTable-table">
                                <thead>
                                    <tr>
                                        <th scope="col" data-sortable="" style="width: 5%;"><a href="#"
                                                class="dataTable-sorter">#</a></th>
                                        <th scope="col" data-sortable="" style="width: 95%;"><a href="#"
                                                class="dataTable-sorter">Name</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataProyek as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->nama_proyek }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif



@endsection
