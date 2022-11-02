const pencetBtn = document.getElementById('pencet');
const mainDiv = document.getElementById('main');

function newNode(el, inner='', parent = null){
    let newEl = document.createElement(el);
    let textNode = document.createTextNode(inner);
    newEl.appendChild(textNode);
    if(parent != null){
        parent.appendChild(newEl);
    }
    return newEl;
}

function Pencet(){
    pencetBtn.hidden = true;
    mainDiv.style.display = 'flex';
    mainDiv.style.opacity = 1;
    
    let newMain = newNode('div', '', mainDiv);
    newMain.style.width = '20%';
    newNode('h1', 'Yusuf Hafidz', newMain);
    newNode('h3', '120140234', newMain);
    newNode('p', 'Fungsi "newNode" membuat elemen baru lalu memberikan elemen baru tersebut sebuah text node untuk inner htmlnya. Setelah itu akan diperiksa jika parent nodenya diketahuin. jika iya, elemen baru tesebut langsung di append ke elemen parent. return elemen barunya.', newMain);
}