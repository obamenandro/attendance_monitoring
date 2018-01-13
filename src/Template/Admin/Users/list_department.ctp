<div class="panel__title">
  <h3>Department List</h3>
</div>

<div class="panel__container">
  <?= $this->element('Flash/success') ?>
  <?= $this->element('Flash/error') ?>

  <div class="panel__content">
    <div class="form">
      <form>
        <div class="form__content">
          <div class="panel__search panel__search--list-view">
            <div class="panel__search-box">
              <label class="panel__search-label">Department:</label>
              <input type="text" name="" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>

          <div class="table table--view-list">
            <ul class="table__head">
              <li class="table__head-list">Id</li>
              <li class="table__head-list">Department</li>
              <li class="table__head-list">Action</li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">1</li>
              <li class="table__body-list">Justice League</li>
              <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">2</li>
              <li class="table__body-list">Justice 1</li>
              <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">3</li>
              <li class="table__body-list">Justice 2</li>
              <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">4</li>
              <li class="table__body-list">Justice 3</li>
              <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">5</li>
              <li class="table__body-list">Justice 4</li>
              <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
            </ul>

            <ul class="table__body">
              <li class="table__body-list">6</li>
              <li class="table__body-list">Justice 5</li>
              <li class="table__body-list"><a href="#" class="table__view">Delete</a></li>
            </ul>
          </div>

        </div>
      </form>

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
</div>