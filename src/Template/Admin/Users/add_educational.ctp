<div class="panel__title">
  <h3>EDUCATIONAL ATTAINMENT</h3>
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
            </a>
          </li>
        </ul>

        <div class="form">
        <div class="form__user-title">
          <span>DOCTORATE</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Units Earned:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn ">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>

      <div class="form">
        <div class="form__user-title">
          <span>Masters</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Units Earned:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>

      <div class="form">
        <div class="form__user-title">
          <span>College</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>

      <div class="form">
        <div class="form__user-title">
          <span>Secondary</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>

      <div class="form">
        <div class="form__user-title">
          <span>Elementary</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Highest Yr/Level Attained:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>

      <div class="form">
        <div class="form__user-title">
          <span>Elegibility</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of Exam:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">License No.:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Valid Until:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>

      <div class="form">
        <div class="form__user-title">
          <span>Work Experience</span>
        </div>
        <div class="js-wrapper-append">
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">From (mm/dd/yyyy):</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">To (mm/dd/yyyy):</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Position Title:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Company:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox"> 
              </div>
            </div>
          </div>
        </div>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>
      <div class="form__button">
        <a href="/admin/users/add_educational" class="button button--back">Back</a>
        <a href="/admin/users/add_checklist" class="button button--submit">NEXT</a>
      </div>
    <?= $this->Form->end(); ?>
  </div>
</div>
</div>

<script type="text/javascript">
    $('.button--addform').on('click', function() {
    var a = $(this).parent().parent().find('.js-wrapper-append').html();
    $(a).insertAfter($(this).parent().parent().find('.js-wrapper-append'))
    })

</script>
