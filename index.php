
<?php
$title = "Student Information System";
require_once "includes/header.php";
?>

    <form action="add_student.php" method="post">
        <h2>Student Info:</h2>
        <label for="sid">Student ID:</label>
        <input type="text" name="sid" id="sid">
        <br>
        <label for="sfname">First name:</label>
        <input type="text" name="sfname" id="sfname">
        <br>
        <label for="slname">Last name: </label>
        <input type="text" name="slname" id="slname">
        <br>
        <label for="sdob">Date of birth: </label>
        <input type="date" name="sdob" id="sdob">
        <br>
        <h3>Gender:</h3>
        <label for="male">Male</label>
        <input type="radio" name="sgender" id="male" value="M">
        <br>
        <label for="female">Female</label>
        <input type="radio" name="sgender" id="female" value="F">

        <br><br>
        <label for="sphonenumber">Phone number: </label>
        <input type="text" name="sphonenumber" id="sphonenumber">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

<?php
require_once "includes/footer.php";
?>