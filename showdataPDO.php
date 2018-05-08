<?php
echo "<table style='border-collapse: collapse 1px #997;margin:200px 450px 200px 450px;'>";
echo "<tr><th>User</th><th>Score</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:200px;border:1px solid #997;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername="localhost";
$username="thzou";
$password="1901";
$dbname="madworldgames";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username,score from madusers order by score DESC");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>ScoreBoard</title>
    <link rel="STYLESHEET" type="text/css" href="membersite.css" />
    <style> 
           body{
                 
                font-family:serif;
                background-image:url(images/bg1.png);

                background-repeat:no-repeat;

                background-size:cover;

            }
            tr{
                color:#76B1FD;
                text-align: center;
            }
            th{
                background-color: #1676F3;
                color:white;
            }
    </style>     
</head>
<body>
</body>
</html>