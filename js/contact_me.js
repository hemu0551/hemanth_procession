/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */

    $(document).ready(function() {
$('#contact_form').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        first_name: {
            validators: {
                    stringLength: {
                    min: 2,
                },
                    notEmpty: {
                    message: 'Please supply your first name'
                }
            }
        },
         last_name: {
            validators: {
                 stringLength: {
                    min: 2,
                },
                notEmpty: {
                    message: 'Please supply your last name'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'Please supply your email address'
                },
                emailAddress: {
                    message: 'Please supply a valid email address'
                }
            }
        },
        phone: {
            validators: {
                notEmpty: {
                    message: 'Please supply your phone number'
                },
                phone: {
                    country: 'US',
                    message: 'Please supply a vaild phone number with area code'
                }
            }
        },
        address: {
            validators: {
                 stringLength: {
                    min: 8,
                },
                notEmpty: {
                    message: 'Please supply your street address'
                }
            }
        },
        city: {
            validators: {
                 stringLength: {
                    min: 4,
                },
                notEmpty: {
                    message: 'Please supply your city'
                }
            }
        },
        state: {
            validators: {
                notEmpty: {
                    message: 'Please select your state'
                }
            }
        },
        zip: {
            validators: {
                notEmpty: {
                    message: 'Please supply your zip code'
                },
                zipCode: {
                    country: 'US',
                    message: 'Please supply a vaild zip code'
                }
            }
        },
        comment: {
            validators: {
                  stringLength: {
                    min: 10,
                    max: 200,
                    message:'Please enter at least 10 characters and no more than 200'
                },
                notEmpty: {
                    message: 'Please supply a description of your project'
                }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json');
    });
});


$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var phone = $("input#phone").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./bin/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
