@extends('backend.master')
@section('title')
    My Portfolio
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"> My Portfolio</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Portfolio</li>
                </ol>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">MY Portfolio</h3>
                                @if(Session::get('message'))<p class="text-success text-center">{{ Session::get('message') }}</p> @endif
                                @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($portfolios as $portfolio)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $portfolio->title }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                    <a href="{{ route('upload.image',['id'=>$portfolio->id]) }}" class="btn btn-secondary">Upload Image</a>
                                                    <a href="" class="btn btn-info">Details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection


