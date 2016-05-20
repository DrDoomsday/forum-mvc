<hr>

<h3><?= $thread->title; ?></h3>

<p>
    <em>
        By <a><?= $thread->author_name; ?></a>
    </em>
</p>

<hr>

<?php foreach($posts as $post) { ?>
    <div class="post">
        <p class="post_details">
            <?= $post->author_name; ?> | <?= date('n/j/Y H:i', strtotime($post->date)); ?>
        </p>

        <p>
            <?= $post->content; ?>
        </p>

        <?php if ($user === $post->author_name) { ?>
            <form action="delete_post.php" method="post">
                <input type="hidden" name="id" value="<?= $post->id;?>">
                <button type="submit">
                    Delete
                </button>
            </form>
        <?php } ?>
    </div>
<?php } ?>

<br>

<?php
    if ($user) { ?>
        <form action="reply.php" method="POST">
            <input type="hidden" name="thread_id" value="<?= $threadId;?>">
            <textarea name="content" placeholder="Enter your reply here..."></textarea>

            <br>

            <button type="submit">
                Submit
            </button>
        </form>

    <?php } ?>