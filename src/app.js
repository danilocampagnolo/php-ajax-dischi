const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {

  var source = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function(array) {
        for (var i = 0; i < array.length; i++) {
          var context = {
            poster: array[i].poster,
            title: array[i].title,
            author: array[i].author,
            year: array[i].year
          };
          var html = template(context);
          $(".disks").append(html);
        }
      },
      error: function(errore) {
        console.log(errore);
      }
    }
  );
});
