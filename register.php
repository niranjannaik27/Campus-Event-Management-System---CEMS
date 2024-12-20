<?php
    // Connect to the database
    $insert1 = false;
    include 'partials/dbconnect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['regEdit'])) {
            $name = $_POST['name'];
            $usn = $_POST['usn'];
            $email_id = $_POST['email'];
            $phone_number = $_POST['phno'];
            $title = $_POST['title'];
            $category = $_POST['category'];
            
            // Initialize SQL variable
            $sql = "";

            // Check the category and build the SQL query
            if ($category == "Sports") {
                $sql = "INSERT INTO `sports` (`eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) 
                        VALUES ('$title', '$name', '$usn', '$email_id', '$phone_number', current_timestamp())";
            } elseif ($category == "Cultural") {
                $sql = "INSERT INTO `cultural` (`eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) 
                        VALUES ('$title', '$name', '$usn', '$email_id', '$phone_number', current_timestamp())";
            } elseif ($category == "Technical") {
                $sql = "INSERT INTO `technical` (`eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) 
                        VALUES ('$title', '$name', '$usn', '$email_id', '$phone_number', current_timestamp())";
            } else {
                // Handle invalid categories
                echo "<script type='text/javascript'>alert('Invalid category selected. Please try again.');</script>";
                exit();
            }

            // Execute the query
            $result = mysqli_query($conn, $sql);

            // Check if the query was successful
            if ($result) {
                $insert1 = true;
            } else {
                echo "<script type='text/javascript'>alert('Your registration has been denied because there is no account in Eve PESU with this USN.');</script>";  
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Favicon -->
    <link rel="icon" href="Images/favicon.ico">
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="swiper.min.css">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Register Event Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register for this event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="post" autocomplete="off">
                    <div class="modal-body">
                        <input type="hidden" name="regEdit" id="regEdit">
                        <div class="form-group">
                            <label for="name">Enter your Name</label> <span style="color:red;">*</span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="ex: xyz" required>
                        </div>
                        <div class="form-group">
                            <label for="usn">Enter your USN</label> <span style="color:red;">*</span>
                            <input type="text" class="form-control" id="usn" name="usn" placeholder="ex: PES2UG2XCSXXX" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Enter your email-id</label> <span style="color:red;">*</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ex: xyz123@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phno">Enter your Phone number</label> <span style="color:red;">*</span>
                            <input type="text" class="form-control" id="phno" name="phno" placeholder="ex: 9999999999" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Event Name</label> <span style="color:red;">*</span>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Event Category</label> <span style="color:red;">*</span>
                            <select class="form-control" id="category" name="category" required>
                                <option value="Sports">Sports</option>
                                <option value="Cultural">Cultural</option>
                                <option value="Technical">Technical</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if ($insert1) {
        echo "<script type='text/javascript'>alert('Success! You have registered for this event.');</script>";
    }
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
