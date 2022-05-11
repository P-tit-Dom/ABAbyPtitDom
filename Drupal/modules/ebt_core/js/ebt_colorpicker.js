(function ($, Drupal) {

  /**
   * EBT Core Colorpicker plugin.
   */
  Drupal.behaviors.ebtCore = {
    attach: function (context, settings) {
      let colorFields = [
        'input[name="field_ebt_settings[0][ebt_settings][design_options][other_settings][border_color]"]',
        'input[name="settings[block_form][field_ebt_settings][0][ebt_settings][design_options][other_settings][border_color]"]',
        'input[name="field_ebt_settings[0][ebt_settings][design_options][other_settings][background_color]"]',
        'input[name="settings[block_form][field_ebt_settings][0][ebt_settings][design_options][other_settings][background_color]"]',
      ];

      $.each(colorFields, function(index, colorField) {
        $(colorField).once('colorpicker').ColorPicker({
          onBeforeShow: function () {
            let color = $(colorField).val();
            if (color !== undefined && color !== '') {
              color = '#' + color.replace('#', '');
              $(this).ColorPickerSetColor(color);
            }
          },
          onShow: function (colpkr) {
            $(colpkr).fadeIn(300);
            return false;
          },
          onHide: function (colpkr) {
            $(colpkr).fadeOut(300);
            return false;
          },
          onChange: function (hsb, hex, rgb) {
            $(colorField).val('#' + hex);
          }
        });

      });
    }
  };

})(jQuery, Drupal);
