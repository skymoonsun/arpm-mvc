<!DOCTYPE html>
<html>
<head>
    <title>MVC Example</title>
</head>
<body>
<h1>Hi</h1>
<?php
if ($_SERVER['REQUEST_URI'] === '/folder1') {
    echo "<div>I'm in folder1</div>";
} elseif ($_SERVER['REQUEST_URI'] === '/folder2') {
    echo "<div>I'm in folder2</div>";
} else {
    echo "<div>I'm in the homepage</div>";
}
?>
</body>
</html>
