<div class="panel__title">
  <h3>Department List</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render() ?>     
  <div class="panel__content">
    <div class="form">
      <form>
        <div class="form__content">
          <div class="panel__search panel__search--list-view">
            <div class="panel__search-box">
              <label class="panel__search-label">Department:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>

          <table id="dataTable" class="display table table--view-list" cellspacing="0" width="100%">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($departments as $key => $value): ?>
              <tr class="table__body">
                <td class="table__body-list"><?= $value['id'] ?></td>
                <td class="table__body-list"><?= $value['name'] ?></td>
                <td class="table__body-list">
                  <a href="javascript:void(0);" class="table__view" onclick="deleteDepartment(<?= $value['id'] ?>)">Delete</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  function deleteDepartment (id) {
    if (confirm("Do you want to delete this department?")) {
      window.location.href = "/admin/departments/delete/"+id;
    }
  }
</script>