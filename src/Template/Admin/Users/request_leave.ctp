<div class="panel__title">
  <h3>Leave Requested</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div class="form">
      <div class="form__content">
          <div class="form__title">
            <h3>List Of Leave Requested</h3>
          </div>

          <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">ID</th>
              <th class="table__head-list">Name</th>
              <th class="table__head-list">Date Filed</th>
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table__body">
              <td class="table__body-list">1001</td>
              <td class="table__body-list">Menandro Oba</td>
              <td class="table__body-list">2018-04-03</td>
              <td class="table__body-list">2018-04-20</td>
              <td class="table__body-list">2018-04-20</td>
              <td class="table__body-list">
                <a class="table__view">Approve</a>
                <a class="table__view table__view--decline">Decline</a>
              </td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">1001</td>
              <td class="table__body-list">Menandro Oba</td>
              <td class="table__body-list">2018-04-03</td>
              <td class="table__body-list">2018-04-20</td>
              <td class="table__body-list">2018-04-20</td>
              <td class="table__body-list">
                <a class="table__view">Approve</a>
                <a class="table__view table__view--decline">Decline</a>
              </td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">1001</td>
              <td class="table__body-list">Menandro Oba</td>
              <td class="table__body-list">2018-04-03</td>
              <td class="table__body-list">2018-04-20</td>
              <td class="table__body-list">2018-04-20</td>
              <td class="table__body-list">
                <a class="table__view">Approve</a>
                <a class="table__view table__view--decline">Decline</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="js-modal-disapproved">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Disapproved Leave Request</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="form">
        <form>
          <div class="form__content">
            <div class="form__data form__data--modal">
              <div class="form__label-wrapper">
                <label class="form__label">Please State the Reason:</label>
              </div>
              <textarea class="form__input-textarea"></textarea>

              <div class="form__leave-submit">
                <input type="submit" value="submit" class="button button--submit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $('.table__view--decline').click(function() {
    $('#js-modal-disapproved').show();
  })

  $('.modal__close').click(function() {
    $('#js-modal-disapproved').hide();
  })
</script>