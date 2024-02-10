document.getElementById("logoutButton").addEventListener("click", function() {
    var confirmation = confirm("Are you sure you want to LogOut");
    if (confirmation) {
        // If user confirms, redirect to logout PHP script
        window.location.href = "logout_user.php";
    } else {
        // If user cancels, do nothing or handle accordingly
        console.log("Logout cancelled");
    }
});
