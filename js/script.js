var bundle = [];
const bundleInput = document.querySelector('input[name="bundle"]');
const burger = document.getElementById('burger');
const menu = document.getElementById('menu');
const order = document.getElementById('order');
const orderNow = '<button class="submit-button">Order Summary</button>';

function addBundle(cardId) {
    // Check if array already has ID
    // If it doesn't add it to array
    if (bundle.includes(cardId)) {
        var index = bundle.indexOf(cardId);
        bundle.splice(index, 1);
    } else {
        bundle.push(cardId);
    }
    // Add Class active
    toggleClassActive(cardId)

    // Add array to input
    bundleInput.setAttribute('value', bundle);

    // Show form
    if (bundle.length > 1) {
        order.classList.add('visible');
        order.querySelector('.details').innerHTML = 'Your Bundle has ' + bundle.length + ' items ' + orderNow;
    } else {
        order.classList.remove('visible');
         order.querySelector('.details').innerHTML = '';
    }
}

function toggleClassActive(cardId) {
    var card = document.getElementById('card_'+cardId);
    var cardButton = document.querySelector('#card_'+ cardId + ' .card-button');
    if (card.classList.contains('active')) {
        card.classList.remove('active');
        cardButton.innerHTML = "Add Challenge";
        cardButton.classList.remove('active-button');
    } else {
        card.classList.add('active');
        cardButton.innerHTML = "Selected";
        cardButton.classList.add('active-button');
    }
}

burger.addEventListener('click', function() {
    if (this.classList.contains('active')) {
        this.classList.remove('active');
        menu.classList.remove('visible');
    } else {
        this.classList.add('active');
        menu.classList.add('visible');
    }
});