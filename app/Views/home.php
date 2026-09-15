<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | POS System</title>

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
        <h1>Point of Sale System</h1>

        <p>Welcome to the first version of our basic Point of Sale system.</p>

        <p>
            Use the navigation menu to view customer accounts,
            user accounts, and information about the system.
        </p>
    </main>
</body>
</html>