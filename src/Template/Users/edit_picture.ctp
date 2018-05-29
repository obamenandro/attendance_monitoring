
<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <?= $this->Flash->render(); ?>
        <div class="view-info__title">
          <h3>PROFILE</h3>
        </div>

        <div class="user-panel__note-form-wrapper">
          <span class="user-panel__note-form">Image Upload</span>
        </div>

        <ul class="form__breadcrumb">
          <li class="form__breadcrumb-item">
            <a href="/users/edit_information" class="form__breadcrumb-link">
              <span>Personal Data</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a href="/users/edit_educational" class="form__breadcrumb-link">
              <span>Educational Attainment</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a class="form__breadcrumb-link">
              <span>Image Upload</span>
            </a>
          </li>
        </ul>

        <div class="form">
          <div class="form__data">
            <div class="form__list form__list--uploadimage">
              <div class="form__upload-image">
                <?php if($employee['image'] == NULL): ?>
                    <img src="/img/user/default_avatar.png" alt="form-image" class="form__upload-picture">
                <?php else: ?>
                    <img src="<?= $employee['image']; ?>" alt="form-image" class="form__upload-picture">
                <?php endif; ?>
                </div>
                <div class="form__list-image">
                  <?=
                      $this->Form->control('image', [
                      'type'  => 'file',
                      'id'    => 'input2',
                      'div'   => false,
                      'label' => false,
                      'class' => 'image-upload',
                      'required' => false
                      ]);
                  ?>
                  <span class="form__error"><?= $this->Form->error('image'); ?></span>
                </div>
              </div>
              <div class="form__button">
                <a href="/users/edit_educational" class="button button--back">Back</a>
                <input type="submit" class="button button--submit">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="calendar__loading-wrapper js-loading" style="display: none">
  <div class="calendar__loading">
    <i class="fa fa-spinner fa-spin fa-pulse fa-3x fa-fw" aria-hidden="true"></i>
  </div>
</div>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('.form__upload-picture').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $(".image-upload").change(function(){
      readURL(this);
  });

  $('.button--submit').on('click', function() {
    $('.js-loading').show();
  })

</script>