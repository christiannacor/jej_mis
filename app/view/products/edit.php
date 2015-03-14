<div class="container">
    <h2>Products</h2>
    <!-- add song form -->
    <div>
        <h3>Edit Product</h3>
        <form action="<?php echo URL; ?>products/updateproduct" method="POST">
            <label>Artist</label>
            <input autofocus type="text" name="artist" value="<?php echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Track</label>
            <input type="text" name="track" value="<?php echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="song_id" value="<?php echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_song" value="Update" />
        </form>
    </div>
</div>
