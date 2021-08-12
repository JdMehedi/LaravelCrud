
    <!doctype html>
<html lang="en">
<head>
    @include('backend.includes.head_link')
    <title>Admin</title>
</head>
<body>
<div class="container my-2">

    <ul class=""form-group>
        <li class="form-group"><a href="{{route('user.create')}}">Create User</a></li>
        <li class="form-group"><a href="{{route('user.index')}}">All User</a></li>

    </ul>

</div>
@include('backend.includes.js_link')
</body>
</html>
