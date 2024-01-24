<?php
include("inc/db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $siteName = $_POST["site_name"];
    $siteDescription = $_POST["site_description"];

    $sql = "UPDATE settings SET site_name='$siteName', site_description='$siteDescription' WHERE id=1";
    if ($conn->query($sql) === TRUE) {
        echo "Settings updated successfully";
    } else {
        echo "Error updating settings: " . $conn->error;
    }
}

// Fetch current settings
$result = $conn->query("SELECT * FROM settings WHERE id=1");
$row = $result->fetch_assoc();
$siteName = $row["site_name"];
$siteDescription = $row["site_description"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
</head>
<body>

    <h1>Admin Settings</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="site_name">Site Name:</label>
        <input type="text" name="site_name" value="<?php echo $siteName; ?>" required>
        <br>

        <label for="site_description">Site Description:</label>
        <textarea name="site_description" rows="4" required><?php echo $siteDescription; ?></textarea>
        <br>

        <input type="submit" value="Update Settings">
    </form>

</body>
</html>

<?php
$conn->close();
?>
