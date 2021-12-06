<?php
include __DIR__ . '/../header.php';
?>
<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            foreach ($images as $image) {
            ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="/uploads/<?= $image ?>" width="100%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><?= $image ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/../footer.php';
?>