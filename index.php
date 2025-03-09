<?php
// Initialize variables for storing user input and error messages
$nama = "";
$email = "";
$nim = "";
$namaError = "";
$emailError = "";
$nimError = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the name is empty
    if (empty($_POST["nama"])) {
        $namaError = "Nama harus diisi.";
    } else {
        $nama = htmlspecialchars(trim($_POST["nama"]));
    }

    // Check if the email is empty
    if (empty($_POST["email"])) {
        $emailError = "Email harus diisi.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Format email tidak valid.";
        }
    }

    // Check if the NIM is empty
    if (empty($_POST["nim"])) {
        $nimError = "NIM harus diisi.";
    } else {
        $nim = htmlspecialchars(trim($_POST["nim"]));
        // Check if NIM is numeric
        if (!is_numeric($nim)) {
            $nimError = "NIM harus berupa angka.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <?php if ($namaError || $emailError || $nimError) { ?>
                <div class="alert alert-danger">
                    <strong>Kesalahan!</strong> Harap perbaiki data yang salah.
                </div>
            <?php } else { ?>
                <div class="alert alert-success">
                    <strong>Berhasil!</strong> Data pendaftaran telah diterima.
                </div>
            <?php } ?>
        <?php } ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
                <span class="error"><?php echo $namaError; ?></span> <!-- Show error message -->
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailError; ?></span> <!-- Show error message -->
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>">
                <span class="error"><?php echo $nimError; ?></span> <!-- Show error message -->
            </div>

            <div class="button-container">
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>