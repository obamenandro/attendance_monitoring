<div class="panel__title">
  <h3>Subject List</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div class="form">
      <form>
        <div class="form__content">
          <div class="panel__search panel__search--list-view">
            <div class="panel__search-box">
              <label class="panel__search-label">Subject:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>
          <table id="dataTable" class="display table table--view-list" cellspacing="0" width="100%">
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
                <td class="table__body-list"><a href="#" class="table__view">Delete</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#subjectTable').dataTable();
  });
</script>