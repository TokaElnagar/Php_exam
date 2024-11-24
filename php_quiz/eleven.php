
<?php
// Check 
if (isset($_POST['color'])) {
    $selectedColor = $_POST['color'];
    setcookie('background_color', $selectedColor, time() + (86400 * 30), "/"); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}
$backgroundColor = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($backgroundColor); ?>;">

    <h1>Select a Background Color</h1>

    <form method="post">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="white" <?php echo $backgroundColor == 'white' ? 'selected' : ''; ?>>White</option>
            <option value="red" <?php echo $backgroundColor == 'red' ? 'selected' : ''; ?>>Red</option>
            <option value="green" <?php echo $backgroundColor == 'green' ? 'selected' : ''; ?>>Green</option>
            <option value="blue" <?php echo $backgroundColor == 'blue' ? 'selected' : ''; ?>>Blue</option>
            <option value="yellow" <?php echo $backgroundColor == 'yellow' ? 'selected' : ''; ?>>Yellow</option>
        </select>
        <button type="submit">Change Background</button>
    </form>

</body>
</html>
