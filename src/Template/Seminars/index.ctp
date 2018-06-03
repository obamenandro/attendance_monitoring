<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>TRAININGS AND SEMINARS</h3>
        </div>
        <?= $this->Flash->render() ?>
        <table id="seminar_table" class="display table" style="width: 800px; margin: 0 auto;">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Training/Seminars Attended</th>
              <th class="table__head-list">Conducted at</th>
              <th class="table__head-list">Date</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($seminar_records as $key => $record): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= $record['attended'] ?></td>
              <td class="table__body-list"><?= $record['conducted_by'] ?></td>
              <td class="table__body-list"><?= date('m-d-Y', strtotime($record['date'])) ?></td>
              <td class="table__body-list">
                <a class="table__view table__view--edit" href="/seminars/edit/<?= $record['id'] ?>">Edit</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?= $this->Form->create($seminars, ['type' => 'POST']); ?>
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
<script>
    $('.js-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        endDate: "today"
    })

    $('#seminar_table').DataTable({
      "paging":   false,
      "ordering": false,
      "info":     false,
      "searching": false
    });

    $('.table__view--edit').click(function() {
      $('.backdrop').show();
      $('#js-modal-edit').css({
          top: 0
      });
    })

    $('.modal__close').click(function() {
      $('.backdrop').hide();
      $('#js-modal-edit').css({
        top: '-100%'
      })
    })
</script>