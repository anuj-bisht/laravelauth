const mainMenu = document.getElementsByClassName(mainMenu);
const closeMenu = document.getElementsByClassName(closeMenu);
const openMenu = document.getElementsByClassName(openMenu);


openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

 function show(){
alert('kk');
     mainMenu.style.display='flex';
     mainMenu.style.top='0';
 }
 function close(){
     alert('ll');
     mainMenu.style.top='-100%';

 }
