<?php
        use App\model\admin\Instore;
        use App\model\admin\product;
        use App\model\admin\category;
        use App\model\admin\imports;
        use App\model\admin\exports;
        use App\model\admin\Size;

        $Impnumber = 0;
        $Exnumber  = 0;
        $ImpnumberpE = 0;
        $ExpnumberpE = 0;
        $ExpnumberpB = 0;
        $ImpnumberpB = 0;
        $Expp1x4 = 0;
        $Impp1x4 = 0;
        $Expp1x6 = 0;
        $Impp1x6 = 0;
        $Expp1x8 = 0;
        $Impp1x8 = 0;
        $Expp1x10 = 0;
        $Impp1x10 = 0;
        $Expp2x2 = 0;
        $Impp2x2 = 0;
        $Expp2x3 = 0;
        $Impp2x3 = 0;
        $Expp2x4 = 0;
        $Impp2x4 = 0;
        $Expp2x6 = 0;
        $Impp2x6 = 0;


       $ExCharcoal = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Charcoal');})->get();

       foreach ($ExCharcoal as $value) {
           $Exnumber =+$value->quantity;
       }

        $ImpCharcoal = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Charcoal');})->get();   
       foreach ($ImpCharcoal as $value) {
           $Impnumber +=$value->quantity;
       }

        // total thing killl it 
       $totalnumCharcoal =  $Impnumber-$Exnumber;
         

    $ImppElectricPolE = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Poles');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Electric Poles');})->get(); 
       
       foreach ($ImppElectricPolE as $value) {
          $ImpnumberpE += $value->quantity;
       }
    $ExppElectricPolE = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Poles');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Electric Poles');})->get();

        foreach ($ExppElectricPolE as $value) {
          $ExpnumberpE += $value->quantity;
       }   
           // total thing killl it 
           $totalnumPolE = $ImpnumberpE - $ExpnumberpE;

     $ImppElectricPolB = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Poles');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Building Poles');})->get(); 
       
       foreach ($ImppElectricPolB as $value) {
          $ImpnumberpB += $value->quantity;
       }
    $ExppElectricPolB = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Poles');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Building Poles');})->get();

        foreach ($ExppElectricPolB as $value) {
          $ExpnumberpB += $value->quantity;
       }    
            // total thing killl it 
           $totalnumPolB = $ImpnumberpB - $ExpnumberpB;

   $Imppain1x4 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x4');})->get(); 
       
       foreach ($Imppain1x4 as $value) {
          $Impp1x4 += $value->quantity;
       }
 
    $Exppain1x4 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x4');})->get();

        foreach ($Exppain1x4 as $value) {
          $Expp1x4 += $value->quantity;
       }    
           // total thing killl it 
           $TotalPain1x4 = $Impp1x4 - $Expp1x4;

       $Imppain1x6 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x6');})->get(); 
       
       foreach ($Imppain1x6 as $value) {
          $Impp1x6 += $value->quantity;
       }
 
    $Exppain1x6 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x6');})->get();

        foreach ($Exppain1x6 as $value) {
          $Expp1x6 += $value->quantity;
       }    
           // total thing killl it 
            $TotalPain1x6 = $Impp1x6 - $Expp1x6;

           $Imppain1x8 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x8');})->get(); 
       
       foreach ($Imppain1x8 as $value) {
          $Impp1x8 += $value->quantity;
       }
 
    $Exppain1x8 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x8');})->get();

        foreach ($Exppain1x8 as $value) {
          $Expp1x8 += $value->quantity;
       }    
           // total thing killl it 
         $TotalPain1x8 = $Impp1x8 - $Expp1x8;


    $Imppain1x10 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x10');})->get(); 
       
       foreach ($Imppain1x10 as $value) {
          $Impp1x10 += $value->quantity;
       }
 
    $Exppain1x10 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x10');})->get();

        foreach ($Exppain1x10 as $value) {
          $Expp1x10 += $value->quantity;
       }    
           // total thing killl it 
            $TotalPain1x10 = $Impp1x10 - $Expp1x10;

        $Imppain2x2 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x2');})->get(); 
       
       foreach ($Imppain2x2 as $value) {
          $Impp2x2 += $value->quantity;
       }
 
    $Exppain2x2 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x2');})->get();

        foreach ($Exppain2x2 as $value) {
          $Expp2x2 += $value->quantity;
       }    
           // total thing killl it 
            $TotalPain2x2 = $Impp2x2 - $Expp2x2;


   
        $Imppain2x3 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x3');})->get(); 
       
       foreach ($Imppain2x3 as $value) {
          $Impp2x3 += $value->quantity;
       }
 
    $Exppain2x3 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x3');})->get();

        foreach ($Exppain2x3 as $value) {
          $Expp2x3 += $value->quantity;
       }    
           // total thing killl it 
            $TotalPain2x3 = $Impp2x3 - $Expp2x3;


   $Imppain2x4 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x4');})->get(); 
       
       foreach ($Imppain2x4 as $value) {
          $Impp2x4 += $value->quantity;
       }
 
    $Exppain2x4 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x4');})->get();

        foreach ($Exppain2x4 as $value) {
          $Expp2x4 += $value->quantity;
       }    
           // total thing killl it 
            $TotalPain2x4 = $Impp2x4 - $Expp2x4;

    $Imppain2x6 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x6');})->get(); 
       
       foreach ($Imppain2x6 as $value) {
          $Impp2x6 += $value->quantity;
       }
 
    $Exppain2x6 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','Pines');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x6');})->get();

        foreach ($Exppain2x6 as $value) {
          $Expp2x6 += $value->quantity;
       }    
           // total thing killl it 
            $TotalPain2x6 = $Impp2x6 - $Expp2x6;



       $Impgrevelia1x4 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x4');})->get(); 
       
       foreach ($Impgrevelia1x4 as $value) {
          $Impp1x4 += $value->quantity;
       }
 
    $Expgrevelia1x4 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x4');})->get();

        foreach ($Expgrevelia1x4 as $value) {
          $Expp1x4 += $value->quantity;
       }    
           // total thing killl it 
           $Totalgrevelia1x4 = $Impp1x4 - $Expp1x4;

       $Impgrevelia1x6 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x6');})->get(); 
       
       foreach ($Impgrevelia1x6 as $value) {
          $Impp1x6 += $value->quantity;
       }
 
    $Expgrevelia1x6 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x6');})->get();

        foreach ($Expgrevelia1x6 as $value) {
          $Expp1x6 += $value->quantity;
       }    
           // total thing killl it 
            $Totalgrevelia1x6 = $Impp1x6 - $Expp1x6;

           $Impgrevelia1x8 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x8');})->get(); 
       
       foreach ($Impgrevelia1x8 as $value) {
          $Impp1x8 += $value->quantity;
       }
 
    $Expgrevelia1x8 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x8');})->get();

        foreach ($Expgrevelia1x8 as $value) {
          $Expp1x8 += $value->quantity;
       }    
           // total thing killl it 
         $Totalgrevelia1x8 = $Impp1x8 - $Expp1x8;


    $Impgrevelia1x10 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x10');})->get(); 
       
       foreach ($Impgrevelia1x10 as $value) {
          $Impp1x10 += $value->quantity;
       }
 
    $Expgrevelia1x10 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x10');})->get();

        foreach ($Expgrevelia1x10 as $value) {
          $Expp1x10 += $value->quantity;
       }    
           // total thing killl it 
            $Totalgrevelia1x10 = $Impp1x10 - $Expp1x10;

        $Impgrevelia2x2 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x2');})->get(); 
       
       foreach ($Impgrevelia2x2 as $value) {
          $Impp2x2 += $value->quantity;
       }
 
    $Expgrevelia2x2 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x2');})->get();

        foreach ($Expgrevelia2x2 as $value) {
          $Expp2x2 += $value->quantity;
       }    
           // total thing killl it 
            $Totalgrevelia2x2 = $Impp2x2 - $Expp2x2;


   
        $Impgrevelia2x3 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x3');})->get(); 
       
       foreach ($Impgrevelia2x3 as $value) {
          $Impp2x3 += $value->quantity;
       }
 
    $Expgrevelia2x3 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x3');})->get();

        foreach ($Expgrevelia2x3 as $value) {
          $Expp2x3 += $value->quantity;
       }    
           // total thing killl it 
            $Totalgrevelia2x3 = $Impp2x3 - $Expp2x3;


   $Impgrevelia2x4 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x4');})->get(); 
       
       foreach ($Impgrevelia2x4 as $value) {
          $Impp2x4 += $value->quantity;
       }
 
    $Expgrevelia2x4 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x4');})->get();

        foreach ($Expgrevelia2x4 as $value) {
          $Expp2x4 += $value->quantity;
       }    
           // total thing killl it 
            $Totalgrevelia2x4 = $Impp2x4 - $Expp2x4;

    $Impgrevelia2x6 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x6');})->get(); 
       
       foreach ($Impgrevelia2x6 as $value) {
          $Impp2x6 += $value->quantity;
       }
 
    $Expgrevelia2x6 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','grevellia');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x6');})->get();

        foreach ($Expgrevelia2x6 as $value) {
          $Expp2x6 += $value->quantity;
       }    
           // total thing killl it 
            $Totalgrevelia2x6 = $Impp2x6 - $Expp2x6;

           $Impeucalyptes1x4 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x4');})->get(); 
       
       foreach ($Impeucalyptes1x4 as $value) {
          $Impp1x4 += $value->quantity;
       }
 
    $Expeucalyptes1x4 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x4');})->get();

        foreach ($Expeucalyptes1x4 as $value) {
          $Expp1x4 += $value->quantity;
       }    
           // total thing killl it 
           $Totaleucalyptes1x4 = $Impp1x4 - $Expp1x4;

       $Impeucalyptes1x6 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x6');})->get(); 
       
       foreach ($Impeucalyptes1x6 as $value) {
          $Impp1x6 += $value->quantity;
       }
 
    $Expeucalyptes1x6 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x6');})->get();

        foreach ($Expeucalyptes1x6 as $value) {
          $Expp1x6 += $value->quantity;
       }    
           // total thing killl it 
            $Totaleucalyptes1x6 = $Impp1x6 - $Expp1x6;

           $Impeucalyptes1x8 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x8');})->get(); 
       
       foreach ($Impeucalyptes1x8 as $value) {
          $Impp1x8 += $value->quantity;
       }
 
    $Expeucalyptes1x8 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x8');})->get();

        foreach ($Expeucalyptes1x8 as $value) {
          $Expp1x8 += $value->quantity;
       }    
           // total thing killl it 
         $Totaleucalyptes1x8 = $Impp1x8 - $Expp1x8;


    $Impeucalyptes1x10 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x10');})->get(); 
       
       foreach ($Impeucalyptes1x10 as $value) {
          $Impp1x10 += $value->quantity;
       }
 
    $Expeucalyptes1x10 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','1x10');})->get();

        foreach ($Expeucalyptes1x10 as $value) {
          $Expp1x10 += $value->quantity;
       }    
           // total thing killl it 
            $Totaleucalyptes1x10 = $Impp1x10 - $Expp1x10;

        $Impeucalyptes2x2 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x2');})->get(); 
       
       foreach ($Impeucalyptes2x2 as $value) {
          $Impp2x2 += $value->quantity;
       }
 
    $Expeucalyptes2x2 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x2');})->get();

        foreach ($Expeucalyptes2x2 as $value) {
          $Expp2x2 += $value->quantity;
       }    
           // total thing killl it 
            $Totaleucalyptes2x2 = $Impp2x2 - $Expp2x2;


   
        $Impeucalyptes2x3 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x3');})->get(); 
       
       foreach ($Impeucalyptes2x3 as $value) {
          $Impp2x3 += $value->quantity;
       }
 
    $Expeucalyptes2x3 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x3');})->get();

        foreach ($Expeucalyptes2x3 as $value) {
          $Expp2x3 += $value->quantity;
       }    
           // total thing killl it 
            $Totaleucalyptes2x3 = $Impp2x3 - $Expp2x3;


   $Impeucalyptes2x4 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x4');})->get(); 
       
       foreach ($Impeucalyptes2x4 as $value) {
          $Impp2x4 += $value->quantity;
       }
 
    $Expeucalyptes2x4 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x4');})->get();

        foreach ($Expeucalyptes2x4 as $value) {
          $Expp2x4 += $value->quantity;
       }    
           // total thing killl it 
            $Totaleucalyptes2x4 = $Impp2x4 - $Expp2x4;

    $Impeucalyptes2x6 = Instore::where('type','import')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x6');})->get(); 
       
       foreach ($Impeucalyptes2x6 as $value) {
          $Impp2x6 += $value->quantity;
       }
 
    $Expeucalyptes2x6 = Instore::where('type','export')->with('product')->whereHas('product', function($q){ $q->where('name','=','Timber');})
    ->with('category')->whereHas('category', function($q){ $q->where('name','=','eucalyptus');})
    ->with('size')->whereHas('size', function($q){ $q->where('size','=','2x6');})->get();

        foreach ($Expeucalyptes2x6 as $value) {
          $Expp2x6 += $value->quantity;
       }    
           // total thing killl it 
            $Totaleucalyptes2x6 = $Impp2x6 - $Expp2x6;

  
?>
