function sendEmail(){
  Email.send({
      Host : "smtp.elasticemail.com",
      Username : "t8fk1opdf@mozmail.com",
      Password : "YKrLYYWhpV5c22",
      To : 'kristofovapolica@gmail.com',
      From : document.getElementById("email").value,
      Subject : "Kontakt",
      Body : "And this is the body"
  }).then(
  message => alert(message)
  ); 
}