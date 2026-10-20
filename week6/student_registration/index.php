
<?php
session_start();

// Soo celi xogtii hore haddii validation-ku fashilmay
$old = $_SESSION["form_values"] ?? [];
$errors = $_SESSION["form_errors"] ?? [];

unset($_SESSION["form_values"], $_SESSION["form_errors"]);

// Ka ilaali in xogta user-ku geliyey si toos ah loogu qoro HTML
function oldValue($key, $old) {
    return htmlspecialchars($old[$key] ?? "", ENT_QUOTES, "UTF-8");
}

// Taariikhda maanta
$today = date("Y-m-d");

// Field-ka qaladku ka jiro
$focus = $_GET["focus"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">
<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Student Registration Form</h2>
        </div>

        <div class="card-body">

            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <strong>Please correct the following:</strong>
                    <ul class="mb-0">
                        <?php foreach ($errors as $message) { ?>
                            <li><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <form action="result.php" method="post"
                  enctype="multipart/form-data">

                <!-- Personal Information -->
                <fieldset class="border rounded p-3 mb-4">
                    <legend class="float-none w-auto px-2">
                        Personal Information
                    </legend>

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="fullName"
                            id="fullName" class="form-control"
                            value="<?= oldValue('fullName', $old) ?>"
                            pattern="[A-Za-z ]+"
                            title="Use letters and spaces only" required>
                        <?php if (isset($errors["fullName"])) { ?>
                            <small class="text-danger"><?= htmlspecialchars($errors["fullName"]) ?></small>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Place of Birth</label>
                        <input type="text" name="pob" id="pob"
                            class="form-control"
                            value="<?= oldValue('pob', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" id="dob"
                            class="form-control"
                            max="<?= $today ?>"
                            value="<?= oldValue('dob', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" id="address"
                            class="form-control"
                            value="<?= oldValue('address', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" id="gender"
                            class="form-select" required>
                            <option value="">Choose Gender</option>
                            <option value="Male"
                                <?= (($old["gender"] ?? "") === "Male") ? "selected" : "" ?>>
                                Male
                            </option>
                            <option value="Female"
                                <?= (($old["gender"] ?? "") === "Female") ? "selected" : "" ?>>
                                Female
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="tel" name="telephone" id="telephone"
                            class="form-control"
                            value="<?= oldValue('telephone', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control"
                            value="<?= oldValue('email', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Student Image</label>
                        <input type="file" name="image" id="image"
                            class="form-control"
                            accept="image/png,image/jpeg,image/gif" required>
                        <small class="text-muted">
                            JPG, PNG or GIF; maximum size 2 MB.
                            If validation fails, choose the image again.
                        </small>
                    </div>
                </fieldset>

                <!-- Parent Information -->
                <fieldset class="border rounded p-3 mb-4">
                    <legend class="float-none w-auto px-2">
                        Parent Information
                    </legend>

                    <div class="mb-3">
                        <label class="form-label">Parent Name</label>
                        <input type="text" name="parentName" id="parentName"
                            class="form-control"
                            value="<?= oldValue('parentName', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Parent Telephone</label>
                        <input type="tel" name="parentTelephone" id="parentTelephone"
                            class="form-control"
                            value="<?= oldValue('parentTelephone', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Relationship</label>
                        <input type="text" name="relationship" id="relationship"
                            class="form-control"
                            value="<?= oldValue('relationship', $old) ?>" required>
                    </div>
                </fieldset>

                <!-- Academic Information -->
                <fieldset class="border rounded p-3 mb-4">
                    <legend class="float-none w-auto px-2">
                        Academic Information
                    </legend>

                    <div class="mb-3">
                        <label class="form-label">Student ID</label>
                        <input type="text" name="studentID" id="studentID"
                            class="form-control"
                            value="<?= oldValue('studentID', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Faculty</label>
                        <input type="text" name="faculty" id="faculty"
                            class="form-control"
                            value="<?= oldValue('faculty', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <input type="text" name="department" id="department"
                            class="form-control"
                            value="<?= oldValue('department', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Class</label>
                        <input type="text" name="className" id="className"
                            class="form-control"
                            value="<?= oldValue('className', $old) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Registration Date</label>

                        <!-- Taariikhda maanta; user-ku ma beddeli karo -->
                        <input type="text" class="form-control"
                            value="<?= date('d-m-Y') ?>" readonly>

                        <!-- Taariikhda loo dirayo PHP -->
                        <input type="hidden" name="registrationDate"
                            value="<?= $today ?>">
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-success w-100">
                    Register Student
                </button>

            </form>
        </div>
    </div>
</div>

<?php
// Haddii field qalad leeyahay, u dhaqaaq field-kaas
if ($focus !== "") {
    $allowedFocus = [
        "fullName", "pob", "dob", "address", "gender",
        "telephone", "email", "image", "parentName",
        "parentTelephone", "relationship", "studentID",
        "faculty", "department", "className"
    ];

    if (in_array($focus, $allowedFocus, true)) {
        echo '<script>
            window.addEventListener("load", function () {
                const field = document.getElementById(' .
                    json_encode($focus) .
                ');
                if (field) {
                    field.focus();
                    field.scrollIntoView({behavior: "smooth", block: "center"});
                }
            });
        </script>';
    }
}
?>
</body>
</html>
