<!doctype html>
<html lang="en">
<head>
   @include('backend.includes.head_link')
    <title>Document</title>
</head>
<body>

<div class="container my-2">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">User List<hr style=""/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Serial list</th>
                                    <th class="text-center"> Name </th>
                                    <th class="text-center"> Email </th>
                                    <th class="text-center"> Edit </th>
                                    <th class="text-center"> Delete </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users->count() ==! 0)
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="text-center">{{ ($users->currentpage()-1) * $users ->perpage
                                            () + $loop->index + 1 }}</td>
                                            <td class="text-center">{{$user->name}}</td>
                                            <td class="text-center">{{$user->email}}</td>
                                            <td class="text-center">
                                                <a href="{{route('user.edit',$user->id)}}"type="submit" class="btn-sm
                                                btn-info">Edit</a>
                                            </td>
                                            <td class="text-center">

                                                {!! Form::open(['class' =>'form-sample','route' => ['user.destroy',
                                                $user->id],
                                                'method' => 'DELETE']) !!}
                                                <button type="submit" class="btn-sm btn-danger ">Delete</button>

                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center text-info">There is no user</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>

                            <div class="col-md-4 my-3">
                                <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('results')}}">
                                    <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>

                            <div class="text-center">
                                {{$users->links()}}
                            </div>

                            <style>
                                .w-5{
                                    display:none
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend.includes.js_link')
</body>
</html>


