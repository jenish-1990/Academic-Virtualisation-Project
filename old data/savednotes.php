    <?php
    require('./includes/auth_validate.php');
    require_once('./includes/config.php');
    include_once('./includes/header.php');
    define( 'ACCESS_RESTRICTED_PASS_658963', TRUE ); 
    include('./includes/dbconnection.php');
    $obj = new dbconnection(); 
    $data = $obj->get_saved_notes($_SESSION['user_id']);
?>

<section class="main savenote">
    <h2 class="savenote-heading">SAVED NOTES</h2>
    <div class="result-wrapper">
        <?php 
            $i=0;
            if (mysqli_num_rows($data) != 0) {
            while ($r = $data->fetch_assoc() ) {
              $saved = $obj->get_note_by_id($r['note_id']);
          ?>
        <div class="note-result">
            <figure class="note-img-hover">
                <div style="background-image: url('./database/<?php echo $saved['filename'];?>.png');"
                    class="notes-file_preview"></div>
            </figure>
            <div class="detail" onload="render_thumbnail_notes('<?php echo $saved['filename'];?>', '<?php echo $i;?>')">
                <h3 class="note-name"><?php echo $saved['title']; ?></h3>
                <div class="description">
                    <p class="author-name">Author: <?php $name = $obj->get_author_name($saved['author']); echo $name; ?></p>
                    <?php
                  if($saved['verifier'] != 0) {
                ?>
                    <div class="verify">
                        <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#10b981"
                            viewBox="0 0 256 256" class="verify-icon">
                            <rect width="256" height="256" fill="none"></rect>
                            <path
                                d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z"
                                fill="none" stroke="#10b981" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"></path>
                            <polyline points="172 104 113.333 160 84 132" fill="none" stroke="#10b981"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                        </svg>
                        <p class="verify-name">
                            <?php 
                    $verifier = $obj->get_author_name($saved['verifier']); 
                    echo $verifier; 
                  ?></p>
                    </div>
                    <?php
                $i++;}?>
                </div>
                <button class="view" id="<?php echo $saved['id']; ?>" onclick="open_view_notes(this.id)">VIEW</button>
            </div>
        </div>
        <?php }} else {
          echo "<p style='font-size: 2rem; margin: 3rem !important;'>No results found!</p>";
        } ?>
    </div>
</section>

<div id="notes-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="notes_view_hide()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000"
                        viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none"></rect>
                        <line x1="200" y1="56" x2="56" y2="200" stroke="#000000" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16"></line>
                        <line x1="200" y1="200" x2="56" y2="56" stroke="#000000" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="16"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="note-metawrapper">
                    <div class="note-img-desc" id="note-img-desc">
                        <div id="note-img-view-desc"></div>
                    </div>
                    <div class="note-meta">
                        <h4 class="modal-title modal-color" id="notes-view-title" color="red"></h4>
                        <p class="author-name modal-color" id="notes-view-author"></p>
                        <p class="author-name modal-color" id="notes-view-posted"></p>
                        <p class="author-name modal-color" id="notes-view-saves"></p>
                        <div class="verify" id="modal-verifier">
                            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#10b981"
                                viewBox="0 0 256 256" class="verify-icon">
                                <rect width="256" height="256" fill="none"></rect>
                                <path
                                    d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z"
                                    fill="none" stroke="#10b981" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="16"></path>
                                <polyline points="172 104 113.333 160 84 132" fill="none" stroke="#10b981"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                            </svg>
                            <p class="verify-name modal-color" id="notes-view-verifier"></p>
                        </div>
                    </div>
                </div>
                <p class="note-desc-title modal-color">DESCRIPTION:</p>
                <p class="note-desc modal-color" id="notes-view-desc"></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="note-id-unique" name="note-id-unique">
                <button class="btn btn-secondary remove-note-btn float-left" id="delete-note-btn" onclick="delete_note()" style="display: none;">Delete</button>
                <button class="btn btn-secondary remove-note-btn" id="remove-note-btn" onclick="remove_note()" style="display: none;">Remove saved</button>
                <button class="btn btn-secondary save-note-btn float-right" id="save-note-btn" onclick="save_note()" style="display: none;">Save</button>
                <input type="hidden" id="download-file-id" name="download-file-id">
                <button class="btn download-note-btn" onclick="download_note()">Download</button>
            </div>
        </div>
    </div>
</div>

<?php
  include_once('./includes/footer.php');
?>
