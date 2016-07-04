<nav role="pagination">  
 
  <div class="count">
    <strong><?php echo $pagination->countItems() ?></strong> Results / showing <strong><?php echo $pagination->numStart() ?></strong> - <strong><?php echo $pagination->numEnd() ?></strong>
  </div>
  
  <div class="buttons">
    <? if($pagination->hasPrevPage()): ?>
    <a class="prev" href="<?= $pagination->prevPageURL() ?>">&lsaquo; previous</a>
    <? else: ?>
    <span class="prev">&lsaquo; previous</span>
    <? endif ?>
    <? if($pagination->hasNextPage()): ?>
    <a class="next" href="<?= $pagination->nextPageURL() ?>">next &rsaquo;</a>
    <? else: ?>
    <span class="next">next &rsaquo;</span>
    <? endif ?>
  </div>
</nav>