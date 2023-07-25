//sticky header vars
const head = $('.sticky-head');

// sticky javscript code

window.onscroll = function(e) {
  // print "false" if direction is down and "true" if up
    onScroll(this.oldScroll > this.scrollY);
    this.oldScroll = this.scrollY;
} 

function onScroll(scrollPos) {
    let scroll = window.scrollY;
    if(scrollPos && scroll > 0) {
        addSticky();
    } else {
        removeSticky();
    }    
}

function addSticky() {
    head.addClass('sticky');
}

function removeSticky() {
    head.removeClass('sticky');
}





