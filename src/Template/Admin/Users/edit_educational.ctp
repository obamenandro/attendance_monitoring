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
    </ul>

      <div class="form">
      <div class="form__user-title">
        <span>DOCTORATE</span>
      </div>
      <div class="js-wrapper-append">
        <div class="js-wrapper-doctorate">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
              <span class="form__error">Please fill up name of school</span>
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
              <span class="form__error">Please fill up Degree/Course</span>
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
              <span class="form__error">Please fill up Units Earned</span>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn ">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                 <input type="text" class="form__inputbox form__year-graduated">
              </div>
              <span class="form__error">Please fill up Year Graduated</span>
            </div>
          </div>
        </div>
      </div>
      <div class="form__list-addform">
        <a class="button button--addform button--doctorate">Add</a>
      </div>
    </div>

    <div class="form">
      <div class="form__user-title">
        <span>Masters</span>
      </div>
      <div class="js-wrapper-append js-wrapper-masters">
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Name of School:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox">
            </div>
            <span class="form__error">Please fill up name of school</span>
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
            <span class="form__error">Please fill up Degree/Course</span>
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
            <span class="form__error">Please fill up units earned</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox form__year-graduated">
            </div>
            <span class="form__error">Please fill up year graduated</span>
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
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up name of school</span>
          </div>
        </div>
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Degree/Course:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up Degree/Course</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required form__year-graduated">
            </div>
            <span class="form__error form__error-required">Please fill up year graduated</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up highest year level attained</span>
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
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up name of school</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required form__year-graduated">
            </div>
            <span class="form__error form__error-required">Please fill up year graduated</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up highest year level attained</span>
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
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up name of school</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required form__year-graduated">
            </div>
            <span class="form__error form__error-required">Please fill up year graduated</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Highest Yr/Level Attained:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required form__year-graduated">
            </div>
            <span class="form__error form__error-required">Please fill up highest year level attained</span>
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
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up name of exam</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">License No.:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up license no.</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Valid Until:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required js-datepicker-to">
            </div>
            <span class="form__error form__error-required">Please fill up validity</span>
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
              <input type="text" class="form__inputbox required js-datepicker-from">
            </div>
            <span class="form__error form__error-required">Please fill up year from</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">To (mm/dd/yyyy):</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <input type="text" class="form__inputbox required js-datepicker-to">
            </div>
            <span class="form__error form__error-required">Please fill up date</span>
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
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up position</span>
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
              <input type="text" class="form__inputbox required">
            </div>
            <span class="form__error form__error-required">Please fill up company name</span>
          </div>
        </div>
      </div>
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
padding: 7px 0 5px;
}
</style>

<script type="text/javascript">

  $('html').delegate('.form__year-graduated','click',function() {
    $(this).datepicker({
      format: 'yyyy',
      minViewMode: "years",
      viewMode: "years",
      endDate: "today"
    })
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

  $('.button--addform').on('click', function( e ) {
    var empty = $(this).parent().parent().find('input').filter(function() {
      return this.value === "";
    })

    if ( empty.length ) {
        e.preventDefault();
        $(this).parent().parent().find('.form__error').css('display','inline-block');
    } else {
      var a = $(this).parent().prev().html();
      $(a).insertAfter($(this).parent().parent().find('.js-wrapper-append')) 
      $(this).parent().parent().find('.js-wrapper-append .form__error').hide();
    }
  })

  $('.button--submit').click(function( e ) {
    var empty = $('.js-wrapper-doctorate').find('input').filter(function() {
      return this.value === "" && this.value === "0";
    });

    if ( empty.length) {
      e.preventDefault();
      $('.js-wrapper-doctorate').find('.form__error').show();   
    } else {
      $('.js-wrapper-doctorate').find('.form__error').hide();
    }

    var empty1 = $('.js-wrapper-masters').find('input').filter(function() {
      return this.value !== "";
    });

    if ( empty1.length > 0) {
        e.preventDefault();
        $('.js-wrapper-masters').find('.form__error').show();
    } else {
      $('.js-wrapper-masters').find('.form__error').hide(); 
    }
    
    $('.required').each(function(i , el) {
      var data = $(el).val();
      var len = data.length;
      if ( len < 1 ) {
        $(el).parent().parent().next().css('display','inline-block');
        e.preventDefault();
      } else {
        $(el).parent().parent().next().css('display','none');
      }
    })
  })
</script>
