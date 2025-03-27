<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituary Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        h1 {
            background: rgba(0, 0, 0, 0.6);
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px; /* Moves text higher */
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px; /* Space below text */
        }
        a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: 0.3s ease;
        }
        .btn-submit {
            background-color: #D4AF37; /* Gold */
        }
        .btn-submit:hover {
            background-color: #b8952e;
        }
        .btn-view {
            background-color: #008080; /* Teal */
        }
        .btn-view:hover {
            background-color: #006666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Obituary Management Platform</h1>
        <div class="btn-container">
            <a href="obituary_form.html" class="btn-submit">Submit an Obituary</a>
            <a href="view_obituaries.php" class="btn-view">View Obituaries</a>
        </div>
    </div>
</body>
</html>
