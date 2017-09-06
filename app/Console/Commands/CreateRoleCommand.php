<?php

namespace App\Console\Commands;

use App\Role;
use Illuminate\Console\Command;

class CreateRoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:role:create {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Entrust role';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Generating Role');

        $roleName = $this->argument('role');

        $role = new Role();
        $role->name = $roleName;
        $role->save();

        $this->info("Role $roleName generated!");
    }
}
