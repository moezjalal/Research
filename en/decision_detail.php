<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../img\1.1.jpg">
    <title>Decision Details</title>
    <style>
        body.bg-green-50 {
            background-color: #f0f9f0; /* Light green background */
        }
    </style>
</head>
<body class="bg-green-50">

<div class="container mt-5">
    <?php
    include '../db__admin.php';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if decision ID is present in GET
    if (isset($_GET['id'])) {
        $decision_id = intval($_GET['id']); // Get the ID from GET

        // Query to fetch the decision details by ID
        $sql = "SELECT title, description, date, nambar FROM decisionsen WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $decision_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display data if found
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo '<h2 class="text-center mb-4">' . htmlspecialchars($row['title']) . '</h2>';
            echo '<div class="card p-4">';
            echo '<h4 class="text-muted">Decision Date: ' . date("d F Y", strtotime($row['date'])) . '</h4>';
            echo '<p><strong>Decision Number:</strong> ' . htmlspecialchars($row['nambar']) . '</p>'; // Display decision number
            echo '<p class="mt-4">' . nl2br(htmlspecialchars($row['description'])) . '</p>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning text-center" role="alert">No details found for the specified decision.</div>';
        }

        $stmt->close();
    } else {
        echo '<div class="alert alert-warning text-center" role="alert">Decision ID is missing.</div>';
    }

    $conn->close();
    ?>

    <div class="text-center mt-4">
        <a href="decisions.php" class="btn btn-success">Back to Decision List</a> <!-- Back button in green -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
