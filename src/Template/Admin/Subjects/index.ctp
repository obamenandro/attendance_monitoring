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

          <div class="table table--view-list" id="subjectTable">
            <ul class="table__head">
              <li class="table__head-list">Id</li>
              <li class="table__head-list">Subject</li>
              <li class="table__head-list">Action</li>
            </ul>
            <?php foreach($subjects as $subject): ?>
              <ul class="table__body">
                <li class="table__body-list"><?= $subject->id ?></li>
                <li class="table__body-list"><?= $subject->name ?></li>
                <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
              </ul>
            <?php endforeach; ?>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#subjectTable').dataTable();
  });
</script>