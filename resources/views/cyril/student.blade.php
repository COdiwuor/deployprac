<html>
<h3> Insert New Student </h3>
<a href="/studenttable">Student Table</a>

<div class="container">
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
    </div>
    <style>
    input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    </style>
    
    </html>
