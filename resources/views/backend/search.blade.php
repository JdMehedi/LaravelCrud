
<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Search result</title>
</head>
<body>

<div class="container">
    <div class="card card-default my-3">
        <div class="card-heading">
            <div class="stunning-header stunning-header-bg-lightviolet my-3 text-center">
                <div class="stunning-header-content">
                    <h1 class="stunning-header-title">Search results: {{ $query }}</h1>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body ">
            <div class="row medium-padding120 ">
                <main class="main ">

                    @if($users->count() > 0)

                        <div class="row">
                            @foreach($users as $search)
                                <div class="case-item-wrap">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="case-item">
                                          <li >
                                              <h6 class="case-item__title"><a
                                                      href=""><h5>Name: {{$search->name}}</h5></a></h6>
                                              <h6 class="case-item__title"><a
                                                      href=""><h5>Email: {{$search->email}}</h5></a></h6>

                                              <p class="product-details-info-text">
                                              <h5>Address: {{ $search->address }}</h5>
                                          </li>
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                @else

                                    <h2 class="text-center">No profile found</h2>
                            @endif

                            <!-- End Post Details -->
                                <br>
                                <br>
                                <br>
                                <!-- Sidebar-->


                        </div>

                        <!-- End Sidebar-->

                </main>
            </div>
        </div>
    </div>



</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>

