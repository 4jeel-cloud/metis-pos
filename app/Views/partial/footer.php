<?php

use Config\OSPOS;

?>

            </div>
        </div>

        <div id="footer">
            <div class="jumbotron push-spaces">
                <img src="<?= base_url('images/logo.png') ?>" alt="<?= lang('Common.software_title') ?>" style="height: 18px; vertical-align: middle;">
                <strong>
                    <?= lang('Common.copyrights', [date('Y')]) ?> ·
                    <a href="https://opensourcepos.org" target="_blank"><?= lang('Common.website') ?></a> ·
                    <?= esc(config('App')->application_version) ?> -
                    <a target="_blank" href="https://github.com/opensourcepos/opensourcepos/commit/<?= esc(config(OSPOS::class)->commit_sha1) ?>">
                        <?= esc(substr(config(OSPOS::class)->commit_sha1, 0, 6)); ?>
                    </a>
                </strong>.
            </div>
        </div>
    </body>
</html>
