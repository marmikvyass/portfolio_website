
    document.querySelector('#a1').addEventListener('click', function() {
    const view = document.querySelector('.active1');
    view.style.display = 'block';
    document.querySelector('.active2').style.display = 'none';
    document.querySelector('.active3').style.display = 'none'; 

        
});
document.querySelector('#a2').addEventListener('click', function() {
    const view = document.querySelector('.active2');
    view.style.display = 'block';
    document.querySelector('.active3').style.display = 'none'; 
    document.querySelector('.active1').style.display = 'none';
});
document.querySelector('#a3').addEventListener('click', function() {
    const view = document.querySelector('.active3');
    view.style.display = 'block';
    document.querySelector('.active2').style.display = 'none';
    document.querySelector('.active1').style.display = 'none';
});

document.querySelector('#a1')
