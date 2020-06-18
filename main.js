$(document).ready(function() {
  let source = $('#card-template').html();
  let template = Handlebars.compile(source);

  $.ajax({
      'url': '../versione-ajax/partials/records_list.php',
      'method': 'GET',
      'success': function(data) {
        console.log(data);
        for (let i = 0; i < data.length; i++) {
          let ctx = {
            'img-src': data[i].poster,
            'title': data[i].title,
            'author': data[i].author,
            'genre': data[i].genre,
            'year': data[i].year,
          }
          let html = template(ctx);
          $('main').append(html);
        }
      },
      'error': function() {
          console.log('oops...');
      }
  });

});