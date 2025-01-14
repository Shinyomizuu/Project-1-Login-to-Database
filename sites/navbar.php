<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
        /* Basisstil für die Navigation */
        nav {
            background-color: #333;
            padding: 10px;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-between; 
            align-items: center; 
        }

        .img-wrapper {
            display: flex;
            justify-content: flex-start; 
        }

        img {
            max-height: 40px;
            width: auto;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;  
        }

        li {
            margin-right: 20px;
        }

        .nav-link {
            color: white !important;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #ff5733;
            color: white;
        }

        .active {
            background-color: #ff5733;
            color: white;
        }

    </style>
</head>
<body>

<nav> 
    <div class="img-wrapper">
        <img src="../assets/images/Wirtschaftskammer_Österreich_logo.svg.png" alt="Logo">
    </div>
    
    <ul>
        <li><a href="home.php" class="nav-link">Home</a></li>
        <li><a href="userLogin.php" class="nav-link">Login/Register</a></li>
    </ul>
</nav>

<script>
    // Alle Links mit der Klasse 'nav-link' finden
    const links = document.querySelectorAll('.nav-link');

    // Die aktuelle URL speichern
    const currentUrl = window.location.pathname;

    // Durch alle Links iterieren und den aktiven Link bestimmen
    links.forEach(link => {
     
        if (link.href.includes(currentUrl)) {
            link.classList.add('active');
        }
    });
</script>

</body>
</html>
