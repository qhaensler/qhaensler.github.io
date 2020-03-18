<?php 

$age = null;

if (!empty($_POST['age'])) {
    setcookie('age', $_POST['age']);
    $_COOKIE['age'] = $_POST['age'];
}

if (!empty($_COOKIE['age'])) {
    $age = $_COOKIE['age'];
}

?>

<?php if (!empty($age) && $age >= 18): ?>
    <!-- Si l'age n'est supérieur ou égal à 18 -->
    <p>Bienvenue sur le site</p>
<?php elseif (!empty($age) && $age < 18): ?>
    <!-- Si l'age n'est inférieur à 18 -->
    <p>Vous n'avez pas l'age requis pour voir le site</p>
<?php else: ?>
    <!-- Si l'age n'est pas défini -->
    <form action="" method="POST">
        <label for="age">Pour rentrer sur le site vous devez être majeur.<br>Quelle est votre age ?</label>
        <input name="age" type="number">
        <button type="submit">Envoyer</button>
    </form>
<?php endif; ?>