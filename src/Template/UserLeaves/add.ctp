<div class="user-panel__field">
  <div class="form-edit-info">
    <?= $this->Flash->render(); ?>
    <?= $this->Form->create($userLeave, ['type' => 'POST']); ?>
      <div class="form-edit-info__title view-info__title">
        <h2>LEAVE APPLICATION</h2>
      </div>

      <ul class="form-edit-info__leave-list">
        <li class="form-edit-info__leave-item">
          <span class="form-edit-info__leave-number"><?= $diff; ?></span>
          <span>Used Leave</span>
        </li>
        <li class="form-edit-info__leave-item">
          <span class="form-edit-info__leave-number"><?= $user['total_leave'] - $diff; ?></span>
          <span>Remaining Leave</span>
        </li>
        <li class="form-edit-info__leave-item">
         <span class="form-edit-info__leave-number"><?= $user['total_leave'] ?></span>
          <span>Leave Total</span>
        </li>
      </ul>

      <table id="seminar_table" class="display table" style="width: 800px; margin: 35px auto 0;">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Status</th>
              <th class="table__head-list">Reason</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($user_leave_records as $key => $value): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= date('Y-m-d', strtotime($value['date_start'])) ?></td>
              <td class="table__body-list"><?= date('Y-m-d', strtotime($value['date_end'])) ?></td>
              <td class="table__body-list">
                <?php if($value['status'] == 1): ?>
                <span class="table__body-approved">APPROVED</span>
                <?php elseif($value['status'] == 2): ?>
                <span class="table__body-disapproved">DECLINED</span>
                <?php else: ?>
                <span class="table__body-approved">PENDING</span>
                <?php endif; ?>
              </td>
              <td>
                Wala lang
              </td>
              <td class="table__body-list">
                <?php if ($value['status'] == 0): ?>
                <a href="/UserLeaves/edit/<?= $value['id'] ?>" class="table__view table__view--edit">Edit</a>
                <a class="table__view table__view--delete delete" data-id="<?= $value['id'] ?>">Delete</a>
                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      <div class="form-edit-info__wrapper">
        <div class="form-edit-info__list form-edit-info__list--leavetype">
          <div class="form-edit-info__input-wrapper">
          </div>
        </div>

        <div class="form-edit-info__list">
          <label class="form-edit-info__label"> Leave Start </label>
          <div class="form-edit-info__input-wrapper">
            <?=
              $this->Form->input('date_start', [
                'type'        => 'text',
                'class'       => 'form-edit-info__input js-datepicker-from',
                'label'       => false,
                'required'    => false,
                'div'         => false,
                'readonly'    => true,
                'placeholder' => 'yyyy-mm-dd'
              ]);
            ?>
            <i class="fa fa-calendar form-edit-info__icon"></i>
            <span class="form__error"><?= $this->Form->error('date_start') ?></span>
          </div>
        </div>

        <div class="form-edit-info__list">
          <label class="form-edit-info__label"> Leave End </label>
            <div class="form-edit-info__input-wrapper">
              <?=
                $this->Form->input('date_end', [
                  'type'        => 'text',
                  'class'       => 'form-edit-info__input js-datepicker-to',
                  'label'       => false,
                  'required'    => false,
                  'div'         => false,
                  'readonly'    => true,
                  'placeholder' => 'yyyy-mm-dd'
                ]);
              ?>
              <i class="fa fa-calendar form-edit-info__icon"></i>
              <span class="form__error"><?= $this->Form->error('date_end') ?></span>
            </div>
        </div>

        <div class="form-edit-info__list">
          <label class="form-edit-info__label"> Reason of leave </label>
           <?=
              $this->Form->control('leave_reason', [
                'options'  => $leave_reason,
                'required' => false,
                'div'      => false,
                'label'    => false,
                'empty'    => 'Leave Reason',
                'class'    => 'form__inputbox'
              ]);
            ?>
          <span class="form__error"><?= $this->Form->error('leave_reason') ?></span>
        </div>

        <div class="form-edit-info__button">
          <input type="submit" value="Request" class="button button--submit">
        </div>

      </div>
      <?= $this->Form->end(); ?>
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
       <span>Are you sure you want to Delete?</span>
      </div>
      <div class="modal__button">
        <a class="button button--back">Close</a>
        <a class="button button--delete user-delete">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="backdrop"></div>

<script>
  $('.js-datepicker-from, .js-datepicker-to').datepicker({
    format: 'yyyy-mm-dd',
    startDate: "today"
  }).attr('readonly','readonly')

  $('.table__view--delete').click(function() {
    $('.backdrop').show();
    $('#js-modal-confirm').css({
        top: 0
    });
  })

  $('.button--back, .modal__exit').click(function() {
    $('.backdrop').hide();
    $('#js-modal-confirm ').css({
      top: '-100%'
    })
  })

  var id = "";
  $('.delete').on('click', function() {
    id = $(this).data('id');
  });

  $('.user-delete').on('click', function() {
    window.location.href = '/UserLeaves/delete/'+id;
  });
</script>
