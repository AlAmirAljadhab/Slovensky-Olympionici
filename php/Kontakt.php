<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/aboutyou.css">
</head>
<body>
<?php include('header.php');?>

    <div class="container">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>Kontaktujte Nás</h3>
            <input type="text" id="yourname" placeholder="Vaše Meno" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="pnumber" placeholder="Tel. Číslo" required>
            <textarea id="message" rows="4" placeholder="Ako Vám môžeme pomôcť?"></textarea>
            <button type="submit">Poslať</button>
        </form>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="../JS/js.js">
    </script>
    <footer>
        <p>DSO</p>
        <p class="end">CopyRight By Denis Lukac</p>
    </footer>
</body>
</html>