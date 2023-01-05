@extends('backend.master')
@section('title')
    My Portfolio Upload Image
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"> My Portfolio Upload Image</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Portfolio Upload Image</li>
                </ol>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">MY Portfolio Upload Image</h3>
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
                                <form action="{{ route('upload.save') }}" method="post" enctype="multipart/form-data">@csrf
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Upload Image</label>
                                        <div class="col-md-9">
                                            <input type="hidden" name="portfolio_id" value="{{ $id }}">
                                            <input type="file" name="images[]" class="form-control"multiple>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit"  class="btn btn-outline-info" value="Upload">
                                        </div>
                                    </div>
                                </form>
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


