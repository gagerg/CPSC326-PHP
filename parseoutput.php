<!DOCTYPE html>
<html>
<head>
<title>String Parse Test Results</title>
</head>
</body>
<h1>Search word results</h1>
<?php
$search = $_POST['search'];
$words = str_getcsv($search);
foreach ($words as $word) {
    $term = trim($word);
    echo "<p>Search term: '$term'</p>
\n";
}
?>
</body>
</html>