<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $company = htmlspecialchars($_POST["company"]);
    $title = htmlspecialchars($_POST["title"]);
    $department = htmlspecialchars($_POST["department"]);
    $contact = isset($_POST["contact"]) ? htmlspecialchars($_POST["contact"]) : "Not selected";
    $email = htmlspecialchars($_POST["email"]);

    // Validate required fields
    if (empty($name) || empty($company) || empty($email)) {
        echo "<h2 style='color: red;'>Error: Name, Company, and Email are required fields.</h2>";
    } else {
        echo "<h2>Client Details Submitted Successfully</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Company:</strong> $company</p>";
        echo "<p><strong>Title:</strong> $title</p>";
        echo "<p><strong>Department:</strong> $department</p>";
        echo "<p><strong>Preferred Contact Method:</strong> $contact</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    }
} else {
    echo "<h2 style='color: red;'>Invalid Request</h2>";
}
?>
