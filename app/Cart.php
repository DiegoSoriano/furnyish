<?php

namespace App;

class Cart
{
    //
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            # code...
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }         
    }

    public function add($item, $id)
    {
        $storedItem = [
            'qty' => 0,
            'price' => $item->precio_mueble,
            'item' => $item
        ];
        if ($this->items) {
            # code...
            if (array_key_exists($id, $this->items)) {
                # code...
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->precio_mueble * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->precio_mueble;
    }
}
