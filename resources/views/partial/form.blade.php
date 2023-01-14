<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiry Form</title>
    <style>
        body {
            font-family: 'Lato', sans-serif
        }

        h1 {
            margin-bottom: 40px
        }

        label {
            color: #333
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px
        }

        .card {
            margin-left: 10px;
            margin-right: 10px
        }
    </style>
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
<body>
@include('partial.header')
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Inquiry Form</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        @if(session('success'))
                            <h3 class="text-success">{{session('success')}}</h3>
                        @endif
                        <form   action="{{route('register')}}" method="post">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Firstname <span class="text-danger">*</span></label>
                                            <input  type="text" name="fname" class="form-control"   required="required" data-error="Firstname is required.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Lastname <span class="text-danger">*</span></label> <input  type="text" name="lname" class="form-control"   required="required" data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email  <span class="text-danger">*</span></label> <input id="form_email" type="email" name="email" class="form-control"   required="required" data-error="Valid email is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Mobile  <span class="text-danger">*</span></label> <input id="form_email" type="number" name="mobile" class="form-control"   required="required"  > </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Please specify your E-Watse Type  <span class="text-danger">*</span></label>
                                            <select id="form_need" name="type_e" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Type--</option>
                                                <option>Television</option><br>
                                                <option>CPU</option>
                                                <option>Moniter</option>
                                                <option>printer,scanner</option>
                                                <option>Laptop</option>
                                                <option>Inverter</option>
                                                <option>Stabilizer</option>
                                                <option>Others</option>
                                            </select> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Weight of E-waste(Approximate)  <span class="text-danger">*</span></label>
                                            <select id="form_need" name="weight_kg" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select--</option>
                                                <option>3KG</option><br>
                                                <option>5KG</option>
                                                <option>7KG</option>
                                                <option>10KG</option>
                                                <option>10KG+</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="form_email">Address <span class="text-danger">*</span></label> <input id="form_email" type="text" name="addr" class="form-control"  required="required" data-error="Valid email is required."> </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Any Message  <span class="text-danger">*</span></label> <textarea id="form_message" name="message" class="form-control"  rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Submit Data"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div><br>
@include('partial.footer')

</body>
</html>
