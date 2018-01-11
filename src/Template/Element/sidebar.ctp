<aside class="sidebar">
  <nav class="sidebar__menu">
    <ul>
      <li class="sidebar__list">
        <a href="#" class="sidebar__item">
          <i class="fa fa-home sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Home</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
      <li class="sidebar__list">
        <a href="" class="sidebar__item sidebar__item--js">
          <i class="fa fa-users sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Employee's</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="" class="sidebar__item">
              <span>Employee Registration</span>
              <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="" class="sidebar__item">
              <span>Employee List</span>
              <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-book sidebar__icon" aria-hidden="true"></i>
          <span>Subjects</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="" class="sidebar__item">
              <span>Subject Registration</span>
              <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="" class="sidebar__item">
              <span>Subject List</span>
              <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building sidebar__icon" aria-hidden="true"></i>
          <span>Departments</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="" class="sidebar__item">
              <span>Department Registration</span>
              <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="" class="sidebar__item">
              <span>Department List</span>
              <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
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
  });
</script>