<p>Index view</p>
<p>Name: <?= $name; ?></p>
<p>Age: <?= $age; ?></p>

<?php foreach($posts as $post) { ?>
    <h3><?= $post->title; ?></h3>
<?php } ?>