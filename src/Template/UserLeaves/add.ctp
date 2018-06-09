<div class="user-panel__field">
  <div class="form-edit-info">
    <?= $this->Flash->render(); ?>
    <?= $this->Form->create($userLeave, ['type' => 'POST']); ?>
      <div class="form-edit-info__title view-info__title">
        <h2>LEAVE APPLICATION</h2>
      </div>

      <ul class="form-edit-info__leave-list">
        <li class="form-edit-info__leave-item">
          <span class="form-edit-info__leave-number"><?= $used_leave; ?></span>
          <span>Used Leave</span>
        </li>
        <li class="form-edit-info__leave-item">
          <span class="form-edit-info__leave-number"><?= $user['total_leave'] - $used_leave; ?></span>
          <span>Remaining Leave</span>
        </li>
        <li class="form-edit-info__leave-item">
         <span class="form-edit-info__leave-number"><?= $user['total_leave'] ?></span>
          <span>Leave Total</span>
        </li>
      </ul>

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
            $this->Form->input('leave_reason', [
              'type'     => 'textarea',
              'class'    => 'form-edit-info__textarea',
              'label'    => false,
              'required' => false,
              'div'      => false
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

<script>
  $('.js-datepicker-from, .js-datepicker-to').datepicker({
    format: 'yyyy-mm-dd',
    startDate: "today"
  }).attr('readonly','readonly')
</script>
