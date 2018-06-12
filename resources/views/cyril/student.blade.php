<html>
<h3> Insert New Student </h3>
<a href="/studenttable">Student Table</a>

    <form method="post" action ="/studentstore" encytype = "multipart/form-data">
        {{csrf_field()}}
        <label>Student Number :</label> <input type ="text"  name="Student_Number"  value="{{$student->student_number or ''}}" required>
        <br>
        <label>Full Name:</label> <input type ="text" name="Full_name"  value="{{$student->full_name or ''}}" required>
        <br>
        <label>Date of Birth:</label> <input type ="date" name="Date_of_Birth"  value="{{$student->date_of_birth or ''}}" required>
        <br>
        <label>Address:</label> <input type ="text" name="Address"  value="{{$student->address or ''}}" required>

        <input type ="hidden" name="id" value="{{$student->id or ''}}">
         <br>
         
         <button type="submit" name ="Save">save</button>
    </form>
    </html>
