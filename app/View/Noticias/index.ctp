<div class="noticias index">
	<h2><?php echo __('Noticias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($noticias as $noticia): ?>
	<tr>
		<td><?php echo h($noticia['Noticia']['id']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['title']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['content']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($noticia['User']['id'], array('controller' => 'users', 'action' => 'view', $noticia['User']['id'])); ?>
		</td>
		<td><?php echo h($noticia['Noticia']['created']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noticia['Noticia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $noticia['Noticia']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
