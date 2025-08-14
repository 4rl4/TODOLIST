<div class="modal fade" id="modalEditTodo<?= $data['id_task'] ?>" tabindex="-1" aria-labelledby="modalEditTodoLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditTodoLabel">Update Todo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" name="name_task" value="<?= $data['name_task'] ?>"
                            required>
                        <input type="text" class="form-control mb-2" name="id_task" value="<?= $data['id_task'] ?>"
                            hidden required>
                        <select class="form-select form-select-md mb-2" aria-label=".form-select-sm example"
                            name="status_task">
                            <option disabled="">Select Status</option>
                            <option <?php if ($data['status_task'] == 'Selesai') { ?> selected <?php } ?> value="Selesai">
                                Selesai</option>
                            <option <?php if ($data['status_task'] == 'Belum Selesai') { ?> selected <?php } ?>
                                value="Belum Selesai">Belum Selesai</option>
                        </select>
                        <select class="form-select form-select-md mb-2" aria-label=".form-select-sm example"
                            name="priority">
                            <option disabled="">Select Priority</option>
                            <option <?php if ($data['priority'] == 'High Priority') { ?> selected <?php } ?>
                                value="High Priority">
                                High Priority</option>
                            <option <?php if ($data['priority'] == 'Medium Priority') { ?> selected <?php } ?>
                                value="Medium Priority">
                                Medium Priority</option>
                            <option <?php if ($data['priority'] == 'Low Priority') { ?> selected <?php } ?>
                                value="Low Priority">
                                Low Priority</option>
                        </select>
                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                            class="form-control mb-2" name="date_task" value="<?= $data['date_task'] ?>" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="edit_post" class="btn btn-primary">Update Todo List</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>