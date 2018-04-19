<div class="panel__title">
  <h3>Subject List</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render() ?>    
  <div class="panel__content">
    <div>
      <div class="form__content">
        <div class="panel__search panel__search--list-view">
          <form action="/admin/subjects" method="GET">
            <div class="panel__search-box">
              <label class="panel__search-label">Subject:</label>
              <input type="text" name="name" class="panel__search-input" value="<?= isset($_GET['name']) ? $_GET['name'] : ""?>">
            </div>
            <div class="panel__search-box">
              <input type="submit" class="panel__search-button" value="search">
            </div>
          </form>
        </div>
        <table id="dataTable" class="display table table--view-list">
           <thead>
            <tr class="table__head">
              <th class="table__head-list">ID</th>
              <th class="table__head-list">Subject</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($subjects as $subject): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= $subject->id ?></td>
              <td class="table__body-list"><?= $subject->name ?></td>
              <td class="table__body-list"><a href="javascript:void(0);" onclick="deleteSubject(<?= $subject->id ?>)" class="table__view table__view--delete">Delete</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#subjectTable').dataTable();
  });
  function deleteSubject (id) {
    if (confirm("Do you want to delete this subject?")) {
      window.location.href = "/admin/subjects/delete/"+id;
    }
  }
</script>