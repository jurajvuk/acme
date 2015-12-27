<?php

use Phinx\Migration\AbstractMigration;

class SeedPagesTable extends AbstractMigration
{
    public function up() 
    {
        $this->execute("
            insert into pages (browser_title, page_content) 
            values('About', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat tenetur reiciendis vero ab reprehenderit, harum nihil illo numquam! Mollitia repellendus labore ipsam aspernatur, eaque vitae, necessitatibus qui earum error! Quia distinctio, doloribus error nulla, dolore iure vel perferendis quod eius, ea impedit, expedita architecto. Sed ipsam, architecto consequuntur magni doloribus.')
            ");
    }

    public function down()
    {
        
    }
}
