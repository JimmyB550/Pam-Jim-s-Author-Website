function sendEmail() {
    var email = 'bondyacc@gmail.com';
    var subject = 'Hello';
    var body = 'Hi there,';
    var mailtoLink = 'mailto:' + email + '?subject=' + subject + '&body=' + body;
    window.location.href = mailtoLink
}


