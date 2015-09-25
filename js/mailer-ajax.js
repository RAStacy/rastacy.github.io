$('#emailForm').on('submit', function (e) {
    e.preventDefault();
    console.log("running ajax");

    var $this = $(this),
        data = $this.serialize(),
        validationData = $this.data( 'bValidator' );

    if ( validationData && validationData.isValid() ) {
        $this.html("<span class='statement'>Thank you for your email, I will respond back to you shortly.</span>");

        $.ajax({
            type: 'POST',
            url: "php/mailer.php",
            data: data,
            dataType: "html",
            success: function () {
                console.log("mailer posted");
            }
        });
    }
});
