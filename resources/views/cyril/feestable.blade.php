<html>
    <body>
    
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset">
            <div class="panel panel-default">
                <h1> Student  Fees Details</h1>
                <a href="/">Home Page</a><br>
                
                 <form method="post" action="/search" encytype = "multipart/form-data">
                    @csrf   
                <input type="text" name="Student_Number" required>
                <input type="submit" name="search" value ="Search">
                </form>
                
                
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                
                <div class="panel-body">
                    <table > 
                    <tr>
                    <td>Student Number </td>
                    <td>Full Name</td>
                    <td>Date of Birth</td>
                    <td>Address</td>
                    <td>Date of Payment</td>
                    <td>Amount</td>

                    <td>Action</td>
                    <td>Action</td>

                    </tr>
                    @foreach($fees as $fee)
                    <tr >
                    <td>{{$fee->student_number}}</td>
                    <td>{{$fee->full_name}}</td>
                    <td>{{$fee->date_of_birth}}</td>
                    <td>{{$fee->address}}</td>
                    <td>{{$fee->date_of_payment}}</td>
                    <td>{{$fee->amount}}</td>


                    <td><a href="/feeupdate/{{$fee->id}}" class="btn btn-default">Update</a></td>
                    <td><a href="/feesdestroy/{{$fee->id}}" class="btn btn-default">Delete</a></td>

                    </tr>
                    @endforeach
                     </table>

                    <p>Total sum is:   {{$fees->sum('amount')}}</p> 
                     
                </div>
            </div>
        </div>
    </div>
</div>
<style>

.table {
    border-collapse: collapse;
    width="100%";
    overflow-x: auto;
    overflow-y: auto;
    height: 600px;
}

th,
td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #EEEDED;
}

tr:hover {
    background-color: #036;
    color: white;
    cursor: pointer;
}

a:hover {
    background-color: #036;
    color: white;
}

th {
    background-color: wheat;
    color: black;
}

th:hover {
    background-color: wheat;
    color: black;
}

</style>

</body>
</html>