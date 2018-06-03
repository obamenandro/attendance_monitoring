<div class="user-panel__menu">
  <ul>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/edit_information' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/edit_information" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-users user-panel__icon" aria-hidden="true"></i>
          <span>Profile</span>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/seminars' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/seminars" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-pencil-square-o user-panel__icon" aria-hidden="true"></i>
          <span>Trainings and Seminars</span>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/checklist' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/checklist" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-check-square-o user-panel__icon" aria-hidden="true"></i>
          <span>Requirements Checklist</span>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-calendar user-panel__icon" aria-hidden="true"></i>
          <span>Attendance Record</span>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/UserLeaves/add' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/UserLeaves/add" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-bed user-panel__icon" aria-hidden="true"></i>
          <span>Leave Application</span>
        </div>
      </a>
    </li>
  </ul>
</div>
