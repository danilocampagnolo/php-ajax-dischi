const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {

  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function(array) {
        authorInSelect(array);
        printResult(array);
      },
      error: function(errore) {
        console.log(errore);
      }
    }
  );

  $("select").change(function() {
    var value = $(this).val();
    $.ajax(
      {
        url: "http://localhost:8888/php-ajax-dischi/server.php",
        method: "GET",
        data: {
          author: value
        },
        success: function(array) {
          $(".disks").text("");
          printResult(array);
        },
        error: function(errore) {
          console.log(errore);
        }
      }
    );
  });
});

// ================ FUNCTIONS

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

function authorInSelect() {
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server.php",
    success: function (array) {
      array.forEach(function(array) {
        console.log(array);
        $('select').append('<option>' + array.author + '</option>')
      });
    },
    error: function (richiesta, stato, errore) {
      $('main').append("<li>È avvenuto un errore. " + errore + "</li>");
    }
  });
}
