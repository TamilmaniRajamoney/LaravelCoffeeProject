<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/app.css">
  <title>first test page </title>
</head>
<body>


       
        
       @foreach ($refunds as $refund)
        <tr>   
            <td> {{$refund->reference}} </td>
            <td> {{$refund->user_id}} </td>
            <td> {{$refund->phone_number}} </td>
            <td> {{$refund->amount}} </td>
            <td> {{$refund->status}} </td>
        </tr>
       @endforeach
    </table>
</div>
</body>
</html>