<div class="panel__title">
  <h3>Employee List</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form__content">
          <div class="panel__search">
            <div class="panel__search-box">
              <label class="panel__search-label">ID:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Name:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Status:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>

          <table id="dataTable" class="display table" style="width: 100%">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Name</th>
                <th class="table__head-list">Position</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Status</th>
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
                  <td class="table__body-list"><?= isset($civil_status[$user['civil_status']]) ? 
                  $civil_status[$user['civil_status']] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list"><?= isset($designation[$user['designation']]) ? 
                  $designation[$user['designation']] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list"><?= !empty($user['date_hired']) ? $user['date_hired'] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list">
                    <a href="/admin/users/view/<?= $user['id'] ?>" class="table__view">View</a>
                    <a href="/admin/users/edit/<?= $user['id'] ?>" class="table__view table__view--edit">Edit</a>
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
