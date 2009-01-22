<div id="<?php echo $id ?>" class="dparts partsNewsPager">
<div class="parts">

<div class="partsHeading">
<h3><?php echo $options['title'] ?></h3>
</div>

<div class="block">

<?php foreach ($options['list'] as $res): ?>
<dl>
<dt><?php echo date( __('Y/m/d H:i'), $res['date']) ?></dt>
<dd>
<?php echo '<a href="' . $res['link_to_external'] . '">' . $res['title'] . '</a>' ?>
<?php if ($options['showName']): ?>
(<?php echo $res['name'] ?>)
<?php endif ?>
</dd>
</dl>
<?php endforeach; ?>
</div>

</div>

</div></div>
