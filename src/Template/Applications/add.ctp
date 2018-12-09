<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=100" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <title>NAMEI HRIS</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
</head>
<body style="background: rgba(45, 49, 52, 0.3);">
    <div class="apply-now">
        <div class="apply-now__container">
            <div class="apply-now__title">APPLICATION FORM</div>
            <?= $this->Flash->render(); ?>
            <?= $this->Form->create($application ,['class' => 'form', 'type' => 'POST']); ?>
                <div class="form__list form__list--fullwidth">
                    <div class="form__label-wrapper">
                        <label class="form__label">Position Applying For:</label>
                    </div>
                    <div class="form__input">
                        <div class="input text">
                            <?=
                              $this->Form->control('positions', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('positions'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">First Name:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('firstname', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('firstname'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Middle Name:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('middlename', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('middlename'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Last Name:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('lastname', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('lastname'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form__list">
                    <!-- EMPTY -->
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Street 1:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('street1', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('street1'); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Street 2:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('street2', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('street2'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">City:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('city', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('city'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Country:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('country', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('country'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">State/Province:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('state', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('state'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Zip Code:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('zip_code', [
                                'type'     => 'number',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('zip_code'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Phone:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('phone', [
                                'type'     => 'number',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('phone'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Mobile:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('mobile', [
                                'type'     => 'number',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('mobile'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list">
                    <div class="form__label-wrapper">
                        <label class="form__label">Email:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('email', [
                                'type'     => 'text',
                                'div'      => false,
                                'error'    => false,
                                'required' => false,
                                'class'    => 'form__inputbox'
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('email'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__list form__list--fullwidth">
                    <div class="form__label-wrapper">
                        <label class="form__label">Qualifications and Experience:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <div class="input text">
                            <?=
                              $this->Form->control('qualifications', [
                                'type'     => 'textarea',
                                'class'    => 'form__textarea',
                                'label'    => false,
                                'required' => false
                              ]);
                            ?>
                            <span class="form__error"><?= $this->Form->error('qualifications'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <a href="/users/login" class="button button--back" style="color: #333">Cancel</a>
                    <input type="submit" class="button button--submit" value="NEXT">
                </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</body>
</html>