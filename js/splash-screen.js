$( document ).ready(function() {
  if (sessionStorage.setItem('splashScreen') !== 'true') {

  var quotes = [
    {
      quote: "Citat 1",
      author: "Author 1"
    },
    {
      quote: "Citat 2",
      author: "Author 2"
    },
    {
      quote: "Citat 3",
      author: "Author 3"
    }
  ];
  var randomQuotes = quotes[Math.floor(Math.random() * quotes.length)];

    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>');
    $('blockquote').prepend('<p id="quote"></p>');
    $('blockquote').append('<footer id="author"></footer>')
    $('#quote').html(randomQuotes.quote);
    $('#author').html(randomQuotes.author);
    $('#splashScreen').show().delay(2500).fadeOut();
    sessionStorage.setitem('splashScreen', 'true');
  }
});