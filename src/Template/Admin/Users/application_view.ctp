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
          <label class="view-info__label"> Application Status: </label>
          <span class="view-info__info"> <span class="pending">• Pending</span></span>
          <span class="view-info__info"> <span class="accepted">• Accepted</span></span>
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

        <div class="view-info__data view-info__data-last">
          <label class="view-info__label"> Qualification and Experience: </label>
          <span class="view-info__info"> • <?= $applicant['qualifications'] ?></span>
        </div>
      </div>
      <div class="view-button">
        <a href="/admin/users/application_monitoring" class="button button--back"><span>Back</span></a>
        <button class="button button--submit"><span>Print</span></button>
      </div>
    </div>
  </div>
</div>

<style>
.button--back {
  text-align: center;
  color: #000;
}
.view-button {
  padding: 50px 0 30px;
  text-align: center;
}
.view-info__data {
  display: inline-block;
  width: 33%;
  vertical-align: top;
}
.view-info__data:nth-child(2n) {
  width: 38%;  
}
.pending {
  color: red;
}
.accepted {
  color: #5ac35a;
}
.view-info__data-last {
  width: 100% !important;
}
@media print {
  body * {
    visibility: hidden;
  }
  .view-info__content, .view-info__content * {
    visibility: visible;
    color: white;
    font-size: 14px;
  }
  .view-info__content {
    position: absolute;
    left: 0;
    top: 0;
    color: red;
  }
  .view-info__label,
  .view-info__info,
  .view-info__title h3 {
    color: #000;
  }
  .pending {
  color: red;
  }
  .accepted {
    color: #5ac35a;
  }
  .view-info__data-last {
    width: 100%;
  }
}
</style>
<script>
document.querySelector(".button--submit").addEventListener("click", function() {
	window.print();
});
</script>
