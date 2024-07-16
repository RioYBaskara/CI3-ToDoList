<div class="card px-3">
    <div class="card-body">
        <h4 class="card-title">Hi, it's happy <?= date("l") ?>! &#x1F680; &#127881;</h4>
        <!-- <div class="add-items d-flex"> <input type="text" class="form-control todo-list-input"
                                placeholder="What do you need to do today?"> <button
                                class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button> </div>
                        <div class="list-wrapper"> -->
        <ul class="d-flex flex-column-reverse todo-list">
            <?php foreach ($datatask as $dt): ?>
                <li class="mt-3">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?= $dt['task']; ?></h5>
                        <small class="text-muted"><?= $dt['task_status']; ?></small>
                    </div>
                    <p class="mb-1"><?= $dt['description'] ?></p>
                    <small class="text-muted"><?= $dt['start_date'] ?> - <?= $dt['end_date'] ?></small>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>