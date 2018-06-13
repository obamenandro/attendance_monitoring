<div class="panel__title">
  <h3>List of Leave</h3>
</div>
<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <div class="form__title">
          <h3>Leave Record</h3>
        </div>

        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">ID</th>
              <th class="table__head-list">Name</th>
              <th class="table__head-list">Date Filed</th>
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Remaining Leave</th>
              <th class="table__head-list">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($records as $record): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= $record['id'] ?></td>
              <td class="table__body-list"><?= ucfirst($record['user']['firstname']).' '.ucfirst($record['user']['middlename']).' '.ucfirst($record['user']['lastname']) ?>
              </td>
              <td class="table__body-list"><?= $record['created']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= $record['date_start']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= $record['date_end']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list">4</td>
              <td class="table__body-list">
                <span class="table__body-<?= $record['status'] == 1 ? 'approved' : 'disapproved' ?>"><?= $record['status'] == 1 ? 'APPROVED' : 'REJECTED' ?></span>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
