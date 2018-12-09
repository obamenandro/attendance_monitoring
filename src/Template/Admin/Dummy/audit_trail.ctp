<div class="panel__title">
  <h3>Audit Trail</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <div class="form__content">
        <form method="GET">
          <div class="panel__search">
            <div class="panel__search-box">
              <label class="panel__search-label">ID:</label>
              <input type="text" name="user_id" class="panel__search-input" value="<?= !empty($_GET['user_id']) ? $_GET['user_id'] : '' ?>">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Name:</label>
              <input type="text" name="firstname" class="panel__search-input" value="<?= !empty($_GET['firstname']) ? $_GET['firstname'] : '' ?>">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Designation:</label>
              <select class="panel__search-input" name="designation_id">
                <option value="">--</option>
                <option value="1" <?= !empty($_GET['designation_id']) && $_GET['designation_id'] == 1 ? 'selected' : '' ?>>Teaching</option>
                <option value="2" <?= !empty($_GET['designation_id']) && $_GET['designation_id'] == 2 ? 'selected' : '' ?>>Non Teaching</option>
              </select>
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>
          </form>

          <table id="dataTable" class="display table table--list-employee" style="width: 100%">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Last Name, First Name</th>
                <th class="table__head-list">Position</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Designation</th>
                <th class="table__head-list">Date Hired</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user): ?>
                <tr class="table__body">
                  <td class="table__body-list"><?= $user['id'] ?></td>
                  <td class="table__body-list"><?= $user['firstname']." ".$user['lastname'] ?></td>
                  <td class="table__body-list"><?= $user['position'] ?></td>
                  <td class="table__body-list"><?= isset($departments[$user['department']]) ?
                  $departments[$user['department']] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list"><?= isset($designation[$user['designation']]) ?
                  $designation[$user['designation']] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list"><?= !empty($user['date_hired']) ? $user['date_hired'] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list">
                    <a href="/admin/users/view/<?= $user['id'] ?>" class="table__view">View</a>
                    <a href="/admin/users/edit/<?= $user['id'] ?>" class="table__view table__view--edit">Edit</a>
                    <a class="table__view table__view--delete delete" data-id="<?= $user['id'] ?>">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

<script>

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: true,
    columnDefs: [
        { targets: 0, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false},
        { targets: 4, orderable: false},
        { targets: 5, orderable: false},
        { targets: 6, orderable: false}
    ],
    bLengthChange: false,
  });

</script>
