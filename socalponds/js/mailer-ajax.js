$('#myform').on('submit', function (e) {
    e.preventDefault();

    var $this = $(this),
        data = $this.serialize(),
        validationData = $this.data( 'bValidator' );

    if ( validationData && validationData.isValid() ) {
        $this.html('Thank you for your interest in So-Cal Ponds Inc.');

        $.ajax({
            type: 'POST',
            url: "../../php/mailer.php",
            data: data,
            dataType: "html",
            success: function () {
            }
        });
    }
});
