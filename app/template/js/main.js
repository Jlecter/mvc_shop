'use strict';

const cartButton = document.querySelector("#cart-button");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");
const modalBody = document.querySelector('.modal-body');
const modalPrice = document.querySelector('.modal-pricetag');
const buttonClearCart = document.querySelector('.clear-cart');


const cart = [];

const toggleModal = function() {
    modal.classList.toggle("is-open");
};

const getData = async function(url){

    const response = await fetch(url);

    if (!response.ok){
        throw new Error(`Ошибка по адресу ${url},
          статус ошибки ${response.status}!`);
    }

    return await response.json();

};

function addToCart(event) {

    const target = event.target;

    const buttonAddToCart = target.closest('.button-add-cart');

    if(buttonAddToCart) {
        const card = target.closest('.card');
        const cost = card.querySelector('.card-price').textContent;
        const code = buttonAddToCart.code;

        const food = cart.find(function (item) {
            return item.id === code;
        });

        if(food){
            food.count += 1;
        } else {
            cart.push({
                code: code,
                cost: cost,
                count: 1
            });
        }
    }
}

function renderCart() {
    modalBody.textContent = '';

    cart.forEach(function({ id, title, cost, count }) {
        const itemCart = `
        <div class="food-row">
            <span class="food-name">GD</span>
            <strong class="food-price">£0.15</strong>
            <div class="food-counter">
                <button class="counter-button">-</button>
                <span class="counter">1</span>
                <button class="counter-button">+</button>
            </div>
        </div>
     `;
        modalBody.insertAdjacentHTML('afterbegin', itemCart);
    });

    const totalPrice = cart.reduce(function(result, item) {
        return result + (parseFloat(item.cost) * item.count);
    }, 0);

    modalPrice.textContent = totalPrice + ' грн';

}

function changeCount(event) {
    const target = event.target;

    if (target.classList.contains('counter-button')){
        const food = cart.find(function(item) {
            return item.id === target.dataset.id;
        });
        if (target.classList.contains('counter-minus')) {
            food.count--;
            if (food.count === 0){
                cart.splice(cart.indexOf(food), 1);
            }
        }
        if (target.classList.contains('counter-plus')) food.count++;
        renderCart();
    }
}

function init() {

    cartButton.addEventListener("click", function () {
        renderCart();
        toggleModal();
    });
    
}

init();