<html>
<h3> Insert New Student Fees </h3>
<a href="/feestable">Fees Table</a>

    <form method="post" action ="/feesstore" encytype = "multipart/form-data">
        {{csrf_field()}}
        <label>Student Number :</label> <input type ="text"  name="Student_Number"  value="{{$fees->student_number or ''}}" required>
        <br>
        <label>Full Name:</label> <input type ="text" name="Full_name"  value="{{$fees->full_name or ''}}" required>
        <br>
        <label>Date of Birth:</label> <input type ="date" name="Date_of_Birth"  value="{{$fees->date_of_birth or ''}}" required>
        <br>
        <label>Address:</label> <input type ="text" name="Address"  value="{{$fees->address or ''}}"required>
        <br>
        <label>Date of payment:</label> <input type ="date" name="Date_of_payment"  value="{{$fees->date_of_payment or ''}}" required>
        <br>
        <label>Amount:</label> <input type ="text" name="Amount"  value="{{$fees->amount or ''}}" required>



         <input type ="hidden" name="id" value="{{$fees->id or ''}}">
         <br>
         
         <button type="submit" name ="Save">save</button>

         @if($errors->any())
         <div>
             @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
            </div>
            @endif
    </form>
    </html>