<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Invoice</title>
</head>
<body>
    <h1 style="text-align: center;">CruiseCrafters</h1>
    <h3 style="text-align: center;">Booking Details</h3>

    <div style="text-align: center;">Customer Name: {{$booking->name}}</div>
    <div style="text-align: center;">Customer Email: {{$booking->email}}</div>
    <div style="text-align: center;">Customer Phone: {{$booking->phone}}</div>
    <div style="text-align: center;">Customer Address: {{$booking->address}}</div>
    <div style="text-align: center;">Car Make: {{$booking->make}}</div>
    <div style="text-align: center;">Car Model: {{$booking->model}}</div>
    <div style="text-align: center;">Car Quantity: {{$booking->quantity}}</div>
    <div style="text-align: center;">From: {{$booking->fromdate}}</div>
    <div style="text-align: center;">To: {{$booking->todate}}</div>
    <div style="text-align: center;">Days: {{$booking->days}}</div>
    <div style="text-align: center;">Total Price: {{$booking->totalprice}}</div>
    <div style="text-align: center;">Car Image: <br>
    <img src="car_images/{{$booking->image}}" alt="Image" height="50px" width="50px" style="margin:0 auto"></div>
    <div style="text-align: center;">Payment Status: {{$booking->payment_status}}</div>
    
</body>
</html>