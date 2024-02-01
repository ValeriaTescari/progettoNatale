<?php

namespace App\Http\Controllers;

use App\Mail\BabboMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome() {
        $categorie = [
            [
                'name' => 'Elettronica',
                'foto' => '/media/The-Must-Have-15-Electronics-Products-to-Improve-Your-Life-Quality-1.jpg',
                'prodotti' => [
                    ['name' => 'Smartphone', 'brand' => 'Samsung'],
                    ['name' => 'Laptop', 'brand' => 'Dell'],
                    ['name' => 'Tablet', 'brand' => 'Apple'],
                ],
            ],
            [
                'name' => 'Abbigliamento',
                'foto'=>'/media/yasminarossi6.webp',
                'prodotti' => [
                    ['name' => 'Maglia', 'brand' => 'Nike'],
                    ['name' => 'Jeans', 'brand' => 'Levi\'s'],
                    ['name' => 'Scarpe sportive', 'brand' => 'Adidas'],
                ],
            ],
            [
                'name' => 'Cucina',
                'foto' => '/media/2ae473e17fec2c05df282573fef6b34f.jpg',
                'prodotti' => [
                    ['name' => 'Robot da cucina', 'marca' => 'KitchenAid'],
                    ['name' => 'Forno a microonde', 'marca' => 'Panasonic'],
                    ['name' => 'Macchina per il caffè', 'marca' => 'Nespresso'],
                ],
            ],
            [
                'name' => 'Libri',
                'foto' => '/media/_DSC7108.jpg',
                'prodotti' => [
                    ['name' => 'Romanzo', 'autore' => 'Haruki Murakami'],
                    ['name' => 'Saggio', 'autore' => 'Yuval Noah Harari'],
                    ['name' => 'Poesia', 'autore' => 'Emily Dickinson'],
                ],
            ],
            
        ];
    return view('welcome',['categorie'=>$categorie ]);
}

    public function chisiamo(){
        return view('chi-siamo');
    }
    public function allcategory(){
    $prodotti=[
            ['name' => 'Romanzo', 'brand' => 'Haruki Murakami','category'=>'libri', 'foto' => '/media/Copertina-romanzo.jpeg'],
            ['name' => 'Saggio', 'brand' =>'Yuval Noah Harari', 'category' => 'libri', 'foto' => '/media/copertina-saggio.jpeg'],
            ['name' => 'Poesia', 'brand' =>'Emily Dickinson', 'category' => 'libri', 'foto' => '/media/copertina-poesie.jpeg'],
            ['name' => 'Robot da cucina', 'brand' => 'KitchenAid' ,'category' => 'cucina', 'foto' => '/media/robot.webp'],
            ['name' => 'Forno a microonde', 'brand' => 'Panasonic', 'category' => 'cucina', 'foto' => '/media/27cebb24-5420-4a17-847f-7d1abd0a8843_1.d81e136707098a2d43580e92bd37b769.webp'],
            ['name' => 'Macchina per il caffè', 'brand' => 'Nespresso', 'category' => 'cucina', 'foto' => '/media/05113397_zi_red.avif'],
            ['name' => 'Maglia', 'brand' => 'Nike' , 'category' => 'abbigliamento', 'foto' => '/media/50501000__20.webp'],
            ['name' => 'Jeans', 'brand' => 'Levi\'s' , 'category' => 'abbigliamento', 'foto' => '/media/d05f1c56-31a1-4b2f-b410-50c24940fba1_1.1f08805bd23d4f8fa4303c0c09770ecb.webp'],
            ['name' => 'Scarpe sportive', 'brand' => 'Adidas' , 'category' => 'abbigliamento', 'foto' => '/media/adidas_G96720_zx750-2.jpg'],
            ['name' => 'Smartphone', 'brand' => 'Samsung', 'category' => 'elettronica', 'foto' => '/media/f12a08a3-bcb4-4dd6-8676-c3217ac935e4_1.ec1d86774bfa77c3adeb62b297cfd4cd.webp'],
            ['name' => 'Laptop', 'brand' => 'Dell', 'category' => 'elettronica', 'foto' => '/media/SYLwdiveKXW5Qmsn8QGqxZ.jpg'],
            ['name' => 'Tablet', 'brand' => 'Apple', 'category' => 'elettronica', 'foto' => '/media/apple_my232ll_a_11_ipad_pro_early_1553824.jpg'],
    ];
    
        return view('allcategory',['prodotti'=>$prodotti]);
    }




    



    public function shop($name){
        $prodotti=[
        ['name' => 'Romanzo', 'brand' => 'Haruki Murakami','category'=>'Libri', 'foto' => '/media/Copertina-romanzo.jpeg'],
        ['name' => 'Saggio', 'brand' =>'Yuval Noah Harari', 'category' => 'Libri', 'foto' => '/media/copertina-saggio.jpeg'],
        ['name' => 'Poesia', 'brand' =>'Emily Dickinson', 'category' => 'Libri', 'foto' => '/media/copertina-poesie.jpeg'],
        ['name' => 'Robot da cucina', 'brand' => 'KitchenAid' ,'category' => 'Cucina', 'foto' => '/media/robot.webp'],
        ['name' => 'Forno a microonde', 'brand' => 'Panasonic', 'category' => 'Cucina', 'foto' => '/media/27cebb24-5420-4a17-847f-7d1abd0a8843_1.d81e136707098a2d43580e92bd37b769.webp'],
        ['name' => 'Macchina per il caffè', 'brand' => 'Nespresso', 'category' => 'Cucina', 'foto' => '/media/05113397_zi_red.avif'],
        ['name' => 'Maglia', 'brand' => 'Nike' , 'category' => 'Abbigliamento', 'foto' => '/media/50501000__20.webp'],
        ['name' => 'Jeans', 'brand' => 'Levi\'s' , 'category' => 'Abbigliamento', 'foto' => '/media/d05f1c56-31a1-4b2f-b410-50c24940fba1_1.1f08805bd23d4f8fa4303c0c09770ecb.webp'],
        ['name' => 'Scarpe sportive', 'brand' => 'Adidas' , 'category' => 'Abbigliamento', 'foto' => '/media/adidas_G96720_zx750-2.jpg'],
        ['name' => 'Smartphone', 'brand' => 'Samsung', 'category' => 'Elettronica', 'foto' => '/media/f12a08a3-bcb4-4dd6-8676-c3217ac935e4_1.ec1d86774bfa77c3adeb62b297cfd4cd.webp'],
        ['name' => 'Laptop', 'brand' => 'Dell', 'category' => 'Elettronica', 'foto' => '/media/SYLwdiveKXW5Qmsn8QGqxZ.jpg'],
        ['name' => 'Tablet', 'brand' => 'Apple', 'category' => 'Elettronica', 'foto' => '/media/apple_my232ll_a_11_ipad_pro_early_1553824.jpg'],
];
      
$array=[];
foreach($prodotti as $prodotto){
    if ($prodotto['category'] == $name) {
        array_push($array,$prodotto);
    }
    // elseif ($prodotto['name']== $name) {
    //             array_push($array, $prodotto);
    //     return view('shop.dettaglio',['prodotto'=>$array]);
    // }
} 

return view('shop', ['prodotto' => $array]);
}

    public function shopdettaglio($name){
        $prodotti = [
            ['name' => 'Romanzo', 'brand' => 'Haruki Murakami', 'category' => 'Libri', 'foto' => '/media/Copertina-romanzo.jpeg','trama'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.romanzo'],
            ['name' => 'Saggio', 'brand' => 'Yuval Noah Harari', 'category' => 'Libri', 'foto' => '/media/copertina-saggio.jpeg' ,'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.saggio'],
            ['name' => 'Poesia', 'brand' => 'Emily Dickinson', 'category' => 'Libri', 'foto' =>'/media/copertina-poesie.jpeg', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.poesia'],
            ['name' => 'Robot da cucina', 'brand' => 'KitchenAid', 'category' => 'Cucina', 'foto' =>'/media/robot.webp', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.robot'],
            ['name' => 'Forno a microonde', 'brand' => 'Panasonic', 'category' => 'Cucina', 'foto' =>'/media/27cebb24-5420-4a17-847f-7d1abd0a8843_1.d81e136707098a2d43580e92bd37b769.webp', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.forno'],
            ['name' => 'Macchina per il caffè', 'brand' => 'Nespresso', 'category' => 'Cucina', 'foto' =>'/media/05113397_zi_red.avif', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.caffe'],
            ['name' => 'Maglia', 'brand' => 'Nike', 'category' => 'Abbigliamento', 'foto' =>'/media/50501000__20.webp', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.maglia'],
            ['name' => 'Jeans', 'brand' => 'Levi\'s', 'category' => 'Abbigliamento', 'foto' =>'/media/d05f1c56-31a1-4b2f-b410-50c24940fba1_1.1f08805bd23d4f8fa4303c0c09770ecb.webp', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.jeans'],
            ['name' => 'Scarpe sportive', 'brand' => 'Adidas', 'category' => 'Abbigliamento', 'foto' =>'/media/adidas_G96720_zx750-2.jpg', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.adidas'],
            ['name' => 'Smartphone', 'brand' => 'Samsung', 'category' => 'Elettronica', 'foto' =>'/media/f12a08a3-bcb4-4dd6-8676-c3217ac935e4_1.ec1d86774bfa77c3adeb62b297cfd4cd.webp', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.samsung'],
            ['name' => 'Laptop', 'brand' => 'Dell', 'category' => 'Elettronica', 'foto' =>'/media/SYLwdiveKXW5Qmsn8QGqxZ.jpg', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.dell'],
            ['name' => 'Tablet', 'brand' => 'Apple', 'category' => 'Elettronica', 'foto' =>'/media/apple_my232ll_a_11_ipad_pro_early_1553824.jpg', 'trama' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore eos at. Impedit, quibusdam, commodi at eum nam voluptates dignissimos, voluptate earum doloremque odio quam fuga nostrum numquam aperiam! Voluptatibus.tablet'],
        ];
        $array = [];
        foreach ($prodotti as $prodotto) {
            if ($prodotto['name'] == $name) {
                array_push($array, $prodotto);
            }

        }
        return view('shopdettaglio', ['prodotto' => $array]);
    }
    public function contactmail(Request $request){
        
        $contact = $request->all();
        Mail::to('BabboMail@gmail.com')->send(new BabboMail($contact));
        return redirect('/')->with('message', 'il tuo regalo arrivera entro il 25 dicembre per ogni altro servizio attenda una risposta da parte dei nostri elfi chiacchieroni!!!');
    }

    public function contattaci(){
        return view('contattaci');
    }
    


    
}
