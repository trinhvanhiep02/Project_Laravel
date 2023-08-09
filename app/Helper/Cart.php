<?php
namespace App\Helper;
class Cart
{
    //khai báo thuộc tính
    private $items = [];
    public $total_price = 0;
    public $total_quantity = 0;

    //phương thức
    public function __construct(){
        $this -> items =session('cart') ? session('cart') : [];
    }

    public function check(){
        
    }

    public function add($product,$quantity,$attr){
       // dd("sdsađá");
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => ($product->sale_price > 0) ? $product -> sale_price : $product -> price,
            'image' => $product -> image,
            'quantity' => $quantity,
            'attr' => $attr
        ];
        if (isset($this->items[$product->id.$attr]) && $this->items[$product->id.$attr]['attr'] == $attr) {
            $this -> items[$product->id.$attr]['quantity'] += $quantity ;
        }else{
            $this -> items[$product->id.$attr] = $item ;
        }
       // $this->items[$product->id.$attr] = $item;
        session(['cart' => $this -> items]) ;
    }

    public function content(){
        return $this->items;
    }

    public function update($req){
      //  dd($req);
        foreach($req['key'] as $key => $value){
            foreach($this->items as $key2 => $item){
                if($key2 == $req['key'][$key]){
                    $this ->items[$key2]['quantity'] = $req['quantity'][$key];
                }
            }
        }
        session(['cart' => $this -> items]) ;
    }

    public function total_price(){
        foreach ($this->items as $value){
            $this->total_price += $value['quantity'] * $value['price'];
        }
        return $this->total_price;
    }

    public function total_quantity(){
        foreach ($this->items as $value){
            $this->total_quantity += $value['quantity'];
        }
        return $this->total_quantity;
    }
    
    public function delete($key){
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
            session(['cart' => $this -> items]) ;
        }
    }

    public function destroy(){
        session()->forget('cart');
    }
}