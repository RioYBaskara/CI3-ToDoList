<div class="container-fluid content">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card px-3 custom-shadow">
                <div class="card-body">

                    <h4 class="card-title">Hi, it's happy <?= date("l") ?>! &#x1F680; &#127881;</h4>

                    <!-- <div class="add-items d-flex"> <input type="text" class="form-control todo-list-input"
                                placeholder="What do you need to do today?"> <button
                                class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button> </div>
                        <div class="list-wrapper"> -->
                    <ul class="d-flex flex-column-reverse todo-list">
                        <?php foreach ($datatask as $dt): ?>
                            <li class="mt-3 list-task">
                                <div class="d-flex w-100 justify-content-between mt-2">
                                    <h5 class="mb-1 mx-3"><?= $dt['task']; ?></h5>
                                    <small class="text-muted mx-3 mt-2">
                                        <p><?= $dt['task_status']; ?></p>
                                    </small>
                                </div>
                                <p class="mb-1 mx-3"><?= $dt['description'] ?></p>
                                <small class="text-muted">
                                    <p class="mx-3"><?= $dt['start_date'] ?> - <?= $dt['end_date'] ?></p>
                                </small>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tombol-tambah justify-content-center">
        <a href="<?= base_url(); ?>task/add" class="btn"><i class="fa fa-plus-circle fa-10x" aria-hidden="true"></i>
            <a>
    </div>
</div>