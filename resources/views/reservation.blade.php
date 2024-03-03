@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Reservation</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br />
            <div class="card">
                <div class="card-header">{{ __('Reservation') }}</div>
            <br />


                <div class="bg-white border rounded p-4">
            <!-- Start Form -->
        <form id="myForm" action="#" method="POST" autocomplete="off">    

        <!-- Start Input Name -->
        <div class="form-group">
          <label for="inputName">Title</label>
          <input type="text" class="form-control" id="inputName" name="name" placeholder="ชื่อหัวข้อ" />
        </div>
        <!-- End Input Name -->

        <!-- Start Input Email -->
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email" />
          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <!-- End Input Email -->

        <!-- Start Input Telephone -->
        <div class="form-group">
          <label for="inputPhone">Phone</label>
          <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="099xxxxxxx" />
          <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div>
        <!-- End Input Telephone -->
     
<form id="myForm" action="#" method="POST" autocomplete="off">
<!-- End Form -->

</body>

</html>
@endsection