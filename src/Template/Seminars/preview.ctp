<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>Preview Added Certificate</h3>
        </div>
        <?= $this->Flash->render() ?>
        <?= $this->Form->create($seminar, ['type' => 'POST']); ?>
        <div class="form__content">
          <div class="form__list form__list--seminars">
            <label class="form__label">Trainings/Seminars attended:</label>
            <span class="form-text">1.69 seminar</span>
          </div>

          <div class="form__list form__list--seminars">
            <label class="form__label">Conducted by/at:</label>
            <span class="form-text">conducted by me</span>
          </div>

            <div class="form__list form__list--seminars">
                <label class="form__label">Date:</label>
                <span class="form-text">2018-08-12</span>
            </div>
            <div class="form__list form__list--seminars">
                <label class="form__label">Certificate Uploaded:</label>
                <span class="certificate-name">file_number_2.docx</span>
                <img src="/img/logo/logo.png" alt="certificate" class="certificate-uploaded">
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

<style>
    .form__label {
        font-weight: bold;
    }
    .form-text {
        font-size: 14px;
        display: block;
        padding: 5px 0 10px 10px;
    }
    .certificate-uploaded {
        display: block;
        width: 200px;
        height: 250px;
        object-fit: contain;
        margin: 0 auto;
    }
    .certificate-name {
        display: block;
        font-size: 14px;
        padding: 5px 0 10px 10px;
        font-style: italic;
    }
</style>