<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h1>Today's date</h1>
    <date>
        <?php 
        $today=date("d-m-Y");
        echo $today;
        ?>
    </date>

</body>
</html>