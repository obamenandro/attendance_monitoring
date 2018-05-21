<div class="panel__title">
  <h3>EDUCATIONAL ATTAINMENT</h3>
</div>

<div class="panel__container">
<?= $this->Flash->render(); ?>
<div class="panel__content">
  <div>
    <?= $this->Form->create('', ['type' => 'POST']); ?>
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
                <?=
                  $this->Form->control('Doctorate.school_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Doctorate.course.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
                <!-- <input type="text" class="form__inputbox">  -->
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Units Earned:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Doctorate.units.', [
                    'type'     => 'number',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
                <!-- <input type="text" class="form__inputbox">  -->
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn ">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Doctorate.year_graduated.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
            </div>
          </div>
        </div>
        <span class="form__error">Please fill up all Doctorate Details</span>
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
               <?=
                  $this->Form->control('Master.school_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <<?=
                  $this->Form->control('Master.course.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Units Earned:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Master.units.', [
                    'type'     => 'number',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Master.year_graduated.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
            </div>
          </div>
        </div>
        <span class="form__error">Please fill up all Masteral Details</span>
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
                <?=
                  $this->Form->control('College.school_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('College.course.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
                <!-- <input type="text" class="form__inputbox">  -->
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('College.year_graduated.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
                <!-- <input type="text" class="form__inputbox">  -->
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('College.level_attained.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
              </div>
            </div>
          </div>
        </div>
        <span class="form__error form__error-required">Please fill up all Masteral Details</span>
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
                <?=
                  $this->Form->control('Secondary.school_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Secondary.year_graduated.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Secondary.level_attained.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
              </div>
            </div>
          </div>
        </div>
        <span class="form__error form__error-required">Please fill up all Secondary Details</span>
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
                <?=
                  $this->Form->control('Elementary.school_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Elementary.year_graduated.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Highest Yr/Level Attained:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Elementary.level_attained.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>
              </div>
            </div>
          </div>
        </div>
        <span class="form__error form__error-required">Please fill up all Elementary Details</span>
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
                <?=
                  $this->Form->control('Elegibility.exam_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">License No.:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Elegibility.license_no.', [
                    'type'     => 'number',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">Valid Until:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Elegibility.valid_until.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
        </div>
        <span class="form__error form__error-required">Please fill up all Eligibility Details</span>
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
                <?=
                  $this->Form->control('Work_experience.start_work.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox js-datepicker-from required'
                  ]);
                ?>  
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn">To (mm/dd/yyyy):</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Work_experience.end_work.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox js-datepicker-to required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Position Title:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Work_experience.position.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?>  
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Company:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Work_experience.company_name.', [
                    'type'     => 'text',
                    'div'      => false, 
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox required'
                  ]);
                ?> 
              </div>
            </div>
          </div>
        </div>
        <span class="form__error form__error-required">Please fill up all Working Experience Details</span>
        <div class="form__list-addform">
          <a class="button button--addform">Add</a>
        </div>
      </div>
      <div class="form__button">
        <a href="/admin/users/add_personal" class="button button--back">Back</a>
        <input type="submit" class="button button--submit" value="NEXT">
      </div>
    <?= $this->Form->end(); ?>
  </div>
</div>
</div>

<style>
.form__error {
  display: none;
}
</style>

<script type="text/javascript">
    $('.button--addform').on('click', function( e ) {
      var empty = $(this).parent().parent().find('input').filter(function() {
        return this.value === "";
      })

      if ( empty.length ) {
          e.preventDefault();
          $(this).parent().parent().find('.form__error').show();
      } else {
        var a = $(this).parent().parent().find('.js-wrapper-append').html();
        $(a).insertAfter($(this).parent().parent().find('.js-wrapper-append')) 
        $(this).parent().parent().find('.js-wrapper-append .form__error').hide();
      }
    })

    $('html').delegate('.js-datepicker-from, .js-datepicker-to', 'click', function() {
      if ($(this).hasClass('js-datepicker-from') == true ) {
        $(this).datepicker({
          endDate: "today"
        }); 
      } else {
        $(this).datepicker({
          startDate: "today"
        }); 
      }
    })

    $('.button--submit').click(function( e ) {
      $('.required').each(function(i , el) {
        var data = $(el).val();
        var len = data.length;
					if ( len < 1 ) {
						$('.form__error-required').show();
            e.preventDefault();
					}
      })
    })
</script>
