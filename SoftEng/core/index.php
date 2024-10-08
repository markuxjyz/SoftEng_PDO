<?php require_once 'dbConfig.php'; ?> // Include the database configuration file

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8"> // Set the character encoding to UTF-8
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> // Set the viewport settings
    <Title>Cosmetics Management System</title> // Set the page title
    <style>
        table, th, td { 
            border : 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    // SQL query to select products with category 'skincare' and price > 20
    $query1 = "SELECT * FROM Products WHERE Category = 'skincare' AND Price > 20";

    $stmt = $pdo->prepare($query1); // Prepare the SQL query

    if ($stmt->execute()) { // Execute the query
        echo "<pre>"; // Output the results in a preformatted block
        // fetch_all() and print_r() to display the results
        print_r($stmt->fetchAll());
        echo "</pre>";
    }
    ?>
    
    <?php
    // SQL query to select products with stock quantity < 30
    $query2 = "SELECT * FROM Products WHERE StockQuantity < 30";

    $stmt = $pdo->prepare($query2); // Prepare the SQL query

    if ($stmt->execute()) { // Execute the query
        echo "<pre>"; // Output the results in a preformatted block
        print_r($stmt->fetch()); // Display the first result
        echo "</pre>";
    }
    ?>
    
    <?php
    // SQL query to insert a new customer
    $query3 = "INSERT INTO customers (CustomerId, Name, Email, Password, Address) VALUES (?,?,?,?,?)";

    $stmt = $pdo->prepare($query3); // Prepare the SQL query

    $executeQuery3 = $stmt->execute( 
        ["0","Marc Cruz", "mjdelacruz123@gmail.com", "lowkey123", "67 Pine St" ]
    ); // Execute the query with the provided values

    if ($executeQuery3) {
        echo "Query Successful!"; // Display success message
    }
    else{
        echo "Query failed"; // Display error message
    }
    ?>
    
    <?php
    // SQL query to delete a customer with name = 0
    $query4 = "DELETE FROM customers WHERE Name = 0";

    $stmt = $pdo->prepare($query4); // Prepare the SQL query

    $executeQuery4 = $stmt->execute(); // Execute the query

    if ($executeQuery4) {
        echo "Delete Successful!"; // Display success message
    }
    else{
        echo "Delete failed"; // Display error message
    }
    ?>
    
    <?php
    // SQL query to update a customer with CustomerID = 5
    $query5 = "UPDATE customers SET Password = ?, Address = ? WHERE CustomerID = 5";

    $stmt = $pdo->prepare($query5); // Prepare the SQL query

    $executeQuery5 = $stmt->execute(); // Execute the query

    if ($executeQuery5) {
        echo "Update Successful!"; // Display success message
    }
    else{
        echo "Update failed"; // Display error message
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head> 
        <meta charset="UTF-8"> // Set the character encoding to UTF-8
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> // Set the viewport settings
        <Title>Cosmetics Management System</title> // Set the page title
        <style>
            table, th, td { 
                border : 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        // SQL query to select all customers
        $query1 = "SELECT * FROM customers";

        $stmt = $pdo->prepare($query1); // Prepare the SQL query

        if ($stmt->execute()) { // Execute the query
            $results = $stmt->fetchAll(); // Fetch all the results
            ?>
            <table>
                <tr>
                    <?php
                    // Get the column names
                    $columnNames = array_keys($results[0]);
                    foreach ($columnNames as $columnName) {
                        echo "<th>$columnName</th>";
                    }
                    ?>
                </tr>
                <?php
                // Display the data
                foreach ($results as $row) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "< td>$value</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
            <?php
        } else {
            echo "Query execution failed."; // Display error message
        }
        ?>
    </body>
    </html>