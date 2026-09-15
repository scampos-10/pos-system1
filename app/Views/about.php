<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About | POS System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }

        nav a:hover {
            color: #ffd700;
        }

        main {
            margin-top: 20px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customer Accounts</a>
        <a href="<?= site_url('users') ?>">User Accounts</a>
    </nav>

    <main>
        <h1>About the POS System</h1>

        <p>
            This website is the first version of a basic Point of Sale
            system created using CodeIgniter 4.
        </p>

        <p>
            The Customer Accounts and User Accounts pages display
            information stored temporarily in static PHP arrays.
        </p>

        <p>No database is used in this version.</p>
    </main>
</body>
</html>