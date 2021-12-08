<div class="py-5">
    <div class="row">
        <div class="col-12">
            <form>
                <div class="form-group">
                    <label for="name">Work Name</label>
                    <input type="text"
                           class="form-control"
                           id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="start_date">Starting Date</label>
                    <input type="text"
                           class="form-control"
                           id="start_date" name="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">Ending Date</label>
                    <input type="text"
                           class="form-control"
                           id="end_date" name="end_date">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status">
                        <option>--Select Status--</option>
                        <?php foreach ($data['work_status'] as $key => $status) { ?>
                            <option value="<?= $status['id'] ?>"><?= $status['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary mb-2">Create</button>
                    <a class="btn btn-sm btn-warning mb-2"
                       href="/?controller=works&action=index">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>