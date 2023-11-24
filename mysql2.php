<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sleman";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM faspen3";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Jumlah</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles */
        /* Adjust as needed */
        .table-container {
            margin: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mr-auto" href="#">Data Jumlah</a>
    <a class="navbar-brand ml-auto" href="wfs.html">Kembali</a>
</nav>

<div class="container table-container">
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Jumlah SMA</th>
                <th>Jumlah SMK</th>
                <th>Jumlah Peserta Didik SMA</th>
                <th>Jumlah Peserta Didik SMK</th>
                <th>Jumlah Guru SMA</th>
                <th>Jumlah Guru SMK</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["No"] . "</td>
                            <td>" . $row["Kecamatan"] . "</td>
                            <td>" . $row["Jumlah SMA"] . "</td>
                            <td>" . $row["Jumlah SMK"] . "</td>
                            <td>" . $row["Jumlah Peserta Didik SMA"] . "</td>
                            <td>" . $row["Jumlah Peserta Didik SMK"] . "</td>
                            <td>" . $row["Jumlah Guru SMA"] . "</td>
                            <td>" . $row["Jumlah Guru SMK"] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
