<div class="modal fade" id="modalAddTodo" tabindex="-1" aria-labelledby="modalAddTodoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalAddTodoLabel">Add Todo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" name="name_task" placeholder="Input Task Name"
                            required>
                        <select class="form-select form-select-md mb-2" aria-label=".form-select-sm example"
                            name="status_task">
                            <option selected disabled="">Select Status</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Belum Selesai">Belum Selesai</option>
                        </select>
                        <select class="form-select form-select-md mb-2" aria-label=".form-select-sm example"
                            name="priority">
                            <option selected disabled="">Select Priority</option>
                            <option value="High Priority">High Priority</option>
                            <option value="Medium Priority">Medium Priority</option>
                            <option value="Low Priority">Low Priority</option>
                        </select>
                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                            class="form-control mb-2" name="date_task" placeholder="Date" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="add_post" class="btn btn-primary">Tambah Todo List</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>