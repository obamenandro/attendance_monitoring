<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>EDIT TRAININGS AND SEMINARS</h3>
        </div>
        <?= $this->Flash->render() ?>
        <?= $this->Form->create($seminar, ['type' => 'POST']); ?>
        <div class="form__content">
          <div class="form__list form__list--seminars">
            <label class="form__label">Trainings/Seminars attended</label>
            <?= $this->Form->control('attended', [
                'type'     => 'text',
                'div'      => false,
                'label'    => false,
                'required' => false,
                'class'    => 'form__inputbox'
              ]) 
            ?>
            <span class="form__error"><?= $this->Form->error('attended'); ?></span>
          </div>

          <div class="form__list form__list--seminars">
            <label class="form__label">Conducted by/at</label>
            <?= $this->Form->control('conducted_by', [
                'type'     => 'text',
                'div'      => false,
                'label'    => false,
                'required' => false,
                'class'    => 'form__inputbox'
              ]) 
            ?>
            <span class="form__error"><?= $this->Form->error('conducted_by'); ?></span>
            </div>

            <div class="form__list form__list--seminars">
                <label class="form__label">Date</label>
                <div class="form__input-wrapper">
                  <?= $this->Form->control('date', [
                      'type'        => 'text',
                      'div'         => false,
                      'label'       => false,
                      'required'    => false,
                      'class'       => 'form__inputbox js-datepicker',
                      'placeholder' => 'yyyy-mm-dd',
                      'readonly'    => true
                    ]) 
                  ?>
                  <i class="fa fa-calendar form__icon"></i>
                  <span class="form__error"><?= $this->Form->error('date'); ?></span>
                </div>
            </div>
            <?= $this->Form->control('user_id', ['type' => 'hidden', 'value' => 21]) ?>
          <div class="modal__button">
            <input type="submit" class="button button--submit" value="Save">
          </div>
        </div>
        <?= $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>