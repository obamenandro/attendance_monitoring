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
            <div class="panel__search-wrapper">
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
            <div class="panel__add-attendance">
              <a class="button button--add-attendance">Add Attendance</a>
            </div>
          </div>
          <table id="dataTable" class="display table" cellspacing="0" width="100%">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Logged In</th>
                <th class="table__head-list">Logged Out</th>
                <th class="table__head-list">Status</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Name</th>
                <th class="table__head-list">Date</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1001</td>
                <td class="table__body-list">9:00 AM</td>
                <td class="table__body-list">4:30 PM</td>
                <td class="table__body-list"><span class="table__note">Undertime</span></td>
                <td class="table__body-list">Math Department</td>
                <td class="table__body-list">Menandro</td>
                <td class="table__body-list">2018-01-03</td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal" id="js-modal-add">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Add Attendance</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="form">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="form__content">
            <div class="form__data form__data--modal">
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

            <div class="modal__button">
              <input type="submit" name="" class="button button--submit" value="Add">
            </div>
          </div>
        </form>
      </div>
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
    $('#js-modal-edit,#js-modal-add ').hide();
    $('body').css('overflow-y', 'scroll');
  });

  $('.button--add-attendance').on('click', function() {
    $('#js-modal-add').show();
  });
</script>