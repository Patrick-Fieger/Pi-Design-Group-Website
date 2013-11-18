// checks that an input string looks like a valid email address.
var isEmail_re       = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
function isEmail (s) {
   return String(s).search (isEmail_re) != -1;
}

$(document).ready(function(){

	// Handle Contact Form Submission
	$('form#contactForm button.submit').click(function() {
		var contactName = $('form#contactForm input#contactName').val();
		var contactEmail = $('form#contactForm input#contactEmail').val();
		var contactMessage = $('form#contactForm #contactMessage').val();
		var contactCaptcha = $('form#contactForm input#contactCaptcha').val();
		var contactCaptchaAnswer = $('form#contactForm input#contactCaptchaAnswer').val();

		var dataString = 'contactName=' + contactName + '&contactEmail=' + contactEmail + '&contactMessage=' + contactMessage;
		var contactError = '';
		
		// Check name
		if( contactName == '' ) {
			contactError += '- Bitte geben sie Ihren Namen ein<br />';
		}
		
		// Check e-mail
		if ( contactEmail == '') {
			contactError += '- Bitte geben Sie eine Email Adresse an, damit ich Ihnen zurück schreiben kann<br />';
		} else if ( isEmail(contactEmail) !== true ) {
			contactError += '- Bitte geben Sie eine richtige Email Adresse ein<br />';
		}

		if( contactMessage == '' ) {
			contactError += '- Was möchten Sie mir erzählen?<br />';
		}
		
		if ( contactCaptcha !== contactCaptchaAnswer ) {
			contactError += '- Kann passieren, Kopfrechnen ist auch nicht meine Stärke... Die Antwort ist 2 ;) <br />';
		}
		
		if ( contactError == '' ) {
			$.ajax({
				type: "POST",
				url: "includes/include.emailSender.php",
				data: dataString,
				success: function() {
					$('#contact-success').fadeIn();
					$('form#contactForm').fadeOut();
					$('#contact-warning').hide();
				}
			});
		} else {
			$('#contact-warning').html(contactError);
			$('#contact-warning').fadeIn();
		}

		return false;
		
	});
});