<?php
/*
Template Name: Cart Page
*/
get_header();
?>

<main class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Shopping Cart</h1>

    <div id="cart-empty" class="text-gray-500 text-center hidden">
        Your cart is empty. <br /> <a href="/" class="text-blue-600 underline">Continue Shopping</a>
    </div>

    <div id="cart-container" class=""></div>
</main>

<script>
    function renderCart() {
        const cart = JSON.parse(localStorage.getItem('cart') || '[]');
        const container = document.getElementById('cart-container');
        const emptyMsg = document.getElementById('cart-empty');
        container.innerHTML = '';

        if (cart.length === 0) {
            emptyMsg.classList.remove('hidden');
            return;
        } else {
            emptyMsg.classList.add('hidden');
        }

        cart.forEach((item, idx) => {
            fetch(`${myAjax.url}?action=fetch_cart_item&product_id=${item.product_id}&product_type_id=${item.product_type_id}&product_image_id=${item.product_image_id}`)
                .then(res => res.json())
                .then(data => {
                    const card = document.createElement('div');
                    // card.className = 'bg-white rounded-lg shadow-md p-5 flex flex-col items-center';
                    card.className = 'w-full bg-white rounded shadow overflow-hidden flex flex-col sm:flex-row';
                    card.innerHTML = `
                        <div class="sm:w-1/3 bg-gray-100 flex items-center justify-center p-4">
                            <img src="${data.image_url}" alt="" class="max-w-full max-h-48 object-contain" />
                        </div>
                        <div class="flex flex-col justify-between p-4 w-full">
                            <div>
                                <h2 class="text-xl font-semibold mb-2">${data.product_name}</h2>
                                <div class="text-sm text-gray-700 mb-1">Type: ${data.type_name}</div>
                                <div class="text-xs text-gray-500">Added: ${new Date(item.added_at).toLocaleString()}</div>
                            </div>
                            <button class="remove-cart-item bg-red-500 text-white px-4 py-2 rounded w-fit mt-4" data-idx="${idx}">Remove</button>
                        </div>
                    `;


                    container.appendChild(card);
                })
                .catch(error => {
                    console.error('Error fetching product:', error);
                });
        });

        container.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-cart-item')) {
                const idx = parseInt(e.target.getAttribute('data-idx'));
                let cart = JSON.parse(localStorage.getItem('cart') || '[]');
                cart.splice(idx, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCart();
            }
        }, {
            once: true
        });
    }

    document.addEventListener('DOMContentLoaded', renderCart);
</script>

<?php get_footer(); ?>