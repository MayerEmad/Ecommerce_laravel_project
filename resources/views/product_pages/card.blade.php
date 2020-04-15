@extends('layouts.app')

@section('content')
<div class="product-big-title-area0" >
            
    <div class="product-bit-title0">
        <h2>Shopping Cart</h2>
    </div>
</div> 


<form method="post" action="#">
    <table cellspacing="0" class="shop_table0 cart">
        <thead>
            <tr>
                <th class="product-remove0">&nbsp;</th>
                <th class="product-thumbnail0">&nbsp;</th>
                <th class="product-name0">Product</th>
                <th class="product-price0">Price</th>
                <th class="product-quantity0">Quantity</th>
                <th class="product-subtotal0">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="cart_item0">
                <td class="product-remove0">
                    <a title="Remove this item" class="remove" href="#">×</a> 
                </td>

                <td class="product-thumbnail0">
                    <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail0" src="img/product-thumb-2.jpg"></a>
                </td>

                <td class="product-name0">
                    <a href="single-product.html">Ship Your Idea</a> 
                </td>

                <td class="product-price0">
                    <span class="amount">£15.00</span> 
                </td>

                <td class="product-quantity0">
                    <div class="quantity0 buttons_added0">
                        
                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                        
                    </div>
                </td>

                <td class="product-subtotal0">
                    <span class="amount0">£15.00</span> 
                </td>
            </tr>
            <tr>
                <td class="actions" colspan="6">

                    <input type="submit" value="Update Cart" name="update_cart" class="button0">
                    <input type="submit" value="Checkout" name="proceed" class="button0">
                </td>
            </tr>
        </tbody>
    </table>
</form>

<div class="cart_totals0 ">
    <h2>Cart Totals</h2>

    <table cellspacing="0">
        <tbody>

            <tr class="order-total0">
                <th>Order Total</th>
                <td><strong><span class="amount0">£15.00</span></strong> </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection