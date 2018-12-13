<aside class="sidebar">
<nav class="sidebar__menu">
  <ul>
    <li class="sidebar__list">
      <a href="/systemAdmins/statistics" class="sidebar__item sidebar__item--active">
        <i class="fa fa-dashboard sidebar__icon" aria-hidden="true"></i>
        <span class="sidebar__link-text">Statistics</span>
      </a>
    </li>
    <li class="sidebar__list">
      <a href="/systemAdmins/lists" class="sidebar__item sidebar__item--js">
        <i class="fa fa-users sidebar__icon" aria-hidden="true"></i>
        <span class="sidebar__link-text">Users</span>
      </a>
    </li>
    <li class="sidebar__list">
      <a href="" class="sidebar__item sidebar__item--js">
        <i class="fa fa-building sidebar__icon" aria-hidden="true"></i>
        <span>Audit Trail</span>
      </a>
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
