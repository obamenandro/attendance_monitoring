<div class="panel__title">
  <h3>Leave Requested</h3>
</div>
<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
          <div class="form__title">
            <h3>List Of Leave Requested</h3>
          </div>

          <?= $this->Flash->render(); ?>
          <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Date Filed</th>
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Reason for Leave</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($request_leaves as $leave): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= ucfirst($leave['user']['firstname'])." ".ucfirst($leave['user']['lastname']) ?></td>
              <td class="table__body-list"><?= $leave['created']->i18nFormat('YYY-MM-dd'); ?></td>
              <td class="table__body-list"><?= $leave['date_start']->i18nFormat('YYY-MM-dd') ?></td>
              <td class="table__body-list"><?= $leave['date_end']->i18nFormat('YYY-MM-dd') ?></td>
              <td class="table__body-list">wala lang bakit</td>
              <td class="table__body-list">
                <!-- <a href="/admin/UserLeaves/leaveApprove/<?= $leave['id'] ?>" class="table__view">Approve</a> -->
                <a class="table__view js-button-approve">Approve</a>
                <a class="table__view table__view--decline" id="<?= $leave['id']; ?>">Decline</a>
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
                    <?= 
                      $this->Form->create('', [
                      'type' => 'POST',
                      'url'  => '/admin/UserLeaves/leaveDecline'
                      ]); 
                    ?>
                      <div class="form__content">
                        <div class="form__data form__data--modal">
                          <div class="form__label-wrapper">
                            <label class="form__label">Please State the Reason:</label>
                          </div>
                          <?= 
                            $this->Form->input('cancel_reason', [
                              'type'     => 'textarea',
                              'class'    => "form__input-textarea",
                              'div'      => false,
                              'required' => false
                            ]);
                          ?>
                          <?= 
                            $this->Form->input('status', [
                              'type'  => 'hidden',
                              'value' => 2
                            ]);
                          ?>
                          <?= 
                            $this->Form->input('id', [
                              'type'  => 'hidden',
                              'value' => $leave['id']
                            ]);
                          ?>
                          <!-- <textarea class="form__input-textarea"></textarea> -->

                          <div class="form__leave-submit">
                            <input type="submit" value="submit" class="button button--submit">
                          </div>
                        </div>
                      </div>
                    <?= $this->Form->end(); ?>
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

<div class="modal" id="js-modal-confirm" style="display: inline-block;">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Confirmation</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="modal__content-text">
       <span>Are you sure you want to approved?</span>
      </div>
      <div class="modal__button">
        <a class="button button--back">Close</a>
        <a href="/admin/UserLeaves/leaveApprove/<?= $leave['id'] ?>" class="button button--submit">Confirm</a>
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

  $('.js-button-approve').click(function() {
    $('.backdrop').show();
    $('#js-modal-confirm').css({
        top: 0
    });
  })

  $('.modal__close, .button--back').click(function() {
    $('.backdrop').hide();
    $('#js-modal-confirm').css({
      top: '-100%'
    })
    $('#js-modal-disapproved-'+id).css({
        top: '-100%'
    })
  })

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: true,
    columnDefs: [
        { targets: 1, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false},
        { targets: 4, orderable: false},
        { targets: 5, orderable: false}
    ],
    bLengthChange: false,
  });
</script>