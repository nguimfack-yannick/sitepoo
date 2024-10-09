<h1>les derniers articles</h1>


<?php foreach($params['posts'] as $post): ?>
    <div class="card mb-3">
       <div class="card-body">
       <h2><?= $post->title ?></h2>
       <small><?= $post->getCreateAt()?></small>
       <p><?= $post->content ?></p>
       <a href="posts/<?= $post->id ?>" class="btn btn-primary"> Lire plus</a>
       </div>
    </div>
    <?php endforeach ?>