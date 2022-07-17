<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="/createRefund" method="POST">
     @csrf <!--cross site request foregery  -->

<div class="form-group">
            
            </div>
          <label>reference</label>
          <input type="text" name="reference" class="form-control" id="ref" placeholder="reference" >
          <label>user_id</label>
          <input type="text" name="user_id" class="form-control" id="ref" placeholder="user_id" >
          <label>service</label>
          <input type="text" name="service" class="form-control" id="ref" placeholder="service" >
          <label>phone_number</label>
          <input type="text" name="phone_number" class="form-control" id="ref" placeholder="phone_number" >
          <label>amount</label>
          <input type="text" name="amount" class="form-control" id="ref" placeholder="amount" >
          <label>status</label>
          <input type="text" name="status" class="form-control" id="ref" placeholder="status" >
          <label>subject_type</label>
          <input type="text" name="subject_type" class="form-control" id="ref" placeholder="subject_type" >
          <input type ="submit" value="creates">
         </div>

         

</fomr>
@if($errors->any())


{{$errors}}
@endif
</body>
</html>






