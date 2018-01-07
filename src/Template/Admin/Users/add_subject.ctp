<div class="panel__content">

  <div class="form">
    <form>
      <div class="form__content">
        <div class="form__title">
          <h3>Register Subject</h3>
        </div>
        <div class="form__data">
          <div class="form__info">
            <div class="form__list form__list--center">
              <div class="form__label-wrapper">
                <label class="form__label">Subject:</label>
              </div>
              <div class="form__input">
                <input type="text" name="" class="form__inputbox">
                <i class="form__remove">x</i>
                <span class="form__error">Error</span>
              </div>
            </div>
          </div>
          <div class="form__add-input">
            <a href="javascript:void(0)" class="button button--add">Add Subject</a>
          </div>
          
          <div class="form__button">
            <input type="submit" name="" class="button button--submit" value="Register">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $('.button--add').on('click', function() {
    $('.form__info').append('<div class="form__list form__list--center"><div class="form__label-wrapper"><label class="form__label">Subject:</label></div><div class="form__input"><input type="text" name="" class="form__inputbox"><i class="form__remove">x</i><span class="form__error">Error</span></div></div>');
  });

  $('html').delegate('.form__remove','click', function() {
    $(this).parent().parent().remove();
  })
</script>