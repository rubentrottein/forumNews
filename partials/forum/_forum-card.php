<?php
$random = rand(60,100);
?>
<div class="col-md-4 mt-4">
    <div class="card shadow-sm h-100">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $forum['NAME']; ?></h5>
            <img src="https://picsum.photos/id/<?= $random ?>/300/200" alt="illustration" class="justify-content-center rounded m-3">
            <a href="forum.php?id=<?= $forum['ID_FORUM'] ?>" class="btn btn-primary">
                Consulter les publications
            </a>
        </div>
    </div>
</div>