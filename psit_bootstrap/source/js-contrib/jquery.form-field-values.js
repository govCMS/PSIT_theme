/*
 * jQuery.formFieldValues
 *
 * Get or Set all of the name/value pairs from child Form input fields.
 * Source: http://www.codedevelopr.com/articles/form-field-values-jquery-plugin-get-and-set-all-form-field-values-with-javascript/
 *
 * @argument array data
 *   If included, will populate all child Form input fields.
 *
 * @returns element if data was provided, or array of values if not
 */
(function ($) {
  
$.fn.formFieldValues = function (data) {
 var els = this.find(':input').get();

 if (arguments.length === 0) {
   // Return all data.
   data = {};

   $.each(els, function () {
     if (this.name && !this.disabled && (this.checked
                     || /select|textarea/i.test(this.nodeName)
                     || /text|hidden|password/i.test(this.type))) {
       if (data[this.name] == undefined) {
         data[this.name] = [];
       }
       data[this.name].push($(this).val());
     }
   });
   return data;
 }
 else {
   $.each(els, function () {
     if (this.name && data[this.name]) {
       var names = data[this.name];
       var $this = $(this);
       if (Object.prototype.toString.call(names) !== '[object Array]') {
         // Backwards compat to old version of this code.
         names = [names];
       }
       if (this.type === 'checkbox' || this.type === 'radio') {
         var val = $this.val();
         var found = false;
         for (var i = 0; i < names.length; i++) {
           if (names[i] == val) {
             found = true;
             break;
           }
         }
         $this.attr('checked', found);
       }
       else {
         $this.val(names[0]);
       }
     }
   });
   return this;
 }
};

})(jQuery);
