


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



    // events 
    ui.uIList[1].forEach(function (item, index) {
        item.addEventListener('mouseenter', function () {

            //console.log('enter' + index);
            this.children[1].classList.remove('price'); // show price element
            this.children[1].classList.add('price-display'); // show price element
            //ui.uIList[0].classList.add('price-display')

        })

        item.addEventListener('mouseleave', function () {

            //console.log('enter' + index);
            //this.children[1].classList.remove('price-display'); // show price element
            //this.children[1].classList.add('price-display-hide')
            // this.children[1].classList.add('price'); // show price element

        })
    })

})(UiController)




