HTML SCSS JSResult Skip Results Iframe
EDIT ON
body[data-touchable= 'true'] {
  .touch-device {
    display: block;
  }
  .untouch-device {
    display: none;
  }
}

body:not([data-touchable= 'true']) {
  .touch-device {
    display: none;
  }
  .untouch-device {
    display: block;
  }
}