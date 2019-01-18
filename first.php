<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>PHP basics</h1>
    <?php
    $myname="Dmitrii";
    echo "Hello $myname";
    echo '<br>';
    echo 'Hello '.$myname;
    echo '<br>';
    echo 'Here is the link: <a href="http://www.oamk.fi">'.$myname.'</a>';
    ?>
    <h2>A array</h2>
     <?php
     $students=array('Jim','Lisa','Bob');
     echo 'Second student is '.$students[1];
     ?>
     <h3>print_r-function</h3>
     <?php print_r($students);?>
     <h3>foreach-loop</h3>
     <?php
    foreach ($students as $row) {
        echo '<li>'.$row;
    }
    ?>
    <h3>Two-demensional arrays</h3>
    <?php
    $names=array(
        array('Jim','Smith'),
        array('Lisa','Jones'),
        array('Stephan','Debilov')
    );
    echo '<h3>with print_r</h3><br>';
    print_r($names);
    echo 'with foreach-loop';
    echo '<ul>';
    foreach ($names as $row) {
        echo '<li>'.$row[0].' '.$row[1].'</li>';
     
    } 
    echo'</ul>';    
     ?>
     
</body>
</html>