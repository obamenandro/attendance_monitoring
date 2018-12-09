<div class="panel__title">
  <h3>USERS LIST</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <div class="form__content">
          <table id="dataTable" class="display table table--list-employee" style="width: 100%">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">Last Name, First Name</th>
                <th class="table__head-list">Email Address</th>
                <th class="table__head-list">Designation</th>
                <th class="table__head-list">Date Hired</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr class="table__body">
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list">obamenandro@gmail.com</td>
                  <td class="table__body-list">Software Engineer</td>
                  <td class="table__body-list">2018-11-21</td>
                  <td class="table__body-list">
                    <a class="table__view table__view--edit">Edit</a>
                  </td>
                </tr>
                <tr class="table__body">
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list">obamenandro@gmail.com</td>
                  <td class="table__body-list">Software Engineer</td>
                  <td class="table__body-list">2018-11-21</td>
                  <td class="table__body-list">
                    <a class="table__view table__view--edit">Edit</a>
                  </td>
                </tr>
                <tr class="table__body">
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list">obamenandro@gmail.com</td>
                  <td class="table__body-list">Software Engineer</td>
                  <td class="table__body-list">2018-11-21</td>
                  <td class="table__body-list">
                    <a class="table__view table__view--edit">Edit</a>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

<div class="modal" id="js-modal-update" style="display: inline-block;">
  <div class="modal__container" style="height: 400px;">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Change Email And Password</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="modal__content-text" style="padding: 30px 50px 0">
       <form>
            <div class="modal__content-list">
               <label>Email Address</label>
               <input type="text" class="modal__content-input">
               <span class="modal__form-error">error</span>
            </div>
            <div class="modal__content-list">
               <label>Password</label>
               <input type="password" class="modal__content-input">
               <span class="modal__form-error">error</span>
            </div>
        </form>
      </div>

      <div class="modal__button">
        <a class="button button--back">Close</a>
        <a class="button button--submit">Update</a>
      </div>
    </div>
  </div>
</div>
<div class="backdrop"></div>

<script>

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: true,
    columnDefs: [
        { targets: 0, orderable: true},
        { targets: 1, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: true},
        { targets: 4, orderable: false},
    ],
    bLengthChange: false,
  });

  $('.table__view--edit').click(function() {
    $('.backdrop').show();
    $('#js-modal-update').css({
        top: 0
    });
  })

  $('.modal__close, .button--back').click(function() {
    $('.backdrop').hide();
    $('#js-modal-update').css({
      top: '-100%'
    })
  })
</script>
