# Common commands in laravel (version 6)

 - Create a laravel application
    * via laravel installer<br>
 `laravel new projectname `
    * via composer with preferred version <br>
    `composer create-project laravel/laravel projectname --prefer-dist 6.8`
    
 - Create Controller | Model<br>
    * `php artisan make:controller PostsController` 
    * `php artisan make:model Post`
 
 - Create migration (table, give it readable name)
    * `php artisan make:migration create_posts_table | update_post_on_post_table`
 - Run migration (create update or delete table)
    * `php artisan migrate`
 - Rollbcack a migration
    * `php artisan migrate:rollback`
 - Empty **ALL TABLES** and re-run everything
    * `php artisan migrate:fresh`
 - Create model with his controller, migration, resources ... in a single command
    * `php artisan make:model Porject -mc --resource`
 - use tinker to update columns in table
    * `php artisan tinker`
 - What can we do with Tinker?
    * run basic commands `2 + 2`
    * practice function call `array_values()`
    * resolve something from the container `app()`
 - Working with tinker:
    * `$var = new App\{model};`
    * `$var->column_name = 'column_value';`
    * `$var->save();`
    - Work with data
        * fetch all data `App\Model::all();`
        * get first data `App\Model::first();`
        * custom query `App\Model::where('column_name', value)->get()`
        
    
 
 - Migrations are on version control which means it easy to revert to an unwanted commit, or a team member can clone the project run the migration and instantly get the exact same database structure   
 
    
 - handful function
    * `dd($var)` : quick way to inspect a variable and kill the execution (die and dump or dump and die)
    * `abort('404')` : abort script execution and redirect to 404 not found page
