const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {

  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function(array) {
        printResult(array);
      },
      error: function(errore) {
        console.log(errore);
      }
    }
  );
});

function printResult(array) {
  var source = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);
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
}
