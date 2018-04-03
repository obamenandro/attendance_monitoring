<?php 
  $this->layout = 'user';
?>

<div class="user-panel__field">
  <div class="form-edit-info">
    <?= $this->Form->create(); ?>
      <div class="form-edit-info__title">
        <h2>REQUEST LEAVE</h2>
      </div>

      <div class="form-edit-info__wrapper">
        <div class="form-edit-info__list">
          <label class="form-edit-info__label"> Leave Start </label>
          <?= 
            $this->Form->input('date_start', [
              'type'     => 'text',
              'class'    => 'form-edit-info__input js-datepicker-from',
              'label'    => false,
              'required' => false,
              'div'      => false
            ]);
          ?>
        </div>

        <div class="form-edit-info__list">
          <label class="form-edit-info__label"> Leave End </label>
          <?= 
            $this->Form->input('date_end', [
              'type'     => 'text',
              'class'    => 'form-edit-info__input js-datepicker-to',
              'label'    => false,
              'required' => false,
              'div'      => false
            ]);
          ?>
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
    format: 'yyyy-mm-dd'
  })
</script>
