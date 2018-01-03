<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=100" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <title>Attendance Monitoring</title>
  <link rel="stylesheet" type="text/css" href="/js/plugins/jquery-ui-1.12.1/jquery-ui.css"/>
  <link rel="stylesheet" type="text/css" href="/js/plugins/jquery-ui-1.12.1/jquery-ui.theme.css"/>
  <link rel="stylesheet" type="text/css" href="/js/plugins/jfiler/jquery.filer-dragdropbox-theme.css"/>
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jfiler/jquery.filer.min.js"></script>
</head>
<body>

  <header class="header">
    <div class="header__content">
      <div class="header__logo">
        <img src="/img/logo/logo.png" alt="logo" class="header__logo-image">
      </div>
      <div class="header__control">
        <a href="#" class="header__control-link">
          <span>Setting</span>
        </a>
        <a href="#" class="header__control-link">
          <span>Logout</span>
        </a>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="main-content__bgcolor"></div>
    <div class="main-content__content">

      <aside class="sidebar">
        <div class="sidebar__title">
          <h2>MENU</h2>
        </div>
        <nav class="sidebar__menu">
          <ul>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu1</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu2</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu3</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu4</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu5</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu6</a>
            </li>
          </ul>
        </nav>
      </aside>

      <div class="panel">
        <div class="panel__content">
          <div class="panel__search">
            <div class="panel__select">
              <select class="panel__selectbox">
                <option selected="">---</option>
                <option selected="">option1</option>
              </select>
            </div>
            <div class="panel__searchbox">
              <input type="text" name="" placeholder="search" class="panel__search-input">
            </div>
          </div>

          <div class="form">
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <div class="form__content">
                <div class="form__title">
                  <h3>Register Information</h3>
                </div>
                <div class="form__data">
                  <div class="form__info">
                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Prefix:</label>
                      </div>
                      <div class="form__input">
                        <select class="form__inputbox">
                          <option selected>--Select--</option>
                          <option>Mr.</option>
                          <option>Ms.</option>
                          <option>Mrs.</option>
                        </select>
                        <span class="form__error">Error</span>
                      </div>
                    </div>
                  </div>
                  <div class="form__info">
                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Last Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>

                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">First Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>

                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Middle Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>
                  </div>

            <!--       <div class="form__upload">
                    <div class="form__uploadimage">
                      <img src="img/upload/laptop-bottom.png" alt="upload" class="form__image">
                      <input type="file" name="" class="form__hidden-upload">
                      <input type="submit" name="" value="upload" class="form__uploadinput">
                    </div>
                  </div> -->

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Birth date:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox form__date" placeholder="yyyy/mm/dd">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Address:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Contact Number:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Email Address:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Place of Birth:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Citizenship:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Civil Status:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>
                 
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Government Id:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>
                </div>


                <div class="form__title">
                  <h3>IF MARRIED</h3>
                </div>
                <div class="form__data">
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Name of Spouse:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Number of Children:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>
                </div>

              <div class="form__title">
                <h3>Educational Background</h3>
              </div>
                <div class="form__data">
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Educational Attainment:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Honors and Rewards:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>

                  <div class="form__list form__list--enumerate">
                    <div class="form__label-wrapper">
                      <label class="form__label">Seminars training:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>
                </div>

              <div class="form__title">
                <h3>Working Experience</h3>
              </div>
                <div class="form__data">
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Eligibility:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>
                  
                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Job Type:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Designation Id:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list form__list--enumerate">
                    <div class="form__label-wrapper">
                      <label class="form__label">Work Experience:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                    </div>
                  </div>
                </div>
                
                <div class="form__title">
                  <h3>Upload Image</h3>
                </div>

                <div class="form__data">
                  <div class="form__list form__list--uploadimage">
                    <div class="form__list-image">
                      <input type="file" multiple="multiple" name="files[]" id="input2">  
                    </div>
                  </div>

                  <div class="form__button">
                    <input type="submit" name="" class="button button--submit">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

<footer>
  
</footer>

<script type="text/javascript">
  $('.form__date').datepicker();

  $('#input2').filer({
            limit: null,
            maxSize: null,
            extensions: null,
            changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Upload Image here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Image</a></div></div>',
            showThumbs: true,
            appendTo: null,
            theme: "dragdropbox",
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li>{{fi-progressBar}}</li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                removeConfirmation: false,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            uploadFile: {
                url: "upload.php",
                data: {},
                type: 'POST',
                enctype: 'multipart/form-data',
                beforeSend: function(){},
                success: function(data, el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");    
                    });
                },
                error: function(el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");    
                    });
                },
                statusCode: {},
                onProgress: function(){},
            },
            dragDrop: {
                dragEnter: function(){},
                dragLeave: function(){},
                drop: function(){},
            },
            addMore: true,
            clipBoardPaste: true,
            excludeName: null,
            beforeShow: function(){return true},
            onSelect: function(){},
            afterShow: function(){},
            onRemove: function(){},
            onEmpty: function(){},
            captions: {
                button: "Choose Files",
                feedback: "Choose files To Upload",
                feedback2: "files were chosen",
                drop: "Drop file here to Upload",
                removeConfirmation: "Are you sure you want to remove this file?",
                errors: {
                    filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                    filesType: "Only Images are allowed to be uploaded.",
                    filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                    filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
                }
            }
        });
</script>
</body>
</html>