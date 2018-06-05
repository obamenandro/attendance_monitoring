<div class="panel__title">
  <h3>EDIT UPLOAD PICTURE</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <?=
        $this->Form->create($addForm, [
          'enctype' => 'multipart/form-data',
          'type'    => 'POST'
        ]);
      ?>
        <div class="form__content">
          <ul class="form__breadcrumb">
            <li class="form__breadcrumb-item">
              <a href="/admin/users/edit" class="form__breadcrumb-link">
                <span>Edit Employee</span>
                <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
              </a>
            </li>
            <li class="form__breadcrumb-item">
              <a href="/admin/users/edit_personal" class="form__breadcrumb-link">
                <span>Personal Data</span>
                <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
              </a>
            </li>
            <li class="form__breadcrumb-item">
              <a href="/admin/users/edit_educational" class="form__breadcrumb-link">
                <span>Educational Attainment</span>
                <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
              </a>
            </li>
            <li class="form__breadcrumb-item">
              <a href="/admin/users/edit_checklist" class="form__breadcrumb-link">
                <span>Checklist</span>
                <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
              </a>
            </li>
            <li class="form__breadcrumb-item">
              <a href="/admin/users/edit_picture" class="form__breadcrumb-link">
                <span>Upload Picture</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="form__data">
          <div class="form__list form__list--uploadimage">
            <div class="form__upload-image">
              <?php if($image['image'] == NULL): ?>
                  <img src="/img/user/default_avatar.png" alt="form-image" class="form__upload-picture">
              <?php else: ?>
                  <img src="<?= $image['image']; ?>" alt="form-image" class="form__upload-picture">
              <?php endif; ?>
            </div>
            <div class="form__list-image">
              <?=
                $this->Form->control('image', [
                  'type'  => 'file',
                  'id'    => 'input2',
                  'div'   => false,
                  'label' => false,
                  'class' => 'image-upload'
                ]);
              ?>
              <span class="form__error"><?= $this->Form->error('image'); ?></span>
            </div>
          </div>
          <div class="form__button">
            <a class="button button--back">Back</a>
            <input type="submit" class="button button--submit">
          </div>
        </div>
      </div>
      <?= $this->Form->end(); ?>
    </div>
  </div>
</div>

<div class="calendar__loading-wrapper js-loading" style="display: none">
  <div class="calendar__loading">
    <i class="fa fa-spinner fa-spin fa-pulse fa-3x fa-fw" aria-hidden="true"></i>
  </div>
</div>

<script type="text/javascript">
    $('.button--back').click(function() {
        window.history.back()
    })

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
