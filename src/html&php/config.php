<?php
session_start();
// var_dump($_SESSION);


// Connect to DB
$conn = mysqli_connect("localhost", "root", "", "Barangku");

//query for inserting products
if(isset($_POST["addNewProduct"])){
    if (!isset($_SESSION['user_id'])) {
        die("User is not logged in");
    }
    
    $user_id = $_SESSION['user_id'];
    $productName = $_POST["productName"];
    $category_id = $_POST["category_id"];
    $productDesc = $_POST["productDesc"];
    $productPrice = $_POST["productPrice"];
    $productStock = $_POST["productStock"];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO products (user_id, productName, category_id, productDesc, productPrice, productStock) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isissi", $user_id, $productName, $category_id, $productDesc, $productPrice, $productStock);

    // Execute and check
    if ($stmt->execute()) {
        // echo "New product added successfully";
    } else {
        echo '<script>
            alert("Server Error");
            window.location.href="suppliers.php";
        </script>
        ';
    }

    $stmt->close();
}

//query for inserting suppliers
if(isset($_POST["addNewSupplier"])){
    if (!isset($_SESSION['user_id'])) {
        die("User is not logged in");
    }
    
    $user_id = $_SESSION['user_id'];
    $supplierName = $_POST["supplierName"];
    $supplierContact = $_POST["supplierContact"];
    $supplierLocation = $_POST["supplierLocation"];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO suppliers (user_id, supplierName, supplierContact, supplierLocation) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $supplierName, $supplierContact, $supplierLocation);

    // Execute and check
    if ($stmt->execute()) {
        // echo "New product added successfully";
    } else {
        echo '
        <script>
            alert("Server Error");
            window.location.href="suppliers.php";
        </script>
        ';
    }

    $stmt->close();
}


//query for inserting stockIn
if(isset($_POST["addNewStockIn"])){
    if (!isset($_SESSION['user_id'])) {
        die("User is not logged in");
    }
    
    $user_id = $_SESSION['user_id'];
    $supplier_id = $_POST["supplier_id"];
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];
    $note = $_POST["note"];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO stockin (user_id, supplier_id, product_id, quantity, note) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiis", $user_id, $supplier_id, $product_id, $quantity, $note);

    // Execute and check
    if ($stmt->execute()) {
        // echo "New stock in added successfully";
    } else {
        echo '
        <script>
            alert("Server Error");
            window.location.href="stockIn.php";
        </script>
        ';
    }

    $stmt->close();
}

//query for inserting stockOut
if (isset($_POST["addNewStockOut"])) {
    if (!isset($_SESSION['user_id'])) {
        die("User is not logged in");
    }

    $user_id = $_SESSION['user_id'];
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];
    $note = $_POST["note"];

    // Prepare and bind
    $stmt = $conn->prepare("CALL validate_and_add_stock_out(?, ?, ?, ?, @status_code)");
    $stmt->bind_param("iiis", $user_id, $product_id, $quantity, $note);

    // Execute the procedure
    if ($stmt->execute()) {
        // Fetch the status code
        $result = $conn->query("SELECT @status_code AS status_code");
        $row = $result->fetch_assoc();
        $status_code = $row['status_code'];

        if ($status_code == 200) {
            // echo "New stock out added successfully";
        } else {
            echo '
            <script>
                alert("Cannot add stock out data. Insufficient Stock!");
                window.location.href="stockOut.php";
            </script>
            ';
        }
    } else {
        echo '
        <script>
            alert("Server Error");
            window.location.href="stockIn.php";
        </script>
        ';
    }

    $stmt->close();
}


