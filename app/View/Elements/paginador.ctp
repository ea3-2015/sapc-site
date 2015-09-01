<p> 
    <?php echo $this->Paginator->counter(array('format' => 'Pagina {:page} de {:pages}, Mostrando {:current} registros de {:count}'));?>

	</p>
		<ul class="pagination">
       
       <li>
        <?php echo $this->Paginator->prev('<'. __('< '), 
        	array('tag'=>false),null, array('class'=>'prev disable'));?>
        </li>
        <?php echo $this->Paginator->numbers(array('separator'=>' ','tag'=>'li','currentTag'=> 'a', 
        					'currentClass'=>'active'));?>
        <li>
        <?php echo $this->Paginator->next(__(' >').'>',
        		array('tag'=> false), null, array('class'=>'next disabled'));
        		?>
		</li>

    
	</ul>