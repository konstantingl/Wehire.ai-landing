var slides = document.getElementsByClassName('.item');
var empl_slide = 0;
var cand_slide = 1;
var educ_slide = 2;

var x = 23;

function CurrentSlide(n) {
    slides[n].className = 'item showing';
}