
var names = [
    {
        id: '1',
        first: "Jean", last: "pierre", age: '34',
        siblings: {
            siblingsTotal: '2',
            names: [{ name: "Mardochee", last: "pierre" }, { name: "Isaac", last: "pierre" },]
        }
    },

    {
        id: '2',
        first: "Akara", last: "pierre", age: '20',
        siblings: {
            siblingsTotal: '3',
            names: [{ name: "Josh", last: "Desir" }, { name: "Gessy", last: "Desir" }, { name: "Micael", last: "Desir" },]
        }
    },

]


//console.log(names);

class App {


    constructor(names) {
        this.people = names;
    }

    printNames(parentEl) {


        this.people.forEach(function (value, index) {
            var li = document.createElement('li');
            li.setAttribute('data-id', value.id)
            var text = document.createTextNode(value.first);
            li.appendChild(text);


            parentEl.appendChild(li);



        });

    }

    sortedNames() {
        this.people.sort(function (a, b) {

            ((a.first > b.first) ? 1 : -1)
        })
        return this.people;
    }

    filterNames() {

    }






}




var driver = (function (app) {
    var ul = document.getElementById('names');

    app.printNames(ul, 'li');
    //ui

    var search = document.getElementById('search');

    var list = ul.querySelectorAll('li')


    search.addEventListener('keyup', filter)

    function filter() {

        var i = 0;

        for (; i < list.length; i++) {
            if (list[i].innerHTML.toUpperCase().indexOf(search.value.toUpperCase()) > -1) {
                list[i].style.display = '';
                list[i].style.color = 'green';


            } else {
                list[i].style.display = 'none';
                list[i].style.color = 'black';
            }

        }

    }






})(new App(names))