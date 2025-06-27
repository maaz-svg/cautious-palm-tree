<!DOCTYPE html>
<html>
<head>
    <title>Insert Employee</title>
</head>
<body>
    <h2>Employee Form</h2>
    <form action="duplicate.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Salary:</label><br>
        <input type="number"  name="salary" required><br><br>

        <label>Department:</label><br>
        <input type="text" name="department" required><br><br>

        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>
