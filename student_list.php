<?php
require_once 'includes/header.php';
require_once 'db_student.php';

$db = new DBStudent(DBStudent::getConnection());
$students = $db->get_students();
?>

<table>
    <tr>
        <th>Student ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Phone Number</th>
    </tr>

    <?php foreach ($students as $student) : ?>
    <tr>
        <td><?= $student['sid'] ?></td>
        <td><?= $student['sfname'] ?></td>
        <td><?= $student['slname'] ?></td>
        <td><?= $student['sdob'] ?></td>
        <td><?= $student['sgender'] ?></td>
        <td><?= $student['sphonenumber'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'includes/footer.php' ?>