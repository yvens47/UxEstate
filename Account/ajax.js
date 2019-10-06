

var myfunc = async function (url) {

    const response = await fetch(url)
    const myJson = await response.json();
    // console.log(JSON.stringify(myJson));

    return JSON.stringify(myJson);

}


var listing = document.querySelector('.listing');

var listings = myfunc('http://localhost:8080/UxEstate/Account/ajax/listins.php').then(function (e) {

    var list = JSON.parse(e);
    console.log(list)

    var ul = document.createElement('ul')

    list.forEach(function (value) {
        var li = document.createElement('li')
        li.innerHTML = value.street;
        ul.appendChild(li);
    });
    listing.appendChild(ul);

})
    ;

var uploadPropertyImageBtns = document.querySelectorAll('.upload-prop-images');
var inputHiddenPropertyid = document.querySelector('.pid') // property id

console.log(inputHiddenPropertyid);

uploadPropertyImageBtns.forEach(function (value) {

    value.addEventListener('click', function (e) {

        console.log(e.target.getAttribute('data-id'))
        inputHiddenPropertyid.value = e.target.getAttribute('data-id')


    })
})



const deletePropertyBtns = document.querySelectorAll('.deletePropertyBtn');

newFunction();
function newFunction() {
    deletePropertyBtns.forEach(function (btn) {
        // add event listener on  delete btns account page
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            // ajax request  delete record from db 

            // delete row from the ui
            e.target.parentElement.parentElement.classList.add('delete')
        });
    });
}

