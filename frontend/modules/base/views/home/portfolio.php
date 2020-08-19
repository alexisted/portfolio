<?php
/**
 * @var $data
 */

use frontend\assets\GalleryBundle;

GalleryBundle::register($this);
?>
<section>
    <header><h1 align="center"><?= $data['name'] ?></h1></header>

    <div class="row">
        <?= $this->render('../_gallery.php',[
            'data' => $data['portfolioImages'],
        ]) ?>
    </div>
    <div class="row">
        <div class="col">
            <p class="lead mt-5"><?= $data['description'] ?></p>
            <p>Ссылка на репозиторий: <a href="<?= $data['github'] ?>" target="_blank">GitHub</a></p>
        </div>
    </div>
</section>
