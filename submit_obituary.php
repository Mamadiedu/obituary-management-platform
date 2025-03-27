
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit an Obituary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            width: 400px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Submit an Obituary</h2>
        <form action="submit_obituary.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="date_of_birth" required>

            <label for="dod">Date of Death:</label>
            <input type="date" name="date_of_death" required>

            <label for="content">Obituary Details:</label>
            <textarea name="content" rows="4" required></textarea>

            <label for="author">Submitted by:</label>
            <input type="text" name="author" required>

            <button type="submit">Submit Obituary</button>
        </form>
    </div>

</body>
</html>
