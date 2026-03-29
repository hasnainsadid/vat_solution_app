<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CacheTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cache')->delete();
        
        \DB::table('cache')->insert(array (
            0 => 
            array (
                'key' => 'laravel-cache-03eea49fb83ced2657e9e0f045f31e96',
                'value' => 'i:1;',
                'expiration' => 1762923384,
            ),
            1 => 
            array (
                'key' => 'laravel-cache-03eea49fb83ced2657e9e0f045f31e96:timer',
                'value' => 'i:1762923384;',
                'expiration' => 1762923384,
            ),
            2 => 
            array (
                'key' => 'laravel-cache-7d5acdf8d39b41791db16e0786b19730',
                'value' => 'i:1;',
                'expiration' => 1762922075,
            ),
            3 => 
            array (
                'key' => 'laravel-cache-7d5acdf8d39b41791db16e0786b19730:timer',
                'value' => 'i:1762922075;',
                'expiration' => 1762922075,
            ),
            4 => 
            array (
                'key' => 'laravel-cache-admin@wanitbd.com|127.0.0.1',
                'value' => 'i:1;',
                'expiration' => 1762922075,
            ),
            5 => 
            array (
                'key' => 'laravel-cache-admin@wanitbd.com|127.0.0.1:timer',
                'value' => 'i:1762922075;',
                'expiration' => 1762922075,
            ),
            6 => 
            array (
                'key' => 'laravel-cache-boost.roster.scan',
                'value' => 'a:2:{s:6:"roster";O:21:"Laravel\\Roster\\Roster":3:{s:13:"' . "\0" . '*' . "\0" . 'approaches";O:29:"Illuminate\\Support\\Collection":2:{s:8:"' . "\0" . '*' . "\0" . 'items";a:1:{i:0;O:23:"Laravel\\Roster\\Approach":1:{s:11:"' . "\0" . '*' . "\0" . 'approach";E:38:"Laravel\\Roster\\Enums\\Approaches:ACTION";}}s:28:"' . "\0" . '*' . "\0" . 'escapeWhenCastingToString";b:0;}s:11:"' . "\0" . '*' . "\0" . 'packages";O:32:"Laravel\\Roster\\PackageCollection":2:{s:8:"' . "\0" . '*' . "\0" . 'items";a:11:{i:0;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:0;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:7:"v1.36.2";s:10:"' . "\0" . '*' . "\0" . 'package";E:37:"Laravel\\Roster\\Enums\\Packages:FORTIFY";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:15:"laravel/fortify";s:10:"' . "\0" . '*' . "\0" . 'version";s:6:"1.36.2";s:6:"' . "\0" . '*' . "\0" . 'dev";b:0;}i:1;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:1;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:5:"^12.0";s:10:"' . "\0" . '*' . "\0" . 'package";E:37:"Laravel\\Roster\\Enums\\Packages:LARAVEL";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:17:"laravel/framework";s:10:"' . "\0" . '*' . "\0" . 'version";s:7:"12.56.0";s:6:"' . "\0" . '*' . "\0" . 'dev";b:0;}i:2;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:0;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:7:"v0.3.16";s:10:"' . "\0" . '*' . "\0" . 'package";E:37:"Laravel\\Roster\\Enums\\Packages:PROMPTS";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:15:"laravel/prompts";s:10:"' . "\0" . '*' . "\0" . 'version";s:6:"0.3.16";s:6:"' . "\0" . '*' . "\0" . 'dev";b:0;}i:3;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:1;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:4:"^4.0";s:10:"' . "\0" . '*' . "\0" . 'package";E:37:"Laravel\\Roster\\Enums\\Packages:SANCTUM";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:15:"laravel/sanctum";s:10:"' . "\0" . '*' . "\0" . 'version";s:5:"4.3.1";s:6:"' . "\0" . '*' . "\0" . 'dev";b:0;}i:4;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:1;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:6:"^3.6.4";s:10:"' . "\0" . '*' . "\0" . 'package";E:38:"Laravel\\Roster\\Enums\\Packages:LIVEWIRE";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:17:"livewire/livewire";s:10:"' . "\0" . '*' . "\0" . 'version";s:6:"3.7.12";s:6:"' . "\0" . '*' . "\0" . 'dev";b:0;}i:5;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:0;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:6:"v0.5.9";s:10:"' . "\0" . '*' . "\0" . 'package";E:33:"Laravel\\Roster\\Enums\\Packages:MCP";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:11:"laravel/mcp";s:10:"' . "\0" . '*' . "\0" . 'version";s:5:"0.5.9";s:6:"' . "\0" . '*' . "\0" . 'dev";b:1;}i:6;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:1;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:5:"^1.24";s:10:"' . "\0" . '*' . "\0" . 'package";E:34:"Laravel\\Roster\\Enums\\Packages:PINT";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:12:"laravel/pint";s:10:"' . "\0" . '*' . "\0" . 'version";s:6:"1.29.0";s:6:"' . "\0" . '*' . "\0" . 'dev";b:1;}i:7;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:1;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:5:"^1.41";s:10:"' . "\0" . '*' . "\0" . 'package";E:34:"Laravel\\Roster\\Enums\\Packages:SAIL";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:12:"laravel/sail";s:10:"' . "\0" . '*' . "\0" . 'version";s:6:"1.55.0";s:6:"' . "\0" . '*' . "\0" . 'dev";b:1;}i:8;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:1;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:4:"^3.8";s:10:"' . "\0" . '*' . "\0" . 'package";E:34:"Laravel\\Roster\\Enums\\Packages:PEST";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:12:"pestphp/pest";s:10:"' . "\0" . '*' . "\0" . 'version";s:5:"3.8.6";s:6:"' . "\0" . '*' . "\0" . 'dev";b:1;}i:9;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:0;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:7:"11.5.50";s:10:"' . "\0" . '*' . "\0" . 'package";E:37:"Laravel\\Roster\\Enums\\Packages:PHPUNIT";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:15:"phpunit/phpunit";s:10:"' . "\0" . '*' . "\0" . 'version";s:7:"11.5.50";s:6:"' . "\0" . '*' . "\0" . 'dev";b:1;}i:10;O:22:"Laravel\\Roster\\Package":6:{s:9:"' . "\0" . '*' . "\0" . 'direct";b:0;s:13:"' . "\0" . '*' . "\0" . 'constraint";s:0:"";s:10:"' . "\0" . '*' . "\0" . 'package";E:41:"Laravel\\Roster\\Enums\\Packages:TAILWINDCSS";s:14:"' . "\0" . '*' . "\0" . 'packageName";s:11:"tailwindcss";s:10:"' . "\0" . '*' . "\0" . 'version";s:6:"3.4.18";s:6:"' . "\0" . '*' . "\0" . 'dev";b:1;}}s:28:"' . "\0" . '*' . "\0" . 'escapeWhenCastingToString";b:0;}s:21:"' . "\0" . '*' . "\0" . 'nodePackageManager";E:43:"Laravel\\Roster\\Enums\\NodePackageManager:NPM";}s:9:"timestamp";i:1774762196;}',
                'expiration' => 1774848596,
            ),
            7 => 
            array (
                'key' => 'laravel-cache-fb6f3f3e6cd1eef80b0cb863c26af4f5',
                'value' => 'i:1;',
                'expiration' => 1773646682,
            ),
            8 => 
            array (
                'key' => 'laravel-cache-fb6f3f3e6cd1eef80b0cb863c26af4f5:timer',
                'value' => 'i:1773646682;',
                'expiration' => 1773646682,
            ),
        ));
        
        
    }
}