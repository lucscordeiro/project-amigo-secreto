<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">            
            <?php if (!empty($this->dataUsers)): ?>
                <ul class="list-group">
                    <?php foreach ($this->dataUsers as $user => $sortUser): ?>
                        <li class="list-group-item text-center"><?= $user ?> saiu com <?= $sortUser ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>