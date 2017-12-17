<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=100" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <title>Attendance Monitoring</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
</head>
<body>

  <header class="header">
    <div class="header__content">
      <div class="header__logo">
        <img src="/img/logo/logo.png" alt="logo" class="header__logo-image">
      </div>
      <div class="header__control">
        <a href="#" class="header__control-link">
          <span>Setting</span>
        </a>
        <a href="#" class="header__control-link">
          <span>Logout</span>
        </a>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="main-content__bgcolor"></div>
    <div class="main-content__content">

      <aside class="sidebar">
        <div class="sidebar__title">
          <h2>MENU</h2>
        </div>
        <nav class="sidebar__menu">
          <ul>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu1</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu2</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu3</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu4</a>
            </li>
          </ul>
        </nav>
      </aside>

      <div class="panel">
        <div class="panel__content">
          <div class="panel__search">
            <div class="panel__select">
              <select class="panel__selectbox">
                <option selected="">---</option>
                <option selected="">option1</option>
              </select>
            </div>
            <div class="panel__searchbox">
              <input type="text" name="" placeholder="search" class="panel__search-input">
            </div>
          </div>

          <div class="form">
            <form>
              <div class="form__content">
                <div class="form__title">
                  <h3>Register Information</h3>
                </div>
                <div class="form__data">
                  <div class="form__info">
                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Last Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>

                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">First Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>

                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Middle Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>
                  </div>

                  <div class="form__upload">
                    <div class="form__uploadimage">
                      <img src="img/upload/laptop-bottom.png" alt="upload" class="form__image">
                      <input type="file" name="" class="form__hidden-upload">
                      <input type="submit" name="" value="upload" class="form__uploadinput">
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Birth date:</label>
                    </div>
                    <div class="form__input">
                      <input type="text" name="" class="form__inputdate" placeholder="yyyy/mm/dd">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Address:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Contact Number:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Email Address:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Place of Birth:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Citizenship:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Civil Status:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>
                 
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Government Id:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>
                </div>


                <div class="form__title">
                  <h3>IF MARRIED</h3>
                </div>
                <div class="form__data">
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Name of Spouse:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Number of Children:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>
                </div>

              <div class="form__title">
                <h3>Educational Background</h3>
              </div>
                <div class="form__data">
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Educational Attainment:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Honors and Rewards:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>

                  <div class="form__list form__list--enumerate">
                    <div class="form__label-wrapper">
                      <label class="form__label">Seminars training:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>
                </div>

              <div class="form__title">
                <h3>Working Experience</h3>
              </div>
                <div class="form__data">
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Eligibility:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>
                  
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Job Type:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Designation Id:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list form__list--enumerate">
                    <div class="form__label-wrapper">
                      <label class="form__label">Work Experience:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>

                  <div class="form__button">
                    <input type="submit" name="" class="button button--submit">
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>


</body>
</html>