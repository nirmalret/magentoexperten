$(document).ready(function(){
    $('.toggleNav').on('click',function(e){
        e.preventDefault();
        $('.sidebar').toggleClass('sidebar-close');
        $('.page-wrapper').toggleClass('page-fullsize');
    });
    $('.sidebar').animate({
        'height': ($('.main-wrapper').outerHeight()-($('.header').outerHeight()+$('.footer').outerHeight() + 15)) + 'px'
    });

    $('.noteContainer').css({
        'height': ($('.notex').outerHeight()-$('.titlebarlabel').outerHeight() ) + 'px'
    });

    $('.close').on('click',function(){
        $(this).parent().remove();
    });

    $('.addBtn').on('click',function(){
        newElement();
    });

});


var mynodelist = $('.noteList li');
var i;
for(i=0;i<mynodelist.length;i++){

    var span = document.createElement('span');
    var txt = document.createTextNode('\u00D7');
    span.className='close';
    span.appendChild(txt);
    mynodelist[i].appendChild(span)
}

function newElement(){
    var li = document.createElement('li');
    var inputtxt = document.getElementById('myInput').value;
    var t = document.createTextNode(inputtxt);
    li.appendChild(t);
    if(inputtxt==''){
        alert('Please type to add the note !')
    }else{
        $('.noteList').append(li);
    }
    $('#myInput').value='';

        var span = document.createElement('span');
        var txt = document.createTextNode('\u00D7');
        span.className='close';
        span.appendChild(txt);
    $(li).append(span);

    $('.close').on('click',function(){
        $(this).parent().remove();
    });

}

