<!doctype html>
<html lang="en">
<head>
    @include('backend.includes.head_link')
    <title>Create user</title>
</head>
<body>

    <div class="container my-3">
        @if(count($errors) > 0 )
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
            {!! Form::open(['class' =>'form-sample','route' => 'user.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="page-header" id=""><h3 class="page-title"><span class="page-title-icon
                bg-gradient-primary text-white mr-2"></span>New User</h3></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"           placeholder="Enter User Name" >
                            </div>
                            <div class="form-group">
                                <label for="select_role" >Image</label>
                                <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter User Email" >
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter User Address" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                            </div>

                            <br/><br/>
                            <div class="form-group">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-lg btn-block"><i class="mdi
                                mdi-account"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            {!! Form::close() !!}
    </div>





@include('backend.includes.js_link')
</body>
</html>
