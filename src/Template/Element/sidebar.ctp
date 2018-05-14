<aside class="sidebar">
  <nav class="sidebar__menu">
    <ul>
      <li class="sidebar__list">
        <a href="#" class="sidebar__item sidebar__item--active">
          <i class="fa fa-home sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Home</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-users sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Employee</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="/admin/users/add" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Add Employee</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Employee List</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-bed sidebar__icon" aria-hidden="true"></i>
          <span>Leave</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="/admin/user_leaves" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">List Requested</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-file-text sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Generate Reports</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="/admin/users/master_201" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">Master 201 File</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/faculty_profile" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">Faculty Profile</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/employment_record" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">Employment Record</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/training_log" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">Training/Seminar</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/faculty_profile_license" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">Faculty Profile on Licenses</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/faculty_profile_training" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">Faculty Profile 6.09, 3.12  and 6.10 Trainings (based on the checklist)</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/list_employee" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">List of Employees</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/users/resigned_employee" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text sidebar__text--reports">List of Resigned Employees</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</aside>

<script type="text/javascript">
  $('.sidebar__item--js').on('click', function() {
    $(this).next().slideToggle();
    $(this).toggleClass('sidebar__js');
    $('.sidebar__item--js').find('.sidebar__icon-right').removeClass('fa-chevron-down').addClass('fa-chevron-right');
    $('.sidebar__js').find('.sidebar__icon-right').removeClass('fa-chevron-right').addClass('fa-chevron-down')
  });
</script>