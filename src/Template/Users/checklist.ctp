<div class="user-panel__field">

  <div class="form-edit-info">

    <div class="user-panel__title view-info__title">
      <h2>REQUIREMENTS CHECKLIST</h2>
    </div>
    <div class="user-panel__form">
      <div class="user-panel__note">
        <p class="user-panel__note-content">Please submit to HR Department the following requirements:</p>
        <p class="user-panel__note-content">(checked requirements are already submitted)</p>
      </div>
      <div class="checklist">
        <ul>
          <?php for($i=1;$i<=8;$i++): ?>
            <li class="checklist__list">
              <div class="checklist__box">
                <input type="checkbox" class="checklist__input" value="<?= $i; ?>" <?= isset($user_checklist[$i]) ? 'checked' : '' ?> disabled>
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
                  <input type="checkbox" class="checklist__input" value="<?= $i; ?>" <?= isset($user_checklist[$i]) ? 'checked' : '' ?> disabled >
                  <label class="checklist__label"><?= $checklists[$i]; ?></label>
                </div>
              </li>
            <?php endfor; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>