var original = document.getElementById('original'),
  nou = document.getElementById('nou');

function canviar() {
  var text = original.innerHTML,
    patro = '/(\b[lL]o\b | \b[lL]a\b | \b[lL]es\b | \b[lL]os\b)/g';
  nou.innerHTML = text.replace(patro, '<b>$1</b>');
}