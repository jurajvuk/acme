<?php

use Phinx\Migration\AbstractMigration;

class SeedTestimonialsTable extends AbstractMigration
{
    public function up() 
    {
        $this->execute("
            insert into testimonials (title, testimonials, user_id) 
            values('This is great', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, similique?', 1)
            ");
    }

    public function down()
    {
        
    }
}
