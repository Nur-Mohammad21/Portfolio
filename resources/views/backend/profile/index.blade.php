@extends('backend.master')
@section('title')
    My Profile
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Profile</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                       <div class="card">
                           <div class="card-header">
                               <h3 class="card-title">MY PROFILE</h3>
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
                               <form action="{{ route('profile.create') }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                       <label for="" class="col-md-3">Name</label>
                                       <div class="col-md-9">
                                           <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name">
                                           @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="row mt-3">
                                       <label for="" class="col-md-3">Qualification</label>
                                       <div class="col-md-9">
                                           <input type="text" name="qualification" class="form-control" placeholder="Enter Your Qualification">
                                       </div>
                                   </div>
                                   <div class="row mt-3">
                                       <label for="" class="col-md-3">Upload CV</label>
                                       <div class="col-md-9">
                                           <input type="file" name="cv" class="form-control">
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
