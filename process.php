<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Personal Information
    $name = validate_input($_POST["name"], "Name");
    $placeOfBirth = validate_input($_POST["placeOfBirth"], "Place of Birth");
    $dateOfBirth = validate_input($_POST["dateOfBirth"], "Date of Birth");
    $address = validate_input($_POST["address"], "Address");
    $sex = validate_input($_POST["sex"], "Sex");
    $telephone = validate_input($_POST["telephone"], "Telephone");
    $email = validate_input($_POST["email"], "Email");

    // Parent Information
    $parentName = validate_input($_POST["parentName"], "Parent's Name");
    $parentTelephone = validate_input($_POST["parentTelephone"], "Parent's Telephone");
    $relationship = validate_input($_POST["relationship"], "Relationship");

    // Academic Information
    $id = validate_input($_POST["id"], "ID");
    $faculty = validate_input($_POST["faculty"], "Faculty");
    $department = validate_input($_POST["department"], "Department");
    $class = validate_input($_POST["class"], "Class");
    $registrationDate = validate_input($_POST["registrationDate"], "Registration Date");

    // Profile Image
    $profileImage = $_FILES["profileImage"];
    $uploadPath = "uploads/"; // Set your upload directory path

    // Create 'uploads' directory if it doesn't exist
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0755, true);
    }

    // Validate and move profile image to upload directory
    if ($profileImage["error"] === UPLOAD_ERR_OK) {
        $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
        $fileType = mime_content_type($profileImage['tmp_name']);
        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = "Invalid file type. Please upload an image file.";
        } else {
            $fileName = basename($profileImage["name"]);
            $uploadFilePath = $uploadPath . $fileName;
            move_uploaded_file($profileImage["tmp_name"], $uploadFilePath);
        }
    } else {
        $errors[] = "Profile image upload error.";
    }

    // If there are validation errors, redirect back to form with error messages
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: index.php");
        exit();
    }

    // Redirect to display form data
    $_SESSION['formData'] = $_POST;
    $_SESSION['formData']['profileImagePath'] = $uploadFilePath;
    header("Location: display.php");
    exit();
}

// Function to validate input data
function validate_input($data, $fieldName) {
    $data = trim($data);
    if (empty($data)) {
        return "$fieldName is required";
    }
    // You can add more specific validation as needed
    return $data;
}
?>
