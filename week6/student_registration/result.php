
<?php
session_start();

// 1. Hubi in xogta POST lagu soo diray
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// 2. Soo qaado xogta form-ka
$name = trim($_POST["fullName"] ?? "");
$pob = trim($_POST["pob"] ?? "");
$dob = trim($_POST["dob"] ?? "");
$address = trim($_POST["address"] ?? "");
$gender = trim($_POST["gender"] ?? "");
$telephone = trim($_POST["telephone"] ?? "");
$email = trim($_POST["email"] ?? "");

$parentName = trim($_POST["parentName"] ?? "");
$parentTelephone = trim($_POST["parentTelephone"] ?? "");
$relationship = trim($_POST["relationship"] ?? "");

$studentID = trim($_POST["studentID"] ?? "");
$faculty = trim($_POST["faculty"] ?? "");
$department = trim($_POST["department"] ?? "");
$className = trim($_POST["className"] ?? "");

// Registration Date waxaa go'aaminaya server-ka
$registrationDate = date("Y-m-d");

// 3. Fields-ka loo baahan yahay
$fields = [
    "fullName" => $name,
    "pob" => $pob,
    "dob" => $dob,
    "address" => $address,
    "gender" => $gender,
    "telephone" => $telephone,
    "email" => $email,
    "parentName" => $parentName,
    "parentTelephone" => $parentTelephone,
    "relationship" => $relationship,
    "studentID" => $studentID,
    "faculty" => $faculty,
    "department" => $department,
    "className" => $className
];

// 4. Hubi fields-ka madhan
$errors = [];

$fieldLabels = [
    "fullName" => "Full Name",
    "pob" => "Place of Birth",
    "dob" => "Date of Birth",
    "address" => "Address",
    "gender" => "Gender",
    "telephone" => "Telephone",
    "email" => "Email",
    "parentName" => "Parent Name",
    "parentTelephone" => "Parent Telephone",
    "relationship" => "Relationship",
    "studentID" => "Student ID",
    "faculty" => "Faculty",
    "department" => "Department",
    "className" => "Class"
];

foreach ($fields as $key => $value) {
    if ($value === "") {
        $errors[$key] = "Please enter " . $fieldLabels[$key] . ".";
    }
}

// 5. Hubi magaca
if (
    $name !== "" &&
    !preg_match("/^[a-zA-Z ]+$/", $name)
) {
    $errors["fullName"] =
        "Name must contain letters and spaces only.";
}

// 6. Hubi email
if (
    $email !== "" &&
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    $errors["email"] = "Please enter a valid email address.";
}

// 7. Hubi Gender
if (
    $gender !== "" &&
    !in_array($gender, ["Male", "Female"], true)
) {
    $errors["gender"] = "Please select a valid gender.";
}

// 8. Hubi Date of Birth
$dobDate = false;

if ($dob !== "") {
    $dobDate = DateTime::createFromFormat("!Y-m-d", $dob);

    if (
        !$dobDate ||
        $dobDate->format("Y-m-d") !== $dob
    ) {
        $errors["dob"] = "Please enter a valid date of birth.";
    } elseif ($dobDate > new DateTime("today")) {
        $errors["dob"] = "Date of Birth cannot be in the future.";
    }
}

// 9. Hubi sawirka
$allowedTypes = [
    "image/jpeg" => "jpg",
    "image/png" => "png",
    "image/gif" => "gif"
];

$imageTmp = "";
$mimeType = "";

if (
    !isset($_FILES["image"]) ||
    $_FILES["image"]["error"] !== UPLOAD_ERR_OK
) {
    $errors["image"] = "Please select a student image.";
} else {
    $imageTmp = $_FILES["image"]["tmp_name"];
    $imageSize = $_FILES["image"]["size"];

    if ($imageSize > 2 * 1024 * 1024) {
        $errors["image"] = "Image must not exceed 2 MB.";
    } else {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($imageTmp);

        if (!isset($allowedTypes[$mimeType])) {
            $errors["image"] =
                "Only JPG, PNG and GIF images are allowed.";
        }
    }
}

// 10. Haddii qalad jiro, xogta kaydi oo ku celi form-ka
if (!empty($errors)) {

    // Xogta qoraalka ah dib ayaa loogu buuxinayaa form-ka
    $_SESSION["form_values"] = $_POST;
    $_SESSION["form_errors"] = $errors;

    // Hel field-ka ugu horreeya ee qaladka leh
    $firstError = array_key_first($errors);

    header(
        "Location: index.php?focus=" .
        urlencode($firstError)
    );
    exit;
}

// 11. Samee uploads folder-ka haddii uusan jirin
$uploadDir = __DIR__ . "/uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// 12. Sawirka u samee magac gaar ah
$imageExtension = $allowedTypes[$mimeType];
$imageName = bin2hex(random_bytes(8)) . "." . $imageExtension;
$imagePath = $uploadDir . $imageName;

// 13. Ku wareeji sawirka folder-ka uploads
if (!move_uploaded_file($imageTmp, $imagePath)) {
    exit("Sorry, the image could not be saved.");
}

// 14. Diyaari xogta table-ka
$studentData = [
    "Full Name" => $name,
    "Place of Birth" => $pob,
    "Date of Birth" => $dob,
    "Address" => $address,
    "Gender" => $gender,
    "Telephone" => $telephone,
    "Email" => $email,
    "Parent Name" => $parentName,
    "Parent Telephone" => $parentTelephone,
    "Relationship" => $relationship,
    "Student ID" => $studentID,
    "Faculty" => $faculty,
    "Department" => $department,
    "Class" => $className,
    "Registration Date" => $registrationDate
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">
<div class="container my-5">
    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h2 class="text-center">Registration Successful</h2>
        </div>

        <div class="card-body">
            <p class="text-success">
                Student information has been validated successfully.
            </p>

            <!-- Student image -->
            <div class="text-center mb-4">
                <img
                    src="<?= 'uploads/' . rawurlencode($imageName) ?>"
                    alt="Student Image"
                    class="img-thumbnail"
                    style="max-width: 180px; max-height: 180px;"
                >
            </div>

            <!-- Student information table -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Field</th>
                            <th>Submitted Information</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($studentData as $label => $value) { ?>
                            <tr>
                                <th>
                                    <?= htmlspecialchars($label, ENT_QUOTES, "UTF-8") ?>
                                </th>
                                <td>
                                    <?= htmlspecialchars($value, ENT_QUOTES, "UTF-8") ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <a href="index.php" class="btn btn-primary">
                Register Another Student
            </a>
        </div>
    </div>
</div>
</body>
</html>
