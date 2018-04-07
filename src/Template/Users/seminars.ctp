<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>Trainings and Seminars</h3>
        </div>

        <div class="form__content">
          <div class="form__list form__list--seminars">
            <label class="form__label">Trainings/Seminars attended</label>
            <textarea class="form__input-textarea"></textarea>
            <span class="form__error">error</span>
          </div>

          <div class="form__list form__list--seminars">
            <label class="form__label">Conducted by/at</label>
            <input type="text" class="form__inputbox">
            <span class="form__error">error</span>
            </div>

            <div class="form__list form__list--seminars">
                <label class="form__label">Date</label>
                <input type="text" class="form__inputbox js-datepicker">
                <span class="form__error">error</span>
            </div>

          <div class="modal__button">
            <input type="submit" name="" class="button button--submit" value="Save">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('.js-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        endDate: "today"
    })
</script>