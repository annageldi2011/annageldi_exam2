<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <title>Habarlasmak</title>
</head>
<body class="bg-light">
@include('nav')
<div class="bg-info-subtle py-4">
    <div class="container-lg py-3">
        <div class="py-4 h1 text-dark ps-3">
            Biz bilen habarlasyn
        </div>
    </div>
</div>
<div class="container-lg py-5">
    <div class="row">
        <div class="col-6">
            <div class="container-lg">
                <div class="bg-white mx-3 text-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="py-4 fw-bold h5 text-start ps-2">
                                telefon belgi<br>+99361284695
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bi-telephone-fill h4 pt-4 pe-5"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-lg pt-3">
                <div class="bg-white mx-3 text-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="py-4 fw-bold h5 text-start ps-2">
                                Email<br> name@gmail.com
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bi- h4 pt-4 pe-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 ps-5">
            <div class="h3">
                Biz barada
            </div>
            <div class="text-small text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa dignissimos dolorem ipsam mollitia
                quibusdam saepe sapiente totam velit! A at beatae dignissimos dolor, dolorem error esse hic inventore
                laboriosam, nesciunt nobis officiis pariatur quia quis soluta! Alias, assumenda vel. Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Ad architecto consectetur explicabo facilis minima perspiciatis
                sed sequi tempore vel voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto hic iste itaque quaerat, quasi voluptatum!
            </div>
        </div>
    </div>


</div>

<div class="bg-secondary pt-3 pb-5">
    <div class="container-lg py-5">
        <div class="bi-airplane-fill text-info display-2 text-center"><br><span class="h1 text-light ps-2">Airport</span></div>
    </div>
</div>
</body>
</html>
