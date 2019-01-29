<header class="header">
  <div class="header__content">
    <div class="header__company-name">
      <h1>Welcome to NAMEI Polytechnic Institute PMIS!</h1>
    </div>
    <div class="header__control">
      <a href="/admin/users/home" class="header__control-link">
        <span>Hi! <?= ucfirst($user); ?></span>
      </a>
      <a href="/systemAdmins/change_password" class="header__control-link">
        <span>Change Password</span>
      </a>
      <a href="/admin/users/logout" class="header__control-link">
        <span>Logout</span>
      </a>
    </div>
  </div>
</header>
