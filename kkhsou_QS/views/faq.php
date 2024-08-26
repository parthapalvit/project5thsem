<?php
include('../config/config.php');

$sql = "SELECT * FROM faqs";
$result = mysqli_query($conn, $sql);

while ($faq = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $faq['question'] . "</h3>";
    echo "<p>" . $faq['answer'] . "</p>";
}
?>
