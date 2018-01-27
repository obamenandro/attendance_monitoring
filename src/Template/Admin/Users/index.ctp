<div class="panel__title">
  <h3>Employee List</h3>
</div>

<div class="panel__container">
  <?= $this->element('Flash/success') ?>
  <?= $this->element('Flash/error') ?>
  
  <div class="panel__content">
    <div class="form">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form__content">
          <div class="panel__search">
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

          <table id="dataTable" class="display table">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Name</th>
                <th class="table__head-list">Position</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Status</th>
                <th class="table__head-list">Designation</th>
                <th class="table__head-list">Date Hired</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
                  <a class="table__view js-table-edit">Edit</a>
                </td>
              </tr>
              <tr class="table__body">
                <td class="table__body-list">1002</td>
                <td class="table__body-list">Dave</td>
                <td class="table__body-list">Teacher</td>
                <td class="table__body-list">Department of Justice</td>
                <td class="table__body-list">Married</td>
                <td class="table__body-list">Sample</td>
                <td class="table__body-list">2018-01-02</td>
                <td class="table__body-list">
                  <a href="#" class="table__view">View</a>
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