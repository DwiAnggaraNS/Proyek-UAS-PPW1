<?php
session_start();
include 'config.php'; // Ganti dengan file konfigurasi database Anda

if (isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];
    $user_id = $_SESSION['user_id'];

    if ($stmt = $conn->prepare("SELECT * FROM products WHERE user_id = ? AND category_id = ?")) {
        $stmt->bind_param("ii", $user_id, $category_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $output = '<option value="" disabled selected>Choose product category...</option>';
        if ($result->num_rows > 0) {
            while ($fetcharray = $result->fetch_assoc()) {
                $productName = htmlspecialchars($fetcharray['productName'], ENT_QUOTES, 'UTF-8');
                $product_id = (int)$fetcharray['product_id'];
                $output .= '<option value="'.$product_id.'">'.$productName.'</option>';
            }
        } else {
            $output .= '<option value="" disabled>Product not available</option>';
        }
        
        $stmt->close();
        echo $output;
    } else {
        echo '<option value="" disabled >Database query error</option>';
    }
} else {
    echo '<option value="" disabled >Invalid category</option>';
}
?>
