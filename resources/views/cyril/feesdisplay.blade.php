 
<html>
    <body>
        <div class="container">
         <div class="row">
           <div class="col-md-10 col-md-offset">
            <div class="panel panel-default">
         
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <div class="panel-body"> 
    <table border = 1>
                
        <tr>
            <th>Student number</th>
            <th>Amount</th>
            <th>Date of Payment</th>

        </tr>
 @foreach($fees as $value)
        <tr>
            
            <td>{{$value->student_number}}</td>
            <td>{{$value->amount}}</td>
            <td>{{$value->date_of_payment}}</td>
           
        </tr>
 @endforeach
    </table>
 
    <p>Total amount of fees paid is Ksh: {{$sum}}</p>
    </div>
</div>
</div>
</div>
</div>

    
    </body>
    </html>