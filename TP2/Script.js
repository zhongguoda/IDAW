var file = document.getElementById('someId');

file.onchange = function(e) {
  var files = e.currentTarget.files;
  var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch (ext) {
    case 'pdf':
      break;
    default:
      alert('PDF Seulement !');
      this.value = '';
  }
};