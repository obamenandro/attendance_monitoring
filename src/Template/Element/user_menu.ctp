<div class="user-panel__menu">
  <ul>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-calendar user-panel__icon" aria-hidden="true"></i>
          <span>Attendance Record</span>
          <p class="user-panel__paragraph">
            you can check your daily record
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/UserLeaves/add' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/UserLeaves/add" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-bed user-panel__icon" aria-hidden="true"></i>
          <span>Leave</span>
          <p class="user-panel__paragraph">
            you can check your used and remaining leave
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/seminars' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/seminars" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-pencil-square-o user-panel__icon" aria-hidden="true"></i>
          <span>Training/Seminars</span>
          <p class="user-panel__paragraph">
            Add your Training/Seminars attended
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/change_password' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/change_password" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-cogs user-panel__icon" aria-hidden="true"></i>
          <span>Change Password</span>
          <p class="user-panel__paragraph">
            Change your password upon receiving the account
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/editInformation' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/editInformation" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-users user-panel__icon" aria-hidden="true"></i>
          <span>Edit Information</span>
          <p class="user-panel__paragraph">
            you can check your personal information on this section
          </p>
        </div>
      </a>
    </li>
  </ul>
</div>
