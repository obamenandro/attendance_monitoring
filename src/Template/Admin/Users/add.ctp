<div class="panel__content">
  <div class="form">
    <form method="POST" enctype="multipart/form-data">
      <div class="form__content">
        <div class="form__title">
          <h3>Register Information</h3>
        </div>
      
        <?= $this->element('flash_success') ?>
        <?= $this->element('flash_error') ?>
      
        <div class="form__data">
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
        </div>

        <div class="form__title">
          <h3>Government ID</h3>
        </div>

        <div class="form__data">
         
          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">GSIS/SSS Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <input type="text" name="" class="form__inputbox">
              <span class="form__error">Error</span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">TIN Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <input type="text" name="" class="form__inputbox">
              <span class="form__error">Error</span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Philhealth Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <input type="text" name="" class="form__inputbox">
              <span class="form__error">Error</span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Pagibig Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <input type="text" name="" class="form__inputbox">
              <span class="form__error">Error</span>
            </div>
          </div>
        </div>

        <div class="form__title">
          <h3>Position and Department</h3>
        </div>

        <div class="form__data">
         
          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Position</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <select class="form__inputbox">
                  <option selected>-- Position --</option>
                  <option>Teacher</option>
                  <option>Dean</option>
                  <option>HR</option>
                </select>
                <span class="form__error">Error</span>
            </div>
          </div>

          <div class="form__list form__list--checkbox">
            <div class="form__label-wrapper">
              <label class="form__label">Deparment:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox1" class="form__input-checkbox">
                <label for="#checkbox1" class="form__input-label">Math Department</label>
              </div>
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox2" class="form__input-checkbox">
                <label for="#checkbox2" class="form__input-label">Science Department</label>
              </div>
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox3" class="form__input-checkbox">
                <label for="#checkbox3" class="form__input-label">IT Department</label>
              </div>
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox4" class="form__input-checkbox">
                <label for="#checkbox4" class="form__input-label">HRM Department</label>
              </div>
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox5" class="form__input-checkbox">
                <label for="#checkbox5" class="form__input-label">Accounting Department</label>
              </div>
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox5" class="form__input-checkbox">
                <label for="#checkbox5" class="form__input-label">Accounting Department</label>
              </div>
              <div class="form__checkbox">
                <input type="checkbox" name="" id="checkbox5" class="form__input-checkbox">
                <label for="#checkbox5" class="form__input-label">Accounting Department</label>
              </div>
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