<div class="card border-1 border-danger shadow-lg mb-3">
  <div class="card-body">
    <h4 class="text-center">Todolist Belum Selesai</h4>
    <ul class="list-group">
      <?php
      $query = mysqli_query($con, "SELECT * FROM tasks WHERE status_task='Belum Selesai'");
      while ($row = mysqli_fetch_array($query)) {
        $id_task = $row['id_task'];
        ?>
        <li class="list-group-item border-bottom border-danger">
          <?= $row['name_task']; ?>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>