<?php


namespace App\Repositories;
use App\Models\Package;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class PackageRepository extends BaseRepository
{

    public $fieldSearchable = [
        'plan_name',
        'price',
        'package_duration',
        'features',
        'currency_id',
        'Description'

    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return Package::class;
    }



       public function store($input): bool
    {
        try {
            DB::beginTransaction();

            $user = Package::create($input);
            $product = new Product();
            $product->name = $input['plan_name'];
            $product->unit_price =$input['price'];
            $product->category_id =1;
            $product->save();


            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }



    public function update($input, $id)
    {
        try {
            DB::beginTransaction();

            $pacakge = Package::find($id);
            $pacakge->update($input);
            $product = Product::find($id);
            if($product != null){
              
                          if ($input['package_duration'] == 30){
                          $month ='/ Month';
                                      $product->name = $input['plan_name'].''.$month;}
                            if ($input['package_duration'] == 180){
                                                $Biannual =    '/ Biannual';
                                                 $product->name = $input['plan_name'].''.$Biannual;
                            }
                        if ($input['package_duration'] == 14){
                                                 $Days = '/ 14 Days';
                                                 $product->name = $input['plan_name'].''.$Days;
                        }
                                             if ($input['package_duration'] == 365){
                                                 $Annum ='/ Annum';
                                                    
                                                       $product->name = $input['plan_name'].''.$Annum;
                                             }
                                                
                                                
            $product->name = $input['plan_name'];
            $product->unit_price =$input['price'];
            $product->category_id =1;
            $product->update();

}else{
    
    $product = new Product();
    if ($input['package_duration'] == 30){
                          $month ='/ Month';
                                      $product->name = $input['plan_name'].''.$month;}
                            if ($input['package_duration'] == 180){
                                                $Biannual =    '/ Biannual';
                                                 $product->name = $input['plan_name'].''.$Biannual;
                            }
                        if ($input['package_duration'] == 14){
                                                 $Days = '/ 14 Days';
                                                 $product->name = $input['plan_name'].''.$Days;
                        }
                                             if ($input['package_duration'] == 365){
                                                 $Annum ='/ Annum';
                                                    
                                                       $product->name = $input['plan_name'].''.$Annum;
                                             }
            $product->unit_price =$input['price'];
            $product->category_id =1;
            $product->save();
}

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

}
