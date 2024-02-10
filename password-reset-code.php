<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer Autoload
require 'phpmailer/vendor/autoload.php';

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archanastores";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process forgot password form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        
        // Check if email exists in the database
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Generate a random password
            $new_password = generateRandomPassword();
            
            // Update the password in the database
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
            
            if ($conn->query($update_sql) === TRUE) {
                // Send the new password to the user's email using PHPMailer
                // Send the new password to the user's email using PHPMailer
                $mail = new PHPMailer(true);
                
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'thumbnail487@gmail.com'; // Your Gmail address
                    $mail->Password = 'ptoi vqyn kohz milc'; // Your Gmail app password
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    // Recipient
                    $mail->setFrom('thumbnail487@gmail.com', 'Archana Stores');
                    $mail->addAddress($email);

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Password Reset';
                    $mail->Body = "<h1>Your password has been changed</h1> <p>Your new password is: $new_password</p>";

                    $mail->send();
                    header('Location: resetsuccess.php');
                } catch (Exception $e) {
                    echo "Failed to send password reset instructions. Error: {$mail->ErrorInfo}";
                }
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "Email not found.";
        }
    } else {
        echo "Email is required.";
    }
}

// Function to generate a random password
function generateRandomPassword($length = 6) {
    $characters = '!@#$%^&*()0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_password = '';
    for ($i = 0; $i < $length; $i++) {
        $random_password .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_password;
}
?>