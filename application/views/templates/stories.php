<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the stories template to process data from the controller that will be passed to the stories page.
-->
<h1 class="display-4 text-center text-white my-3">Stories from ZombieHunt.</h1>
<div class="container">
<?php

foreach ($stories as $story_item): ?>

<div class="story-type-<?= $story_item['type'] ?> mb-4">
    <img src="assets/images/stars.png" class="d-inline rounded-circle py-3 mr-2" width="24px">
    <a href="#" class="title btn-link text-decoration-none" id="title-<?= $story_item['id'] ?>"><h4 class="d-inline text-white text-decoration-none my-3"><?= $story_item['title']; ?></h4></a>
    <p class="story lead text-secondary ml-5"><?= $story_item['story']; ?></p>
</div>

<?php endforeach; ?>
</div>
