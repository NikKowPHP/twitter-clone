<?php require_once("/var/www/html/twitter-clone/partials/header.php") ?>
<div id="modal-edit-profile" class="modal modal-edit-profile" style="display: block !important;">
    <div class="modal-content">

        <div class="modal-header">
            <span class="close"><svg viewBox="0 0 24 24" aria-hidden="true" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03"><g><path d="M7.414 13l5.043 5.04-1.414 1.42L3.586 12l7.457-7.46 1.414 1.42L7.414 11H21v2H7.414z"></path></g></svg></span>
            <h3>Edit profile</h3>
            <div class="btn-save-wrapper"><input type="submit" value="Save" class="btn follow-btn btn-save" name="edit_photo_submit"></div>
        </div>

        <div class="modal-body">
            <div class="background-image">
                <img class="modal-background-image" src="images/<?= $user->background_image; ?>" alt="user background image">

                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-jwli3a r-4qtqp9 r-yyyyoo r-18yzcnr r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-yc9v9c"><g><path d="M9.697 3H11v2h-.697l-3 2H5c-.276 0-.5.224-.5.5v11c0 .276.224.5.5.5h14c.276 0 .5-.224.5-.5V10h2v8.5c0 1.381-1.119 2.5-2.5 2.5H5c-1.381 0-2.5-1.119-2.5-2.5v-11C2.5 6.119 3.619 5 5 5h1.697l3-2zM12 10.5c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm-4 2c0-2.209 1.791-4 4-4s4 1.791 4 4-1.791 4-4 4-4-1.791-4-4zM17 2c0 1.657-1.343 3-3 3v1c1.657 0 3 1.343 3 3h1c0-1.657 1.343-3 3-3V5c-1.657 0-3-1.343-3-3h-1z"></path></g></svg>
                <input type="file" id="file-input" name="background-image">
                <div class="user-image">
                    <input type="file" id="file-input" name="user-image">
                    <svg class="icon-file" viewBox="0 0 24 24" aria-hidden="true" class="r-jwli3a r-4qtqp9 r-yyyyoo r-18yzcnr r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-yc9v9c"><g><path d="M9.697 3H11v2h-.697l-3 2H5c-.276 0-.5.224-.5.5v11c0 .276.224.5.5.5h14c.276 0 .5-.224.5-.5V10h2v8.5c0 1.381-1.119 2.5-2.5 2.5H5c-1.381 0-2.5-1.119-2.5-2.5v-11C2.5 6.119 3.619 5 5 5h1.697l3-2zM12 10.5c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm-4 2c0-2.209 1.791-4 4-4s4 1.791 4 4-1.791 4-4 4-4-1.791-4-4zM17 2c0 1.657-1.343 3-3 3v1c1.657 0 3 1.343 3 3h1c0-1.657 1.343-3 3-3V5c-1.657 0-3-1.343-3-3h-1z"></path></g></svg>
                    <img src="images/<?= $user->image ?>" alt=""></div>
            </div>
            <div class="inputs-wrapper">
                <input type="text" class="input-modal" name="username" value="<?= $user->username ?>">
                <textarea name="bio" class="input-modal text-area" id="" placeholder="Bio"><?= $user->bio ?></textarea>
                <input type="text" class="input-modal" name="location" placeholder="Location" value="<?= $user->location ?>">
                <input type="text" class="input-modal" name="website" placeholder="Website" value="<?= $user->website ?>">

            </div>
        </div>

    </div>
</div>