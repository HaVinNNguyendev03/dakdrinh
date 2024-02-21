<!-- <nav class="col-10 mx-auto" aria-label="Page navigation example" style="display: flex;justify-content: center;">
                    <ul class="pagination mt-5">
                        <li class="page-item" class="page-item">
                            <a class="page-link" class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item" class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <?php $pager->setSurroundCount(2) ?>
<nav class="col-10 mx-auto" aria-label="Page navigation example" style="display: flex;justify-content: center;" aria-label="Page navigation">
    <ul class="pagination  mt-5">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true"><?= lang('Pager.first') ?></span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li class="page-item" <?= $link['active'] ? 'class="active"' : '' ?>>
            <a class="page-link" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                <span aria-hidden="true"><?= lang('Pager.last') ?></span>
            </a>
        </li>
    <?php endif ?>
    </ul>   
</nav>
