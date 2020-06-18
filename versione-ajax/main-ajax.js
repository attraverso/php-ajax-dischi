$(document).ready(function() {

let source = $('#card-template').html();
let template = Handlebars.compile(source);

$.ajax({
    'url': '../versione-ajax/partials/records_list_ajax.php',
    'method': 'GET',
    'success': function(data) {
      for (let i = 0; i < data.length; i++) {
        console.log(data);
        
        drawCard(data, i)
        populateSelect(data[i].author)
      }
    },
    'error': function() {
        console.log('oops...');
    }
});

$('#artist-select').change(function() {
  let currentArtist = $(this).val();
  console.log(currentArtist);
  
    $.ajax({
      'url': '../artistFilter.php',
      'method': 'POST',
      'data': {
        'artist': currentArtist,
      },
      'success': function(data) {
        $('main').empty();
        for (let i = 0; i < data.length; i++) {
          drawCard(data, i);
        }
      },
      'error': function() {
          console.log('oops...');
      }
  });
})


/* * * * FUNCTIONS * * * * */

function drawCard(cardInfo, i) {
  let ctx = {
    'img-src': cardInfo[i].poster,
    'title': cardInfo[i].title,
    'author': cardInfo[i].author,
    'genre': cardInfo[i].genre,
    'year': cardInfo[i].year,
  }
  let html = template(ctx);
  $('main').append(html);
}

function populateSelect(artist) {
  $('#artist-select').append('<option>' + artist + '</option>');
}

});