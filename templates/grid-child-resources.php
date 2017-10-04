<?php
/*
This little snippet outputs a grid of child resources. You must apply grid-based classes using whatever your grid system is to create the rows and columns. The 'a' link wraps the entire cell so that a user can click on any part of the grid block to reach the page.
It shows an image, title, and summary text.
Optionally you can use the top IF statement to show it only on a certain page. Adjust as needed.
*/
?>

<?php if ($page->name == "SPECIFIC PAGE") { ?>
<div class="section-grid">
    <ul class="GRID CLASSES">
        <?php foreach($page->children as $resource) { ?>
        <li class="GRID CELL">
            <div class="">
                <a href="<?=$resource->path?>" class="">
                    <div class="">
                        <img src="<?=$resource->images->first->url?>" class="section-grid__image" />
                        <h3 class="section-grid__title"><?=$resource->title?></h3>
                    </div>
                    <div class="section-grid__summary">
                        <?=$resource->summary?>
                    </div>
                </a>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
