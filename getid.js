var books = document.querySelectorAll(".okladka");
for(var i =0; i<books.length;i++) {
    books[i].addEventListener('click',function() {
        console.log(this.getAttribute("id"));
    })
}

var autors = document.querySelectorAll(".autor");
for(var i =0; i<autors.length;i++) {
    autors[i].addEventListener('click',function() {
        console.log(this.getAttribute("id"));
    })
}
