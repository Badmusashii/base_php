<!-- header.php -->
<header>
    <div class="logo">
        <img src="logo.png" alt="MonSite">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">À propos</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<p>Bonjour, " . htmlspecialchars($_SESSION['username']) . "!</p>";
    }
    ?>
</header>