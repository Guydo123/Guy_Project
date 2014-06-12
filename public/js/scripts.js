var hideItems, oldElement, showItem;

oldElement = null;

showItem = function(currId) {
  var currElement;
  currElement = document.getElementById(currId).style;
  if (oldElement) {
    oldElement.display = 'none';
  }
  currElement.display = 'block';
  oldElement = currElement;
  return false;
};

hideItems = function(currEle, eleClass) {
  var elements, i, _i, _len;
  elements = document.getElementsByTagName(currEle);
  for (_i = 0, _len = elements.length; _i < _len; _i++) {
    i = elements[_i];
    if (i.className === eleClass) {
      i.style.display = 'none';
    }
  }
  return false;
};
