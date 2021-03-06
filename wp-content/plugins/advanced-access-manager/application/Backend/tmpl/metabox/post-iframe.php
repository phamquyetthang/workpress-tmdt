<?php /** @version 6.0.0 */ ?>

<?php if (defined('AAM_KEY')) { ?>
    <?php echo static::loadTemplate(__DIR__ . '/iframe-header.php'); ?>

    <div class="row" style="margin: 10px 0 0 0;">
        <div class="col-sm-4" style="padding: 0;">
            <?php echo static::loadTemplate(dirname(__DIR__) . '/page/subject-panel.php'); ?>
        </div>

        <div class="col-sm-8">
            <div id="aam-access-form-container">
                <?php echo $params->postManager->getAccessForm($params->objectId, $params->objectType); ?>
            </div>
        </div>
    </div>

    <?php echo static::loadTemplate(__DIR__ . '/iframe-footer.php'); ?>
<?php }