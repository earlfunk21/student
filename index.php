<?php
$title = "Student Information System";
require_once "includes/header.php";
require_once 'db_student.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new DBStudent(DBStudent::getConnection());
    $db->add_student((int)$_POST["sid"], $_POST["sfname"], $_POST["slname"], $_POST["sdob"], $_POST["sgender"], $_POST["sphonenumber"]);
    header('Location: student_list.php');
}

?>

<div id="form">
    <form method="post">
        <h2>Student Info:</h2>
        <label for="sid">Student ID</label>
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
        <label for="male" class="genderContainer">
            <input type="radio" name="sgender" id="male" value="M">
            Male
        </label>
        <br>
        <label for="female">
            <input type="radio" name="sgender" id="female" value="F">
            Female
        </label>

        <br><br>
        <label for="sphonenumber">Phone number: </label>
        <input type="text" name="sphonenumber" id="sphonenumber">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
require_once "includes/footer.php";
?>