document.getElementById('cube').onclick = function() {
  this.style.left = this.getBoundingClientRect().left + 'px';
  console.log(this.style.left);
  this.style.top = this.getBoundingClientRect().top + 'px';
  console.log(this.style.top);

  this.style.position = 'fixed';
};


document.getElementById('cube').onkeydown = function(e) {
  switch (e.keyCode) {
    case 37: // влево
      this.style.left = parseInt(this.style.left) - this.offsetWidth + 'px';
      return false;
    case 38: // вверх
      this.style.top = parseInt(this.style.top) - this.offsetHeight + 'px';
      return false;
    case 39: // вправо
      this.style.left = parseInt(this.style.left) + this.offsetWidth + 'px';
      return false;
    case 40: // вниз
      this.style.top = parseInt(this.style.top) + this.offsetHeight + 'px';
      return false;
  }
};