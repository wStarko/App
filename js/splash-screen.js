$( document ).ready(function() {
  if (sessionStorage.setItem('splashScreen') !== 'true') {

  var quotes = [
    {
      quote: "If you tell the truth, you don't have to remember anything.",
      author: "Mark Twain"
    },
    {
      quote: "Always forgive your enemies; nothing annoys them so much.",
      author: "Oscar Wilde"
    },
    {
      quote: "What can you do the man is a god!",
      author: "EemeliTV_"
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