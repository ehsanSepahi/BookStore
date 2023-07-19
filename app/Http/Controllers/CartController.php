<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Book;

class CartController extends Controller
{
    public function index()
    {
        // نمایش سبد خرید کاربر فعلی
        $user_id = auth()->id();
        $cartItems = Cart::where('user_id', $user_id)->get();
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request, $id)
    {
        // افزودن کتاب به سبد خرید
        $user_id = auth()->id();
        $book = Book::findOrFail($id);

        // اگر کتاب قبلاً در سبد خرید نبود، اضافه کن
        if (!Cart::where(['user_id' => $user_id, 'book_id' => $id])->exists()) {
            Cart::create([
                'user_id' => $user_id,
                'book_id' => $id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Book added to cart successfully');
    }

    public function removeFromCart($id)
    {
        // حذف کتاب از سبد خرید
        $user_id = auth()->id();
        $cartItem = Cart::where(['user_id' => $user_id, 'book_id' => $id])->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->route('cart.index')->with('success', 'Book removed from cart successfully');
        } else {
            return redirect()->route('cart.index')->with('error', 'Book not found in cart');
        }
    }
}
