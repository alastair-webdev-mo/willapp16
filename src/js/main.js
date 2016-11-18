$(function() {

$('input[type="radio"].check-1').on('click', function(){
if ($(this).is(':checked')) {
	$('input[type="radio"].check-1').parent('.select').removeClass("selected"); 
  $(this).parent('.select').addClass("selected");
} else {
  $(this).parent('.select').removeClass("selected"); 
}
});

});

$(function() {

$('input[type="checkbox"].check-2').on('click', function(){
if ($(this).is(':checked')) {
  $(this).parent('.select').addClass("selected");
} else {
  $(this).parent('.select').removeClass("selected"); 
}
});

});

$(function() {
});


$(function() {

$.validator.addMethod("pwcheck",
  function(value, element) {
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/.test(value);
});

jQuery.validator.addMethod("lettersonly", 
	function(value, element) {
		return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please");

 $.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg != value;
 }, "Please select an option.");

$('form').each(function() {

$(this).validate({
	errorClass: "error",
	validClass: "valid",
  rules: {
  	ftitle: {
  		required: true,
  		valueNotEquals: "default",
  	},
    name: {
      required: true
    },
    fname: {
      required: true,
      lettersonly: true,
      minlength: 2
    },
    mname: {
      lettersonly: true,
      minlength: 2
    },
    sname: {
      required: true,
      lettersonly: true,
      minlength: 2
    },
    fdate: {
    	required: true,
    },
    email: {
      required: true,
      email: true
    },
    tel: {
      required: true,
      digits: true
    },
    password: {
    	required: true,
    	pwcheck: true,
    	minlength: 6
    },
    "c1": {
      required: true,
      maxlength: 1
    },
  },
  messages: {
  	password: {
  		required: "This field is required",
  		pwcheck: "Remember to include 1 capital letter and 1 number",
  		minlength: "Your password must be at least 6 characters long"
  	} 
  },
  highlight: function(element) {
    $(element).parent().removeClass('success select__arrow').addClass('has-error');
  },
  unhighlight: function(element) {
    $(element).parent().addClass('success').removeClass('has-error select__arrow');
  },
  errorPlacement: function (error, element) {
  	if( element.is(":radio") || element.is(":checkbox") ) {
	  error.addClass('hide-error').appendTo( element.parents('#checkboxes').addClass('errors') );
	  } else if( element.is(".input__field-damsons") ) {
	  	error.insertAfter(element.siblings("label.input__label"));
	  } else  {
	  	error.insertAfter(element);
	  }
  },
  success: function (label) {
  	$("#checkboxes").removeClass("errors");
   	label.closest('.select').removeClass('has-error select__arrow');
   	label.addClass("valid");
  },
});
});
});

$('input').blur(function()
{
    if( $(this).val().length === 0 ) {
        $(this).parents().removeClass('success');
    }
});

$(function() {
	(function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
              return this.replace(rtrim, '');
            };
          })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
          classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
          if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
          }
        }
      })();
    });

function changeMe(sel) {
  sel.style.color = "#000";
  sel.style.fontSize = "16px";              
}

$( function() {
  $( "#datepicker" ).datepicker({
  	dateFormat: "dd-mm-yy",
    onClose: function () {
		  this.focus(); }
  });
});