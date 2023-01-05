@extends('backend.master')
@section('title')
    My About
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">About</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">About</li>
                </ol>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">MY ABOUT</h3>
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
                                <form action="{{ route('about.create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" class="form-control" placeholder="Enter Your Title">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Degree</label>
                                        <div class="col-md-9">
                                            <input type="text" name="degree" class="form-control" placeholder="Enter Your Degree">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Phone</label>
                                        <div class="col-md-9">
                                            <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input type="date" name="date_of_birth" class="form-control" placeholder="Enter Your Birth">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Experience</label>
                                        <div class="col-md-9">
                                            <input type="text" name="experience" class="form-control" placeholder="Enter Your Experience">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Description</label>
                                        <div class="col-md-9">
                                            <textarea type="text" name="description" class="form-control" placeholder="Write Your About Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Address</label>
                                        <div class="col-md-9">
                                            <textarea type="text" name="address" class="form-control" placeholder="Enter Your Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Freelance</label>
                                        <div class="col-md-9">
                                            <input type="text" name="freelance" class="form-control" placeholder="Enter Your Freelance">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3">Upload Image</label>
                                        <div class="col-md-9">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" value="SAVE" class="btn btn-primary px-5">
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
