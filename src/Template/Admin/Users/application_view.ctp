<div class="panel__title">
  <h3>Applicant Detail</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>Applicant Profile</h3>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Position Applying: </label>
          <span class="view-info__info"> • <?= $applicant['positions'] ?> </span>
        </div>

        <div class="view-info__data">
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Last Name: </label>
          <span class="view-info__info"> • <?= ucfirst($applicant['lastname']) ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> First Name: </label>
          <span class="view-info__info"> • <?= ucfirst($applicant['firstname']) ?> </span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Address: </label>
          <span class="view-info__info"> • <?= ucfirst($applicant['street1']) ?> </span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> City: </label>
          <span class="view-info__info"> • <?= ucfirst($applicant['city']) ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Zip Code: </label>
          <span class="view-info__info"> • <?= $applicant['zip_code'] ?> </span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Phone Number: </label>
          <span class="view-info__info"> • <?= $applicant['phone'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Mobile Number: </label>
          <span class="view-info__info"> • <?= $applicant['mobile'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Email Address: </label>
          <span class="view-info__info"> • <?= $applicant['email'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Qualification and Experience: </label>
          <span class="view-info__info"> • <?= $applicant['qualifications'] ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
