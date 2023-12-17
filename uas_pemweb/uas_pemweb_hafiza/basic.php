<?php
// Bagian 2.1: Mengelola data formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Parsing data dari variabel global
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $school = isset($_POST["school"]) ? $_POST["school"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $checkbox = isset($_POST["checkbox"]) ? $_POST["checkbox"] : "";
    $radio = isset($_POST["radio"]) ? $_POST["radio"] : "";
    $number = isset($_POST["number"]) ? $_POST["number"] : "";

    // Validasi sisi server
    if (empty($name) || empty($email) || empty($radio) || empty($number)) {
        echo "Please fill in all required fields.";
    } else {
        // Simpan ke basis data (simulasi, gantilah dengan koneksi ke basis data sebenarnya)
        $connection = new mysqli("localhost", "username", "password", "database_name");

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Escape input to prevent SQL injection
        $name = $connection->real_escape_string($name);
        $school = $connection->real_escape_string($school);
        $email = $connection->real_escape_string($email);
        $radio = $connection->real_escape_string($radio);
        $number = $connection->real_escape_string($number);

        // Insert data into the table
        $query = "INSERT INTO form_data (name, email, checkbox, radio, number, browser, ip_address)
                  VALUES ('$name', '$email', '$checkbox', '$radio', '$number', '{$_SERVER['HTTP_USER_AGENT']}', '{$_SERVER['REMOTE_ADDR']}')";

        if ($connection->query($query) === TRUE) {
            echo "Data successfully saved to the database.";
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }

        $connection->close();
    }
}
?>

<!-- Bagian 2.2: Objek PHP berbasis OOP -->
<?php
class MyObject {
    public function methodOne() {
        return "This is method one.";
    }

    public function methodTwo() {
        return "This is method two.";
    }
}

// Penggunaan objek pada halaman web
$myObj = new MyObject();
echo $myObj->methodOne();
?>
