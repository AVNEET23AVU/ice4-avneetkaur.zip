<?php include 'header.php'; ?>
<main>
    <h2>About Us</h2>
    <p>This is the about page.</p>
    
    <?php
    $team_members = [
        'Ankush bansal' => 'Developer',
        'JAsmine kaur' => 'Designer',
        'Kritika' => 'Project Manager',
    ];
    ?>

    <ul>
        <?php foreach ($team_members as $name => $role): ?>
            <li><?= htmlspecialchars($name); ?> - <?= htmlspecialchars($role); ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'footer.php'; ?>
