<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use DB;
use Artisan;
use Schema;
use App\Models\SystemConfiguration;
use Spatie\Permission\Models\Permission;

class UpdateController extends Controller
{
    public function step0() {
        return view('update.step0');
    }

    public function step1() {
        if(SystemConfiguration::where('type', 'current_version')->first() != null) {
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '2.1'){
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '2.0'){
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.6'){
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.5'){
                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.4'){
                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.3'){
                $sql_path = base_path('sqlupdates/v14.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.2'){
                $sql_path = base_path('sqlupdates/v13.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v14.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.1'){
                $sql_path = base_path('sqlupdates/v12.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v13.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v14.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
        }
        elseif(SystemConfiguration::where('type', 'current_version')->first() == null){
            $sql_path = base_path('sqlupdates/v11.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v12.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v13.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v14.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v15.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v16.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v17.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v21.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v300.sql');
            DB::unprepared(file_get_contents($sql_path));
        }

        return redirect()->route('step2');
    }

    public function step2() {

        Artisan::call('view:clear');
        $previousRouteServiceProvier = base_path('app/Providers/RouteServiceProvider.php');
        $newRouteServiceProvier      = base_path('app/Providers/RouteServiceProvider.txt');
        copy($newRouteServiceProvier, $previousRouteServiceProvier);
        $this->permissions();
        $this->permissions_17();
        return view('update.done');
    }

    public function permissions()
    {
        try {
            Permission::create(['name' => 'show running projects', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all projects', 'guard_name' => 'web']);
            Permission::create(['name' => 'show open projects', 'guard_name' => 'web']);
            Permission::create(['name' => 'show cancelled projects', 'guard_name' => 'web']);
            Permission::create(['name' => 'show project cancel requests', 'guard_name' => 'web']);
            Permission::create(['name' => 'show project category', 'guard_name' => 'web']);
            Permission::create(['name' => 'show verification requests', 'guard_name' => 'web']);
            Permission::create(['name' => 'show user chats', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all experts', 'guard_name' => 'web']);
            Permission::create(['name' => 'show expert packages', 'guard_name' => 'web']);
            Permission::create(['name' => 'show expert skills', 'guard_name' => 'web']);
            Permission::create(['name' => 'show expert badges', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all clients', 'guard_name' => 'web']);
            Permission::create(['name' => 'show client packages', 'guard_name' => 'web']);
            Permission::create(['name' => 'show client badges', 'guard_name' => 'web']);
            Permission::create(['name' => 'show experts reviews', 'guard_name' => 'web']);
            Permission::create(['name' => 'show client reviews', 'guard_name' => 'web']);
            Permission::create(['name' => 'show active tickets', 'guard_name' => 'web']);
            Permission::create(['name' => 'show my tickets', 'guard_name' => 'web']);
            Permission::create(['name' => 'show solved tickets', 'guard_name' => 'web']);
            Permission::create(['name' => 'show support settings category', 'guard_name' => 'web']);
            Permission::create(['name' => 'show default assigned agent', 'guard_name' => 'web']);
            Permission::create(['name' => 'show project payments', 'guard_name' => 'web']);
            Permission::create(['name' => 'show package payments', 'guard_name' => 'web']);
            Permission::create(['name' => 'show service payments', 'guard_name' => 'web']);
            Permission::create(['name' => 'show expert withdraw requests', 'guard_name' => 'web']);
            Permission::create(['name' => 'show expert payouts', 'guard_name' => 'web']);
            Permission::create(['name' => 'show header', 'guard_name' => 'web']);
            Permission::create(['name' => 'show footer', 'guard_name' => 'web']);
            Permission::create(['name' => 'show pages', 'guard_name' => 'web']);
            Permission::create(['name' => 'show apperance', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all staffs', 'guard_name' => 'web']);
            Permission::create(['name' => 'show employee roles', 'guard_name' => 'web']);
            Permission::create(['name' => 'show general setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show activation setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show system languages setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show system currency setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show email setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show payment gateways setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show third party api setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'show expert payment', 'guard_name' => 'web']);
            Permission::create(['name' => 'show manual payment methods', 'guard_name' => 'web']);
            Permission::create(['name' => 'show offline project payments', 'guard_name' => 'web']);
            Permission::create(['name' => 'show offline package payments', 'guard_name' => 'web']);
            Permission::create(['name' => 'show offline service payments', 'guard_name' => 'web']);
            Permission::create(['name' => 'show addon manager', 'guard_name' => 'web']);
            Permission::create(['name' => 'create new client package', 'guard_name' => 'web']);
            Permission::create(['name' => 'create new expert package', 'guard_name' => 'web']);
            Permission::create(['name' => 'show dashboard', 'guard_name' => 'web']);
            Permission::create(['name' => 'show create staff', 'guard_name' => 'web']);
            Permission::create(['name' => 'show create roles', 'guard_name' => 'web']);
            Permission::create(['name' => 'single user chat details', 'guard_name' => 'web']);
            Permission::create(['name' => 'expert delete', 'guard_name' => 'web']);
            Permission::create(['name' => 'project cat delete', 'guard_name' => 'web']);
            Permission::create(['name' => 'project cat edit', 'guard_name' => 'web']);
            Permission::create(['name' => 'project cat create', 'guard_name' => 'web']);
            Permission::create(['name' => 'show blog category', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all blogs', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all subscribers', 'guard_name' => 'web']);
            Permission::create(['name' => 'show all newsletters', 'guard_name' => 'web']);
        } catch (\Exception $e) {

        }
        return;
    }

    public function permissions_17()
    {
        try {
            Permission::create(['name' => 'show wallet history', 'guard_name' => 'web']);
            Permission::create(['name' => 'show refund setting', 'guard_name' => 'web']);
            Permission::create(['name' => 'manage file upload', 'guard_name' => 'web']);
            Permission::create(['name' => 'system update', 'guard_name' => 'web']);
            Permission::create(['name' => 'show server status', 'guard_name' => 'web']);
        }
        catch (\Exception $e) { }
        return;
    }
}
