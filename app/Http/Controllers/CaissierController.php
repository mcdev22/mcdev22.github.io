<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chifredaf;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;
use Cart;

class CaissierController extends Controller
{
    public function store_chiffre(Request  $request)
    {
        $chifrdafer = new Chifredaf();

        if(Cart::getContent()->count() > 0)
        {
        $chifrdafer->chiffre = $request->input('total');
        $chifrdafer->id_caissier = Auth::user()->id;         
        $chifrdafer->save();
        }
        else
        {
          session()->flush('Error_message',"thers is not data to send!!");
        }
        
        \Cart::clear();
      return redirect()->route('user.product');
    }

  public function receipt()
  {
    $cartItems = Cart::getContent();
    // Set params
        $mid = '123123456';
        $store_name = 'Resto Lazare';
        $store_address = 'Marrakech blv alal fassi';
        $store_phone = '0670986523';
        $store_email = 'marrakech@email.com';
        $store_website = 'resaurant.com';
        $tax_percentage = 2;
        $transaction_id = 'TX123ABC456';
        $currency = 'DH';
        $image_path = 'assets/images/logo.png';

       
        // Init printer
        $printer = new ReceiptPrinter;
        $printer->init(
            config('receiptprinter.connector_type'),
            config('receiptprinter.connector_descriptor')
        );

        // Set store info
        $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

        // Set currency
        $printer->setCurrency($currency);

        // Add items
        foreach($cartItems as $item)
        {
          $printer->addItem($item->name, $item->quantity, $item->price);
        }

        // Set tax
        $printer->setTax($tax_percentage);

        // Calculate total
        $printer->calculateSubTotal();
        $printer->calculateGrandTotal();

        // Set transaction ID
        $printer->setTransactionID($transaction_id);

      
        $printer->setLogo($image_path);

        // Set QR code
        $printer->setQRcode([
            'tid' => $transaction_id,
        ]);

        // Print receipt
        $printer->printReceipt();
  }
}
