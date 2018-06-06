<div class="panel__title">
  <h3>CHECKLIST</h3>
</div>

<div class="panel__container">
<?= $this->Flash->render(); ?>
<div class="panel__content">
  <div>
    <?=
      $this->Form->create('', [
        'type'    => 'POST'
      ]);
    ?>
      <div class="form__content">
        <ul class="form__breadcrumb">
          <li class="form__breadcrumb-item">
            <a href="/admin/users/add" class="form__breadcrumb-link">
              <span>Add Employee</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a href="/admin/users/add_personal" class="form__breadcrumb-link">
              <span>Personal Data</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a href="/admin/users/add_educational" class="form__breadcrumb-link">
              <span>Educational Attainment</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a href="/admin/users/add_checklist" class="form__breadcrumb-link">
              <span>Checklist</span>
            </a>
          </li>
        </ul>

        <div class="form">
          <div class="user-panel__note">
            <p class="user-panel__note-content">Please check the requirements that already pass to HR Department:</p>
          </div>
          <div class="checklist">
            <ul>
              <?php for($i=1;$i<=8;$i++): ?>
                <li class="checklist__list">
                  <div class="checklist__box">
                    <input type="checkbox" name="Requirement[requirement_id][]" class="checklist__input" value="<?= $i; ?>">
                    <label class="checklist__label"><?= $checklists[$i]; ?></label>
                  </div>
                </li>
              <?php endfor; ?>
            </ul>

            <div class="checklist__for-technical">
              <span class="checklist__for-technical-title">For Technical Instructors Only:</span>
              <ul>
                <?php for($i=9;$i<=11;$i++): ?>
                  <li class="checklist__list">
                    <div class="checklist__box">
                      <input type="checkbox" name="Requirement[requirement_id][]" class="checklist__input" value="<?= $i; ?>">
                      <label class="checklist__label"><?= $checklists[$i]; ?></label>
                    </div>
                  </li>
                <?php endfor; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="form__button">
          <a class="button button--back">Back</a>
          <input type="submit" class="button button--submit" value="NEXT">
        </div>
    <?= $this->Form->end(); ?>
  </div>
</div>
</div>
<script type="text/javascript">
    $('.button--back').click(function() {
        window.history.back()
    })
</script>
