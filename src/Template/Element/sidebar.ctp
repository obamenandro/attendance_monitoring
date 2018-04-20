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
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Generate Reports</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-book sidebar__icon" aria-hidden="true"></i>
          <span>Subjects</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="/admin/subjects/add" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Subject Registration</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="/admin/subjects" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Subject List</span>
            </a>
          </li>
        </ul>
      </li> -->
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