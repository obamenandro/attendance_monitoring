<div class="panel__title">
  <h3>Leave Requested</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div class="form">
      <div class="form__content">
          <div class="form__title">
            <h3>List Of Leave Requested</h3>
          </div>

          <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">ID</th>
              <th class="table__head-list">Name</th>
              <th class="table__head-list">Date Filed</th>
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($request_leaves as $leave): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= $leave['id'] ?></td>
              <td class="table__body-list"><?= ucfirst($leave['user']['firstname'])." ".ucfirst($leave['user']['lastname']) ?></td>
              <td class="table__body-list"><?= $leave['created']->i18nFormat('YYY-MM-dd'); ?></td>
              <td class="table__body-list"><?= $leave['date_start']->i18nFormat('YYY-MM-dd') ?></td>
              <td class="table__body-list"><?= $leave['date_end']->i18nFormat('YYY-MM-dd') ?></td>
              <td class="table__body-list">
                <a href="/user_leaves/approve/<?= $leave['id'] ?>" class="table__view">Approve</a>
                <a class="table__view table__view--decline" id="$leave['id']">Decline</a>
              </td>
            </tr>
            <div class="modal" id="js-modal-disapproved-<?= $leave['id']; ?>">
              <div class="modal__container">
                <div class="modal__header">
                  <div class="modal__close">
                    <span class="modal__exit">x</span>
                  </div>
                  <div class="modal__title">
                    <h3>Disapproved Leave Request</h3>
                  </div>
                </div>

                <div class="modal__content">
                  <div class="form">
                    <form>
                      <div class="form__content">
                        <div class="form__data form__data--modal">
                          <div class="form__label-wrapper">
                            <label class="form__label">Please State the Reason:</label>
                          </div>
                          <textarea class="form__input-textarea"></textarea>

                          <div class="form__leave-submit">
                            <input type="submit" value="submit" class="button button--submit">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="backdrop" id="backdrop-<?= $leave['id']; ?>"></div>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  var id = "";
  $('.table__view--decline').click(function() {
    id = $(this).attr('id');

    $('.backdrop').show();
    $('#js-modal-disapproved-'+id).css({
        top: 0
    });
  });

  $('.modal__close').click(function() {
    $('.backdrop').hide();
    $('#js-modal-disapproved').css({
        top: '-100%'
    })
  })
</script>