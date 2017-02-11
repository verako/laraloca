<?php

use Illuminate\Database\Seeder;
use App\Models\department;
use App\Models\buyer;
use App\Models\seller;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('MyDbSeeder');
        $this->command->info('DB is filled up');
        // $this->call(UsersTableSeeder::class);
    }
}
/**
* 
*/
class MyDbSeeder extends Seeder
{
	public function run(){
		DB::table('department')->delete();
		DB::table('sellers')->delete();
		DB::table('buyers')->delete();
		//1 способ создания значений в табл
		$dept1=Department::create([
			'name'=>'Food',
			]);
		//2 способ создания значений в табл
		$dept2=new Department;
		$dept2->name='Sports';
		$dept2->save();
		//3 способ создания значений в табл
		//Department::firstOrCreate(['name'=>'Toys']);
		//4 способ создания значений в табл возвращает объект
		$dept4=Department::firstOrNew(['name'=>'Drinks']);

		//создаем продавцов
		$sel1=Seller::create([
			'name'=>'John Smith', 'department_id'=>$dept4->id
		]);
		$sel2=Seller::create([
			'name'=>'Den Dith', 'department_id'=>$dept2->id
		]);
		$sel3=Seller::create([
			'name'=>'Mike Don', 'department_id'=>$dept1->id
		]);

		$buy1=Buyer::create(['name'=>'Mary']);
		$buy2=Buyer::create(['name'=>'Bob']);
		$buy3=Buyer::create(['name'=>'Marty']);
		$buy4=Buyer::create(['name'=>'Lola']);

		$sel1->buyers()->attach($buy1->id);
		$sel1->buyers()->attach($buy2->id);
		$sel1->buyers()->attach($buy3->id);
		$sel1->buyers()->attach($buy4->id);

		$sel2->buyers()->attach($buy1->id);
		$sel2->buyers()->attach($buy2->id);
		$sel2->buyers()->attach($buy3->id);
		$sel2->buyers()->attach($buy4->id);
		

	}
	
}