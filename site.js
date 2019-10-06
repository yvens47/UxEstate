


var UiController = (function () {

    const price = document.querySelector('.price');
    const productCard = document.querySelectorAll('.product');



    const uiList = [price, productCard]
    return {

        uIList: uiList,
    }

})();


var app = (function (ui) {


    // console.log(ui.uIList);
    console.log(ui);





    // events 
    ui.uIList[1].forEach(function (item, index) {
        item.classList.remove('.price');
        item.addEventListener('mouseenter', function () {
            this.children[1].classList.remove('price'); // show price element
            this.children[1].classList.add('price-display'); // show price element
        })

        item.addEventListener('mouseleave', function () {
            if (this.children[1].className === 'price-display') {
                console.log(this.children[1].className);
                this.children[1].classList.remove('price-display')
                this.children[1].classList.add('price')

            }


        })

    })

})(UiController)




