<?php
use App\Models\type__bloods;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BloodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type__bloods')->delete();

        $bgs = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];

        foreach($bgs as  $bg){
            type__bloods::create(['Name' => $bg]);
        }
    }
}
