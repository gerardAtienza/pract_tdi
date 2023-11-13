<ul>
    <?php foreach ($productes as $producte): ?>
    <li>
        <h3><?php echo $producte['nom'] ?> </h3>
        <p><?php echo $producte['descripcio'] ?> </p>
    </li>
    <?php endforeach; ?>
</ul>