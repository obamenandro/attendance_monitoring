<div class="panel__title">
  <h3>Employee Detail</h3>
</div>


<div class="panel__container">
  <?= $this->element('Flash/success') ?>
  <?= $this->element('Flash/error') ?>

  <div class="panel__content">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>Employee Information</h3>
        </div>

        <div class="view-info__image">
          <img src="/img/upload/laptop-bottom.png" alt="image" class="view-info__image-wrapper"/>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Full Name: </label>
          <span class="view-info__info"> - Mr. Menandro Oba san</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Birthday: </label>
          <span class="view-info__info"> - 11-01-1967</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Address: </label>
          <span class="view-info__info"> - blk:2 lot1 sus maryosep</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Contact Number: </label>
          <span class="view-info__info"> - 639776270945</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Email Address: </label>
          <span class="view-info__info"> - MenandroOba@yahoo.com</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Place of Birth: </label>
          <span class="view-info__info"> - Sa Manila</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Citizenship: </label>
          <span class="view-info__info"> - Indian</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Civil Status: </label>
          <span class="view-info__info"> - Married</span>
        </div>

        <div class="view-info__title">
          <h3>Government ID</h3>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> GSIS/SSS Number: </label>
          <span class="view-info__info"> - 32131283129</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> TIN Number: </label>
          <span class="view-info__info"> - 930123</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Philhealth Number: </label>
          <span class="view-info__info"> - 3218931923</span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Pagibig Number: </label>
          <span class="view-info__info"> - 19-2039-12</span>
        </div>
      </div>
    </div>

    <div class="form">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form__content">
          <div class="form__title">
            <h3>Employee Attendance</h3>
          </div>

          <div class="panel__search">
            <div class="panel__search-box">
              <label class="panel__search-label">ID:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Name:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Status:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>

          <div class="table">
            <ul class="table__head">
              <li class="table__head-list">Id</li>
              <li class="table__head-list">Logged in</li>
              <li class="table__head-list">Logged out</li>
              <li class="table__head-list">Status</li>
              <li class="table__head-list">Department</li>
              <li class="table__head-list">Name</li>
              <li class="table__head-list">Date</li>
              <li class="table__head-list"></li>
              <li class="table__head-list"></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1001</li>
              <li class="table__body-list">9:00 AM</li>
              <li class="table__body-list">4:30 PM</li>
              <li class="table__body-list"><span class="table__note">Undertime</span></li>
              <li class="table__body-list">Math Department</li>
              <li class="table__body-list">Menandro</li>
              <li class="table__body-list">2018-01-03</li>
              <li class="table__body-list"><a href="#" class="table__view">View</a></li>
              <li class="table__body-list"><a class="table__view js-table-edit">Edit</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1001</li>
              <li class="table__body-list">9:00 AM</li>
              <li class="table__body-list">4:30 PM</li>
              <li class="table__body-list"><span class="table__note">Undertime</span></li>
              <li class="table__body-list">Math Department</li>
              <li class="table__body-list">Menandro</li>
              <li class="table__body-list">2018-01-03</li>
              <li class="table__body-list"><a href="#" class="table__view">View</a></li>
              <li class="table__body-list"><a class="table__view js-table-edit">Edit</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1001</li>
              <li class="table__body-list">9:00 AM</li>
              <li class="table__body-list">4:30 PM</li>
              <li class="table__body-list"><span class="table__note">Undertime</span></li>
              <li class="table__body-list">Math Department</li>
              <li class="table__body-list">Menandro</li>
              <li class="table__body-list">2018-01-03</li>
              <li class="table__body-list"><a href="#" class="table__view">View</a></li>
              <li class="table__body-list"><a class="table__view js-table-edit">Edit</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1001</li>
              <li class="table__body-list">9:00 AM</li>
              <li class="table__body-list">4:30 PM</li>
              <li class="table__body-list"><span>Completed</span></li>
              <li class="table__body-list">Math Department</li>
              <li class="table__body-list">Menandro</li>
              <li class="table__body-list">2018-01-03</li>
              <li class="table__body-list"><a href="#" class="table__view">View</a></li>
              <li class="table__body-list"><a class="table__view js-table-edit">Edit</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1001</li>
              <li class="table__body-list">9:00 AM</li>
              <li class="table__body-list">4:30 PM</li>
              <li class="table__body-list"><span class="table__note">Half Time</span></li>
              <li class="table__body-list">Math Department</li>
              <li class="table__body-list">Menandro</li>
              <li class="table__body-list">2018-01-03</li>
              <li class="table__body-list"><a href="#" class="table__view">View</a></li>
              <li class="table__body-list"><a class="table__view js-table-edit">Edit</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1001</li>
              <li class="table__body-list">9:00 AM</li>
              <li class="table__body-list">4:30 PM</li>
              <li class="table__body-list"><span>Completed</span></li>
              <li class="table__body-list">Math Department</li>
              <li class="table__body-list">Menandro</li>
              <li class="table__body-list">2018-01-03</li>
              <li class="table__body-list"><a href="#" class="table__view">View</a></li>
              <li class="table__body-list"><a class="table__view js-table-edit">Edit</a></li>
            </ul>
          </div>

        </div>
      </form>
    </div>
    <div class="pagination">
      <ul>
        <li class="pagination__list">
          <a href="" class="pagination__link"><<</a>
        </li>
        <li class="pagination__list">
          <a href="" class="pagination__link">1</a>
        </li>
        <li class="pagination__list">
          <a href="" class="pagination__link">2</a>
        </li>
        <li class="pagination__list">
          <a href="" class="pagination__link">3</a>
        </li>
        <li class="pagination__list">
          <a href="" class="pagination__link">>></a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="modal" id="js-modal-edit">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Edit Attendance</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="form">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="form__content">
            <div class="form__data form__data--modal">
              <div class="form__info">
                <div class="form__list">
                  <div class="form__label-wrapper">
                    <label class="form__label">ID:</label>
                  </div>
                  <div class="form__input">
                    <input type="text" name="" class="form__inputbox" value="1001" disabled="true">
                  </div>
                </div>
              </div>
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

              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Logged In:</label>
                </div>
                <div class="form__input form__input--fullwidth">
                  <input type="text" name="" class="form__inputbox" placeholder="hh:mm">
                  <span class="form__error">Error</span>
                </div>
              </div>

              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Logged Out:</label>
                </div>
                <div class="form__input form__input--fullwidth">
                  <input type="text" name="" class="form__inputbox" placeholder="hh:mm">
                  <span class="form__error">Error</span>
                </div>
              </div>

              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Status:</label>
                </div>
                <div class="form__input form__input--fullwidth">
                    <select class="form__inputbox">
                      <option selected>-- Select --</option>
                      <option>Undertime</option>
                      <option>Completed</option>
                      <option>Halfday</option>
                    </select>
                    <span class="form__error">Error</span>
                  </div>
              </div>

              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Department:</label>
                </div>
                <div class="form__input form__input--fullwidth">
                  <input type="text" name="" class="form__inputbox">
                  <span class="form__error">Error</span>
                </div>
              </div>

              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Date:</label>
                </div>
                <div class="form__input form__input--fullwidth">
                  <input type="text" name="" class="form__inputbox" placeholder="YYYY-MM-DD">
                  <span class="form__error">Error</span>
                </div>
              </div>              

            <div class="modal__button">
              <input type="submit" name="" class="button button--submit" value="Update">
            </div>
          </div>
        </form>
      </div>
    </div>  
  </div>
</div>

<script type="text/javascript">
  $('.js-table-edit').on('click', function() {
    $('#js-modal-edit').show();
    $('body').css('overflow-y', 'hidden');
  });

  $('.modal__exit').on('click', function() {
    $('#js-modal-edit').hide();
    $('body').css('overflow-y', 'scroll');
  })
</script>