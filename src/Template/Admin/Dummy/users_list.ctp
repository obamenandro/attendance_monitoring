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
              </tr>
            </thead>
            <tbody>
                <tr class="table__body">
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list js-edit">obamenandro@gmail.com</td>
                  <td class="table__body-list">Software Engineer</td>
                  <td class="table__body-list">2018-11-21</td>
                </tr>
                <tr class="table__body">
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list js-edit">obamenandro@gmail.com</td>
                  <td class="table__body-list">Software Engineer</td>
                  <td class="table__body-list">2018-11-21</td>
                </tr>
                <tr class="table__body">
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list js-edit">obamenandro@gmail.com</td>
                  <td class="table__body-list">Software Engineer</td>
                  <td class="table__body-list">2018-11-21</td>
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
<style>
  .js-edit {
    text-decoration: underline;
    cursor: pointer;
  }
</style>
<script>

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: true,
    dom: 'Bfrtip',
    autoWidth: true,
    columnDefs: [
        { targets: 0, orderable: true},
        { targets: 1, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: true},
    ],
    bLengthChange: false,
    buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'Users List',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Users List',
          customize: function (doc) {
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths = 
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');

            for (i = 1; i < rowCount; i++) {
              doc.content[1].table.body[i][0].alignment = 'center';
              doc.content[1].table.body[i][1].alignment = 'center';
              doc.content[1].table.body[i][2].alignment = 'center';
            }
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Users List',
          customize: function ( win ) {
              $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
              $(win.document.body).find('table').css('text-align','center' );
              $(win.document.body).find('h1').addClass('h1-title-report');
          }
        },
      ]
  });

  $('.js-edit').click(function() {
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
