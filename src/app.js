const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {

  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function(data) {
        console.log(data);
      },
      error: function(errore) {
        alert("È avvenuto un errore. " + errore);
      }
    }
  );
});


// var source = document.getElementById("entry-template").innerHTML;
// var template = Handlebars.compile(source);
//
// var context = {
//   title: "ciao",
// };
// var html = template(context);
// $(".disks").append(html);



// fare chiamata ajax
