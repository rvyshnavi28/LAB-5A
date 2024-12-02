<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
    
        $name = "Vyshnavi A/P Raman";
        $matricNumber = "CI230030";
        $course = "Computer Science";
        $yearOfStudy = "Year 2";
        $address = "68, Jalan Inang 9, Bandar Bukit Raja";
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matricNumber; ?></td> 
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $yearOfStudy; ?></td> 
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>