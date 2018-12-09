<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>TRAININGS AND SEMINARS</h3>
        </div>
        <?= $this->Flash->render() ?>
        <table id="seminar_table" class="display table" style="width: 800px; margin: 0 auto;">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Training/Seminars Attended</th>
              <th class="table__head-list">Conducted at</th>
              <th class="table__head-list">Date</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($seminar_records as $key => $record): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= $record['attended'] ?></td>
              <td class="table__body-list"><?= $record['conducted_by'] ?></td>
              <td class="table__body-list"><?= $record['date'] ?></td>
              <td class="table__body-list">
                <a class="table__view table__view--edit" href="/seminars/edit/<?= $record['id'] ?>">Edit</a>
                <a class="table__view table__view--delete delete" data-id="<?= $record['id'] ?>">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?= $this->Form->create($seminars, [
            'enctype' => 'multipart/form-data',
            'type'    => 'POST'
          ]); ?>
        <div class="form__content">
          <div class="form__list form__list--seminars">
            <label class="form__label">Trainings/Seminars attended</label>
            <?= $this->Form->control('attended', [
                'type'     => 'text',
                'div'      => false,
                'label'    => false,
                'required' => false,
                'class'    => 'form__inputbox'
              ])
            ?>
            <span class="form__error"><?= $this->Form->error('attended'); ?></span>
          </div>

          <div class="form__list form__list--seminars">
            <label class="form__label">Conducted by/at</label>
            <?= $this->Form->control('conducted_by', [
                'type'     => 'text',
                'div'      => false,
                'label'    => false,
                'required' => false,
                'class'    => 'form__inputbox'
              ])
            ?>
            <span class="form__error"><?= $this->Form->error('conducted_by'); ?></span>
            </div>

            <div class="form__list form__list--seminars">
                <label class="form__label">Date</label>
                <div class="form__input-wrapper">
                  <?= $this->Form->control('date', [
                      'type'        => 'text',
                      'div'         => false,
                      'label'       => false,
                      'required'    => false,
                      'class'       => 'form__inputbox'
                    ])
                  ?>
                  <i class="fa fa-calendar form__icon"></i>
                  <span class="form__error"><?= $this->Form->error('date'); ?></span>
                </div>
            </div>

            <div class="form__list form__list--seminars">
                <label class="form__label">Upload Certificate here:</label>
                <div class="form__input-wrapper">
                  <input type="file" name="pdf" id="fileupload" style="visibility:hidden;position:absolute">
                  <div class="form__upload-file">
                    <input type="text" class="form__inputbox form__inputbox--filename" readonly="true">
                  </div>
                  <a class="button button--browse">Browse</a>
                </div>
            </div>
          <div class="modal__button">
            <input type="submit" class="button button--submit" value="Save">
          </div>
        </div>
        <?= $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="js-modal-confirm" style="display: inline-block;">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Confirmation</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="modal__content-text">
       <span>Are you sure you want to Delete?</span>
      </div>
      <div class="modal__button">
        <a class="button button--back">Close</a>
        <a class="button button--delete user-delete">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="backdrop"></div>
<script>
    $('#seminar_table').DataTable({
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

    $('.table__view--delete').click(function() {
      $('.backdrop').show();
      $('#js-modal-confirm').css({
          top: 0
      });
    })

    $('.modal__close, .button--back, .modal__exit').click(function() {
      $('.backdrop').hide();
      $('#js-modal-edit, #js-modal-confirm ').css({
        top: '-100%'
      })
    })

  var seminar_id = "";
  $('.delete').on('click', function() {
    seminar_id = $(this).data('id');
  });

  $('.user-delete').on('click', function() {
    window.location.href = '/seminars/seminar_delete/'+seminar_id;
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.readAsDataURL(input.files[0]);
      var getFileName = input.files[0]['name'];
      var splitDocsExtensions =  getFileName.split('.').pop();
      if( splitDocsExtensions == 'pdf' || splitDocsExtensions == 'docx' ) {
        $('.form__inputbox--filename').val(input.files[0]['name']);
      }
    }
  }

  $("#fileupload").change(function(){
      readURL(this);
  });

  $('.button--browse').click(function(){
    $('#fileupload').trigger('click')
  })
</script>
