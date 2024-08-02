<?php
// Html policy.
if ($html) :
    $title = __('Ark Policy Statement');
    echo head(array(
        'title' => $title,
    ));
?>
<div id="primary">
    <div id="container">
    <?php echo flash(); ?>
    <div id="left"><h1><?php echo $title; ?></h1></div>
</div>
    <div id="ark_policy">
    <?php echo $policy; ?></div>
    </div>
<?php echo foot(); ?>
<?php

// Unformatted policy.
else:
    echo $policy;
endif; ?>
