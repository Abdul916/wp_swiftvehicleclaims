(() => {
  // custom/elementor-modal.js
  if (typeof jQuery !== "undefined") {
    (function($) {
      $(
        function() {
          function openMagicButton(event) {
            let insertIndex = 0;
            if (elementorCommon) {
              insertIndex = jQuery(event.target).parents(".elementor-section-wrap").length > 0 ? jQuery(this).parents(".elementor-add-section").index() : -1;
              if (insertIndex >= 0) {
                jQuery(event.target).parents(".elementor-add-section-inline").remove();
              }
            }
            let envatoElementsMagicHolder = document.getElementById("template-kit-import-magic-button-holder");
            if (!envatoElementsMagicHolder) {
              envatoElementsMagicHolder = document.createElement("div");
              envatoElementsMagicHolder.id = "template-kit-import-magic-button-holder";
              document.body.appendChild(envatoElementsMagicHolder);
            }
            const magicButtonMode = {
              mode: "elementorMagicButton",
              insertCallback: function(data) {
                if (typeof elementor !== "undefined") {
                  if (typeof $e !== "undefined") {
                    const historyId = $e.internal(
                      "document/history/start-log",
                      {
                        type: "add",
                        title: "Add Envato Elements Content"
                      }
                    );
                    for (let i = 0; i < data.content.length; i++) {
                      $e.run(
                        "document/elements/create",
                        {
                          container: elementor.getPreviewContainer(),
                          model: data.content[i],
                          options: insertIndex >= 0 ? { at: insertIndex++ } : {}
                        }
                      );
                    }
                    $e.internal(
                      "document/history/end-log",
                      {
                        id: historyId
                      }
                    );
                  } else {
                    const model = new Backbone.Model(
                      {
                        getTitle() {
                          return "Test";
                        }
                      }
                    );
                    elementor.channels.data.trigger("template:before:insert", model);
                    for (let i = 0; i < data.content.length; i++) {
                      elementor.getPreviewView().addChildElement(data.content[i], insertIndex >= 0 ? { at: insertIndex++ } : null);
                    }
                    elementor.channels.data.trigger("template:after:insert", {});
                  }
                }
                window.templateKitImport.closeMagicButton(envatoElementsMagicHolder);
              }
            };
            window.templateKitImport.initMagicButton(envatoElementsMagicHolder, magicButtonMode);
          }
          const $template = $("#tmpl-elementor-add-section");
          if ($template.length > 0) {
            let templateText = $template.text();
            templateText = templateText.replace(
              '<div class="elementor-add-section-drag-title',
              '<div class="elementor-add-section-area-button elementor-add-envato-button" title="Envato Elements"> <i class="fa fa-folder"></i> </div><div class="elementor-add-section-drag-title'
            );
            $template.text(templateText);
            elementor.on(
              "preview:loaded",
              function() {
                $(elementor.$previewContents[0].body).on(
                  "click",
                  ".elementor-add-envato-button",
                  openMagicButton
                );
              }
            );
          }
        }
      );
    })(jQuery);
  }
})();
//# sourceMappingURL=elementor-modal.js.map
