<div class="user-panel__field">
  <div class="form-edit-info">
    <?= $this->Flash->render(); ?>
    <?= $this->Form->create($leave, ['type' => 'POST']); ?>
      <div class="form-edit-info__title view-info__title">
        <h2>LEAVE APPLICATION</h2>
      </div>
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
</script>
