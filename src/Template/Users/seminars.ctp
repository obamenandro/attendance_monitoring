<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>TRAININGS AND SEMINARS</h3>
        </div>

        <table id="dataTable" class="display table" style="width: 800px; margin: 0 auto;">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Training/Seminars Attended</th>
              <th class="table__head-list">Conducted at</th>
              <th class="table__head-list">Date</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table__body">
              <td class="table__body-list">3.12</td>
              <td class="table__body-list">daryll</td>
              <td class="table__body-list">01-20-2018</td>
              <td class="table__body-list">
                <a class="table__view table__view--edit">Edit</a>
              </td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">6.09</td>
              <td class="table__body-list">James</td>
              <td class="table__body-list">01-20-2018</td>
              <td class="table__body-list">
                <a class="table__view table__view--edit">Edit</a>
              </td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">6.10</td>
              <td class="table__body-list">Digo</td>
              <td class="table__body-list">01-20-2018</td>
              <td class="table__body-list">
                <a class="table__view table__view--edit">Edit</a>
              </td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">Tama lang to pre, diba may checklist tayo pag nakapag pasa sila ng mga yang number na yan i aadd lang natin dito, pero pag hindi technical ganito lang, text lang</td>
              <td class="table__body-list">Digo</td>
              <td class="table__body-list">01-20-2018</td>
              <td class="table__body-list">
                <a class="table__view table__view--edit">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="form__content">
          <div class="form__list form__list--seminars">
            <label class="form__label">Trainings/Seminars attended</label>
            <input class="form__inputbox" type="text">
            <span class="form__error">error</span>
          </div>

          <div class="form__list form__list--seminars">
            <label class="form__label">Conducted by/at</label>
            <input type="text" class="form__inputbox">
            <span class="form__error">error</span>
            </div>

            <div class="form__list form__list--seminars">
                <label class="form__label">Date</label>
                <div class="form__input-wrapper">
                  <input type="text" class="form__inputbox js-datepicker" placeholder="yyyy-mm-dd">
                  <i class="fa fa-calendar form__icon"></i>
                  <span class="form__error">error</span>
                </div>
            </div>

          <div class="modal__button">
            <input type="submit" name="" class="button button--submit" value="Save">
          </div>
        </div>
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
        <h3>EDIT TRAININGS AND SEMINARS</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="form">
        <div class="form__content">
          <div class="form__data form__data--modal">
            <div class="form__list form__list--seminars">
              <label class="form__label">Trainings/Seminars attended</label>
              <input class="form__inputbox" type="text">
              <span class="form__error">error</span>
            </div>

            <div class="form__list form__list--seminars">
              <label class="form__label">Conducted by/at</label>
              <input type="text" class="form__inputbox">
              <span class="form__error">error</span>
            </div>

            <div class="form__list form__list--seminars">
              <label class="form__label">Date</label>
              <div class="form__input-wrapper">
                <input type="text" class="form__inputbox js-datepicker" placeholder="yyyy-mm-dd">
                <i class="fa fa-calendar form__icon"></i>
                <span class="form__error">error</span>
              </div>
            </div>
            <div class="modal__button">
              <input type="submit" value="submit" class="button button--submit">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="backdrop" id="backdrop-<?= $leave['id']; ?>"></div>
<script>
    $('.js-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        endDate: "today"
    })

    $('#dataTable').DataTable({
      "paging":   false,
      "ordering": false,
      "info":     false,
      "searching": false
    });

    $('.table__view--edit').click(function() {
      $('.backdrop').show();
      $('#js-modal-edit').css({
          top: 0
      });
    })

    $('.modal__close').click(function() {
      $('.backdrop').hide();
      $('#js-modal-edit').css({
        top: '-100%'
      })
    })
</script>