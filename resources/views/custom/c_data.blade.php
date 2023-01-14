<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer data</title>
{{--    <link rel="shortcut icon" type="image/x-icon" href="assets1/img/favicon.png">--}}
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets1/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets1/css/feathericon.min.css">
    <link rel="stylesheet" href="assets1/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets1/css/style.css">

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png"  type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body >

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header ">
                <h2 class="text-center border border-danger bg-info"><b>All Customer Data</b></h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center table-striped">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Mobile Number</th>
                            <th class="text-center">E-waste Type</th>
                            <th class="text-right">Weight </th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Message</th>
                            <th class="text-center">Register Time</th>
                            <th>Approval</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($print as $p)
                        <tr>
                            <td class="text-nowrap">{{$p->id}}</td>
                            <td class="text-nowrap">{{$p->f_name}} {{$p->l_name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->mobile}}</td>
                            <td class="text-center">{{$p->Type_Ewaste}}</td>
                            <td class="text-center">{{$p->weight}}</td>
                            <td class="text-center">{{$p->addresss}}</td>
                            <td class="text-center">{{$p->message}}</td>
                            <td class="text-center">{{$p->created_at}}</td>
                            <td class="text-center"><button class="btn btn-danger">approve</button></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