//update info barang
if (isset($_POST['editProduct'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST["product_id"]; 
    $productName = $_POST["productName"];
    $category_id = $_POST["category_id"];
    $productDesc = $_POST["productDesc"];
    $productPrice = $_POST["productPrice"];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE products SET productName = ?, category_id = ?, productDesc = ?, productPrice = ? WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param("sisiii",$productName, $category_id, $productDesc, $productPrice, $user_id, $product_id);

    // Execute and check
    if ($stmt->execute()) {
        // echo "Product updated successfully";
    } else {
        echo '
        <script>
            alert("Server Error");
            window.location.href="stockIn.php";
        </script>
        ';
    }

    $stmt->close();
}


//deleting product
if (isset($_POST['deleteProduct'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST["product_id"]; 
    
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM products WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param("ii", $user_id, $product_id);
    
    // Execute and check
    if ($stmt->execute()) {
        // echo "Product updated successfully";
    } else {
        echo '
        <script>
            alert("Server Error");
            window.location.href="stockIn.php";
        </script>
        ';
    }
    
    $stmt->close();
}

//update info stock in
if (isset($_POST['editStockIn'])) {
    $user_id = $_SESSION['user_id'];
    $stockInId = $_POST["stockInId"]; 
    $note = $_POST["note"];
    $quantity = $_POST["quantity"];
    
    // Prepare and bind
    $stmt = $conn->prepare("UPDATE stockIn SET note = ?, quantity = ? WHERE user_id = ? AND stockInId = ?");
    $stmt->bind_param("siii", $note, $quantity, $user_id, $stockInId);
    
    // Execute and check
    if ($stmt->execute()) {
        // echo "S updated successfully";
    } else {
        echo '
        <script>
        alert("Server Error");
        window.location.href="stockIn.php";
        </script>
        ';
    }
    
    $stmt->close();
}

//deleting stock in data
if (isset($_POST['deleteStockIn'])) {
    $user_id = $_SESSION['user_id'];
    $stockInId = $_POST["stockInId"]; 
    
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM stockIn WHERE user_id = ? AND stockInId = ?");
    $stmt->bind_param("ii", $user_id, $stockInId);
    
    // Execute and check
    if ($stmt->execute()) {
        // echo "Product updated successfully";
    } else {
        echo '
        <script>
        alert("Server Error");
        window.location.href="stockIn.php";
        </script>
        ';
    }
    
    $stmt->close();
}

// update info stock out
if (isset($_POST['editStockOut'])) {
    $user_id = $_SESSION['user_id'];
    $stockOutId = $_POST["stockOutId"]; 
    $note = $_POST["note"];
    $quantity = $_POST["quantity"];
    $product_id = $_POST["product_id"];
    
    // Prepare and bind
    $stmt = $conn->prepare("CALL validate_and_update_stock_out(?, ?, ?, ?, ?, @status_code)");
    $stmt->bind_param("iiiis", $user_id, $product_id, $stockOutId, $quantity, $note);
    
    // Execute the procedure
    if ($stmt->execute()) {
        // Fetch the status code
        $result = $conn->query("SELECT @status_code AS status_code");
        $row = $result->fetch_assoc();
        $status_code = $row['status_code'];

        if ($status_code == 200) {
            // echo "New stock out added successfully";
        } else {
            echo '
            <script>
                alert("Cannot add stock out data. Insufficient Stock!");
                window.location.href="stockOut.php";
            </script>
            ';
        }

    } else {
        echo "Error executing procedure: " . $stmt->error;
    }
    $stmt->close();
}



//deleting stock out data
if (isset($_POST['deleteStockOut'])) {
    $user_id = $_SESSION['user_id'];
    $stockOutId = $_POST["stockOutId"]; 
    
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM stockOut WHERE user_id = ? AND stockOut_Id = ?");
    $stmt->bind_param("ii", $user_id, $stockOutId);
    
    // Execute and check
    if ($stmt->execute()) {
        // echo "Product updated successfully";
    } else {
        echo '
        <script>
        alert("Server Error");
        window.location.href="stockOut.php";
        </script>
        ';
    }
    
    $stmt->close();
}


//update info supplier
if (isset($_POST['editSupplier'])) {
    $user_id = $_SESSION['user_id'];
    $supplier_id = $_POST["supplier_id"];
    $supplierName = $_POST["supplierName"]; 
    $supplierContact = $_POST["supplierContact"];
    $supplierLocation = $_POST["supplierLocation"];
    
    // Prepare and bind
    // Prepare and bind
    $stmt = $conn->prepare("UPDATE suppliers SET supplierName = ?, supplierContact = ?, supplierLocation = ? WHERE supplier_id = ?");
    $stmt->bind_param("sssi", $supplierName, $supplierContact, $supplierLocation, $supplier_id);
    
    // Execute the procedure
    if ($stmt->execute()) {
        // Fetch the status code
        $result = $conn->query("SELECT @status_code AS status_code");
        $row = $result->fetch_assoc();
        $status_code = $row['status_code'];
        
        if ($stmt->execute()) {
            // echo "Supplier updated successfully";
        } else {
            echo '
            <script>
                alert("Server Error");
                window.location.href="stockIn.php";
            </script>
            ';
        }
        
        $stmt->close();
    }
}

//deleting supplier data
if (isset($_POST['deleteSupplier'])) {
    $supplier_id = $_POST["supplier_id"]; 
    
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM suppliers WHERE supplier_id = ?");
    $stmt->bind_param("i", $supplier_id);
    
    // Execute and check
    if ($stmt->execute()) {
        // echo "Product updated successfully";
    } else {
        echo '
        <script>
        alert("Server Error");
        window.location.href="stockOut.php";
        </script>
        ';
    }
    
    $stmt->close();
}
?>