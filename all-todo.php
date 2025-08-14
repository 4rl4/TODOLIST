<div class="card border-1 border-warning shadow-lg">
  <div class="card-body">
    <h4 class="text-center">All Todolist</h4>
    <ul class="list-group">
      <?php
      $sql = "SELECT * FROM tasks";
      $result = $con->query($sql);
      while ($data = $result->fetch_array()) {
        ?>
        <li class="list-group-item border-bottom border-warning">
          <div class="row justify-content-between">
            <div class="col-md-9 text-start">
              <?php if ($data['status_task'] === 'Selesai') { ?>
                <span class="fw-bold position-relative"><?= $data['name_task'] ?>
                  <i class="position-absolute top-0 start-100 badge bg-success fa-solid fa-check" style="margin-left:10px"> </i><br>
                <?php } else { ?>
                  <span class="fw-bold position-relative"><?= $data['name_task'] ?>
                    <i class="position-absolute top-0 start-100 badge bg-danger fa-solid fa-xmark" style="margin-left:10px"> </i><br>
                  <?php } ?>
                </span>
                <span class="fw-normal span-date badge text-bg-primary">Date: <?= $data['date_task'] ?> </span> |
                <?php if ($data['priority'] === 'High Priority') { ?>
                  <span class="fw-normal span-date badge text-bg-danger"><?= $data['priority'] ?></span>
                <?php } else if ($data['priority'] === 'Medium Priority') { ?>
                    <span class="fw-normal span-date badge text-bg-warning"><?= $data['priority'] ?></span>
                <?php } else if ($data['priority'] === 'Low Priority') { ?>
                      <span class="fw-normal span-date badge text-bg-success"><?= $data['priority'] ?></span>
                <?php } ?>
            </div>
            <div class="col-md-3 text-end">
              <a class="btn btn-sm btn-warning" data-bs-toggle="modal"
                data-bs-target="#modalEditTodo<?= $data['id_task']; ?>">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
              <a href="index.php?delete=<?= $data['id_task'] ?>" onclick="return confirm('Apakah anda yakin?')"
                class="btn btn-sm btn-danger">
                <i class="fa-solid fa-trash"></i>
              </a>
              <!-- modal edit -->
              <?php include "form-edit-todo.php" ?>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</div><br><br>