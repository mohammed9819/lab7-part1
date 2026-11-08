<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>

    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
    $days_english = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    
    echo "<p>The days of the week in English are:<br>\n";
    echo implode(', ', $days_english) . ".</p>\n";

    
    $days_french = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
    
    echo "<p>The days of the week in French are:<br>\n";
    echo implode(', ', $days_french) . ".</p>\n";
    ?>

</body>
</html>