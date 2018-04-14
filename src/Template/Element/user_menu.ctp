<div class="user-panel__menu">
  <ul>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-calendar user-panel__icon" aria-hidden="true"></i>
          <span>Attendance Record</span>
          <p class="user-panel__paragraph">
            (Monitor your attendance record in this section)
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/UserLeaves/add' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/UserLeaves/add" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-bed user-panel__icon" aria-hidden="true"></i>
          <span>Leave Application</span>
          <p class="user-panel__paragraph">
            (Apply and check your remaining leave)
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/seminars' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/seminars" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-pencil-square-o user-panel__icon" aria-hidden="true"></i>
          <span>Trainings and Seminars</span>
          <p class="user-panel__paragraph">
            (Add your trainings and seminars attended in this section)
          </p>
        </div>
      </a>
    </li>
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/checklist' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/checklist" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-check-square-o user-panel__icon" aria-hidden="true"></i>
          <span>Requirements Checklist</span>
          <p class="user-panel__paragraph">
            (Checklist of requirements to be pass to the HR Department)
          </p>
        </div>
      </a>
    </li>
    <!-- <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/change_password' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/change_password" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-cogs user-panel__icon" aria-hidden="true"></i>
          <span>Change Password</span>
          <p class="user-panel__paragraph">
            Change your password upon receiving the account
          </p>
        </div>
      </a>
    </li> -->
    <li class="user-panel__menu-list <?= $this->Url->build(null) == '/users/edit_information' ? 'user-panel__menu-list--active' : '' ?>">
      <a href="/users/edit_information" class="user-panel__menu-link">
        <div class="user-panel__menu-text">
          <i class="fa fa-users user-panel__icon" aria-hidden="true"></i>
          <span>Profile</span>
          <p class="user-panel__paragraph">
            (Edit your personal profile in this section)
          </p>
        </div>
      </a>
    </li>
  </ul>
</div>
