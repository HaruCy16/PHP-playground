<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP Method</title>
    <script>
        function showName() {
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "httpMethod.php");
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.onload = function() {
                document.getElementById("name").innerHTML = this.responseText;
            };
            xhttp.send("fname=Cyrus Wilson");
        }
    </script>
</head>
<body>
    <button onclick="showName()">Pindot</button>
    <h2 id="name"></h2>
    
</body>
</html>

<?php
    $name = $_POST["fname"]; 
    echo "Your name is: $name";
?>