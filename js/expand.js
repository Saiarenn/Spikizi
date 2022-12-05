var datas = document.getElementsByClassName('data');
var coll = document.getElementsByTagName('label');


function expand0() {
    if (datas[0].style.display === 'none') {
        labels[0].innerHTML = 'Read Less <i class="fa-solid fa-chevron-up"></i>';
        datas[0].style.display = 'block';
    } else {
        labels[0].innerHTML = 'Expand <i class="fa-solid fa-chevron-down"></i>';
        datas[0].style.display = 'none';
    }
}

function expand5() {
    if (datas[5].style.display === 'none') {
        labels[5].innerHTML = 'Read Less <i class="fa-solid fa-chevron-up"></i>';
        datas[5].style.display = 'block';
    } else {
        labels[5].innerHTML = 'Expand <i class="fa-solid fa-chevron-down"></i>';
        datas[5].style.display = 'none';
    }
}

function expand6() {
    if (datas[6].style.display === 'none') {
        labels[6].innerHTML = 'Read Less <i class="fa-solid fa-chevron-up"></i>';
        datas[6].style.display = 'block';
    } else {
        labels[6].innerHTML = 'Expand <i class="fa-solid fa-chevron-down"></i>';
        datas[6].style.display = 'none';
    }
}