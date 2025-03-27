<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituaries</title>

    <!-- ✅ SEO & Social Media Meta Tags -->
    <meta name="description" content="Browse and share obituaries to honor loved ones.">
    <meta name="keywords" content="obituary, memorial, tribute, loved ones, remembrance">
    <meta name="author" content="Obituary Management Platform">
    <meta name="robots" content="index, follow">
    
    <meta property="og:title" content="Obituaries - Honoring Loved Ones">
    <meta property="og:description" content="Browse and share obituaries to honor loved ones.">
    <meta property="og:image" content="http://localhost/obituary_app/images/og-image.jpg">
    <meta property="og:url" content="http://localhost/obituary_app/view_obituaries.php">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Obituaries - Honoring Loved Ones">
    <meta name="twitter:description" content="Browse and share obituaries to honor loved ones.">
    <meta name="twitter:image" content="http://localhost/obituary_app/images/og-image.jpg">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('view background.jpg') no-repeat center center fixed;
            background-size: cover;
            text-align: center;
            color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background: rgba(0, 0, 0, 0.7); /* Dark transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.3);
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            color: black;
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #D4AF37; /* Gold */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .btn-home {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #008080; /* Teal */
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn-home:hover {
            background-color: #006666;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Obituaries</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Date of Death</th>
                <th>Content</th>
                <th>Author</th>
            </tr>

            <tr><td>James Anderson</td><td>1958-01-25</td><td>2024-03-10</td><td>A devoted husband and grandfather who cherished every moment with family.</td><td>David Anderson</td></tr>
            <tr><td>Susan Miller</td><td>1965-09-20</td><td>2023-11-30</td><td>A passionate artist whose paintings brought joy to many.</td><td>Jessica Miller</td></tr>
            <tr><td>Robert Smith</td><td>1945-03-08</td><td>2024-02-14</td><td>A veteran and community leader who dedicated his life to serving others.</td><td>Michael Smith</td></tr>
            <tr><td>Mary Johnson</td><td>1950-06-12</td><td>2023-10-25</td><td>A loving mother, teacher, and mentor to many.</td><td>Emily Johnson</td></tr>
            <tr><td>John Doe</td><td>1950-01-01</td><td>2024-03-26</td><td>A loving father and grandfather.</td><td>Jane Doe</td></tr>
        </table>
        
        <a href="index.php" class="btn-home">Back to Home</a>
    </div>

</body>
</html>
