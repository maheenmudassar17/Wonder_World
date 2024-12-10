<?php 
include "conn.php"; // Assuming db.php contains your database connection code



// Fetch all orders from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('aboutus.jpg');
            background-size: cover;
            position: relative;
        }

        /* header {
            background-color: #ffffff;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        nav {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            color: #47132d; 
            font-weight: bold;
            font-size: 24px;
            text-transform: uppercase;
            margin-left: 20px;
        }

        nav a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            transition: color 0.3s ease;
            margin: 0 50px; 
        }

        nav a:hover {
            color: #ff69b4; 
        }

        nav .nav-links {
            margin-left: auto;
            display: flex;
            align-items: center;
        } */

        table {
            width: 100%;
            table-layout: fixed;
        }
        
        th, td {
            text-align: center;
            padding: 15px;
            word-wrap: break-word;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-group {
            display: flex;
            justify-content: center;
        }

        .btn-group .btn {
            margin: 0 5px;
        }

        .email-column {
            width: 25%;
        }
    </style>
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this order?")) {
                window.location.href = 'pdelete.php?id=' + id; // Replace 'delete.php' with your delete logic file
            }
        }
    </script>
</head>
<body>
<?php
include 'header.php';
?>

<div class="container">
    <h2>Orders</h2>
    <a href="allview.php" class="btn btn-info">Back to Admin Panel</a>
    <a class="btn btn-info" href="view.php">user Data</a>&nbsp;
<a class="btn btn-info" href="pview.php">orders Data</a>&nbsp;
<a class="btn btn-info" href="viewc.php">Feedback Data</a>&nbsp;
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Card Name</th>
                <th>Card Number</th>
                <th>Expiry Date</th>
                <th>Email</th>
                <th>Total Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['card_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['card_number']); ?></td>
                    <td><?php echo htmlspecialchars($row['expiry_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['total_amount']); ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-info" href="pupdate.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='9'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
include 'footer.php';
?>
